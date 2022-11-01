<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactUsFormController extends Controller
{
    public function createForm(Request $request) {
        return view('contact');
      }
      // Store Contact Form data
      public function ContactUsForm(Request $request) {
          // Form validation
          $this->validate($request, [
              'name' => 'required',
              'email' => 'required|email',
              'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
              'message' => 'required'
           ]);
          //  Store data in database
          Contact::create($request->all());
          // 
          return back()->with('success', 'We have received your message and would like to thank you for writing to us.');
      }
      public function uploadSubmit(request $request){
       dd($request->all());
       
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
