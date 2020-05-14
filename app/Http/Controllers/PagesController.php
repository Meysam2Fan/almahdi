<?php

namespace App\Http\Controllers;

use App\Blog_Post;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){

        // Read value from Model method
        $postsData = Blog_Post::getpostsData();

        // Pass to view
        return view('index')->with("postsData",$postsData);
    }
}
