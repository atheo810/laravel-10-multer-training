<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function handleImage(Request $request)
    {
        $request->validate([
            'image' => ['required', 'min:100', 'max:1500', 'mimes:png,jpg,gif']
        ]);
        $request->image->storeAs('/images', 'new_images.png');
        return $request->all();
    }

    public function download()
    {
        return response()->download(public_path('/storage/images/new_images.png'));
    }
}
