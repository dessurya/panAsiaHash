<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Gallery;

class FrontendController extends Controller
{
    public function home()
    {
    	$Gallery = Gallery::where('flug_publish', 'Y')->limit(6)->inRandomOrder()->get();

    	return view('frontend.home.index', compact('Gallery'));
    }
}
