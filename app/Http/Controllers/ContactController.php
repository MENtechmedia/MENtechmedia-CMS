<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact() 
    {
        Mail::to('maartenengeltjes@prjct.amsterdam')->send(new Contact($request->all()));
        Mail::to($request->input('email'))->send(new Confirmation($request->all()));
        Session::flash('message', "Mail succesvol verzonden");
        return back();
    }
}
