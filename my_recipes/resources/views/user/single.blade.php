@extends('layouts.user')

@section('title')
	<title>This post belongs to {{$active}}</title>
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="@webnsyntax" />
    <meta name="twitter:title" content="webnsyntax" />
    <meta name="twitter:description" content="{{$post->title}}" />
    <meta name="keywords" content="{{$post->tags}}"/>
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
      @include('user.profile')
    </div>
  </div>
</div>

@endsection