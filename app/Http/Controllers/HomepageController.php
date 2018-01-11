<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Musician;
use App\Ticket;
use App\Project;


class HomepageController extends Controller
{
    public function index() {
      $musicians = Musician::all();
      $tickets = Ticket::all();
      $project = Project::latest()->first();

      return view('welcome', compact('musicians', 'tickets', 'project'));
    }
}
