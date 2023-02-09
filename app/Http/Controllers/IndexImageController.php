<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;

class IndexImageController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $images = Image::with('imageable')
            ->latest()
            ->paginate(10);

        return view('images.index', ['images' => $images]);
    }
}
