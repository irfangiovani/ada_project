<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('frontend/contact');
    }
    public function about()
    {
        return view('frontend/about');
    }
    public function product()
    {
        return view('frontend/product');
    }
}
