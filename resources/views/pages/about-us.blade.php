@extends('app')

@section('content')
  <!-- slider Area Start-->
  <div class="slider-area">
    <div class="slider-active">
      <div class="single-slider hero-overly slider-height2 d-flex align-items-center"
           style="background-size: cover"
           data-background="{{ asset('assets/img/hero/h1_hero.jpg') }}">

        <div class="container">
          <div class="row">
            <div class="col-lg-11">
              <div class="hero__caption">
                <h1 data-animation="fadeInUp" data-delay=".5s" style="color: #27AE60">За нас</h1>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- slider Area End-->

@endsection('content')
