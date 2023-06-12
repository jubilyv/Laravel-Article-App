<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Support\Facades\DB;


class ViewController extends Controller
{

    function show()
    {

        $blogs = Blog::all();
        // DB::table('blogs')->pluck('title');
        
        return view('view-article', compact('blogs'));
    }
}