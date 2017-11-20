<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Gallery;

use Validator;
use DB;
use Image;
use File;

class GalleryController extends Controller
{
    public function index(){
    	$Gallery = Gallery::get();

        return view('backend.gallery.index', compact('Gallery'));
    }

    public function store(request $request){
      $message = [
        'picture.required' => 'Wajib di isi',
        'picture.dimensions' => 'Ukuran yg di terima 1366px x 1366px',
        'picture.image' => 'Format Gambar Tidak Sesuai',
        'picture.max' => 'File Size Terlalu Besar',
      ];

      $validator = Validator::make($request->all(), [
        'picture' => 'required|image|mimes:jpeg,bmp,png|max:2000|dimensions:max_width=1366,max_height=1366',
      ], $message);


      if($validator->fails())
      {
          return redirect()->route('backend.gallery')->withErrors($validator)->withInput()->with('info-form-add', true);
      }

      DB::transaction(function () use($request) {
        $salt = str_random(4);
        $saltName = str_random(6);
        $image = $request->file('picture');
        $img_url = $saltName.'-'.$salt. '.' . $image->getClientOriginalExtension();
        $upload1 = Image::make($image);
        $upload1->save('assets/images/'.$img_url);

        $save = new Gallery;
        $save->picture = $img_url;
        $save->save();
      });


      return redirect()->route('backend.gallery')->with('berhasil', 'Berhasil Menambah ');
    }

    public function flagPublish($id){
    	$Gallery = Gallery::find($id);
    	if ($Gallery->flug_publish == 'N') {
  			$Gallery->flug_publish = 'Y';
  		}
  		else if ($Gallery->flug_publish == 'Y') {
  			$Gallery->flug_publish = 'N';
  		}
  		$Gallery->save();
	    return redirect()->route('backend.gallery')->with('berhasil', 'Berhasil Mengubah ');
    }

    public function delete($id){
    	$Gallery = Gallery::find($id);

		DB::transaction(function() use($Gallery){
			File::delete('amadeo/images/'.$Gallery->picture);
			$Gallery->delete();
		});

	    return redirect()->route('backend.gallery')->with('berhasil', 'Berhasil Menghapus ');
    }
}
