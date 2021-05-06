@extends('layouts.app')

@section('content')
<div class="container container_primary">
  <div class="row container_primary_banner">
      <br>
      <br>
    <div class="col-12 bannerTextContainer">
      <center>
        <span class="bannerText">BEST PLACE TO BUY</span><br>
        <span class="bannerText">YOUR CAR</span><br>
        <span class="bannerText">INSURANCE</span><br>
      </center>
    </div>
  </div>
    <br>
    <br>
    <br>
  <div class="row homeBlocks">
    <center>
      <div class="col-md-3 col-sm-12 homeblock homeblock1">
        <i class="fas fa-wrench fa-2x"></i><br>
        Well recognized
      </div>
      <div class="col-md-3 col-sm-12 homeblock homeblock2">
        <i class="fas fa-star fa-2x"></i><br>
        Quality Service
      </div>
      <div class="col-md-3 col-sm-12 homeblock homeblock3">
        <i class="fas fa-dollar-sign fa-2x"></i><br>
        Affordable Prices
      </div>
      <a href="{{route('insurance')}}">
        <div class="col-md-3 col-sm-12 homeblock homeblock4">
          <i class="fas fa-check fa-2x"></i><br>
          Get Started
        </div>
      </a>
    </center>
  </div>
  <div class="row">
    <div class="col-md-12 col-sm-12 homeBigBlock">
      <div class="homeBigBlockContent">
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12 col-sm-12">
      <div class="homeBigBlock2">
        <center>
          <h1><b>We'll Find You the best car insurances</b></h1><br>
          <span>I'm a paragraph. Click here to add your own text and edit me. I’m a great place for you to <br> tell a story and let your users know a little more about you.</span><br><br><br>
            <a href="{{route('insurance')}}">
            <button type="button" name="button" class="btn-action">FIND OUT MORE</button><br><br><br><br><br><br>
        </center>
      </div>
    </div>
  </div>
</div>
@endsection
