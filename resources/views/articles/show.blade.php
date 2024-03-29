@extends('layouts.app')


@section('content')
<div class="w3-content" style="max-width:1160px">
  <div class="w3-card-4 w3-margin w3-white ">
    <div class="article_image" style="background:url('{{$article->image}}') no-repeat;display:block;margin-left:auto;margin-right:auto;background-size:cover; width:100%; background-position: 0px -50px; height:500px;"></div>
    <div class="w3-container w3-padding-8">
      @if ($article->course)
        <h4><b><a style="color:black;" href="/courses/{{$article->course->id}}">{{$article->course->title}}</a></b></h4>
      @endif
        <h3 class="article_heading"><b>{{$article->title}}</b></h3>
        <!--<p><a href="/authors/{{$article->author->id}}">{{$article->author->name}}</a><span class="w3-opacity" style="float:right;padding-right:25px;">{{ date('d M Y ', $article->created_at->timestamp) }}</span></p>
         <h5 style="font-style: italic;">{{$article->description}}</h5>-->
    </div>

    <div class="w3-container">
      <div style="height:auto; width:100%; overflow:auto;">
        {!! $article->body !!}
      </div>
  </div>
</div>

<hr>
    
@stop