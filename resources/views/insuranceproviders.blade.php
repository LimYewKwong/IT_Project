@extends('layouts.app')

@section('content')
<div class="container pagesBackground">
  {{-- This is the back button that can lead user to previous page --}}
  <button type="button" class="btn btn-default" style="position: relative; margin-top:20px;" onclick="location.href='{{ url('/insurance') }}'">Back</button>
    {{-- This part shows the model name of the car, expiry date and current NCD rate --}}
    <div class="row">
        <div class="col-md-12 col-sm-12 whiteContainer" style="margin-top: 20px;">
            <h2>Car details</h2>
            <div class="carSummaryDetails">
              <label>Expiry Date:</label>
              <p style="color:#206799; font-weight:bold; font-size:x-large;">25/4/2021</p>
              <label>No-Claim Discount:</label>
              <p style="color:#206799; font-weight:bold; font-size:x-large;">25%</p>
            </div>
            <label>Your Car:</label>
            <p style="color:#206799; font-weight:bold; font-size:x-large;">Perodua Myvi SXI Premium 4D Hatchback 5 SP Manual</p>
            <img src="{{ asset('images/perodua_icon.webp') }}" alt="CarLogo" style="position: relative; left: 200px;">
            <br><br><br>
        </div>
    </div>

    {{-- This section shows the Insurance Providers --}}
    <div class="row">
        <div class="col-md-12 col-sm-12 whiteContainer" style="margin-top: 20px; margin-bottom: 20px;">
            <button type="button" class="btn btn-primary" style="position: absolute; right: 200px; top: 35px;">Lowest price</button>
            <button type="button" class="btn btn-primary" style="position: absolute; right: 50px; top: 35px;">Sum Insured (SI)</button>
            <h2>Insurance Providers</h2>
            <div class="card mb-3">
                <div class="row">
                  <div class="col-md-3 insuranceProvidersLogo">
                    <img src="{{ asset('images/lonpac_logo.webp') }}"alt="LonpacLogo">
                  </div>
                  <div class="col-md-9">
                      <label style="font-weight: bold">Protection Drviers</label>
                      <label class="insuranceProvidersTowingServiceLabel" style="font-weight: bold">Towing Service</label>
                      <label class="insuranceProvidersTotalAmount" style="font-weight: bold">Total Amount:</label>
                      <br>
                      <span>Up to 2 Drivers</span>
                      <span class="insuranceProvidersTowingServiceSpan">Up to 50km</span>
                      <span class="insuranceProvidersTotalAmount" style="color:#206799; font-weight:bold; font-size:x-large; margin-left:27px">RM 450</span>
                      <br>
                      <label style="font-weight: bold">Sum Insured (SI):</label>
                      <span style="color:#206799; font-weight:bold; font-size:x-large; margin-left:27px">RM 24,000</span>
                      <button type="button" class="btn btn-primary" style="margin-top: 25px; position: absolute; right: 100px;" onclick="location.href='{{ url('/caranduserdetails') }}'">Buy Now</button>
                  </div>
                </div>
                <p class="card-text"><small class="text-muted">* Sum insured displayed here are the recommended sum insured by respective insurance companies.</small></p>
            </div>

            <div class="card mb-3">
              <div class="row">
                <div class="col-md-3 insuranceProvidersLogo">
                  <img src="{{ asset('images/allianz_logo.webp') }}"alt="AllianzLogo">
                </div>
                <div class="col-md-9">
                    <label style="font-weight: bold">Protection Drviers</label>
                    <label class="insuranceProvidersTowingServiceLabel" style="font-weight: bold">Towing Service</label>
                    <label class="insuranceProvidersTotalAmount" style="font-weight: bold">Total Amount:</label>
                    <br>
                    <span>Up to 2 Drivers</span>
                    <span class="insuranceProvidersTowingServiceSpan">Up to 75km</span>
                    <span class="insuranceProvidersTotalAmount" style="color:#206799; font-weight:bold; font-size:x-large; margin-left:27px">RM 455</span>
                    <br>
                    <label style="font-weight: bold">Sum Insured (SI):</label>
                    <span style="color:#206799; font-weight:bold; font-size:x-large; margin-left:27px">RM 24,000</span>
                    <button type="button" class="btn btn-primary" style="margin-top: 25px; position: absolute; right: 100px;" onclick="location.href='{{ url('/caranduserdetails') }}'">Buy Now</button>
                </div>
              </div>
              <p class="card-text"><small class="text-muted">* Sum insured displayed here are the recommended sum insured by respective insurance companies.</small></p>
          </div>

          <div class="card mb-3">
            <div class="row">
              <div class="col-md-3 insuranceProvidersLogo">
                <img src="{{ asset('images/rhb_logo.webp') }}"alt="RHBLogo">
              </div>
              <div class="col-md-9">
                  <label style="font-weight: bold">Protection Drviers</label>
                  <label class="insuranceProvidersTowingServiceLabel" style="font-weight: bold">Towing Service</label>
                  <label class="insuranceProvidersTotalAmount" style="font-weight: bold">Total Amount:</label>
                  <br>
                  <span>Up to 2 Drivers</span>
                  <span class="insuranceProvidersTowingServiceSpan">Up to 200km</span>
                  <span class="insuranceProvidersTotalAmount" style="color:#206799; font-weight:bold; font-size:x-large; margin-left:27px">RM 465</span>
                  <br>
                  <label style="font-weight: bold">Sum Insured (SI):</label>
                  <span style="color:#206799; font-weight:bold; font-size:x-large; margin-left:27px">RM 24,500</span>
                  <button type="button" class="btn btn-primary" style="margin-top: 25px; position: absolute; right: 100px;" onclick="location.href='{{ url('/caranduserdetails') }}'">Buy Now</button>
              </div>
            </div>
            <p class="card-text"><small class="text-muted">* Sum insured displayed here are the recommended sum insured by respective insurance companies.</small></p>
        </div>
            
        </div>
    </div>
</div>
@endsection