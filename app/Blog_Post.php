<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
class Blog_Post extends Model
{

    public static function getpostsData(){
        $value=DB::table('blog_posts')->where('active', '=', '1')->where('type', '=', '1')->take(3)->orderBy('id', 'asc')->get();
        return $value;
    }
    public static function getcoursesData(){
        $value=DB::table('blog_posts')->where('active', '=', '1')->where('type', '=', '2')->take(3)->orderBy('id', 'asc')->get();
        return $value;
    }
    public static function getservicesData(){
        $value=DB::table('blog_posts')->where('active', '=', '1')->where('type', '=', '3')->take(3)->orderBy('id', 'asc')->get();
        return $value;
    }
}
