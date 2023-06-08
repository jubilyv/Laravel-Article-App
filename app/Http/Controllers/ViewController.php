<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ViewController extends Controller
{

    function show()
    {
        // $article = Blog:: all();

        $blogs = Blog::all();

        return view('view-article', compact('blogs'));
    }
}