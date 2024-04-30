<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    //
    public function index()
    {
        $reviews = Review::with(['building', 'user'])->get();

        return view('review.index', compact('reviews'));
    }
}
