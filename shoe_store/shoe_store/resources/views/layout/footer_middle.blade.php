<div class="footer-middle">
    <div class="wrap">
        <div class="section group">
            <div class="col_1_of_middle span_1_of_middle">
                <dl id="sample" class="dropdown">
                    <dt><a href="#"><span>Please Select a Country</span></a></dt>
                    <dd>
                        <ul>
                            <li><a href="#">Australia<img class="flag" src="{{URL::asset('image/as.png')}}"
                                        alt="" /><span class="value">AS</span></a></li>
                            <li><a href="#">Sri Lanka<img class="flag" src="{{URL::asset('image/srl.png')}}"
                                        alt="" /><span class="value">SL</span></a></li>
                            <li><a href="#">Newziland<img class="flag" src="{{URL::asset('image/nz.png')}}"
                                        alt="" /><span class="value">NZ</span></a></li>
                            <li><a href="#">Pakistan<img class="flag" src="{{URL::asset('image/pk.png')}}"
                                        alt="" /><span class="value">Pk</span></a></li>
                            <li><a href="#">United Kingdom<img class="flag" src="{{URL::asset('image/as.png')}}"
                                        alt="" /><span class="value">UK</span></a></li>
                            <li><a href="#">United States<img class="flag" src="{{URL::asset('image/us.png')}}"
                                        alt="" /><span class="value">US</span></a></li>
                        </ul>
                    </dd>
                </dl>
            </div>
            <div class="col_1_of_middle span_1_of_middle">
                    <span>Approximate Search</span>
                <ul class="f_list1">
                    <li>
                        <div class="search">
                            <form method="POST" action="getSearch">
                                    {{ csrf_field() }}
                                <input type="text" name="Search" class="textbox" placeholder="Search Name Products">
                                <input type="submit" value="Subscribe" id="submit" name="submit" style="float:right">
                            </form>
                            <div id="response" > </div>
                        </div>
                        <div class="clear"></div>
                    </li>
                </ul>
            </div>
            <div class="clear"></div>
        </div>
    </div>
</div>