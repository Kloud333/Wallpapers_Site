<?php

namespace App\Http\Controllers;

use App\Image;
use Illuminate\Http\Request;

class PostController extends Controller {
    public function index() {

        //$images = Image::all();
        $images = Image::latest()->get();

        return view('posts.posts', compact('images'));

    }

    public function postById(Image $image){

        return view('posts.single_post',compact('image'));

    }

    public function addImage() {

        return view('posts.addImage');

    }

    public function saveImage(Request $request) {

        $request->file('file')->move(public_path('images'), $request->file('file')->getClientOriginalName());

        $image = new Image();
        $image->name = $request->file('file')->getClientOriginalName();
        $image->save();

        return redirect('/');

    }


}
