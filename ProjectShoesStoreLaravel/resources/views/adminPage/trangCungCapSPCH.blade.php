@extends('masterAdmin.adminMain')

@section('contentAdmin')
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">
        @if ( Session::has('capnhaphang') )
            <div class="alert alert-danger alert-dismissible" role="alert">
                <strong>{{ Session::get('capnhaphang') }}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Close</span>
                </button>
            </div>
        @endif
        <!-- Main Content -->
        <div id="content">
            @foreach ($updateSOLUONG as $item)
                
            @endforeach

            <div class="card mb-3" style="width: 40%; height: 315px; float:left">
                <div class="card-header py-3">
                    <h6>Tên Sản Phẩm: {{$item->ten}}</h6>
                </div>
                <div class="card-body" >
                    <img style="width: 99%; height: 50%;" src="{{ asset('images') }}/{{$item->hinhAnh}}"/>
                </div>
            </div>

            <div class="card mb-4" style="width: 60%; height: 315px; float:right">
                <div class="card-header py-3">
                    <h6>Thông tin sản phẩm: {{$item->ten}}</h6>
                </div>

                <div class="card-body" style="padding-left: 50px; float:right">
                    <form action="/ProjectShoesStoreLaravel/public/admin/thucHienCungCapThem" method="POST">
                        {{ csrf_field() }}

                        <div style="display: none">
                            <input name="MaSPXK" type="text" value="{{$item->MaSPCH}}"/>
                            <input name="SLkho" type="number" value="{{$item->SOLUONG}}"/>
                            <input name="SLcuahang" type="number" value="{{$item->soluong}}"/>
                        </div>

                        <label>Mã Sản Phẩm: {{$item->MaSPCH}}</label><br>
                        <label>số lượng trong kho hàng: {{$item->SOLUONG}}</label><br>
                        <label>số lượng trong cửa hàng: {{$item->soluong}}</label><br>
                        <label>số lượng cần cung cấp thêm: </label><br>
                        <input type="number" name="SLcungcap" placeholder="cần cung cấp thêm"/><br>
                        <input class="btn-gradient red small" type="submit" value="Chấp Nhận"/>
                    </form>
                </div>
            </div>
        </div>

@endsection