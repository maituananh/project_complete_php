@extends('layout.layout')
@section('content')

<div class="register_account">
    <div class="wrap">
    <h4 class="title">Create an Account</h4>


    		<form ng-controller="userController">
    			<div class="col_1_of_2 span_1_of_2">
	                <div><input name="name" ng-model="register.name" type="text" value="Name" placeholder="Name"></div>
		    		<div><input name="email" ng-model="register.email" type="text" value="E-Mail" placeholder="E-Mail"></div>
		    		<div><input name="password" ng-model="register.password" type="text" value="password" placeholder="Password"></div>
		    	</div>
		    	<div class="col_1_of_2 span_1_of_2">
                    <div><input name="address" ng-model="register.address" type="text" value="Address" placeholder="Address"></div>
                    <div>
                    <input name="city" ng-model="register.city" type="text" value="City" placeholder="City"></div>
		        </div>
		        <button class="grey" ng-click="add_user()" style="margin-left: 20px;">Submit</button>
		        <div class="clear"></div>
            </form>



    	</div>
        </div>
@endsection
