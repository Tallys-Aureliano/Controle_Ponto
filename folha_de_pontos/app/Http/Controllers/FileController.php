<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FileController extends Controller
{
    public function view($filePath)
    {   
        if(Storage::exists($filePath)){
            return Storage::response($filePath);
        }
        abort(404);
    }

    public function viewProfileImage($fileName)
    {
    	if(Storage::exists('uploads/profile/image/' . $fileName)){
            return Storage::response('uploads/profile/image/' . $fileName);
        }
        abort(404);
    }
}
