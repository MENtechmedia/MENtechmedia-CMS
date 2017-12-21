<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Musician;
use App\Ticket;


class HomepageController extends Controller
{
    public function index() {
      $musicians = Musician::all();
      $tickets = Ticket::all();

      return view('welcome', compact('musicians', 'tickets'));
    }
}
