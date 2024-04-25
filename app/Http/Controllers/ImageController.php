<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;


class ImageController extends Controller
{
    public function storeImage (Request $request)
    {
        $request->validate([
            'caption'=>'required|max:225',
            'image'=>'required',
            'image'=>'required|image|mimes:png,jpg,jpeg,bmp'
        ]);

        if($request->hasFile('image')){

            $file=$request->file('image');
            $image_name=rand(1000,9999).time().'.'.$file->getClientOriginalExtension();
            $thumbPath=public_path('user_images/thumb');
            // $resize_image=Image::make($file->getRealPath());
            // $resize_image->resize(300,200,function($c){        
            // })->save($thumbPath.'/'. $image_name);

            $file->move($thumbPath, $image_name);
        }
        Image::create([
            'user_id'=>0,
            'caption'=>$request->caption,
            'category'=>$request->category,
            'image'=>$image_name
        ]);
        return redirect()->route('welcome')->with('success', 'image succesfully update.');
        // return redirect('/');
    }
    public function welcome() {
        $data = image::all();

        return view('welcome', compact('data'));
    }
}

