<!-- @extends('layouts.app') -->
@extends('front.template.header')

@section('content')
<!-- SLIDER -->
<!-- <div class="container"> -->
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="{{ URL::asset('images/slider-img2.jpg')}}" alt="First slide">
        <div class="carousel-caption d-none d-md-block">
          <h5>First Slide</h5>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,</p>
        </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="{{ URL::asset('images/slider-img3.jpg')}}" alt="Second slide">

      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="{{ URL::asset('images/slider-img1.jpg')}}" alt="Third slide">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
<!-- </div> -->

@endsection
