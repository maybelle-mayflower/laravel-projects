<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImgUploadController extends Controller
{
    public function uploadForm()
    {
        return view('upload_form');
    }
    public function uploadSubmit(Request $request)
    {
        //Coming soon...
    }    
}
