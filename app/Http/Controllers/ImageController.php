<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ImageController extends Controller
{
    public function show($path)
    {
        Log::info('path' . env("IMAGES_STORAGE_URI") . '/' . $path);
        return response()->file(env('IMAGES_STORAGE_URI') . '/' . $path);
    }
}
