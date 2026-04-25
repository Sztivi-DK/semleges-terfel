<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('parts/begin')
	    .view('mainboard')
	    .view('parts/end');
    }
}
