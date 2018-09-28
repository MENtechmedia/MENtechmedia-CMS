<?php

namespace App\Http\Controllers;

use Mail;
use Session;
use App\Mail\Contact;
use App\Mail\Confirmation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\HoneyPotRequest;


class ContactController extends Controller
{
    public function contact(HoneyPotRequest $request) 
    {
        Mail::to('maartenengeltjes@prjct.amsterdam')->send(new Contact($request->all()));
        Mail::to($request->input('email'))->send(new Confirmation($request->all()));
        Session::flash('message', "Mail succesvol verzonden");
        return back();
    }
}
