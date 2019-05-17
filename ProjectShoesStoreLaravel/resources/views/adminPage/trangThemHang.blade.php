@extends('masterAdmin.adminMain')

<style>
  table{
    margin-left: 80px;
    float: left;
    margin-top: 20px;
  }
</style>
@section('contentAdmin')
@if ( Session::has('LoiNhap') )
        			<div class="alert alert-danger alert-dismissible" role="alert">
            			<strong>{{ Session::get('LoiNhap') }}</strong>
            			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
                			<span aria-hidden="true">&times;</span>
                			<span class="sr-only">Close</span>
            			</button>
        			</div>
   				@endif
<div class="container">
    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
            <div class="col-lg-5 d-none d-lg-block bg-register-image">
              <img src="{{ asset('images/shoes-S0023.jpg') }}" style="width: 500px; height: 660px; padding-top: 90px"/>
            </div>
          <div class="col-lg-7">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Create Product!</h1>
              </div>

              <form class="user" action="thucHienThemSP" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input name="MaSP" type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="Mã Sản Phảm">
                  </div>
                  <div class="col-sm-6">
                    <input name="TenSP" type="text" class="form-control form-control-user" id="exampleLastName" placeholder="Tên Sản Phảm">
                  </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                      <input name="MaSize" type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="Mã Size">
                    </div>
                    <div class="col-sm-6">
                      <input name="SoSize" type="text" class="form-control form-control-user" id="exampleLastName" placeholder="Tên Size">
                    </div>
                  </div>

                  <div class="form-group row">
                      <div class="col-sm-6 mb-3 mb-sm-0">
                        <input name="MaLoai" type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="Mã Loại">
                      </div>
                      <div class="col-sm-6">
                        <input name="TenLoai" type="text" class="form-control form-control-user" id="exampleLastName" placeholder="Tên Loaị">
                      </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                          <input name="MaHang" class="form-control form-control-user" id="exampleFirstName" placeholder="Mã Hãng">
                        </div>
                        <div class="col-sm-6">
                          <input name="TenHang" class="form-control form-control-user" id="exampleLastName" placeholder="Tên Hãng">
                        </div>
                      </div>

                      <div class="form-group row">
                          <div class="col-sm-6 mb-3 mb-sm-0">
                            <input name="MaMau" class="form-control form-control-user" id="exampleFirstName" placeholder="Mã Màu">
                          </div>
                          <div class="col-sm-6">
                            <input name="TenMau" class="form-control form-control-user" id="exampleLastName" placeholder="Tên Màu">
                          </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                              <input name="gia" class="form-control form-control-user" id="exampleFirstName" placeholder="Gía Sản Phẩm">
                            </div>
                            <div class="col-sm-6">
                              <input name="soLuong" class="form-control form-control-user" id="exampleLastName" placeholder="Số Lượng">
                            </div>
                          </div>
                <div class="form-group">
                  <input name="MoTa" type="text" class="form-control form-control-user" id="exampleInputEmail" placeholder="Mô Tả sản phẩm">
                </div>
                <div class="form-group">
                    <input name="file" type="file" class="form-control form-control-user" id="exampleInputEmail" placeholder="hình ảnh" required="true">
                </div>
                <input type="submit" class="btn btn-primary btn-user btn-block" value="Creat Product"/>
              </form>
            </div>
          </div>
        </div>
      </div>
@endsection