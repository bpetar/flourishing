@extends('layouts.app')

@section('content')
<!-- w3-content defines a container for fixed size centered content,
and is wrapped around the whole page content, except for the footer in this example -->
<div class="w3-content" style="display:block; background-attachment: fixed;background-size:cover; max-width:100%; background-color: white;">

  <!-- Header -->
  <div class="w3-container w3-center w3-padding-32" style="width:100%; height: 600px; background-image: url(/images/fs.jpg); background-size: contain; background-repeat: no-repeat; background-position: center; margin-bottom: 50px;">
  </div>


  <div class="w3-row" style="text-align: center; margin-bottom: 50px;">
    <div style="border: 1px solid #b3b2b2;
    max-width: 1034px;
    margin: 0 auto;
    padding: 5px;
    height: 115px;">
    <div style="float: left; margin-top: 5px;">
      <img width="450px" src="/images/funded.jpg"></div>
      <div style="padding: 10px; font-size: x-large;">
      <span>This project has been funded with support from the European Union, within Erasmus+ program.</span></div>
    </div>
  </div>

  <!--about the project, activities, about e+, library, photos, partneri i primeri dobre prakse-->

  <div class="w3-row" style="text-align: center;">
  @foreach ($articles as $article)

  <!-- Blog entry -->
  <div class="w3-card-4 w3-margin w3-white" style="width:500px; display: inline-block;">

    <div class="article_image" style="background:url('{{$article->image}}') no-repeat; background-size:cover; width:100%; background-position: 0px -50px; height:270px;"> </div>
    <div class="w3-container w3-padding-8">
        @if ($article->course)
      <h4><b><a style="color:black;" href="/courses/{{$article->course->id}}">{{$article->course->title}}</a></b></h4>
        @endif
      <h3 class="article_heading"><b><a href="/articles/{{$article->id}}">{{$article->title}}</a></b></h3>
      <h5 style="font-style: italic;">{{$article->description}}</h5>
    </div>
  </div>
 
  @endforeach


  </div>
<!-- END Introduction Menu -->
</div>

<!-- END GRID -->
</div><br>

<!-- END w3-content -->
</div>







@endsection
