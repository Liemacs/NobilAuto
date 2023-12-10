<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $page = 'contacts';
        return view('contacts', compact('page'));
    }
}
