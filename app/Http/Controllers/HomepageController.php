<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Musician;
use App\Ticket;
use App\Project;

use Carbon\Carbon;


class HomepageController extends Controller
{
    public function index() {

      $musicians = Musician::all();
      $tickets = Ticket::where('date', '>', Carbon::now()->addWeeks(-1))->get();
      $project = Project::latest()->first();

      return view('welcome', compact('musicians', 'tickets', 'project'));
    }
}
