@extends('layouts.app')

@section('content')
<div class="container container_secondary"><br>
  <div class="content_secondary"><br>
    <span class="headerfont"><b>CAR DETAILS</b></span><br><br><br>
    <div class="row">
      <div class="col-md-8 col-sm-12">
        <span>Your Car:</span><br>
        <span class="headerfont">{{ $car_details[0]->brand." ".$car_details[0]->variant." ".$car_details[0]->style." ".$car_details[0]->transmission }}</span><br><br>
        <center>
          <img src="{{url('/images/'.$car_details[0]->brand_logo)}}" alt="Brand Image" height="100px;">
        </center>
      </div>
      <div class="col-md-4 col-sm-12">
        <span>Expiry Date:</span><br>
        <span class="headerfont">{{ date("jS F Y", strtotime($car_details[0]->expiry)) }}</span><br><br>
        <span>No-Claim Discount:</span><br>
        <span class="headerfont">{{ $car_details[0]->no_claim }}%</span>
      </div>
    </div><br><br>
  </div><br>
  <div class="content_secondary">
    <div class="row">
      <div class="col-md-6 col-sm-12">
        <span class="headerfont"><b>INSURANCE PROVIDERS</b></span><br>
      </div>
      <div class="col-md-6 col-sm-12" style="text-align: right;">
        <div class="btn-group" data-toggle="buttons" >
          <label class="btn btn-custom active" style="margin-right: 20px;">
            <input type="radio" name="options" id="lowestPrice" checked> Lowest Price
          </label>
          <label class="btn btn-custom">
            <input type="radio" name="options" id="lowestSum"> Maximum Sum Insured
          </label>
        </div>
      </div>
    </div><br><br>
    <div class="insurance_providers_container">
      @foreach($insurance_providers as $insurance_provider)
      <div class="insurance_providers" data-price="{{$insurance_provider->amount}}" data-sum="{{$insurance_provider->sum_insured}}">
        <div class="row">
          <div class="col-md-3 col-sm-12">
            <img src="{{url('/images/'.$insurance_provider->logo)}}" alt="Brand Image" width="100px;">
          </div>
          <div class="col-md-6 col-sm-12">
            <div class="row">
              <div class="col-md-6 col-sm-12">
                <span><b>Protection Drivers</b></span><br>
                <span>Up to {{$insurance_provider->protection}} Drivers</span>
              </div>
              <div class="col-md-6 col-sm-12">
                <span><b>Towing Service</b></span><br>
                <span>Up to {{$insurance_provider->towing}} Km</span>
              </div>
            </div><br>
            <div class="row">
              <div class="col-md-12 col-sm-12">
                <span><b>Sum Insured (SI):</b></span>
                <span class="headerfont">RM {{number_format($insurance_provider->sum_insured, 2)}}</span>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-12">
            <span>Total amount:</span><br>
            <span class="headerfont">RM {{number_format($insurance_provider->amount, 2)}}</span><br><br>
            <form action="insurance/details" class="was-validated" method="post">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <input type="text" name="insurance_provider_id" value="{{$insurance_provider->id}}" hidden>
              <button type="submit" name="button" class="btn btn-custom">Buy now</button>
            </form>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 col-sm-12">
            <small>* Sum insured displayed here are the recommended sum insured by respective insurance companies.</small>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div><br>
  <a href="insurance/b">
    <button type="button" name="button" class="btn" style="width: 200px;">Back</button>
  </a><br><br>
</div>

@stop


@section('script')
<script type="text/javascript" src="{{ asset('js/insurance_script.js') }}"></script>
@endsection
