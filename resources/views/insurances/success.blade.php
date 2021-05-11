@extends('layouts.app')

@section('content')
<div class="container container_secondary">
  <div class="content_secondary">
    <center><br><br><br>
      <span style="color: #61BB6B">
        <i class="fas fa-check-circle fa-4x"></i><br>
        <h2><b>PAYMENT SUCCESSFUL</b></h2>
      </span><br><br>
      <table>
        <tr>
          <td style="width: 50%">Payment Type:</td>
          <td style="width: 50%">Card</td>
        </tr>
        <tr>
          <td>Ref ID:</td>
          <td>{{$ref_id}}</td>
        </tr>
        <tr>
          <td>Mobile No.:</td>
          <td>{{$mobile}}</td>
        </tr>
        <tr>
          <td>Email</td>
          <td>{{$email}}</td>
        </tr>
        <tr style="height: 15px;"/>
        <tr style="font-weight: bold; color: #206799">
          <td>Amount Paid:</td>
          <td>RM {{$amount}}</td>
        </tr>
        <tr style="height: 25px;"/>
        <tr>
          <td>
            <a href="{{route('home')}}">
              <button type="button" name="button" class="btn btn-primary">
                RETURN TO HOMEPAGE
              </button>
            </a>
          </td>
          <td>
            <a href="{{route('purchases')}}">
              <button type="button" name="button" class="btn btn-primary form-control">
                YOUR PURCHASE
              </button>
            </a>
          </td>
        </tr>
      </table>
    </center><br><br><br>
  </div>
</div>
@endsection
