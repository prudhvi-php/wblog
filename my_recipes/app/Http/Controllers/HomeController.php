<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

use App\Bpost;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function addpost(){

        return view('addpost');

    }

    public function newpost(Request $request){
        //return $request->all();
        $this->validate($request, [
            'title' => 'required',
            'category' => 'required',
            'description' => 'required',
            'tags' => 'required'
        ]);

        //return $request->all();
        $bpost = new Bpost;

        $bpost->title = $request->title;
        $bpost->category = $request->category;
        $bpost->description = $request->description;
        $bpost->tags = $request->tags;

        if($request->category == "Laravel"){
            $bpost->image = 'laravel.png';
            $bpost->slug = 'laravel';
        }
        elseif ($request->category == "Codeigniter") {
            $bpost->image = 'codeigniter.png';
            $bpost->slug = 'codeigniter';
        }
        elseif ($request->category == "AngularJs") {
            $bpost->image = 'angularjs.jpg';
            $bpost->slug = 'angularjs';
        }
        elseif ($request->category == "Core Php") {
            $bpost->image = 'php.jpg';
            $bpost->slug = 'corephp';
        }
        elseif ($request->category == "Others") {
            $bpost->image = 'others.jpg';
            $bpost->slug = 'others';
        }

        if($bpost->save()){
            return redirect('addpost');
        }
        
    }

    public function allposts(){

        $allposts = Bpost::orderBy('id', 'desc')->get();
        return view('allposts', ['allposts' => $allposts]);
        //print_r($allposts);

    }
}
