<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
class Blog_Post extends Model
{

    public static function getpostsData(){
        $value=DB::table('blog_posts')->orderBy('id', 'asc')->get();
        return $value;
    }
}
