<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OurstoryController extends Controller
{
    public function index()
    {
        return view('page.ourstory.index');
    }
}
