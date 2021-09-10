<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Travel;

class HomeController extends Controller
{
    public function index() {
        $allTravels = Travel::all();
        $travelFiltrati = Travel::where('boarding_airport', '===', 'Roma')->get();
        return view('homepage', compact('allTravels', 'travelFiltrati'));
    }
}
