<?php

namespace App\Http\Controllers\Train;

use App\Http\Controllers\Controller;
use App\Models\Train;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    public function index(){
        $trains = Train::all()->where('Data_partenza', '>=', now())->sortBy('Data_partenza');

        return view('home', compact('trains'));   
    }
}
