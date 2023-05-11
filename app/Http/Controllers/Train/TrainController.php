<?php

namespace App\Http\Controllers\Train;

use App\Http\Controllers\Controller;
use App\Models\Train;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    public function index(){
        $trains = Train::all()->sortBy('Data_partenza');

        return view('home', compact('trains'));   
    }
}
