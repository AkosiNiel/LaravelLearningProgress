<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('pages.home'); 
    }

    public function luzon()
    {
        return view('pages.luzon'); 
    }

    public function visayas()
    {
        return view('pages.visayas');
    }

    public function mindanao()
    {
        return view('pages.mindanao'); 
    }
}
