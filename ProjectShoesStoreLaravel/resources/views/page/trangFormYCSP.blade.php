
@extends('masterPage.cuaHangMain')

@section('content')
    <div class="colorlib-product">
        <div class="container">
			<div class="row">
                <div class="col-md-6">
						<div class="contact-wrap">
							<h3>Get In Touch</h3>

							<form action="/ProjectShoesStoreLaravel/public/hanghoa/thucHienYCSP" class="contact-form" method="POST">
								{{ csrf_field() }}
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label for="fname">Mã Sản Phẩm </label>
											<input name="MaSPYC" type="text" id="fname" class="form-control" value="{{$MaSPCH}}" readonly>
										</div>
									</div>
									<div class="w-100"></div>
									<div class="col-sm-12">
										<div class="form-group">
											<label for="subject">Số Lượng</label>
											<input type="number" name="soLuong"  id="subject" class="form-control" placeholder="số lượng sản phẩm">
										</div>
									</div>
									<div class="w-100"></div>
									<div class="col-sm-12">
										<div class="form-group">
											<label for="message">Nội dung</label>
											<textarea name="message" id="message" cols="30" rows="10" class="form-control" placeholder="Say something about us"></textarea>
										</div>
									</div>
									<div class="w-100"></div>
									<div class="col-sm-12">
										<div class="form-group">
											<input type="submit" value="Send" class="btn btn-primary">
										</div>
									</div>
								</div>

							</form>	

						</div>
				</div>

				<div class="col-md-6">
					<img style="width: 100%" src="{{ asset('images') }}/{{$hinhAnh}}"/> 
				</div>
        </div>
    </div>
@endsection
