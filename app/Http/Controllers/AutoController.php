<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AutoController extends Controller
{

    public function index()
    {
        $page = 'auto';
        return view('auto', compact('page'));
    }
}
