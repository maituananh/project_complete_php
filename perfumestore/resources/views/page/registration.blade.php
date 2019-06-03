@extends('master.main')

@section('content')

<section class="ftco-section contact-section">
    <div class="col-md-12 mb-4">
        <h2 style="text-align: center">CREAT ACCOUT</h2>
    </div>
    @if (session('Account'))
    <div style="color: red; text-align: center" class="alert alert-info">{{session('Account')}}</div>
    @endif
    @if (session('Please'))
    <div style="color: red; text-align: center" class="alert alert-info">{{session('Please')}}</div>
    @endif
    @if (session('password'))
    <div style="color: red; text-align: center" class="alert alert-info">{{session('password')}}</div>
    @endif
    <div class="container mt-5">
        <div class="row block-9">
            <div class="col-md-1"></div>
            <div class="col-md-6 order-first ftco-animate" style="margin-left: 25%">
                <form action="/htdocphp/perfumestore/public/submitregistration" method="POST">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <input name="name" type="text" class="form-control" placeholder="Your Name">
                    </div>
                    <div class="form-group">
                        <input name="username" type="text" class="form-control" placeholder="Accout Name">
                    </div>
                    <div class="form-group">
                        <input name="email" type="email" class="form-control" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <input name="birthday" type="text" class="form-control" placeholder="Birthday">
                    </div>
                    <div class="form-group">
                        <input name="address" type="text" class="form-control" placeholder="Address">
                    </div>
                    <div class="form-group">
                        <input name="password" type="password" class="form-control" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <input name="AgainPassword" type="password" class="form-control" placeholder="Again Password">
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Creat Accout" class="btn btn-primary py-3 px-5">
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection