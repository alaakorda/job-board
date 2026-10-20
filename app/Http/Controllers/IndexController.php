<?php

namespace App\Http\Controllers;
use App\Models\Job;
  

class IndexController extends Controller
{
    function index()
    {
      
        return view('index', ['title' => 'Job Board',]);
    }
    function contact()
    {
      
        return view('contact', ['title' => 'Contact Us',]);
    }
    function about()
    {
      
        return view('about', ['title' => 'About Us',]);
    }
}
