<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        $tasks = [
            "go to the store",
            "go to the market",
            "go to work"
        ];
        $var = '<script>alert("!!!");</script>';
        return view('welcome')->withTasks($tasks)->withVar($var);
    }
    public function contact()
    {
        return view('contact');
    }
    public function about()
    {
        return view('about');
    }
}
