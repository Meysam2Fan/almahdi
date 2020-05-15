<?php

namespace App\Http\Controllers;

use App\Blog_Post;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){

        // Read value from Model method
        $postsData = Blog_Post::getpostsData();
        $coursesData = Blog_Post::getcoursesData();
        $servicesData = Blog_Post::getservicesData();
        // Pass to view
        return view('index',['postsData'=> $postsData,'coursesData'=>$coursesData, 'servicesData' => $servicesData]);
    }
}
