@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        @foreach($allposts as $post)
      <div style="border: 2px solid red;padding: 5px 25px 5px 25px;">
        <h2>Title : {{ $post->title }}</h2>
        Description : {!! $post->description !!}
        <h3>Category: {{ $post->category }}</h3>
        <h4>Tags: {{ $post->tags }}</h4>
        </div><br/>
    @endforeach
    </div>
</div>
@endsection