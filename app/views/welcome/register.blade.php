@extends('layouts.master')
@section('pagetree')
<li><a href="index.html">Homepage</a></li>
<li><span>Login</span></li>
@stop
@section('content')
<div class="page-block lightcolor">
	<div class="inner-wrapper">

		<div class="split dat-scrollnimate" data-animation="bounceIn">
    
		<div class="size4" style="margin-left: 33%;">
        	<div class="block-title"><h2>Register</h2></div>
            	<div align="center">
            {{ Form::open(['action'=>'usersController@create', 'class'=>'login']) }}	
            
            @if ($errors->any())
                    {{ implode('', $errors->all('<div class="woocommerce-error">:message</div>')) }}
            @endif
            <div class="margin-bottom-10px">
            	<div style="display:inline-block">

                	<input type="radio" name="user_type" id="rad_customer" value="Customer" style="margin-right:5px;"/>Customer
                 <!--   <label for="rad_customer">Customer</label>-->
                    
                    <input type="radio" name="user_type" id="rad_customer" value="Designer" style="margin-left: 5px;"/>Designer
                  <!--  <label for="rad_designer">Designer</label>-->
                </div>
            </div>
             <div class="margin-bottom-10px">
           	 {{Form::text('name', '', ['placeholder'=>'Name', 'class'=>'input-text', 'required'=>'true'])}}
            </div>
            
             <div class="margin-bottom-10px">
           	 {{Form::text('name', '', ['placeholder'=>'Phone Number', 'class'=>'input-text', 'required'=>'true'])}}
            </div>
            
            <div class="margin-bottom-10px">
           	 {{Form::email('email', '', ['placeholder'=>'Email', 'class'=>'input-text', 'required'=>'true'])}}
            </div>
            
            <div class="margin-bottom-10px">
            {{Form::password('passwd', ['placeholder'=>'Password', 'type'=>'password', 'class'=>'input-text', 'required'=>'true'])}}
            </div>
            
            
                
                <input type="submit" name="submit" value="Register" class='button'>
              
            {{ Form::close() }}
            </div>
           </div>
        </div>
    </div>
</div>
@stop