@extends('layout.layout')
@section('content')

<div class="login">
    <div class="wrap">
        <div class="col_1_of_login span_1_of_login">
            <h4 class="title">New Customers</h4>
            <h5 class="sub_title">Register Account</h5>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut
                laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation
                ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor
                in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at
                vero eros et accumsan</p>
            <div class="button1">
                <a href="/shoe_store/public/register"><input type="submit" name="Submit" value="Continue"></a>
            </div>
            <div class="clear"></div>
        </div>
        <div class="col_1_of_login span_1_of_login">
            <div class="login-title">
                <h4 class="title">Registered Customers</h4>
                <div class="comments-area">


                    <form ng-controller="userController">
                        <p>
                            <label>Name</label>
                            <span>*</span>
                            <input type="text" value="" name="name" ng-model="login.name" required>
                        </p>
                        <p>
                            <label>Password</label>
                            <span>*</span>
                            <input type="password" value="" name="password" ng-model="login.password" required>
                        </p>
                        <p>
                            <input type="submit" value="Login" ng-click="submitLogin()">
                        </p>
                    </form>


                </div>
            </div>
        </div>
        <div class="clear"></div>
    </div>
</div>
@endsection
