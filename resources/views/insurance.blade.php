@extends('layouts.app')

@section('content')
<div class="container insuranceContainer">
  <div class="row">
    <div class="col-md-12 col-sm-12">
      <div class="insuranceDetailContainer">
        <h2>Compare and Purchase the best car insurance</h2>

        {!! Form::open(['action' => 'InsuranceController@validation', 'method' => 'post']) !!}
          <div class="form-group {{ $errors->has('CarOwnerName') ? 'has-error' : '' }}">
            {{Form::label('CarOwnerName', 'Car Owner Name')}}
            {{Form::text('CarOwnerName', '', ['id' => 'CarOwnerName', 'class' => 'form-control', 'placeholder' => 'John Bid'])}}
            <span class="text-danger">{{ $errors->first('CarOwnerName') }}</span>
          </div>
          <div class="form-group {{ $errors->has('CarPlateNumber') ? 'has-error' : '' }}">
            {{Form::label('CarPlateNumber', 'Car Plate Number')}}
            {{Form::text('CarPlateNumber', '', ['class' => 'form-control', 'placeholder' => 'WC111R'])}}
            <span class="text-danger">{{ $errors->first('CarPlateNumber') }}</span>
          </div>
          <div class="form-group {{ $errors->has('CarOwnerICNumber') ? 'has-error' : '' }}">
            {{Form::label('CarOwnerICNumber', 'Car Owner IC Number')}}
            {{Form::text('CarOwnerICNumber', '', ['class' => 'form-control', 'placeholder' => '041434135413'])}}
            <span class="text-danger">{{ $errors->first('CarOwnerICNumber') }}</span>
          </div>
          <div class="form-group {{ $errors->has('ResidentialPostcode') ? 'has-error' : '' }}">
            {{Form::label('ResidentialPostcode', 'Residential Postcode')}}
            {{Form::text('ResidentialPostcode', '', ['class' => 'form-control', 'placeholder' => '93350'])}}
            <span class="text-danger">{{ $errors->first('ResidentialPostcode') }}</span>
          </div>
          <div class="form-group {{ $errors->has('MobilePhoneNo') ? 'has-error' : '' }}">
            {{Form::label('MobilePhoneNo', 'Mobile Phone No')}}
            {{Form::text('MobilePhoneNo', '', ['class' => 'form-control', 'placeholder' => '0123456789'])}}
            <span class="text-danger">{{ $errors->first('MobilePhoneNo') }}</span>
          </div>
          <div class="form-group {{ $errors->has('Email') ? 'has-error' : '' }}">
            {{Form::label('Email', 'Email')}}
            {{Form::text('Email', '', ['class' => 'form-control', 'placeholder' => 'abc@gmail.com'])}}
            <span class="text-danger">{{ $errors->first('Email') }}</span>
          </div>
          <div class="form-group {{ $errors->has('MaritalStatus') ? 'has-error' : '' }}">
            {{Form::label('MaritalStatus', 'Marital Status')}}<br>
            {{Form::radio('MaritalStatus', 'Single')}}
            {{Form::label('Single', 'Single')}}<br>
            {{Form::radio('MaritalStatus', 'Married')}}
            {{Form::label('Married', 'Married')}}<br>
            <span class="text-danger">{{ $errors->first('MaritalStatus') }}</span>
          </div>
          {{Form::submit('Proceed', ['class' => 'btn btn-primary'])}}
        {!! Form::close() !!}

      </div>
    </div>
  </div>
</div>
@endsection