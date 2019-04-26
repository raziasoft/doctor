<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Backend\Venue;
use DB;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $venue = Venue::all();
          $payment = DB::table('prescriptions')->sum('cc');
        return view('dashboard',compact('venue','payment'));
    }
 

}
