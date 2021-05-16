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
            Still Waters Fiduciaries Sdn. Bhd. (SWF) serves as an insurance and investment-focused Fiduciary Advisory firm and is the pioneer to operate in East Malaysia. With the solid background and consolidated experience of the Founders, SWF is licensed in providing financial solutions and services to clients ranging from individuals to corporates in various areas such as constructing financial plans, budgeting, investment, wealth distribution, insurance, retirement planning.
            <br><br>
            Still Waters FSB provides a full range of flexible insurance solutions, so you and your loved ones can focus on living life to the fullest.

            <br><br>
            Our competently-trained Financial Advisers are here to offer unbiased and unparalleled financial advices and planning solutions specially tailored to empower every individual or business in meeting their specific financial goals.
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
