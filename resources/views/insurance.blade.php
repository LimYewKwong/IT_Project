@extends('layouts.app')

@section('content')
<div class="container insuranceContainer">
  <div class="row">
    <div class="col-md-12 col-sm-12">
      <div class="insuranceDetailContainer">
        <h2>Form Validation</h2>
        <p>In this example, we use <code>.was-validated</code> to indicate what's missing before submitting the form:</p>
        <form action="{{ route('register') }}" class="was-validated">
          <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
            <label for="name">Car Owner Name</label>
            <input type="text" class="form-control" id="name" name="name">
            @if ($errors->has('name'))
            <span class="help-block">
              <strong>{{ $errors->first('name') }}</strong>
            </span>
            @endif
          </div>
          <div class="form-group">
              <button type="submit" class="btn btn-primary">
                Register
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
