<?php

namespace App\Http\Controllers;

class CoreController extends Controller
{
    public function landing() {
        return view('landing');
    }

    public function documentation() {
        return view('documentation');
    }
}
