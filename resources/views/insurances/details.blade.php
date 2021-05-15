@extends('layouts.app')

@section('content')

    <div class="container container_secondary">
        <div class="content_secondary">
            <br>
            <ul class="nav nav-pills nav-justified" style="cursor:pointer !important;">
                <li class="detailstab active first"><a class="afirst">1. Your Details</a></li>
                <li class="addonstab second"><a>2. Add-Ons</a></li>
                <li class="finaldetailstab third"><a>3. Final Details</a></li>
                <li class="reviewtab last"><a class="alast">4. Review & Pay</a></li>
            </ul><br><br>

            <form class="insuranceForm" action="payment" method="post">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="ref_id" value="{{ rand(10000 ,99999).time() }}">

                <div class="tab-content">
                    <div id="details" class="tab-pane active">
                        <div class="row">
                            <div class="col-md-6 col-sm-12">
                                <span class="headerfont">Complete Your Details</span>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <center>
                                    <small>YOUR PREMIUM</small><br>
                                    <h4 style="color: #02D486"><b>RM {{number_format($insurance_providers[0]->amount, 2)}}</b></h4>
                                </center>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <center>
                                    <small>YOUR SUM ASSURED</small><br>
                                    <h4><b>RM {{number_format($insurance_providers[0]->sum_insured, 2)}}</b></h4>
                                </center>
                            </div>
                        </div><br>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel panel-primary panel-primary-insurance">
                                    <div class="panel-heading panel-heading-insurance">
                                        <span>Car Info</span>
                                        <span class="pull-right car_number">{{$car_details[0]->car_number}}</span>
                                        <input type="text" name="car_id" value="{{$car_details[0]->id}}" hidden>
                                    </div>
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-md-8 col-sm-12"><br>
                                                <span>Your Car:</span><br>
                                                <span class="headerfont">{{ $car_details[0]->brand." ".$car_details[0]->variant." ".$car_details[0]->style." ".$car_details[0]->transmission }}</span><br><br>
                                            </div>
                                            <div class="col-md-4 col-sm-12">
                                                <center>
                                                    <img src="{{url('/images/'.$car_details[0]->brand_logo)}}" alt="Brand Image" height="100px;">
                                                </center>
                                            </div>
                                        </div><hr>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <span>Car Specification (Select One) <span style="color: grey;"><i class="fas fa-info-circle"></i></span></span><br><br>
                                                <table class="table table-bordered insurance-table">
                                                    <thead>
                                                    <tr>
                                                        <td>Variant</td>
                                                        <td>Style</td>
                                                        <td>Transmission</td>
                                                        <td>CC</td>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td>{{$car_details[0]->variant}}</td>
                                                        <td>{{$car_details[0]->style}}</td>
                                                        <td>{{$car_details[0]->transmission}}</td>
                                                        <td>{{$car_details[0]->cc}}</td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div><hr>
                                        <div class="row">
                                            <div class="col-md-6 col-sm-12">
                                                <table style="width: 100%;">
                                                    <tr>
                                                        <td style="width: 40%;">
                                                            <span>Year of Make</span>
                                                        </td>
                                                        <td style="width: 60%;">
                                                            <input type="text" class="form-control" value="{{$car_details[0]->year}}" disabled>
                                                        </td>
                                                    </tr>
                                                </table><br>
                                                <table style="width: 100%;">
                                                    <tr>
                                                        <td style="width: 40%;">
                                                            <span>Seating Capacity</span>
                                                        </td>
                                                        <td style="width: 60%;">
                                                            <input type="text" class="form-control" value="{{$car_details[0]->seating_capacity}}" disabled>
                                                        </td>
                                                    </tr>
                                                </table><br>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <table style="width: 100%;">
                                                    <tr>
                                                        <td style="width: 40%;">
                                                            <span>Engine Number</span>
                                                        </td>
                                                        <td style="width: 60%;">
                                                            <input type="text" class="form-control" value="{{$car_details[0]->engine_number}}" disabled>
                                                        </td>
                                                    </tr>
                                                </table><br>
                                                <table style="width: 100%;">
                                                    <tr>
                                                        <td style="width: 40%;">
                                                            <span>Chasis Number</span>
                                                        </td>
                                                        <td style="width: 60%;">
                                                            <input type="text" class="form-control" value="{{$car_details[0]->chasis_number}}" disabled>
                                                        </td>
                                                    </tr>
                                                </table><br>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel panel-primary panel-primary-insurance">
                                    <div class="panel-heading panel-heading-insurance">
                                        <span>Sum Insured</span>

                                    </div>
                                    <div class="panel-body">
                                        <center>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <span>Click the <span style="color: grey;"><i class="fas fa-info-circle"></i></span> for more information on your sum insured</span>
                                                </div>
                                            </div><hr>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <small style="border-radius: 15px; border: 2px solid #3097D1; color: #3097D1; padding: 5px 10px;">RECOMMENDED</small><br><br>
                                                    <span style="font-size: 50px; font-weight: bold;">RM {{number_format($insurance_providers[0]->sum_insured)}}</span><br><br>
                                                    <small style="border-radius: 15px; background-color: #27D793; color: white; padding: 5px 10px;">AGREED VALUE</small>
                                                </div>
                                            </div><hr>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <small><b>What is agreed value?</b></small><br>
                                                    <small>In the event of <b>theft</b> or <b>total loss</b> claim, we will pay you the <b>full</b> amount as shown here although your car market value at the time of loss is lesser</small>
                                                </div>
                                            </div><br>
                                        </center>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel panel-primary panel-primary-insurance">
                                    <div class="panel-heading panel-heading-insurance">
                                        <span>Policyholder Details</span>
                                    </div>
                                    <div class="panel-body"><br>
                                        <div class="row">
                                            <div class="col-md-4 col-sm-12">
                                                Identification Number (NRIC)
                                            </div>
                                            <div class="col-md-8 col-sm-12">
                                                <input type="text" value="{{session()->get('insurance_data.ic_number')}}" class="form-control" disabled>
                                                <input type="hidden" value="{{session()->get('insurance_data.ic_number')}}" class="form-control" hidden name="ic_number">
                                            </div>
                                        </div><br>
                                        <div class="row">
                                            <div class="col-md-4 col-sm-12">
                                                Full Name (as per NRIC)
                                            </div>
                                            <div class="col-md-8 col-sm-12">
                                                <input type="text" value="{{session()->get('insurance_data.full_name')}}" class="form-control" disabled>
                                                <input type="hidden" value="{{session()->get('insurance_data.full_name')}}" class="form-control" hidden name="full_name">
                                            </div>
                                        </div><br>
                                        <div class="row">
                                            <div class="col-md-4 col-sm-12">
                                                Mobile Number (+6)
                                            </div>
                                            <div class="col-md-8 col-sm-12">
                                                <input type="text" value="{{session()->get('insurance_data.mobile')}}" class="form-control" disabled>
                                                <input type="hidden" value="{{session()->get('insurance_data.mobile')}}" class="form-control" hidden name="mobile">
                                            </div>
                                        </div><br>
                                        <div class="row">
                                            <div class="col-md-4 col-sm-12">
                                                Email Address
                                            </div>
                                            <div class="col-md-8 col-sm-12">
                                                <input type="text" value="{{session()->get('insurance_data.email')}}" class="form-control" disabled>
                                                <input type="hidden" value="{{session()->get('insurance_data.email')}}" class="form-control" hidden name="email">
                                            </div>
                                        </div><br>
                                        <div class="row">
                                            <div class="col-md-4 col-sm-12">
                                                Maritial Status
                                            </div>
                                            <div class="col-md-8 col-sm-12">
                                                <div class="btn-group" data-toggle="buttons" >
                                                    <label class="btn btn-custom <?php if(session()->get('insurance_data.maritial_status') == 'single') echo 'active'; ?>" style="margin-right: 20px; width: 140px">
                                                        <input type="radio" name="maritial_status" <?php if(session()->get('insurance_data.maritial_status') == 'single') echo 'checked'; ?> disabled> Single
                                                    </label>
                                                    <label class="btn btn-custom <?php if(session()->get('insurance_data.maritial_status') == 'married') echo 'active'; ?>" style="margin-right: 20px; width: 140px">
                                                        <input type="radio" name="maritial_status" <?php if(session()->get('insurance_data.maritial_status') == 'married') echo 'checked'; ?> disabled> Married
                                                    </label>
                                                    <label class="btn btn-custom <?php if(session()->get('insurance_data.maritial_status') == 'divorced') echo 'active'; ?>" style="margin-right: 20px; width: 140px">
                                                        <input type="radio" name="maritial_status" <?php if(session()->get('insurance_data.maritial_status') == 'divorced') echo 'checked'; ?> disabled> Divorced
                                                    </label>
                                                    <label class="btn btn-custom <?php if(session()->get('insurance_data.maritial_status') == 'widow') echo 'active'; ?>" style="width: 140px;">
                                                        <input type="radio" name="maritial_status" <?php if(session()->get('insurance_data.maritial_status') == 'widow') echo 'checked'; ?> disabled> Widow/ Widower
                                                    </label>
                                                </div>
                                                <input type="hidden" value="{{session()->get('insurance_data.maritial_status')}}" class="form-control" hidden name="maritial_status">
                                            </div>
                                        </div><br>
                                        <div class="row">
                                            <div class="col-md-4 col-sm-12">
                                                Number of accidents in the last 3 years?
                                            </div>
                                            <div class="col-md-8 col-sm-12">
                                                <div class="btn-group accidents_count" data-toggle="buttons">
                                                    <label class="btn btn-custom" style="margin-right: 20px; width: 150px;">
                                                        <input type="radio" name="accident" data-accident="0"> 0
                                                    </label>
                                                    <label class="btn btn-custom" style="margin-right: 20px; width: 150px;">
                                                        <input type="radio" name="accident" data-accident="1"> 1
                                                    </label>
                                                    <label class="btn btn-custom" style="margin-right: 20px; width: 150px;">
                                                        <input type="radio" name="accident" data-accident="2"> 2 or more
                                                    </label>
                                                </div><br>
                                                <input type="text" name="accidents" value="" hidden id="accidents">
                                                <small class="accidents_error" style="color: red; display: none;">Please select an option from number of accidents field</small>
                                            </div>
                                        </div><br>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel panel-primary panel-primary-insurance">
                                    <div class="panel-heading panel-heading-insurance">
                                        <span>No Claims Discount % (NCD)</span>
                                    </div>
                                    <div class="panel-body"><br>
                                        <div class="row">
                                            <div class="col-md-4 col-sm-12">
                                                Next NCD Rate
                                            </div>
                                            <div class="col-md-8 col-sm-12">
                                                <div class="progress">
                                                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="0"
                                                         aria-valuemin="0" aria-valuemax="100" style="width:0%">
                                                        0%
                                                    </div>
                                                </div>
                                                <span style="position: relative; top: -20px; width: 100%; font-weight: bold; font-size: 10px; width:100%;">
                      <span style="width:30%; display:inline-block; float: left">0%</span>
                      <span style="width:30%; display:inline-block; text-align:center;">EFFECTIVE DATE: {{date('d-m-Y')}}</span>
                      <span style="width:30%; display:inline-block; float: right; text-align:right;">55%</span>
                    </span>
                                            </div>
                                        </div><br>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div style="text-align: center; padding: 10px; background-color: #ECF2FF; font-size: 12px; border-radius: 5px;">
                                                    <span>Current NCD entitlement not from inception date. Please submit documentations for our further actions.</span>
                                                </div>
                                            </div>
                                        </div><hr>
                                        <div class="row">
                                            <div class="col-md-4 col-sm-12">
                                                Current NCD Rate
                                            </div>
                                            <div class="col-md-8 col-sm-12">
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" aria-valuenow="{{$car_details[0]->no_claim}}"
                                                         aria-valuemin="0" aria-valuemax="100" style="width:{{$car_details[0]->no_claim*1.8}}%; background-color: #FE6055;">
                                                        {{$car_details[0]->no_claim}}%
                                                    </div>
                                                </div>
                                                <span style="position: relative; top: -20px; width: 100%; font-weight: bold; font-size: 10px; width:100%;">
                      <span style="width:30%; display:inline-block; float: left">0%</span>
                      <span style="width:30%; display:inline-block; text-align:center;">EFFECTIVE DATE: {{date('d-m-Y')}}</span>
                      <span style="width:30%; display:inline-block; float: right; text-align:right;">55%</span>
                    </span>
                                            </div>
                                        </div><br>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel panel-primary panel-primary-insurance">
                                    <div class="panel-heading panel-heading-insurance">
                                        <span>Period of Insurance</span>

                                    </div>
                                    <div class="panel-body"><br>
                                        <div class="row">
                                            <div class="col-md-2 col-sm-12">
                                                Start Date
                                            </div>
                                            <div class="col-md-4 col-sm-12">
                                                <input type="text" value="{{date('d-m-Y')}}" class="form-control" disabled>
                                                <input type="hidden" value="{{date('Y-m-d')}}" class="form-control" name="start_date" hidden>
                                            </div>
                                            <div class="col-md-2 col-sm-12">
                                                End Date
                                            </div>
                                            <div class="col-md-4 col-sm-12">
                                                <input type="text" value="{{date('d-m-Y', strtotime('+364 days'))}}" class="form-control" disabled>
                                                <input type="hidden" value="{{date('Y-m-d', strtotime('+364 days'))}}" class="form-control" name="end_date" hidden>
                                            </div>
                                        </div><br>
                                    </div>
                                </div>
                            </div>
                        </div><br>
                        <div class="row">
                            <div class="col-md-12" style="text-align: right">
                                <button type="button" data-toggle="pill" href="#addons" id="next2" hidden></button>
                                <button type="button" class="btn btn-primary" onclick="changetab(2)" style="width: 250px">Next</button>
                            </div>
                        </div>
                    </div>

                    <!-- Addons Tab  -->
                    <div id="addons" class="tab-pane">
                        <div class="row">
                            <div class="col-md-8 col-sm-12">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="panel panel-primary panel-primary-insurance">
                                            <div class="panel-heading panel-heading-insurance">
                                                <span>Period of Insurance</span>

                                            </div>
                                            <div class="panel-body">
                                                <span style="color: #FE38C0"><i class="fab fa-gratipay fa-2x"></i></span>&nbsp;
                                                <span>   All Drivers</span>
                                                <span class="pull-right" style="color: grey"><i class="fas fa-info-circle fa-2x"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="panel panel-primary panel-primary-insurance">
                                            <div class="panel-heading panel-heading-insurance">
                                                <span>Optional Add-Ons</span>

                                            </div>
                                            <div class="panel-body" style="padding: 0 0 20px 0;">
                                                <table class="table table-bordered insurance-table addon-table">
                                                    <thead>
                                                    <tr>
                                                        <td style="padding: 15px !important;">Description <small style="padding: 5px 10px; background-color: #FE5C58; color: white; border-radius: 15px;">Not covered unless selected</small></td>
                                                        <td style="padding: 15px !important; text-align: center;">Premium</td>
                                                        <td style="padding: 15px !important; text-align: center;">Select</td>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach($addons as $addon)
                                                        <tr>
                                                            <td>{{$addon->description}}<span class="pull-right" style="color: grey;"><i class="fas fa-info-circle"></i></span></td>
                                                            <td style="text-align: center;">RM {{number_format($addon->amount, 2)}}</td>
                                                            <td style="text-align: center;"><input type="radio" name="addon_id_{{$addon->id}}" value="{{$addon->id}}" data-amount="{{$addon->amount}}"></td>
                                                        </tr>
                                                    @endforeach
                                                    </tbody>
                                                    <input type="hidden" name="addon_id" value="" id="addon_id">
                                                </table>
                                                &nbsp;<small>For more details, Please refer to our Product Disclosure Sheet and Policy Wording</small><br>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="panel panel-primary panel-primary-insurance">
                                            <div class="panel-heading panel-heading-insurance">
                                                <span>{{$insurance_providers[0]->name}}</span>
                                                <input type="text" name="provider_id" value="{{$insurance_providers[0]->id}}" hidden>

                                            </div>
                                            <div class="panel-body">
                                                <span style="color: #206799; font-weight: bold">Your Premium</span><hr>
                                                <small>Sum Insured</small><br>
                                                <span>RM {{number_format($insurance_providers[0]->sum_insured, 2)}}</span><br><br>
                                                <small>Basic Premium</small><br>
                                                <span>RM {{number_format($insurance_providers[0]->amount, 2)}}</span><br><br>
                                                <small>Subtotal</small><br>
                                                <span>RM {{number_format($insurance_providers[0]->amount, 2)}}</span><hr>
                                                <span style="color: #206799; font-weight: bold">Optional Add-Ons</span><hr>
                                                <small>Subtotal</small><br>
                                                <span>RM <span id="addOnTotal">{{number_format(0, 2)}}</span></span><hr>
                                                <small>Total Payable</small><br>
                                                <span class="headerfont">RM <span id="totalPayable">{{number_format($insurance_providers[0]->amount, 2)}}</span></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><br>
                        <div class="row">
                            <div class="col-md-12" style="display: flex; justify-content: space-between;">
                                <button type="button" data-toggle="pill" href="#details" id="next1" hidden></button>
                                <button type="button" class="btn btn-primary" onclick="changetab(1)" style="width: 250px">Back</button>
                                <button type="button" data-toggle="pill" href="#finalDetails" id="next3" hidden></button>
                                <button type="button" class="btn btn-primary" onclick="changetab(3)" style="width: 250px">Next</button>
                            </div>
                        </div>
                    </div>



                    <div id="finalDetails" class="tab-pane">
                        <div class="row">
                            <div class="col-md-6 col-sm-12">
                                <span class="headerfont">Final Details</span><br>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <center>
                                    <small>TOTAL PAYABLE</small><br>
                                    <h4 style="color: #02D486"><b>RM <span id="totalPayableDetails">{{number_format($insurance_providers[0]->amount, 2)}}</span></b></h4>
                                </center>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <center>
                                    <small>YOUR SUM ASSURED</small><br>
                                    <h4><b>RM {{number_format($insurance_providers[0]->sum_insured, 2)}}</b></h4>
                                </center>
                            </div>
                        </div><br>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel panel-primary panel-primary-insurance">
                                    <div class="panel-heading panel-heading-insurance">
                                        <span>Your Correspondance </span>

                                    </div>
                                    <div class="panel-body addressField"><br>
                                        <div class="row">
                                            <div class="col-md-4 col-sm-12">
                                                <span>Line 1</span>
                                            </div>
                                            <div class="col-md-8 col-sm-12">
                                                <input type="text" class="form-control addressFields" required id="address1" name="address1" value="">
                                            </div>
                                        </div><br>
                                        <div class="row">
                                            <div class="col-md-4 col-sm-12">
                                                <span>Line 2</span>
                                            </div>
                                            <div class="col-md-8 col-sm-12">
                                                <input type="text" class="form-control addressFields" name="address2" value="">
                                            </div>
                                        </div><br>
                                        <div class="row">
                                            <div class="col-md-4 col-sm-12">
                                                <span>Line 3</span>
                                            </div>
                                            <div class="col-md-8 col-sm-12">
                                                <input type="text" class="form-control addressFields" name="address3" value="">
                                            </div>
                                        </div><br>
                                        <div class="row">
                                            <div class="col-md-4 col-sm-12">
                                                <span>City</span>
                                            </div>
                                            <div class="col-md-8 col-sm-12">
                                                <input type="text" class="form-control addressFields" required id="city" name="city" value="">
                                            </div>
                                        </div><br>
                                        <div class="row">
                                            <div class="col-md-4 col-sm-12">
                                                <span>State</span>
                                            </div>
                                            <div class="col-md-8 col-sm-12">
                                                <input type="text" class="form-control addressFields" required id="state" name="state" value="">
                                            </div>
                                        </div><br>
                                        <div class="row">
                                            <div class="col-md-4 col-sm-12">
                                                <span>Postcode</span>
                                            </div>
                                            <div class="col-md-8 col-sm-12">
                                                <input type="number" value="{{session()->get('insurance_data.postcode')}}" class="form-control addressFields"  name="postcode">
                                            </div>
                                        </div><br>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel panel-primary panel-primary-insurance">
                                    <div class="panel-heading panel-heading-insurance">
                                        <span>Car Financing </span>

                                    </div>
                                    <div class="panel-body"><br>
                                        <div class="row">
                                            <div class="col-md-4 col-sm-12">
                                                <span>Is your car still under hire purchase?</span>
                                            </div>
                                            <div class="col-md-8 col-sm-12">
                                                <div class="btn-group hire_purchase_select" data-toggle="buttons" style="width: 100%">
                                                    <label class="btn" style="width: 40%; margin: 0 5%; border: 1px solid grey; border-radius: 5px;">
                                                        <input type="radio" data-hire="YES" name="hire"> YES
                                                    </label>
                                                    <label class="btn"  style="width: 40%; margin: 0 5%; border: 1px solid grey; border-radius: 5px;">
                                                        <input type="radio" data-hire="NO" name="hire"> NO
                                                    </label>
                                                </div><br><br>
                                                <input type="text" name="hire_purchase" value="" hidden id="hire_purchase">
                                                <center>
                                                    <small class="hire_purchase_error" style="color: red; display: none;">Please select an option</small>
                                                </center>
                                            </div>
                                        </div><br>
                                    </div>
                                </div>
                            </div>
                        </div><br>
                        <div class="row">
                            <div class="col-md-12" style="display: flex; justify-content: space-between;">
                                <button type="button" data-toggle="pill" href="#addons" id="next2" hidden></button>
                                <button type="button" class="btn btn-primary" onclick="changetab(2)" style="width: 250px">Back</button>
                                <button type="button" data-toggle="pill" href="#review" id="next4" hidden></button>
                                <button type="button" class="btn btn-primary" onclick="changetab(4)" style="width: 250px">Next</button>
                            </div>
                        </div>
                    </div>



                    <div id="review" class="tab-pane"><br>
                        <center>
                            <span class="headerfont">Complete Your Details</span><br><br>
                            <span>Please confirm that the information below is correct before making payment.</span><br>
                            <span>For your policy to be valid, all of your details need to be correct.</span>
                        </center><br><br>
                        <div class="row">
                            <div class="col-md-8 col-sm-12">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="panel panel-primary panel-primary-insurance">
                                            <div class="panel-heading panel-heading-insurance">
                                                <span>Policyholder Details</span>
                                            </div>
                                            <div class="panel-body" style="padding: 10px 40px;"><br>
                                                <small>Full Name:</small><br>
                                                <span>{{session()->get('insurance_data.full_name')}}</span><hr>
                                                <small>Email:</small><br>
                                                <span>{{session()->get('insurance_data.email')}}</span><hr>
                                                <small>NRIC:</small><br>
                                                <span>{{session()->get('insurance_data.ic_number')}}</span><hr>
                                                <small>Mobile Number:</small><br>
                                                <span>{{session()->get('insurance_data.mobile')}}</span><br><br>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="panel panel-primary panel-primary-insurance">
                                            <div class="panel-heading panel-heading-insurance">
                                                <span>Car Details</span>
                                            </div>
                                            <div class="panel-body" style="padding: 10px 40px;">
                                                <center>
                                                    <img src="{{url('/images/'.$car_details[0]->brand_logo)}}" alt="Brand Image" height="150px;"><br><br>
                                                    <span>Your Car</span><br>
                                                    <span class="headerfont">{{ $car_details[0]->brand." ".$car_details[0]->variant." ".$car_details[0]->style." ".$car_details[0]->transmission }}</span><br><br>
                                                </center>
                                                <div class="row">
                                                    <div class="col-md-6 col-sm-12">
                                                        <small>Car Registration No.</small><br>
                                                        <span>{{$car_details[0]->car_number}}</span><br><br>
                                                        <small>Seating Capacity</small><br>
                                                        <span>{{$car_details[0]->seating_capacity}}</span><br><br>
                                                        <small>Engine No.</small><br>
                                                        <span>{{$car_details[0]->engine_number}}</span><br><br>
                                                    </div>
                                                    <div class="col-md-6 col-sm-12">
                                                        <small>Year of Make</small><br>
                                                        <span>{{$car_details[0]->year}}</span><br><br>
                                                        <small>C.C.</small><br>
                                                        <span>{{$car_details[0]->cc}}</span><br><br>
                                                        <small>Chasis No.</small><br>
                                                        <span>{{$car_details[0]->chasis_number}}</span><br><br>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="panel panel-primary panel-primary-insurance">
                                            <div class="panel-heading panel-heading-insurance">
                                                <span>Policy Details</span>
                                            </div>
                                            <div class="panel-body" style="padding: 10px 40px;"><br>
                                                <div class="row">
                                                    <div class="col-md-6 col-sm-12">
                                                        <small>Policy Start Date</small><br>
                                                        <span>{{date('d-m-Y')}}</span><br><br>
                                                    </div>
                                                    <div class="col-md-6 col-sm-12">
                                                        <small>Policy End Date</small><br>
                                                        <span>{{date('d-m-Y', strtotime('+364 days'))}}</span><br><br>
                                                    </div>
                                                </div>
                                                <small>NCD Rate</small><br>
                                                <span>0.00%</span><hr>
                                                <small>Correspondance Address</small><br>
                                                <span id="correspondanceAddress"></span><br><br>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="panel panel-primary panel-primary-insurance">
                                            <div class="panel-heading panel-heading-insurance">
                                                <span>Coverage Details</span>
                                            </div>
                                            <div class="panel-body" style="padding: 10px 40px;"><br>
                                                <div class="row">
                                                    <div class="col-md-6 col-sm-12">
                                                        <small>Sum Insured</small><br>
                                                        <span>RM {{number_format($insurance_providers[0]->sum_insured, 2)}}</span><br><br>
                                                    </div>
                                                    <div class="col-md-6 col-sm-12">
                                                        <small>Optional Add-Ons</small><br>
                                                        <span>RM <span id="addOnTotal1">0.0</span></span><br><br>
                                                    </div>
                                                </div>
                                                <small>Type of Cover</small><br>
                                                <span>Comprehensive</span><br><br>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="panel panel-primary panel-primary-insurance">
                                            <div class="panel-heading panel-heading-insurance">
                                                <span>Declaration</span>
                                            </div>
                                            <div class="panel-body" style="padding: 10px 40px;"><br>
                                                <small><b>[I/We] declare the following statements are true:</b></small><br><br>
                                                <small>
                                                    <ol>
                                                        <li>
                                                            [I/We] understand that it is my/our duty to take resonable care not to make a misrepresentaion in answering the questions in this Proposal Form and [I/We] hereby declare that [I/We] have fully answered the questions above.
                                                        </li>
                                                        <li>
                                                            [I/We] have read, understand and agree to be bound by all the terms and conditions as set out in Lonpac's Product Disclosure Sheet and Privacy Policy.
                                                        </li>
                                                    </ol>
                                                </small><hr>

                                                <small>
                                                    [I/We] agree and allow Lonpac to collect and use my/our Personal Data for the pusrpose of providing marketing and promotional information relating to any existing or other insurance product and services.
                                                </small><br><br>

                                                <input type="checkbox" name="" value="">
                                                <small><b>
                                                        No, please do not send [me/us] any marketing and promotional information relating to any existing or other insurance product and services. <br>
                                                        (Please tick if you do not wish to receive any marketing and promotional information)
                                                    </b></small><br><br>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="panel panel-primary panel-primary-insurance">
                                            <div class="panel-heading panel-heading-insurance">
                                                <span>{{$insurance_providers[0]->name}}</span>

                                            </div>
                                            <div class="panel-body">
                                                <span style="color: #206799; font-weight: bold">Your Premium</span><hr>
                                                <small>Sum Insured</small><br>
                                                <span>RM {{number_format($insurance_providers[0]->sum_insured, 2)}}</span><br><br>
                                                <small>Basic Premium</small><br>
                                                <span>RM {{number_format($insurance_providers[0]->amount, 2)}}</span><br><br>
                                                <small>Subtotal</small><br>
                                                <span>RM {{number_format($insurance_providers[0]->amount, 2)}}</span><hr>
                                                <span style="color: #206799; font-weight: bold">Optional Add-Ons</span><hr>
                                                <small>Subtotal</small><br>
                                                <span>RM <span id="addOnTotalFinal">{{number_format(0, 2)}}</span></span><hr>
                                                <small>Total Payable</small><br>
                                                <span class="headerfont">RM <span id="totalPayableFinal">{{number_format($insurance_providers[0]->amount, 2)}}</span></span>
                                                <input type="text" name="final_amount" value="{{number_format($insurance_providers[0]->amount, 2)}}" id="amount" hidden>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><br>
                        <div class="row">
                            <div class="col-md-12" style="display: flex; justify-content: space-between;">
                                <button type="button" data-toggle="pill" href="#finalDetails" id="next3" hidden></button>
                                <button type="button" class="btn btn-primary" onclick="changetab(3)" style="width: 250px">Back</button>
                                <button type="submit" class="btn btn-primary" style="width: 250px">Confirm & Pay</button>
                            </div>
                        </div>
                    </div>
                </div>

            </form>

        </div>
    </div>

@stop


@section('script')
    <script type="text/javascript" src="{{ asset('js/insurance_script.js') }}"></script>
@endsection
