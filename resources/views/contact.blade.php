@extends('layouts.app')

@section('content')
<div class="container homeContainer">
  <div class="row containerBanner">
    <div class="col-12 bannerTextContainerSecondary">
      <center>
        <span class="bannerText bannerTextSecondary">Contact Us</span>
      </center>
    </div>
  </div>
  <div class="contactContainerBody">
    <div class="row">
      <div class="col-md-4 col-sm-12 footerContainer">
        <div class="footerContent">
          <h3 class="footerHead"><b>Call Us</b></h3><br>
          <span>Tel: 123-456-7890</span><br>
          <span>info@mysite.com</span>
        </div>
      </div>
      <div class="col-md-4 col-sm-12 footerContainer">
        <div class="footerContent">
          <h3 class="footerHead"><b>Visit Us</b></h3><br>
          <span>47, Lot 3780, Section 218,</span><br>
          <span>KNLD Liang Kee Commercial Centre,</span>
          <span>mile Penrissen Road, 93200,</span>
          <span> Kuching, Sarawak.</span>
        </div>
      </div>
      <div class="col-md-4 col-sm-12 footerContainer">
        <div class="footerContent">
          <h3 class="footerHead"><b>Opening Hours</b></h3><br>
          <span>Mon - Fri: 7am - 10pm</span><br>
          <span>Sun: 7am - 3pm</span><br><br>
        </div>
      </div>
    </div><br><br>
    <div class="row">
      <div class="col-md-6 col-sm-12">
        <input type="text" class="form-control" placeholder="Name">
      </div>
      <div class="col-md-6 col-sm-12">
        <input type="text" class="form-control" placeholder="Email">
      </div>
    </div><br>
    <div class="row">
      <div class="col-sm-12">
        <input type="text" class="form-control" placeholder="Subject">
      </div>
    </div><br>
    <div class="row">
      <div class="col-sm-12">
        <textarea name="name" rows="5" class="form-control" placeholder="Message"></textarea>
      </div>
    </div><br>
    <div class="row">
      <div class="col-sm-12">
        <center>
        <button type="button" name="button" class="btn btn-action">SEND</button>
      </center>
      </div>
    </div>
  </div><br><br><br><br>
  <div class="row">
    <div class="col-12">
      <div style="width: 100%;">
        <iframe
        width="100%"
        height="600"
        frameborder="0"
        scrolling="no"
        marginheight="0"
        marginwidth="0"
        src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=UCSF%20MEdical%20Center%20at%20Mission%20Bay+(DR%20MOTORS)&amp;t=&amp;z=15&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"
        ></iframe>
      </div>
    </div>
  </div>
</div>
@endsection
