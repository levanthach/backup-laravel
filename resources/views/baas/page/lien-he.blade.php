@extends('baas.layout.header')
@section('main-content')
	
			<div class="node-header">
			<h1 id="page-title" class="node-title container">
				Liên Hệ        
			</h1>
		</div>
		<div class="main-content wrapper-contact-form">
			<div class="container">
				<div class="row contact">
					<div class="services_img text-center pt-4 mb-4" style="margin:auto;"> 
						<h3>
							<strong class="title-contact">Liên hệ Baas</strong>
						</h3>
						<div class="address">
							<i class="fas fa-map-signs"></i> Up Co-working Space - 268 Lý Thường Kiệt, phường 14, quận 10, TP. HCM<br>
							<i class="fas fa-phone-volume"></i> (028)73.08.59.59 - Hotline: 0989.925.679<br>
							<i class="fas fa-envelope"></i> contact@bass.vn
						</div><!-- end address -->
					</div> <!-- end head contact-->
					<div class="w-100"></div>
					<div class="col-xs-12 col-md-6 contact__form">
						<h4 class="form-contact-heading"><strong>Nhập thông tin liên hệ</strong></h4>
						<form>
							<div class="form-group">
								<input type="text" class="form-control" id="inputName" placeholder="Họ Tên">
							</div>
							<div class="form-row">
								
								<div class="form-group col-xs-12 col-md-6">
									<input type="text" class="form-control" id="inputPhone" placeholder="Số Điện Thoại">
								</div>
								<div class="form-group col-md-6">
									<input type="email" class="form-control" id="inputEmail" placeholder="Email">
								</div>
							</div>
							<div class="form-group">
								<input type="text" class="form-control" id="inputTitle" placeholder="Tiêu Đề">
							</div>
							<div class="form-group">
								<textarea cols="65" rows="7" name="content-form" class="form-control" style="resize: none;" placeholder="Viết nội dung liên hệ" ></textarea>
							</div>

							<button type="submit" class="btn btn-primary submit-contact">GỬI LIÊN HỆ</button>
						</form>
					</div>
					<div class="col-xs-12 col-md-6 contact__map">
						<!-- nhúng freame google-map -->
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.495966241677!2d106.65727431411645!3d10.773274562199411!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752ec18b14d31d%3A0xf501a655c450c4b3!2sBKHCM-UP+Co-working+Space!5e0!3m2!1svi!2s!4v1565838645214!5m2!1svi!2s" width="100%" height="550" frameborder="0" style="border:0;" allowfullscreen></iframe>
					</div>
				</div>
			</div> <!-- end container -->
		</div> <!-- end main-content -->
		<hr class="ngan-partner">
		<!-- BEGIN partner -->

	@include('baas.layout.footer')
@endsection
