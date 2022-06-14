<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Destination;

class DestinationController extends Controller
{
    public function index(){
        $destinations = Destination::all();
        return(view('destinationlist', compact('destinations')));
    }

    public function show($id){
        $destination = Destination::findOrFail($id);
        return(view('detail', compact('destination')));
    }
}
