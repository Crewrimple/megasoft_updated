<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function app()
    {
        return view('layouts.app');
    }

    public function about()
    {
        return view('about');
    }

    public function portfolio()
    {
        return view('portfolio');
    }

    public function services()
    {
        return view('services');
    }

    public function contact()
    {
        return view('contact');
    }
    public function serviceitem()
    {
        
        return view('serviceitem');
    }
}
