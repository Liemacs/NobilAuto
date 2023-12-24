<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AutoDetailsController extends Controller {
    public function index() {
        $page = 'auto_details';
        return view('auto_details', compact('page'));
    }
}