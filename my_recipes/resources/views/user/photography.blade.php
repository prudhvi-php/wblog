@extends('layouts.user')

@section('title')
	<title>My Photography</title>
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="@webnsyntax" />
    <meta name="twitter:title" content="webnsyntax" />
    <meta name="twitter:description" content="This page contains all photos that i had taken originally." />
@endsection

@section('content')


<div class="container">    
  <div class="row"  style="padding-top: 50px;">
  	<div class="col-sm-3">
      <div class="panel panel-default">
        <div class="panel-heading">About Me (The Webchef):</div>
        <div class="panel-body">
          Hi, this is prudhvi the Webchef, from past 3+ years i am cooking different web recipes using Codeigniter, AngularJs, Laravel as ingredients. Here i am sharing some of my recipes..! you can taste them for free..!
        </div>
      </div>
    </div>
    <div class="col-sm-6"> 


      <div class="row">
          @foreach($photographs as $photograph)
          	<div class="col-sm-12">
          		<div class="panel panel-default">
				  <div class="panel-body">
				  	<img src="{{asset('my_recipes/storage/photographs').'/'.$photograph->path}}" class="img-responsive" width="100%" height="100%"><br/><br>
				  	<p>{{$photograph->description}}</p>
				  	<p>Tags: {{$photograph->tags}}</p>
				  </div>
				</div>
          	</div>
          @endforeach
      </div>
    </div>
    <div class="col-sm-3">
      @include('user.profile')
    </div>
  </div>
</div>

@endsection