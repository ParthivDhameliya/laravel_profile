<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class contactController extends Controller {
    function show() {
        return view('contact');
    }
}
