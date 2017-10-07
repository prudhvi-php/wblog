<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Bpost;

class PostController extends Controller
{
    public function index(){

    	$latest_posts = Bpost::orderBy('id', 'desc')->take(4)->get();

    	/*echo "<pre>";
    		print_r($all_posts);
    	echo "</pre>";
    	echo "Welcome to home page..";*/
    	return view('user.index', ['latest_posts' => $latest_posts]);
    }
}
