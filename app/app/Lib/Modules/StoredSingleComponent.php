<?php

namespace App\Lib\Modules;

use App\Models\Assetsuser;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Lib\Repositories\StoredSingleDocumentInterface;
use Illuminate\Support\Facades\File;

class StoredSingleComponent implements StoredSingleDocumentInterface
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
    
    public function StoredSingleDocumentComponentOrders(Object $request, $generateID, $generateIDNEXT) {
        
        $data = array();
        $id = (Int) $request->idx;

        $file = Assetsuser::where('id', '=', $id)->first();

            $validator = Validator::make($request->all(), [
                'file' => 'required|mimes:png,jpg,jpeg,csv,txt,pdf|max:2048'
            ]);
                if(isset(Auth::user()->id)){

                    if($request->TotalFiles > 0)
                    {
                            
                        for ($x = 0; $x < $request->TotalFiles; $x++) 
                        {
                            if ($request->hasFile('file'.$x)) {
                                    
                                $dt[] = Assetsuser::where('order_to', Auth::user()->id)->get();

                                    if(!$dt[0]->isEmpty()){

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
                                        
                                            $dt[] = Assetsuser::where('order_to', Auth::user()->id)->get();

                                            if(!$dt[0]->isEmpty()){
                                                
                                                    $loopsData = Assetsuser::where('id', $id)->get();

                                                    foreach ($loopsData as $key => $value) {
                                                        # code...
                                                        $definitions[] = $value->design_plan;
                                                        if (File::exists($value->filepath)) {
                                                            File::delete(public_path().$location.$value->alias);
                                                        }
                                                    }
                                               $componentsds = (Int) $request->lastIndex - 1;

                                                /** 
                                                 * Progress to delete to processing data again.
                                                 */
                                                $nullData = Assetsuser::whereIn('design_plan', [(String) "cp".$componentsds])->delete();

                                                if($nullData > 0){

                                                        $countComponent = collect($dt)->map(function ($rtDataC) {

                                                            $rtData = $this->MergedSameArrayValues($rtDataC, 'assets_uid');
                            
                                                            foreach ($rtData as $valuex => $value) {
                            
                                                                if(isset($value->design)){
                                                                    for ($i=0; $i < count([$value->design]); $i++) { 
                                                                            $namemtr[] =  array_column($value->design[$i], 'value');
                                                                    }
                                                                }
                                                            }
                            
                                                            return isset($namemtr) ? $namemtr : null;
                                            
                                                        });

                                                        $rty = collect($dt)->map(function ($exposeArrayComponents) {
                                            
                                                            foreach ($exposeArrayComponents as $value) {
                                                                # code...
                                                                $dkl[] = $value->design_plan;
                                                                $dtg[] = Assetsuser::whereIn('design_plan', [$dkl])->count();
                                                
                                                            }
                                                
                                                            $arrayOfValues = array();
                                                            foreach ($dkl as $a) {
                                                
                                                                @$arrayOfValues[$a]++;
                                                
                                                            }
                                                            return $arrayOfValues;
                                                        
                                                        });
                                            
                                                        $fgj = array_merge([], isset($countComponent->toArray()[0]) ? $countComponent->toArray()[0] : []);
                                                        $data = array_merge([], isset($rty->toArray()[0]) ? $rty->toArray()[0] : []);
                                                
                                                        return new JsonResponse(
                                                            [
                                                                'success' => true, 
                                                                'message' => "success.",
                                                            ], 
                                                        200
                                                    );

                                                }

                                            } 
                                    } 

                                    else 
                                        {

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

                                            $loopsData = Assetsuser::where('id', $id)->get();

                                            foreach ($loopsData as $key => $value) {
                                                # code...
                                                $definitions[] = $value->design_plan;
                                                if (File::exists($value->filepath)) {
                                                    File::delete(public_path().$location.$value->alias);
                                                }
                                            }

                                            $componentsd = (Int) $request->lastIndex - 1;

                                        $nullData = Assetsuser::whereIn('design_plan', [(String) "cp".$componentsd])->delete();

                                    if($nullData > 0){

                                            return new JsonResponse(
                                                    [
                                                    'success' => true, 
                                                    'message' => "success.",
                                            ], 
                                        200
                                    );

                                }

                            }

                        }

                    }
                            
                }
                else
                    
                    {
                        return new JsonResponse(
                            [
                                'success' => false, 
                                'message' => "please try again."
                            ], 
                            200
                        );
                    }
                    
            } 
                else {

            return new JsonResponse(
                [
                    'success' => false, 
                    'message' => "failed."
                ], 
                200
            );
        
        }

    }
    
}

