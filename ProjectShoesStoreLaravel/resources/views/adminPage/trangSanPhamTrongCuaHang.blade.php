@extends('masterAdmin.adminMain')

@section('link')
    <link href="{{ asset('styleAdmin/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@endsection

@section('contentAdmin')
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">
     <!-- Main Content -->
      <div id="content">
        @if ( Session::has('capnhaphang') )
          <div class="alert alert-success alert-dismissible" role="alert">
              <strong>{{ Session::get('capnhaphang') }}</strong>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  <span class="sr-only">Close</span>
              </button>
          </div>
        @endif

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Shoes Store</h1>
          {{-- <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p> --}}

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Shoes in store</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>MaSP</th>
                      <th>Name</th>
                      <th>Price</th>
                      <th>Quantity</th>
                      <th>Color</th>
                      <th>Size</th>
                      <th>Image</th>
                      <th>Day Creat</th>
                      <th>Time Creat</th>
                      <th>Stop Selling</th>
                      <th>Supply Goods</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                        <th>MaSP</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Color</th>
                        <th>Size</th>
                        <th>Image</th>
                        <th>Day Creat</th>
                        <th>Time Creat</th>
                        <th>Stop Selling</th>
                        <th>Supply Goods</th>
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
                            <a style="margin-left: 15px;" href="dungCungCap/{{$item->MaSP}}" class="btn btn-warning btn-circle btn-lg">
                                <i class="fas fa-exclamation-triangle"></i>
                            </a>
                        </td>
                        <td>
                            <a style="margin-left: 22px;" href="cungCapThem/{{$item->MaSP}}" class="btn btn-success btn-circle btn-lg">
                                <i class="fas fa-check"></i>
                            </a>
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