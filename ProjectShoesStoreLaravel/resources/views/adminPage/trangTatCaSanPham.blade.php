@extends('masterAdmin.adminMain')

@section('link')
    <link href="{{ asset('styleAdmin/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@endsection

@section('contentAdmin')
    <!-- Content Wrapper -->
   
    <div id="content-wrapper" class="d-flex flex-column">
     <!-- Main Content -->
      <div id="content">

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Tables</h1>
          <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
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