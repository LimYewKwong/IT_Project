@extends('admin.app')

@section('content')

    <div class="container container_secondary">
        <div class="content_purchases">
            <div class="row">
                {{-- admin details --}}
                <div class="col-md-4 col-sm-12">
                    <div class="user_container">
                        <i class="fas fa-user-circle fa-8x"></i>
                        <br><br>
                        <span>{{$name}}</span>
                    </div><br>
                    <div class="user_container_text">
                        <span>Client Purchases</span>
                    </div>
                </div>
                {{-- search bar --}}
                <form action="{{url('admin/dashboardsearch')}}" method="POST" role="search">
                    {{ csrf_field() }}
                    <div class="input-group" style="margin-bottom: 20px">
                    <input type="text" class="form-control" placeholder="Search customer name or reference id" name="adminsearch">
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="submit">
                        <i class="fa fa-search"></i>
                        </button>
                    </span>
                    </div>
                </form>
                
                {{-- customers details --}}
                <div class="col-md-8 col-sm-12">
                    <div class="insurance_providers_container">
                        @foreach($insurances as $insurance)
                            <div class="insurance_providers" data-price="{{$insurance->amount}}" data-sum="{{$insurance->sum_insured}}">
                                <div class="row">
                                    <div class="col-md-12">
                                        <b>Name: {{$insurance->full_name}}</b><br>
                                        <b>Email: {{$insurance->email}}</b><br>
                                        <b>Date: {{$insurance->start_date}}</b><br>
                                    </div>
                                </div><br>
                                <div class="row">
                                    <div class="col-md-3 col-sm-12">
                                        <img src="{{url('/images/'.$insurance->logo)}}" alt="Brand Image" width="100px;">
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="row">
                                            <div class="col-md-6 col-sm-12">
                                                <span><b>Protection Drivers</b></span><br>
                                                <span>Up to {{$insurance->protection}} Drivers</span>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <span><b>Towing Service</b></span><br>
                                                <span>Up to {{$insurance->towing}} Km</span>
                                            </div>
                                        </div><br>
                                    </div>
                                    <div class="col-md-3 col-sm-12">
                                        <span>Total amount:</span><br>
                                        <span class="headerfont">RM {{number_format($insurance->final_amount, 2)}}</span><br><br>
                                    </div>
                                </div><br>
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <span><b>Ref ID:</b> {{$insurance->ref_id}}</span>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <span><b>Expiring:</b> {{$insurance->end_date}}</span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <span><b>Sum Insured (SI):</b></span>
                                        <span class="headerfont">RM {{number_format($insurance->sum_insured, 2)}}</span>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <span><b>Add-Ons:</b></span>
                                        <span>
                                        <?php
                                            if($insurance->addon_id == ""){
                                                echo "No add-ons selected";
                                            }else{
                                                $addOns = explode(",", $insurance->addon_id);
                                                echo count($addOns).' <a id="view_'.$insurance->id.'" onclick="getAddons('.$insurance->id.')" style="cursor: pointer;">View</a>';
                                            }
                                        ?>
                                        <input type="hidden" id="input_addons_{{$insurance->id}}" value="{{$insurance->addon_id}}">
                                        </span>
                                    </div>
                                </div>
                                {{-- parry part --}}
                                <br>
                                <div class="mailButton">
                                  <div>
                                    <a href="mailto:{{$insurance->email}}?Subject=Regarding%20your%20insurance%20plan
                                    &Body=Dear Mr/Mrs {{$insurance->full_name}},%0A%0AThis message is sent to notify you that your current insurance plan is to expire soon (on {{$insurance->end_date}}). Please do navigate to our site to renew your insurance plan.%0A%0AThank you and stay safe.%0A%0AKind Regards,%0AStill Waters Fiduciaries Sdn. Bhd%0A%0A"><button>Send expiry notice</button></a>
                                  </div>
                                </div>
                                {{-- parry part --}}
                                <div class="row">
                                    <div class="col-md-12" id="container_addons_{{$insurance->id}}">
                                    </div>
                                </div><br>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@section('script')
    <script type="text/javascript">
        function getAddons(insurance_id){
            if($("#view_"+insurance_id).hasClass("viewed")){
                $("#view_"+insurance_id).removeClass("viewed")
                $("#view_"+insurance_id).html("View");
                $("#container_addons_"+insurance_id).html("");
            }else{
                $("#view_"+insurance_id).addClass("viewed")
                $("#view_"+insurance_id).html("Hide");
                var addon_id = $("#input_addons_"+insurance_id).val();
                var content = "<br><span><b>Selected Add-Ons: </b><br><ul>";
                console.log(addon_id)
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    type: "POST",
                    url: "{{route('admin.dashboard.addons')}}",
                    data: { addon_id: addon_id },
                    success: function (data) {
                        for(ids in data){
                            content += "<li>"+data[ids].description+"</li>";
                        }
                        content += "</ul>";
                        $("#container_addons_"+insurance_id).html(content);
                    },
                });
            }
        }
    </script>
@endsection
