<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Gallery;

class FrontendController extends Controller
{
    public function home(){
    	$Gallery = Gallery::where('flug_publish', 'Y')->limit(6)->inRandomOrder()->get();

    	return view('frontend.home.index', compact('Gallery'));
    }

    public function gallery(Request $request){

    	$Gallery = Gallery::where('flug_publish', 'Y')->orderBy('id', 'desc')->paginate(12);

    	if ($request->ajax()) {
    		$view = view('frontend.gallery.img-list',compact('Gallery'))->render();
            return response()->json(['html'=>$view]);
        }
    	return view('frontend.gallery.index', compact('Gallery'));
    }

    public function govermentMessage(){
    	return view('frontend.goverment.index');
    }

    public function registerPayment(){
    	return view('frontend.register.index');
    }

    public function schedule(){
    	return view('frontend.schedule.index');
    }

    public function commitee(){
    	return view('frontend.commitee.index');
    }

    public function coming(){
    	return view('frontend.coming.index');
    }
}
