<?php

namespace App\Http\Controllers\Livewire;

use Livewire\Component;
use App\Models\Assetsuser;
use Livewire\WithPagination;

class HistoriesCustomers extends Component
{

    public $search;

    public function render()
    {
        return view('livewire.histories-customers',
        [
            'files' => Assetsuser::where('alias', $this->search)->get()
    
        ]);
    }
    
    public function edit($id)
    {
        $record = Assetsuser::findOrFail($id);
        $this->selected_id = $id;
        $this->name = $record->name;
        $this->email = $record->email;
        $this->updateMode = true;
    }

    public function destroy($id)
    {
        if ($id) {
            $record = Assetsuser::where('id', $id);
            $record->delete();
        }
    }
}
