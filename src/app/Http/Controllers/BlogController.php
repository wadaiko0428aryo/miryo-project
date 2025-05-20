<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    public function blog_page()
    {
        $blogs = Blog::paginate(4);
        return view('blog.blog_page', compact('blogs'));
    }
    public function blog_detail_page($blog_id)
    {
        $blog = Blog::find($blog_id);
        return view('blog.blog_detail_page', compact('blog'));
    }

}
