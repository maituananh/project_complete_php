@extends('masterAdmin.adminMain')

@section('link')

@endsection
<style>
  table{
    margin-left: 80px;
    float: left;
    margin-top: 20px;
  }
</style>
@section('contentAdmin')
@foreach ($SANPHAM as $item)
    
@endforeach
<div class="container">
    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
            <div class="col-lg-5 d-none d-lg-block bg-register-image">
            <img src="{{ asset('images') }}/{{$item->hinhAnh}}" style="width: 500px; height: 660px; padding-top: 90px"/>
            </div>
          <div class="col-lg-7">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Update Product!</h1>
              </div>

              <form class="user" action="/ProjectShoesStoreLaravel/public/admin/thucHienCapNhap" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}

                <div style="display: none">
                    {{-- lưu tạm giá trị hình ảnh, nếu ng dùng ko thây đổi hình ảnh thì láy cái này --}}
                    <input type="text" name="SaveImage" value="{{$item->hinhAnh}}">
                </div>

                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input name="MaSP" type="text" class="form-control form-control-user" id="exampleFirstName" value="{{$item->MaSP}}" readonly>
                  </div>
                  <div class="col-sm-6">
                    <input name="TenSP" type="text" class="form-control form-control-user" id="exampleLastName" value="{{$item->ten}}">
                  </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                      <input name="MaSize" type="text" class="form-control form-control-user" id="exampleFirstName" value="{{$item->MaSize}}">
                    </div>
                    <div class="col-sm-6">
                      <input name="SoSize" type="text" class="form-control form-control-user" id="exampleLastName" value="{{$item->tenSize}}">
                    </div>
                  </div>

                  <div class="form-group row">
                      <div class="col-sm-6 mb-3 mb-sm-0">
                        <input name="MaLoai" type="text" class="form-control form-control-user" id="exampleFirstName" value="{{$item->MaLoai}}">
                      </div>
                      <div class="col-sm-6">
                        <input name="TenLoai" type="text" class="form-control form-control-user" id="exampleLastName" value="{{$item->tenLoai}}">
                      </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                          <input name="MaHang" class="form-control form-control-user" id="exampleFirstName" value="{{$item->maHang}}">
                        </div>
                        <div class="col-sm-6">
                          <input name="TenHang" class="form-control form-control-user" id="exampleLastName" value="{{$item->tenHang}}">
                        </div>
                      </div>

                      <div class="form-group row">
                          <div class="col-sm-6 mb-3 mb-sm-0">
                            <input name="MaMau" class="form-control form-control-user" id="exampleFirstName" value="{{$item->MaMau}}">
                          </div>
                          <div class="col-sm-6">
                            <input name="TenMau" class="form-control form-control-user" id="exampleLastName" value="{{$item->tenmau}}">
                          </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                              <input name="gia" class="form-control form-control-user" id="exampleFirstName" value="{{$item->gia}}">
                            </div>
                            <div class="col-sm-6">
                              <input name="soLuong" class="form-control form-control-user" id="exampleLastName" value="{{$item->soLuong}}">
                            </div>
                          </div>
                <div class="form-group">
                  <input name="MoTa" type="text" class="form-control form-control-user" id="exampleInputEmail" value="{{$item->moTa}}">
                </div>
                <div class="form-group">
                    <input name="file" type="file" class="form-control form-control-user" id="exampleInputEmail" placeholder="hình ảnh" >
                </div>
                <input type="submit" class="btn btn-primary btn-user btn-block" value="Update Product"/>
              </form>
            </div>
          </div>
        </div>
      </div>
@endsection

@section('script')

@endsection