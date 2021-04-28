@extends('layouts.app')

@section('content')
    <div class="container pagesBackground">
        {{-- The top part show which page the user at --}}
        <div class="row col-sm-3 blueContainer" style="margin-left:auto; margin-right:auto; text-align:center; margin-top: 20px;">Your Details</div>
        <div class="row col-sm-3 whiteContainer" style="margin-left:auto; margin-right:auto; text-align:center; margin-top: 20px;">Add-Ons</div>
        <div class="row col-sm-3 whiteContainer" style="margin-left:auto; margin-right:auto; text-align:center; margin-top: 20px;">Final Details</div>
        <div class="row col-sm-3 whiteContainer" style="margin-left:auto; margin-right:auto; text-align:center; margin-top: 20px;">Review & Pay</div>

        {{-- The part that show summary details of Insurance Premium and Total Car Insured  --}}
        <div class="row">
            <div class="col-md-12 col-sm-12 whiteContainer" style="margin-top: 20px;">
                <div class="completeYourDetails">
                    <label><small>Your Premium</small></label>
                    <label style="margin-left: 50px"><small>Your Sum Insured</small></label>
                    <br>
                    <span style="color:#206799; font-weight:bold; font-size:large;">RM600</span>
                    <span style="color:#206799; font-weight:bold; font-size:large; margin-left: 70px">RM24,000</span>
                </div>
                <h4 style="font-weight: bold">Complete your details</h4>
            </div>
        </div>

        {{-- The part that show the car details and get the input from the user --}}
        <div class="row">
            <div class="col blueContainer" style="margin-top: 20px; font-weight: bold;">Car info</div>
            <div class="col whiteContainer">
                <img src="{{ asset('images/perodua_icon.webp') }}" alt="CarLogo" style="position: absolute; right:450px; max-width:100px;">
                <label>Your Car:</label>
                <p>Myvi</p>

                <br>
                <label>Car Specification (Select One)</label>
                <div class="card">
                    <table class="card-table table">
                        <tr>
                            <th>Variant</th>
                            <th>Style</th>
                            <th>Transmission</th>
                            <th>CC</th>
                            <th></th>
                        </tr>
                        <tr>
                            <td>SXI PREMIUM</td>
                            <td>4D Hatchback|-</td>
                            <td>5 SP Manual</td>
                            <td>1298</td>
                            <td><input type="radio"></td>
                        </tr>
                    </table>
                </div>

                <br>
                <div class="row">
                    <div class="col-sm-6">
                        <label style="margin-top: 6px">Year of Make</label>
                        <input type="text" style="display: inline-block; float:right; padding: 8px 20px; margin-bottom:10px;" disabled>
                    </div>
                    <div class="col-sm-6">
                        <label style="margin-top: 6px">Engine Number</label>
                        <input type="text" style="display: inline-block; float:right; padding: 8px 20px; margin-bottom:10px;" disabled>
                    </div>
                    <div class="col-sm-6">
                        <label style="margin-top: 6px">Seating Capacity</label>
                        <input type="text" style="display: inline-block; float:right; padding: 8px 20px; margin-bottom:10px;" disabled>
                    </div>
                    <div class="col-sm-6">
                        <label style="margin-top: 6px">Chasis Number</label>
                        <input type="text" style="display: inline-block; float:right; padding: 8px 20px; margin-bottom:10px;" disabled>
                    </div>
                </div>
            </div>
        </div>

        {{-- Provide the Sum Insured detail --}}
        <div class="row">
            <div class="col blueContainer" style="margin-top: 20px; font-weight: bold;">Sum Insured</div>
            <div class="col whiteContainer" style="text-align: center;">
                <span class="badge" >RECOMMENDED</span>
                <h1>RM24,000</h1>
                <span class="badge">AGREED VALUE</span>
                <hr>
                <p><strong>What is Agreed Value?</strong></p>
                <p>In the event of <strong>theft</strong> or <strong>total loss</strong> claim, we will pay you the full amount as shown here although 
                    your car market value at the time of loss is lesser.</p>
            </div>
        </div>

        {{-- The part where request user to key in their personal details --}}
        <div class="row">
            <div class="col blueContainer" style="margin-top: 20px; font-weight: bold;">Policyholder Details</div>
            <div class="col whiteContainer">
                <form action="" class="form-horizontal">
                    <div class="form-group">
                        <label for="NRIC" class="col-sm-3">Identification Number (NRIC)</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="FullName" class="col-sm-3">Full Name (as per NRIC)</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="MobileNumber" class="col-sm-3">Mobile Number (+6)</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="EmailAddress" class="col-sm-3">Email Address</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="MaritalStatus"  class="col-sm-3">Marital Status</label>
                        <div class="col-sm-9">
                            <span style="margin-right: 20px">
                                <input type="radio" name="MaritalStatus" value="single">
                                <label for="single">Single</label>
                            </span>
                            <span style="margin-right: 20px">
                                <input type="radio" name="MaritalStatus" value="married">
                                <label for="married">Married</label>
                            </span>
                            <span style="margin-right: 20px">
                                <input type="radio" name="MaritalStatus" value="divorced">
                                <label for="married">Divorced</label>
                            </span>
                            <span>
                                <input type="radio" name="MaritalStatus" value="widoworwidower">
                                <label for="married">Widow/Widower</label>
                            </span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="AccidentNumberInThreeYear" class="col-sm-3">Number of accidents in the last 3 years?</label>
                        <div class="col-sm-9">
                            <span style="margin-right: 20px">
                                <input type="radio" name="AccidentNumberInThreeYear" value="zero">
                                <label for="zero">0</label>
                            </span>
                            <span style="margin-right: 20px">
                                <input type="radio" name="AccidentNumberInThreeYear" value="one">
                                <label for="one">1</label>
                            </span>
                            <span>
                                <input type="radio" name="AccidentNumberInThreeYear" value="twoormore">
                                <label for="twoormore">2 or more</label>
                            </span>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        {{-- This part shows the details of the NCD --}}
        <div class="row">
            <div class="col blueContainer" style="margin-top: 20px; font-weight: bold;">No Claims Discount% (NCD)</div>
            <div class="col whiteContainer">
                <label>Next NCD Rate</label> 
                <div class=" progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="0"
                    aria-valuemin="0" aria-valuemax="55" style="width:5%">
                        <span>0%</span>
                    </div>
                </div>
                <span><small>0%</small></span>
                <span style="float: right"><small>55%</small></span>
                <div style="text-align: center"><small>Effective Date: 09/03/2021</small></div>

                <div class="card" style="text-align: center">
                    <span>Current NCD entitlement not from inception date. Please submit documentations for our futher action.</span>
                </div>
                <hr>
                
                <label>Current NCD Rate</label>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="70"
                    aria-valuemin="0" aria-valuemax="100" style="width:50%">
                        <span>25.00%</span>
                    </div>
               </div>
               <span><small>0%</small></span>
               <span style="float: right"><small>55%</small></span>
               <div style="text-align: center"><small>Effective Date: 09/03/2022</small></div>

            </div>
        </div>

        {{-- This part shows the period of the insurance, start date and end date --}}
        <div class="row">
            <div class="col blueContainer" style="margin-top: 20px; font-weight: bold;">Period of Insurance</div>
            <div class="col whiteContainer" style="text-align: center;">
                <form action="" class="form-horizontal">
                    <div class="form-group">
                        <div class="col-sm-6">
                            <label for="endDate" style="margin-top: 6px">Start Date</label>
                            <input type="text" placeholder="03/04/2021" style="display: inline-block; float:right; padding: 8px 20px; margin-bottom:10px;" disabled>
                        </div>
                        <div class="col-sm-6">
                            <label for="endDate" style="margin-top: 6px">End Date</label>
                            <input type="text" placeholder="02/04/2022" style="display: inline-block; float:right; padding: 8px 20px; margin-bottom:10px;" disabled>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <button type="button" class="btn btn-default" style="position: relative; float: right; margin: 20px">Next</button>
    </div>

@endsection