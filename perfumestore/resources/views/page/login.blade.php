@extends('master.main')

@section('content')
<section class="ftco-section contact-section">
  <div class="heading-section text-center mb-5">
    <span class="subheading">Login</span>
  </div>
  @if (session('sai'))
  <div style="color: red; text-align: center" class="alert alert-info">{{session('sai')}}</div>
  @endif

  @if (session('success'))
  <div style="color: green; text-align: center" class="alert alert-info">{{session('success')}}</div>
  @endif
  <div class="container mt-5">
    <div class="row block-9">
      <div class="col-md-4 col-md-offset-3 order-first ftco-animate" style="margin-left: 35%">
        <form action="/htdocphp/perfumestore/public/CheckLogin" method="POST">
          {{ csrf_field() }}
          <div class="form-group">
            <input name="username" type="text" class="form-control" placeholder="UserName">
          </div>
          <div class="form-group">
            <input name="password" type="password" class="form-control" placeholder="Password">
          </div>
          <div class="form-group">
            <input type="submit" value="submit" class="btn btn-primary py-3 px-5">
          </div>
        </form>
      </div>
    </div>
  </div>
</section>

@endsection