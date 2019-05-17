@extends('masterAdmin.adminMain')

@section('link')
    <link href="{{ asset('styleAdmin/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@endsection

@section('contentAdmin')
    <!-- Content Wrapper -->
   
    <div id="content-wrapper" class="d-flex flex-column">
     <!-- Main Content -->
      <div id="content">
        @if ( Session::has('themSP') )
        <div class="alert alert-success alert-dismissible" role="alert">
            <strong>{{ Session::get('themSP') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                <span class="sr-only">Close</span>
            </button>
        </div>
      @endif

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">
            <a style="color: white" class="btn btn-warning btn-circle btn-lg">
              <i class="fas fa-exclamation-triangle"></i>
            </a>
            Lỗi sản phẩm, sản phẩm bị thiếu thông tin, vui lòng xóa sản phẩm và tạo lại!
          </h1>
          
          <h1 class="h3 mb-2 text-gray-800">
              <a style="color: white" class="btn btn-info btn-circle btn-lg">
                <i class="fas fa-info-circle"></i>
              </a>
              Sản phẩm đầy đủ thông tin, bạn có quyền cập nhập sản phẩm!
          </h1>
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              {{-- <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6> --}}
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                            <th>Code</th>
                            <th>Name</th>
                            <th>cost</th>
                            <th>Quantily</th>
                            <th>Color</th>
                            <th>Size</th>
                            <th>image</th>
                            <th>day creat</th>
                            <th>time creat</th>
                            <th>edit</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Code</th>
                      <th>Name</th>
                      <th>cost</th>
                      <th>Quantily</th>
                      <th>Color</th>
                      <th>Size</th>
                      <th>image</th>
                      <th>day creat</th>
                      <th>time creat</th>
                      <th>edit</th>
                    </tr>
                  </tfoot>
                  <tbody>

                    @foreach ($SANPHAM as $item)
                      <tr>
                        <td>{{$item->MaSP}}</td>
                        <td>{{$item->ten}}</td>
                        <td>{{$item->gia}}</td>
                        <td>{{$item->soLuong}}</td>
                        <td>{{$item->tenmau}}</td>
                        <td>{{$item->tenSize}}</td>
                        <td><img style='width: 78px; height: 49px' src="{{ asset('images') }}/{{$item->hinhAnh}}"/></td>
                        <td>{{$item->ngayTao}}</td>
                        <td>{{$item->gioTao}}</td>
                        <td>
                        @if ($item->tenmau =="" || $item->tenSize =="")
                          <a style="color: white" class="btn btn-warning btn-circle btn-lg">
                              <i class="fas fa-exclamation-triangle"></i>
                          </a>
                        @else
                          <a href="/ProjectShoesStoreLaravel/public/admin/formCapNhapSP/{{$item->MaSP}}/{{$item->tenmau}}/{{$item->tenSize}}" class="btn btn-info btn-circle btn-lg">
                            <i class="fas fa-info-circle"></i>
                          </a>
                        @endif
                        </td>
                      </tr>
                    @endforeach

                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->
 @endsection

 @section('script')
    <script src="{{ asset('styleAdmin/js/demo/datatables-demo.js') }}"></script>
 @endsection