@extends('layouts.user')

@section('title')
	<title>{{$post->title}}</title>
@endsection

@section('content')


<div class="container">    
  <div class="row"  style="padding-top: 50px;">
    <div class="col-sm-9">

      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title" style="font-weight: 600;">{{ $post->title }}</h3>
        </div>
        <div class="panel-body">
          {!! $post->description !!}
        </div>
      </div>

    </div>
    <div class="col-sm-3">
      <div class="panel panel-default">
        <div class="panel-heading">About Me(Webchef):</div>
        <div class="panel-body">
          Hi, this is prudhvi the Webchef from past 4+ years and cooking different web recipes using AngularJs, Laravel, Codeigniter etc.
        </div>
      </div>
    </div>
  </div>
</div>

@endsection