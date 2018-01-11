<?php

namespace App\Http\Controllers;

use Mail;
use Session;
use App\Mail\Contact;
use App\Mail\Confirmation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class ContactController extends Controller
{
    public function contact(Request $request) 
    {
        Mail::to('maartenengeltjes@prjct.amsterdam')->send(new Contact($request->all()));
        Mail::to($request->input('email'))->send(new Confirmation($request->all()));
        Session::flash('message', "Mail succesvol verzonden");
        return back();
    }
}
