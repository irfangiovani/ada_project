<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function about()
    {
        return view('frontend/about');
    }
}
