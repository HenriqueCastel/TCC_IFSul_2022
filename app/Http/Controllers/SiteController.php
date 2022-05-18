<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    /**
     * Mostra a página home
     * 
     * @return void
     */
    public function index()
    {
        return view('home');
    }
}
