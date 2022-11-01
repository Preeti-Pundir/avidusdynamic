<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use app\models\item;
use app\models\itemdetals;

class TestfileuploadController extends Controller
{
    // public function uploadForm(){
    //     $dd = Item::get();
    //     return $dd;
    //         return view('upload_form');
    //     }
    
        public function uploadSubmit(request $request){
            $this->validate($request, [
                'name' => 'required',
                'photos'=>'required',
                ]);
                // $dd = Item::get();
                //   return $dd;
                // return 'hi';
                ItemDetails::create([
                    'item_id' =>$request->id,
                    'filename'=>$request->filename
                ]);
           
            }
    
}
