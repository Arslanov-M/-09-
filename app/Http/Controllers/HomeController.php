<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {
        $locations = Location::withCount('buildings')
            ->orderBy('name')
            ->get();

        return view('home.index')
            ->with([
                'locations' => $locations,
            ]);
    }
}
