<?php

namespace App\Lib\Modules;

use App\Models\Assetsuser;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Lib\Repositories\StoredDocumentTHREEInterface;

class StoredImageThree implements StoredDocumentTHREEInterface
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
    
    public function StoredDocumentComponentOrdersTHREE(Object $request, $generateID, $generateIDNEXT) {
        $data = array();

        $validator = Validator::make($request->all(), [
           'files' => 'required|mimes:png,jpg,jpeg,csv,txt,pdf|max:2048'
        ]);

        if(isset(Auth::user()->id)){

            if($request->TotalFiles > 0) {
                            
                for ($x = 0; $x < $request->TotalFiles; $x++) {

                    if ($request->hasFile('files'.$x)) 
                        {
                            $file      = $request->file('files'.$x);
                            $data['PATHS'][] =$request->file('files'.$x)->getRealPath();
                            $data['GetOriginalName'][] =$request->file('files'.$x)->getClientOriginalName();
                            $data['GetMimeType'][] =$request->file('files'.$x)->getMimeType();
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
                            $file= new Assetsuser();
                            $file->assets_uid = $generateID;
                            $file->asset_grt = $generateIDNEXT;
                            $file->id_user = Auth::user()->id;
                            $file->order_name = Auth::user()->name;
                            $file->component = $request->component;
                            $file->design_plan = isset($request->lastIndex) ? "cp".$request->lastIndex : $request->design3;
                            $file->filepath = $filepath;
                            $file->alias = $filename;
                            $file->mime = $mimes;
                            $file->order_to = Auth::user()->id;
                            $file->finished_status = 0;
                            $file->qty = $request->quantity;
                            $file->material = $request->material;
                            $file->size = $request->size;
                            $file->design = json_decode($request->formDataDesign, true);
                            $file->jenis_kertas = $request->jenis_kertas;
                            $file->jenis_kertas_gsm = $request->jenis_kertas_gsm;
                            $file->save();
                                            
                        }
                    }
                    
                return response()->json(['success'=>'Multiple FIle has been uploaded using ajax into db and storage directory',  'data' => $data]);
                            
            }
                else
                    {
                        return response()->json(["message" => "Please try again."]);
                    }

            } 
                else {

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

