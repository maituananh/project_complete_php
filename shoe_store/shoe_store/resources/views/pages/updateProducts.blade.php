@extends('layout.layout')
@section("content")
<div class="panel panel-default" style="font-size:25px; ">
    <div class="panel-heading">Forms</div>
    <div class="panel-body">
        <div class="col-md-6">

            <form role="form" action="submitUpdateProduct/{{$id}}" method="POST" enctype="multipart/form-data">
                <label>UPDATE PRODUCT</label>
                {{ csrf_field() }}
                <div>
                    <label>ID</label>
                    <input type="text" name="idProducts" value="{{$id}}" readonly>
                </div>

                <div class="form-group has-success">
                    <label>Name</label>
                    <input class="form-control" name="Name" type="text" value="" style="font-size: 23px">
                </div>

                <div class="form-group has-warning">
                    <label>Price</label>
                    <input type="number" name="price" class="form-control" value="" style="font-size: 23px">
                </div>

                <div class="form-group has-error">
                    <label>Category</label>
                    <input class="form-control" name="category" value="" style="font-size: 23px">
                </div>

                <div class="form-group has-success">
                    <label>Describe</label>
                    <input class="form-control" name="describe" value="" style="font-size: 23px">
                </div>

                <div class="form-group has-warning">
                    <label>Content Details</label>
                    <input class="form-control" name="content_details" value="" style="font-size: 23px">
                </div>

                <div class="form-group has-error">
                    <label>Reviews</label>
                    <input class="form-control" name="reviews" value="" style="font-size: 23px">
                </div>

                <div class="form-group">
                    <label>File input</label>
                    <input type="file" name="files" style="font-size: 23px">
                </div>

                <input type="submit" class="btn btn-primary" style="height: 40px; font-size: 30px" value="UPDATE PRODUCTS">
            </form>
        </div>
    </div>
    </div>
</div>

@endsection
