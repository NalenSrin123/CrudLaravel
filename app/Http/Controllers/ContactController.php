<?php

namespace App\Http\Controllers;

use App\Models\contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function Contact(){
        return view('contact');
    }
    public function ContactSubmit(Request $request){
        $input=$request->all();
        $res=contact::create($input);
        $res->save();
        if($res){
            return redirect('/contact');
        }
    }
}
