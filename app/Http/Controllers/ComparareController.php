<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComparareController extends Controller
{
    public function index()
    {
        $page = 'comparare';
        return view('comparare', compact('page'));
    }
}
