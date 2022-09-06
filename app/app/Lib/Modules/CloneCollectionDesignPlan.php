<?php

namespace App\Lib\Modules;

use App\Lib\Repositories\CollectionPlannerInterface;
use App\Models\Assetsuser;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class CloneCollectionDesignPlan implements CollectionPlannerInterface
{

    public function CloneDesignPlan() {

        $dt[] = Assetsuser::where('order_to', Auth::user()->id)->get();
                                
        if(!$dt[0]->isEmpty()) {
            $collectionLatestArray = collect(Assetsuser::select('design_plan')->get())->last();
        
            if((int) substr($collectionLatestArray->design_plan,-2, 2) >= 10) {
                $data['cpt'] = isset($collectionLatestArray->design_plan)
                ? (int) substr($collectionLatestArray->design_plan,-2, 2) + 1 
                : 1;
            } else if((int) substr($collectionLatestArray->design_plan,-2, 3) >= 100) {
                $data['cpt'] = isset($collectionLatestArray->design_plan)
                ? (int) substr($collectionLatestArray->design_plan,-2, 3) + 1 
                : 1;
            }else if((int) substr($collectionLatestArray->design_plan,-2, 1) <= 9) {
                $data['cpt'] = isset($collectionLatestArray->design_plan)
                ? (int) substr($collectionLatestArray->design_plan,-1, 1) + 1 
                : 1;
            } 

        } else {

            $data['cpt'] = 1;

        }
       
        return new JsonResponse(
            [
                'status' => false, 
                'message' =>  isset($collectionLatestArray->design_plan)
                ? $data['cpt'] 
                : 1,
                'messageIndex' =>  $data['cpt']
            ], 
            200
        );

    }
    
}

