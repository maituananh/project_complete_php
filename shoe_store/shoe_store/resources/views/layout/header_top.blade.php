<div class="wrap">
        <div class="logo" style="margin-top:10px;">
            <a href="/shoe_store/public/"><img src="{{URL::asset('image/logo.png')}}" alt="" /></a>
        </div>
        <div class="cssmenu" style="float:right; margin-top: -90px;">
            <ul>
                <li class="active"><a href="/shoe_store/public/register">Sign up & Save</a></li>
                <li><a href="/shoe_store/public/login">My Account</a></li>
                @if (!Session::has("username"))
                @else  
                    <li>
                        <a href="myBag">My Bag</a>
                    </li>
                @endif
            </ul>
        </div>
        <div class="clear"></div>
    </div>