<?php

namespace App\Lib\Modules;

use App\Models\Assetsuser;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Lib\Repositories\StoredDocumentOneInterface;

class StoredImageOne implements StoredDocumentOneInterface
{

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
    
    public function StoredDocumentComponentOrdersOne(Object $request, $generateID, $generateIDNEXT) {
        $data = array();

        Validator::make($request->all(), [
            'file' => 'required|mimes:png,jpg,jpeg,csv,txt,pdf|max:2048'
        ]);
            if(isset(Auth::user()->id)){
                if($request->TotalFiles > 0)
                {
                    for ($x = 0; $x < $request->TotalFiles; $x++) 
                    {
                        if ($request->hasFile('file'.$x)) 
                            {
                                $dt[] = Assetsuser::where('order_to', Auth::user()->id)->get();
                                
                                if(!$dt[0]->isEmpty()) {

                                    $countComponent = collect($dt)->map(function ($rtDataC) {
                                        
                                        $rtData = $this->MergedSameArrayValues($rtDataC, 'assets_uid');
                                        foreach ($rtData as $value) {
                                            # code...
                                            $dkl[] = $value->design;
                                        }
                        
                                        $searchsComponentDesign = isset($dkl) ? $dkl : [0];
                        
                                            for ($i=0; $i < count($searchsComponentDesign); $i++) { 
                                                # code...
                                                $namemtr[] =  array_column($dkl[$i], 'value');
                                            }
                                            
                                        return $namemtr;
                        
                                    });
                    
                                    $rty = collect($dt)->map(function ($exposeArrayComponents) {
                                
                                        foreach ($exposeArrayComponents as $value) {
                                            # code...
                                            $dkl[] = $value->design_plan;
                                            $dtg[] = Assetsuser::whereIn('design_plan', $dkl)->get();
                            
                                        }

                                        $arrayOfValues = array();
                                        foreach ($dkl as $a) {
                            
                                            @$arrayOfValues[$a]++;
                            
                                        }
                                        return $arrayOfValues;
                                    
                                    });
                    
                                    $fgj = array_merge([], $countComponent->toArray()[0]);
                                    $data = array_merge([], $rty->toArray()[0]);

                                    $file      = $request->file('file'.$x);
                                    $data['PATHS'][] =$request->file('file'.$x)->getRealPath();
                                    $data['GetOriginalName'][] =$request->file('file'.$x)->getClientOriginalName();
                                    $data['GetMimeType'][] =$request->file('file'.$x)->getMimeType();
                                    $name = time().'_'.$file->getClientOriginalName();
                                    $mimes = $file->getMimeType();
                                    $filename = time().'_'.$file->getClientOriginalName();
                                    $extension = $file->getClientOriginalExtension();
                                    $location = '/files/';
                                    $file->move(public_path().$location, $filename);
                                    $filepath = url('files/'.$filename);
                                    $insert[$x]['name'] = $name;
                                    $insert[$x]['store_path'] = $filepath;
                                    $data['success'] = 1;
                                    $data['message'] = 'Uploaded Successfully!';
                                    $data['filepath'] = $filepath;
                                    $data['extension'] = $extension;
                                    $data['filename'][$x] = $filename;
                                    $data['multipath'] = $insert[$x]['store_path'];
                                    $ds = json_decode($request->formDataDesign, true);
                                    $file = new Assetsuser();
                                    $file->assets_uid = $generateID;
                                    $file->asset_grt = $generateIDNEXT;
                                    $file->id_user = Auth::user()->id;
                                    $file->design_plan = isset($request->lastIndex) ? "cp".$request->lastIndex : $request->ds1;
                                    $file->component = isset($request->component_one) ? $request->component_one : $request->defComponent;
                                    $file->definition = isset($request->component_one) ? $request->component_one : $request->defComponent;
                                    $file->filepath = $filepath;
                                    $file->definition    = $request->defComponent;
                                    $file->alias = $filename;
                                    $file->order_name = Auth::user()->name;
                                    $file->mime = $mimes;
                                    $file->order_to = Auth::user()->id;
                                    $file->finished_status = 0;
                                    $file->qty = $request->qty;
                                    $file->material = $request->material;
                                    $file->size = $request->size;
                                    $file->design = $ds;
                                    $file->jenis_kertas = $request->jenis_kertas;
                                    $file->jenis_kertas_gsm = $request->jenis_kertas_gsm;
                                    $file->counter_component = count($fgj);
                                    $file->counter_plan = count($data);
                                    $file->save();

                                } else {

                                    $file      = $request->file('file'.$x);
                                    $data['PATHS'][] =$request->file('file'.$x)->getRealPath();
                                    $data['GetOriginalName'][] =$request->file('file'.$x)->getClientOriginalName();
                                    $data['GetMimeType'][] =$request->file('file'.$x)->getMimeType();
                                    $name = time().'_'.$file->getClientOriginalName();
                                    $mimes = $file->getMimeType();
                                    $filename = time().'_'.$file->getClientOriginalName();
                                    $extension = $file->getClientOriginalExtension();
                                    $location = '/files/';
                                    $file->move(public_path().$location, $filename);
                                    $filepath = url('files/'.$filename);
                                    $insert[$x]['name'] = $name;
                                    $insert[$x]['store_path'] = $filepath;
                                    $data['success'] = 1;
                                    $data['message'] = 'Uploaded Successfully!';
                                    $data['filepath'] = $filepath;
                                    $data['extension'] = $extension;
                                    $data['filename'][$x] = $filename;
                                    $data['multipath'] = $insert[$x]['store_path'];
                                    $ds = json_decode($request->formDataDesign, true);
                                    $file = new Assetsuser();
                                    $file->assets_uid = $generateID;
                                    $file->asset_grt = $generateIDNEXT;
                                    $file->id_user = Auth::user()->id;
                                    $file->design_plan = isset($request->lastIndex) ? "cp".$request->lastIndex : $request->ds1;
                                    $file->filepath = $filepath;
                                    $file->component = isset($request->component_one) ? $request->component_one : $request->defComponent;
                                    $file->definition = isset($request->component_one) ? $request->component_one : $request->defComponent;
                                    $file->alias = $filename;
                                    $file->mime = $mimes;
                                    $file->order_name = Auth::user()->name;
                                    $file->order_to = Auth::user()->id;
                                    $file->finished_status = 0;
                                    $file->qty = $request->qty;
                                    $file->material = $request->material;
                                    $file->size = $request->size;
                                    $file->design = $ds;
                                    $file->jenis_kertas = $request->jenis_kertas;
                                    $file->jenis_kertas_gsm = $request->jenis_kertas_gsm;
                                    $file->save();
                                    
                                }
                                    
                            }
                        }

                        $data['cpt'] = isset(Assetsuser::latest()->first()['design_plan']) 
                        ? (int) substr(Assetsuser::latest()->first()['design_plan'],-1, 1) + 1 
                        : 1;

                    return response()->json(['success'=>'Multiple File has been uploaded using ajax into db and storage directory',
                        'data' => $data,
                        'dataID' => $file->id,
                        'message' =>  isset(Assetsuser::latest()->first()['design_plan']) 
                        ? substr(Assetsuser::latest()->first()['design_plan'],0,2).$data['cpt'] 
                        : 1,
                        'messageIndex' =>  $data['cpt']
                    ]);
                    
            }
                else
                    {
                        return response()->json(["message" => "Please try again."]);
                    }

        } else {

            return new JsonResponse(
                [
                    'status' => false, 
                    'message' => "failed."
                ], 
                200
            );

        }

    }
    
}

