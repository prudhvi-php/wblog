@extends('layouts.user')

@section('title')
	<title>All {{$active}} posts</title>
  <meta name="twitter:card" content="summary" />
  <meta name="twitter:site" content="@webnsyntax" />
  <meta name="twitter:title" content="webnsyntax" />
    @if($active == "")
      <meta name="twitter:description" content="This link contains all the posts belongs to php, javascript, angularjs, laravel" />
    @else
      <meta name="twitter:description" content="This link contains all the posts belongs to {{$active}}" />
    @endif
  
  <meta name="twitter:image" content="image of the page to be added to tweet" />
@endsection

@section('content')


<div class="container">    
  <div class="row"  style="padding-top: 50px;">
    <div class="col-sm-9"> 
    	<!-- @foreach($latest_posts as $post)
			<h2>Title : {{ $post->title }}</h2>
			Description : {!! $post->description !!}
			<h3>Category: {{ $post->category }}</h3>
			<h4>Tags: {{ $post->tags }}</h4>
		@endforeach -->

      <div class="row">
          @foreach($latest_posts as $post)

            <div class="col-sm-6 col-md-4">
              <div class="thumbnail">
                <img src='{{ ("images/$post->image") }}' alt="..." style="height: 160px;">
                <div class="caption">
                <h3>{{ $post->category }}</h3>
                <p>{{ $post->title }}</p>
                <p><a href='{{ url("$post->slug/$post->id")}}' class="pull-right" role="button">Taste More..</a></p>
                <br>
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