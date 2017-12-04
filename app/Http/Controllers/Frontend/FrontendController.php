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
        $client = new \GuzzleHttp\Client();

        $pageOfApi = 1;
        $getArray = array();

        while($pageOfApi <= 9999){

            $res = $client->request(
                'GET', 
                'http://data.panasiahash2019.com/api.php?page='.$pageOfApi, 
                ['http_errors' => false]
            );

            if ($res->getStatusCode() == '404') {
                $getArray = null;
                break;
            }
            else{
                if (json_decode($res->getBody()) == null) {
                    break;
                }
                else{
                    array_push($getArray, json_decode($res->getBody()));
                }
            }

            $pageOfApi++;
        }
    
        $get = array();
        foreach($getArray as $tmpArray){
            $get = array_merge($get, $tmpArray);
        }

    	return view('frontend.coming.index', compact('get'));
    }
}
