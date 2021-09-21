<?php

namespace App\Http\Controllers;

use App\Models\Planet;
use Illuminate\Http\Request;

class PlanetController extends Controller
{
    public function index()
    {
        $planets = Planet::all();
        return view('planets.index', compact('planets'));
    }

    public function show($id)
    {
        $planet = Planet::find($id);
        return view('planets.show', compact('planet'));
    }

    public function edit()
    {
        
    }
}
