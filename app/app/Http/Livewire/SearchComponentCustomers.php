<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use Livewire\Component;
use App\Models\Assetsuser;
use Livewire\WithPagination;
use App\Helpers\ClassBuilder;
use App\Jobs\SendMoreFilesTRC;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;
use App\Events\TriggerEventTransaction;
use App\Http\Controllers\packlane\EDPrepackbuiler;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class SearchComponentCustomers extends Component
{

    use WithPagination;
    use AuthorizesRequests;
    
    public $sortAsc = true;
    public $search = '';
    public $isOpen = 0;
    public $components;
    public $flattened;
    public $component;
    public $cp2;
    public $material;
    public $materials;
    public $customers_id;
    public $design_plan;
    public $order_to;
    public $qty;
    public $size;
    public $perPage;
    public $path;
    public $jenis_kertas_gsm;
    public $jenis_kertas;
    public $getOriginalName;
    public $getMimeType;
    public $design;
    protected $filename;
    public $sortField ;
    public $sortDirection;
    protected $listeners = ['delete','reOrders','FinishedOrders','RestoreOrder','deletepermanent'];
    
    public function sortBy($field)
    {
        if ($this->sortField === $field) {
            $this->sortAsc = !$this->sortAsc;
        } else {
            $this->sortAsc = true;
        }

        $this->sortField = $field;
    }

    public function mount(){
        $this->perPage = 3;
        $this->search="";
        $this->sortField = 'assets_uid';
        $this->sortDirection =true;
    }

    protected function MergedSameArrayValues($array, $key) {
        $temp_array = array();
        $i = 0;
        $key_array = array();
            foreach($array as $val) {
                if (!in_array($val[$key], $key_array)) {
                    $key_array[$i] = $val[$key];
                    $temp_array[$i] = $val;
                }
                $i++;
            }

        return $temp_array;
    }

    public function render()
    {
        
        if(Auth::user()->accessable == "marketing") {

            $dfgt =  $this->search === '' 
            ? Assetsuser::whereNotNull('component')->orWhereNotNull('definition')
            ->groupBy('component')->orderBy('created_at', 'desc')
            // ->groupBy('component')->orderBy($this->sortField, $this->sortDirection ? 'asc':'desc')
            ->paginate($this->perPage) 
            : Assetsuser::where('assets_uid', 'LIKE', '%' . trim($this->search) . '%')
            ->orWhere('created_at', 'LIKE', '%' . $this->search . '%')
            ->orWhere('order_name', 'LIKE', '%' . $this->search . '%')
            ->orWhere('definition', 'LIKE', '%' . $this->search . '%')
            ->orWhere('component', 'LIKE', '%' . $this->search . '%')
            ->orderBy($this->sortField, $this->sortDirection ? 'asc':'desc')->paginate($this->perPage);

            $dt[] = Assetsuser::where('order_to', '!=', 0)->get();

        } else {

            $dfgt =  $this->search === '' 
            ? Assetsuser::whereIn('order_to', [Auth::user()->id])
            ->groupBy('component')->orderBy('created_at', 'desc')
            // ->groupBy('component')->orderBy($this->sortField, $this->sortDirection ? 'asc':'desc')
            ->paginate($this->perPage) 
            : Assetsuser::where('assets_uid', 'LIKE', '%' . trim($this->search) . '%')
            ->orWhere('created_at', 'LIKE', '%' . $this->search . '%')
            ->orWhere('definition', 'LIKE', '%' . $this->search . '%')
            ->orWhere('component', 'LIKE', '%' . $this->search . '%')
            ->orWhere('order_name', 'LIKE', '%' . $this->search . '%')
            ->orderBy($this->sortField, $this->sortDirection ? 'asc':'desc')->paginate($this->perPage);

            $dt[] = Assetsuser::where('order_to', Auth::user()->id)->get();

        }

        $rty = collect($dt)->map(function ($exposeArrayComponents) {
        
            foreach ($exposeArrayComponents as $value) {
                # code...
                $dkl[] = $value->design_plan;

            }

            $arrayOfValues = array();
            
                if(isset($dkl)){

                        foreach ($dkl as $a) {

                            @$arrayOfValues[$a]++;

                        }

                    return $arrayOfValues;

                } else {

                    return [];
                }
            
            });

            
            $countComponent = collect($dt)->map(function ($rtDataC) {
                
                $rtData = $this->MergedSameArrayValues($rtDataC, 'assets_uid');
                foreach ($rtData as $value) {
                    # code...
                    $dkl[] = $value->design;
                }

                if(isset($dkl)){
                    $searchsComponentDesign = isset($dkl) ? $dkl : [0];

                    for ($i=0; $i < count($searchsComponentDesign); $i++) { 
                        # code...
                        $namemtr[] =  array_column($dkl[$i], 'value');
                    }
                    
                return $namemtr;

                }
                    else {

                        return [];

                }

            });

            $fgj = array_merge([], $countComponent->toArray()[0]);

            $data = array_merge([], $rty->toArray()[0]);

        return view('livewire.search-component-customers', [
            'searchments' => $dfgt,
            'vtb' => $rty,
            'fdt' => $fgj,
            'dts' => $data
        ]);
        
    }

    protected function LatestData(){
       
        $rd = Assetsuser::where('order_to', Auth::user()->id)
             ->groupBy('component')->get();
 
         return $rd;
     }
 
    public function FinishedOrders($id, $order_to){

        $users = Assetsuser::find($id);
        $users->updated_at = Carbon::now();
        $users->flow_process = "finished";
        $users->save();

        event(new TriggerEventTransaction('finished', $order_to));

        $this->dispatchBrowserEvent('finished', ['job' => "job is done." ]);

    }

    public function reOrders($design_plan, $order_to){

        event(new TriggerEventTransaction('send', $order_to));
        $users = Assetsuser::find($design_plan);
        $users->send_at = Carbon::now();
        $users->save();

        $this->dispatchBrowserEvent('user-test', ['user_name' => $design_plan ]);
        
        return ClassBuilder::Mailers($design_plan);
    }

    public function closeModal()
    {
        $this->isOpen = false;
    }

    private function resetInputFields(){
        $this->title = '';
        $this->customers_id = '';
    }

    public function store()
    {
        session()->flash('message', $this->customers_id ? 'Company updated successfully.' : 'Company created successfully.');
        $this->closeModal();
        $this->resetInputFields();
        $this->dispatchBrowserEvent('user-test', ['user_name' => Auth::user()->name]);
    }

    public function RestoreOrder($id, $order_to) {

        $users = Assetsuser::whereIn('id', [$id])->get();

        foreach ($users as $key => $component) {
            # code...
            $designs[] = $component->design_plan;
        }

        Assetsuser::whereIn('design_plan', [$designs])->update(['flow_process' => NULL, 'updated_at' => Carbon::now()]);
        event(new TriggerEventTransaction('restored', $order_to));

        $this->dispatchBrowserEvent('revert-orders', ['orders_status' => "Order is restored."]);

    }

    public function delete($id, $order_to)
    {

        $users = Assetsuser::find($id);
        $users->updated_at = Carbon::now();
        $users->finished_status = 0;
        $users->flow_process = "canceled";
        $users->save();

        event(new TriggerEventTransaction('cancel', $order_to));

        $this->dispatchBrowserEvent('revert-orders', ['orders_status' => "Order is canceled."]);
    }

    public function deletepermanent($id, $order_to)
    {

        $users = Assetsuser::whereIn('id', [$id])->get();

        foreach ($users as $key => $value) {
            # code...
            Assetsuser::whereIn('design_plan', [$value->design_plan])->each(function ($component, $key) {
                $component->delete();
            });
        }

        event(new TriggerEventTransaction('cancel', $order_to));

        $this->dispatchBrowserEvent('revert-orders', ['orders_status' => "Order is delete permanently."]);
    }

    public function openModal()
    {
        $this->isOpen = true;
    }
    
}
