<?php

namespace App\Http\Controllers;

use App\Models\Train;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){

        $trains= Train::where('data_di_partenza', '=', '2024-01-23')->get();
        
        return view('home', compact('trains'));
    }
}
