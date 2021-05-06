@extends('layouts.app')

@section('content')
<div class="container container_secondary">
  <div class="content_secondary">
      <div class="Font2">
          <p>  Compare and Purchase the best car insurance</p>
      </div>

    <form action="{{ route('insurance') }}" class="was-validated" method="post">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <div class="form-group{{ $errors->has('full_name') ? ' has-error' : '' }}">
        <label for="full_name">Car Owner Name</label>
        <input type="text" class="form-control" id="full_name" placeholder="Enter Full Name" name="full_name" value="{{ old('full_name', session()->get('insurance_data.full_name')) }}">
        @if ($errors->has('full_name'))
        <span class="help-block">
          <strong>{{ $errors->first('full_name') }}</strong>
        </span>
        @endif
      </div>

      <div class="form-group{{ $errors->has('car_number') ? ' has-error' : '' }}">
        <label for="car_number">Car Number</label>
        <input type="text" class="form-control" id="car_number" placeholder="Enter Registered Car Number "name="car_number" value="{{ old('car_number', session()->get('insurance_data.car_number')) }}">
        @if ($errors->has('car_number'))
        <span class="help-block">
          <strong>{{ $errors->first('car_number') }}</strong>
        </span>
        @endif
      </div>

      <div class="form-group{{ $errors->has('ic_number') ? ' has-error' : '' }}">
        <label for="ic_number">Car Owner IC Number</label>
        <input type="text" class="form-control" id="ic_number" placeholder="Enter Your NID " name="ic_number" value="{{ old('ic_number', session()->get('insurance_data.ic_number')) }}">
        @if ($errors->has('ic_number'))
        <span class="help-block">
          <strong>{{ $errors->first('ic_number') }}</strong>
        </span>
        @endif
      </div>

      <div class="form-group{{ $errors->has('postcode') ? ' has-error' : '' }}">
        <label for="postcode">Residential Postcode</label>
        <input type="number" class="form-control" id="postcode" placeholder="Enter your Postcode" name="postcode" value="{{ old('postcode', session()->get('insurance_data.postcode')) }}">
        @if ($errors->has('postcode'))
        <span class="help-block">
          <strong>{{ $errors->first('postcode') }}</strong>
        </span>
        @endif
      </div>

      <div class="form-group{{ $errors->has('mobile') ? ' has-error' : '' }}">
        <label for="mobile">Mobile Phone No.</label>
        <input type="text" class="form-control" id="mobile" placeholder="Enter Mobile Number" name="mobile" value="{{ old('mobile', session()->get('insurance_data.mobile')) }}">
        @if ($errors->has('mobile'))
        <span class="help-block">
          <strong>{{ $errors->first('mobile') }}</strong>
        </span>
        @endif
      </div>

      <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
        <label for="email">Email</label>
        <input type="text" class="form-control" id="email" placeholder="Enter Email Address" name="email" value="{{ old('email', session()->get('insurance_data.email')) }}">
        @if ($errors->has('email'))
        <span class="help-block">
          <strong>{{ $errors->first('email') }}</strong>
        </span>
        @endif
      </div>

      <div class="form-group{{ $errors->has('maritial_status') ? ' has-error' : '' }}">
        <label for="maritial_status">Marital Status</label>
        <div class="form-group">
          <label class="radio-inline">
            <input type="radio" id="single" name="maritial_status" value="single" <?php if(old('maritial_status', session()->get('insurance_data.maritial_status')) == 'single') echo 'checked'; ?>>
            Single
          </label>
          <label class="radio-inline">
            <input type="radio" id="married" name="maritial_status" value="married" <?php if(old('maritial_status', session()->get('insurance_data.maritial_status')) == 'married') echo 'checked'; ?>>
            Married
          </label>
          <label class="radio-inline">
            <input type="radio" id="divorced" name="maritial_status" value="divorced" <?php if(old('maritial_status', session()->get('insurance_data.maritial_status')) == 'divorced') echo 'checked'; ?>>
            Divorced
          </label>
          <label class="radio-inline">
            <input type="radio" id="widow" name="maritial_status" value="widow" <?php if(old('maritial_status', session()->get('insurance_data.maritial_status')) == 'widow') echo 'checked'; ?>>
            Widow/ Widower
          </label>
        </div>
        @if ($errors->has('maritial_status'))
        <span class="help-block">
          <strong>{{ $errors->first('maritial_status') }}</strong>
        </span>
        @endif
      </div><br>


      <div class="form-group{{ $errors->has('data_policy') ? ' has-error' : '' }}">
        <input type="checkbox" name="data_policy" id="data_policy" <?php if(old('maritial_status', session()->get('insurance_data.data_policy') == 'on')) echo 'checked'; ?>>
        By clicking this button, you have read and agreed to our Personal Data Policy
        @if ($errors->has('data_policy'))
        <span class="help-block">
          <strong>{{ $errors->first('data_policy') }}</strong>
        </span>
        @endif
      </div><br>

      <h4>We Accept:</h4>
      <img src="{{url('/images/visa.png')}}" alt="Visa Image" height="30px;">
      <img src="{{url('/images/mastercard.png')}}" alt="Mastercard Image" height="30px;">
      <br><br><br>

      <div class="form-group float-right">
        <button type="submit" class="btn btn-primary">
          Proceed
        </button>
      </div>
    </div>
  </form>
</div>
</div>
@endsection
