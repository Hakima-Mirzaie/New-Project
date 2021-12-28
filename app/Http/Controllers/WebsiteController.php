<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebsiteController extends Controller
{


    public function searchTranslator()
    {

        return view('search');
    }
}
