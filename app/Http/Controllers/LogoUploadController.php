<?php

namespace App\Http\Controllers;

use Str;
use Illuminate\Http\Request;

class LogoUploadController extends Controller
{
    public function __invoke(Request $request)
    {
        $formData = $request->validate([
            'image' => 'required|image|mimes:webp,png,jpg,jpeg|max:2048'
        ]);

        $image = $formData['image'];

        $imageName = Str::random(15) . '.' . $image->extension();
        $image->storeAs('logos', $imageName, 'public');

        return [
            'path' => "/storage/logos/" . $imageName
        ];
    }
}
