@extends('layout.layout')
@section('content')

<div class="panel panel-default" style="font-size:25px; ">
    <div class="panel-heading">Forms</div>
    <div class="panel-body">
        <div class="col-md-6">

            <form role="form" action="addProduct" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group has-warning">
                    <label>Name</label>
                    <input name="Name" type="text" class="form-control" placeholder="Name" style="font-size: 23px">
                </div>

                <div class="form-group has-warning">
                    <label>Price</label>
                    <input name="price" type="text" class="form-control" placeholder="Price" style="font-size: 23px">
                </div>

                <div class="form-group has-error">
                    <label>Category</label>
                    <input name="category" class="form-control" placeholder="Category" style="font-size: 23px">
                </div>

                <div class="form-group has-success">
                    <label>Describe</label>
                    <input name="describe" class="form-control" placeholder="Describe" style="font-size: 23px">
                </div>

                <div class="form-group has-warning">
                    <label>Content Details</label>
                    <input name="content_details"  class="form-control" placeholder="Content_details" style="font-size: 23px">
                </div>

                <div class="form-group has-error">
                    <label>Reviews</label>
                    <input name="reviews" class="form-control" placeholder="Reviews" style="font-size: 23px">
                </div>

                <div class="form-group">
                    <label>File input</label>
                    <input name="files" type="file" style="font-size: 23px">
                </div>
                <input value="Submit" type="submit">
            </form>
        </div>
    </div>
</div>
@endsection
