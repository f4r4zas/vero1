@include('includes.header')
<div class="drive-reg-banner">
    <div class="top-nav-bg">
        <div class="container">
            <div class="row">
                <div class="col-sm-2">
                    <div class="logo-wrap">
                        <a href=""><img src="images/ver-logo.png"></a>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="top-nav">
                        <nav class="navbar-default" role="navigation">
                            <div class="container-fluid">
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbarCollapse">
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>
                                <div class="collapse navbar-collapse navbarCollapse">
                                    <ul>
                                        <li><a href="#">Overview</a></li>
                                        <li><a href="#">How it works</a></li>
                                        <li><a href="#">Pricing</a></li>
                                        <li><a href="#">About us</a></li>
                                        <li><a href="#">Services</a></li>
                                        <li><a href="#">Magazine</a></li>
                                    </ul>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="login-wrap">
                        <a href="{{ URL::to("/login") }}">login</a>
                    </div>
                </div>
            </div><!--row-->
        </div><!--container-->
    </div><!--top-nav-bg-->

    <div class="container">
        <div class="col-sm-12 page-title">
            <h1>Driver Registration</h1>
        </div>
    </div>
</div><!--drive-reg-banner-->
<div class="body-content">
    <div class="container">
        <div class="col-sm-12">
            <div class="form-wrap">

                @include("includes.driver-register-header.driver-register")

                <form id="registerFormStep1" action="" method="post" accept-charset="utf-8" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    @if(Session::has('message'))
                        <p class="alert alert-danger">{{ Session::get('message') }}</p>
                    @endif

                    <?php

                    if(Session::get("register-form-1")){
                       $form_data = Session::get("register-form-1");
                    }
                    //print_r($form_data);
                    ?>
                    <div class="form-row">
                        <div class="spacer form-group col-md-6 ">
                            <span>First Name</span>
                            <input type="text" value="{{ @$form_data['first_name'] }}" required name="first_name">
                        </div>
                        <div class=" form-group col-md-6 ">
                            <span>Last Name</span>
                            <input type="text" required name="last_name" value="{{ @$form_data['last_name'] }}">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="spacer form-group col-md-6 ">
                            <span>Gender</span>
                            {{ Form::select('gender', ["Male"=>"Male","Female"=>"Female","Other"=>"Other"],@$form_data['gender']) }}
                        </div>
                        <div class=" form-group col-md-6">
                            <span>Mobile Phone Number</span>
                            <input type="text" value="{{ @$form_data['phoneNumber'] }}" required name="phoneNumber">
                        </div>
                    </div>
                    <div class="form-group form-row">
                        <span>Email Address</span>
                        <input type="email" value="{{ @$form_data['userEmail'] }}" required name="userEmail">
                    </div>
                    <div class="form-row ">
                        <div class="spacer form-group col-md-6 ">
                            <span>Password</span>
                            <input type="password" id="main_password" name="password" required>
                            <span class="custom help-block">Password should contain aleast 1 Capital | 1 Special Character .</span>
                        </div>
                        <div class=" form-group col-md-6 ">
                            <span>Confirm Password</span>
                            <input type="password" id="confirmPassword" name="confirm_Password" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="spacer form-group col-md-6 ">
                            <span>What country do you want to drive in?</span>
                            <select name="question[driveCountry]">
                                <option>United States of America</option>
                            </select>
                        </div>
                        <div class=" form-group col-md-6 ">
                            <span>State</span>
                            {{ Form::select('question[state]', $data["USStates"],@$form_data['question']['state']) }}
                        </div>
                    </div>
                    <div class="form-group form-row">
                        <span>Home Address</span>
                        <input type="text" value="{{ @$form_data['home_address'] }}" required name="home_address">
                    </div>
                    <div class="form-row">
                        <div class="spacer form-group col-md-6 ">
                            <span>Zip Code</span>
                            <input type="text" value="{{ @$form_data['zip'] }}" autocomplete="nok" required name="zip">
                        </div>
                        <div class="form-group col-md-6 ">
                            <span>City</span>

                            <select required name="city">
                              <option value="0">Select a state</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="spacer form-group col-md-6 ">
                            <span>State</span>
                            {{ Form::select('state', $data["USStates"]
                            ) }}
                        </div>
                        <div class=" form-group col-md-6 ">
                            <span>Country</span>
                            <select  name="country">
                                <option>United States</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="spacer form-group col-md-6 ">
                            <span>What is your highest level of education?</span>

                            {{ Form::select('question[hightLevelEducation]', ['High School Graduate'=>'High School Graduate','None'=>'None' ],@$form_data['question']['hightLevelEducation']) }}

                           {{-- <select name="question[hightLevelEducation]">
                                <option>High School Graduate</option>
                                <option>None</option>
                            </select>--}}
                        </div>
                        <div class=" form-group col-md-6 ">
                            <span>Which service you are most interested?</span>

                            {{ Form::select('question[interestedService]', ['Item Purchase'=>'Item Purchase','Sell Item'=>'Sell Item' ],@$form_data['question']['interestedService'],array("multi")) }}

                        </div>
                    </div>
                    <div class="form-row">
                        <div class="spacer form-group col-md-6 ">
                            <span>Are you professionally licensed?</span>

                            {{ Form::select('question[professionalLicensed]', ['Yes'=>'Yes','No'=>'No' ],@$form_data['question']['professionalLicensed']) }}

                        </div>
                        <div class=" form-group col-md-6 ">
                            <span>Are you bonded?</span>

                            {{ Form::select('question[bounded]', ['Yes'=>'Yes','No'=>'No' ],@$form_data['question']['bounded']) }}

                        </div>
                    </div>
                    <div class="form-group form-row">
                        <span>Are you insured?</span>

                        {{ Form::select('question[insured]', ['Yes'=>'Yes','No'=>'No' ],@$form_data['question']['insured']) }}

                    </div>
                    <div class="form-row">
                        <div class="spacer form-group col-md-6 ">
                            <span>Do you have any professional service licenses?</span>

                            {{ Form::select('question[professionalServiceLicenses]', ['Yes'=>'Yes','No'=>'No' ],@$form_data['question']['professionalServiceLicenses']) }}

                        </div>
                        <div class=" form-group col-md-6 ">
                            <span>Please select</span>

                            {{ Form::select('question[profession]', ['Electrician'=>'Electrician','Driving'=>'Driving' ],@$form_data['question']['profession']) }}

                        </div>
                    </div>
                    <div class="form-group form-row">
                        <span>Are you authorized to work in the U.S.?</span>

                        {{ Form::select('question[autToWorkUS]', ['Yes'=>'Yes','No'=>'No' ],@$form_data['question']['autToWorkUS']) }}

                    </div>
                    <div class="form-group form-row">
                        <span>Have you ever been convicted of a felony?</span>


                        <?php
                        $everFelony = "No";
                        if(!empty(@$form_data['question']['everFelony'])){
                            $everFelony = "Yes";
                        }

                        ?>
                        {{ Form::select('everFelony', ['Yes'=>'Yes','No'=>'No' ],$everFelony) }}


                    </div>
                    <div class="form-group form-row" style="<?php if($everFelony == "No"){echo 'display:none';} ?>" id="ans-everFelony">
                        <span>Provide Details</span>
                        <input placeholder="provide details" type="text" value="{{ @$form_data['question']['everFelony'] }}" name="question[everFelony]">
                    </div>
                    <div class="form-group form-row">
                        <span>Have you ever been convicted of a DUI and/or reckless driving?</span>

                        <?php
                        $conviction = "No";
                        if(!empty(@$form_data['question']['conviction'])){
                            $conviction = "Yes";
                        }
                        ?>

                        {{ Form::select('conviction', ['Yes'=>'Yes','No'=>'No' ],$conviction) }}


                    </div>

                    <div class="form-group form-row" id="ans-conviction" style="<?php if($conviction == "No"){echo 'display:none';} ?>">
                        <span>Provide Details</span>
                        <input placeholder="provide details" type="text" value="{{ @$form_data['question']['conviction'] }}" name="question[conviction]">
                    </div>
                    <div class="form-group form-row">
							<span>Have you ever been convicted of a crime of dishonesty and/or terminated from any prior employment for dishonesty
