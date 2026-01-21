<!-- resources/views/child.blade.php -->
 

@extends('layouts.app')
 
@section('title', 'posts')
 
 
@section('content')
    <p>This is my body content.</p>
     <div class="card-deck">
    @foreach($post as $posts)
    <div class="card">
    <img class="card-img-top" src=".https://www.investopedia.com/thmb/ejUMpcr5pOzEIkw5FekHv4E5-f0=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/GettyImages-1210536688-f8aa4c9c1ace4e348e2bcd5e267fdbb3.jpg" class="card-img-top" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">{{ $posts->title }}</h5>
      <p class="card-text">{{ $posts->desc }}</p>
      <p class="card-text"><small class="text-muted">{{ $posts->content }}</small></p>
    </div>
  </div>
</div> 
@endforeach
</div>
@endsection