@extends('layouts.app')

@section('content')
<div class="container container_primary">
  <div class="row containerBanner">
    <div class="col-12 bannerTextContainerSecondary">
      <center>
        <span class="bannerText bannerTextSecondary">About Us</span>
      </center>
    </div>
  </div>
  <div class="contactContainerBody">
    <div class="row">
      <div class="col-12">
        <p>
          I'm a paragraph. Click here to add your own text and edit me. It’s easy. Just click “Edit Text” or double click me to add your own content and make changes to the font. Feel free to drag and drop me anywhere you like on your page. I’m a great place for you to tell a story and let your users know a little more about you.
          <br><br>
          This is a great space to write long text about your company and your services. You can use this space to go into a little more detail about your company. Talk about your team and what services you provide. Tell your visitors the story of how you came up with the idea for your business and what makes you different from your competitors. Make your company stand out and show your visitors who you are.
          <br><br>
          At Wix we’re passionate about making templates that allow you to build fabulous websites and it’s all thanks to the support and feedback from users like you! Keep up to date with New Releases and what’s Coming Soon in Wix ellaneous in Support. Feel free to tell us what you think and give us feedback in the Wix Forum. If you’d like to benefit from a professional designer’s touch, head to the Wix Arena and connect with one of our Wix Pro designers. Or if you need more help you can simply type your questions into the Support Forum and get instant answers. To keep up to date with everything Wix, including tips and things we think are cool, just head to the Wix Blog!
        </p>
      </div>
    </div>
  </div>
  <div class="row assistanceBanner">
    <div class="col-md-8 col-sm-12">
      <center>
        <h1><b>Need our assistance? Give us a call now!</b></h1>
      </center>
    </div>
    <div class="col-md-4 col-sm-12">
      <center>
        <a href="{{ route('contact') }}">
          <button type="button" name="button" class="btn-action btn-action-padd">CONTACT US</button>
        </a>
      </center>
    </div>
  </div>
</div>
@endsection
