<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\LaruxController;

class TestimonialsPage extends LaruxController
{
    public function index()
    {
        return view('pages.testimonials');
    }
}
