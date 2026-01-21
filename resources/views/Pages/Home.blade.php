<!-- resources/views/child.blade.php -->

@extends('layouts.app')

@section('title', 'Home')

@section('sidebar')
    @@parent
    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
<div class="container mt-4">
<div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="10000">
      <img src="https://th.bing.com/th/id/R.c3b90b444103ba864378a038e8a2d6e9?rik=elWag9iVCizJlA&pid=ImgRaw&r=0" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="https://tse4.mm.bing.net/th/id/OIP.9YoExReHzDm8Z0mB4STFCgHaEK?pid=ImgDet&w=474&h=266&rs=1&o=7&rm=3" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://images.stockcake.com/public/3/4/5/3455feca-5c7c-43fb-b58b-2850243732a8_large/sunset-office-view-stockcake.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
 
 </div>   

    <!-- About Me Section -->
    <div class="mt-5 text-center">
        <h2>Appslanka</h2>
        <p class="lead">web developer with experience in building dynamic and responsive websites using Laravel and Bootstrap.</p>
        <br>
        <p>{{ $name }}</p>
        <p class="text-muted">{{ $tagline }}</p>
  
    @if ($hour >= 20)
        <p class="text-secondary">Hi! Good Night!</p>
    @elseif ($hour > 17)
        <p class="text-secondary">Hi! Good Evening!</p>
    @elseif ($hour > 11)
        <p class="text-secondary">Hi!Good Afternoon!</p>
    @else
        <p class="text-secondary">Hi! Good Morning!</p>
    @endif
    </div>
</div>
@endsection