(e.g., theft, shoplifting, embezzlement, fraud, identify theft, misrepresentation)?</span>

                        <?php
                        $provideDetailsThree = "No";
                        if(!empty(@$form_data['question']['provideDetailsThree'])){
                            $provideDetailsThree = "Yes";
                        }
                        ?>

                        {{ Form::select('provideDetailsThree', ['Yes'=>'Yes','No'=>'No' ],$provideDetailsThree) }}

                    </div>
                    <div class="form-group form-row" id="ans-provideDetailsThree" style="<?php if($provideDetailsThree == "No"){echo 'display:none';} ?>">
                        <span>Provide Details</span>

                        <input placeholder="provide details" type="text" value="{{ @$form_data['question']['provideDetailsThree'] }}" name="question[provideDetailsThree]">

                    </div>
                    <div class="submit-row submit-button col-md-12">
                        <input type="submit" name="submit" value="Next">
                    </div>
                </form>
            </div>
        </div>
    </div><!--container-->
</div>
@include('includes.footer')
<script>
    $(document).ready(function(){


        $("[name='phoneNumber']").mask("(000) 000-0000");

        $("[name='state']").select2();
        $("[name='city']").select2();
        $("[name='question[interestedService]']").select2({
            multiple: true,
        });



        $("[name='state']").change(function(){

            var state = $("option:selected",this).text();

            $.ajax({
                type:"POST",
                data:{
                    _token:'{{ csrf_token() }}',
                    state:state
                },
                url: " {{ URL::to('/get_city')  }}",
                beforeSend: function( xhr ) {
                    xhr.overrideMimeType( "text/plain; charset=x-user-defined" );
                }
            }).done(function( data ) {
                    $("[name='city']").html(data);
            });
        });

            $("#registerFormStep1").validate({
                rule:{
                    password:"required",
                    confirm_Password: {
                        equalTo: "#main_password"
                    },
                }
            });

            $("[name='everFelony']").change(function(){
                if($(this).val() == "Yes"){
                    $("#ans-everFelony").show();
                }else{
                    $("#ans-everFelony").hide();
                    $("[name='question[everFelony]']").val("");
                }
            });

            $("[name='conviction']").change(function(){
                console.log("worked");
                    if($(this).val() == "Yes"){
                        $("#ans-conviction").show();
                    }else{
                        $("#ans-conviction").hide();
                        $("[name='question[conviction]']").val("");
                    }
            });

            $("[name='provideDetailsThree']").change(function(){
                    if($(this).val() == "Yes"){

                        $("#ans-provideDetailsThree").show();
                    }else{
                        $("#ans-provideDetailsThree").hide();
                        $("[name='question[provideDetailsThree]']").val("");
                    }
            });

        });
</script>