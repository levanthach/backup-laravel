@include('baas.layout.partner')
		<!-- END promotion -->
		@if (Route::currentRouteName() == 'trang-chu')
			@include('baas.layout.promotion')
		@endif
		<footer id="footer">
			<div class="container">
				<div class="ft-widgets">
					<div class="row">
						<div class="col-xs-12 col-md-6 col-lg-3">
							<div class="widgets ft-widgets__text">
								<div class="text-widget">
									<div class="widget-logo"><img src="img/logo_baas.png" alt="" class="img-responsive"></div>
									<p class="widget-info">Acronis với 15 năm trong việc phát triển giải pháp Backup và Recovery, Acronis trở thành công ty hàng đầu trong lĩnh vực đảm bảo an toàn cho dữ liệu.</p>
								</div> <!-- end text-widget -->
								<div class="icon-social-widget">
									<ul>
										<li>
											<a href="https://www.facebook.com/baas.vn/" target="_blank">
												<div class="icon icon__facebook active">
													<i class="fab fa-facebook-f"></i>
												</div>
											</a>
										</li>
										<li>
											<a href="https://bit.ly/2b1Z9Oj"  target="_blank">
												<div class="icon icon__twitter">
													<i class="fab fa-twitter"></i>
												</div>
											</a>
										</li>
										
										<li>
											<a href="https://www.youtube.com/playlist?list=PLxyP4gA5yUYuNWkO-qmJFMTTmuiW7y_yU"  target="_blank">
												<div class=" icon icon__pinterest">
													<i class="fab fa-youtube"></i>
												</div>
											</a>
										</li>

										<li>
											<a href="https://bit.ly/2lYK5qo" target="_blank">
												<div class="icon icon__skype">
													<i class="fab fa-skype"></i>
												</div>
											</a>
										</li>
										<li>
											<a href="https://bit.ly/1cmGGo3" target="_blank">
												<div class="icon icon__telegram">
													<i class="fab fa-telegram"></i>
												</div>
											</a>
										</li>
									</ul>
								</div> <!-- end footer-widgets__social-->
							</div><!-- end footer-widgets__text -->

						</div> <!-- end col-3 ft-widgets__text -->

						<div class="col-xs-12 col-md-6 col-lg-3">
							<div class="widgets ft-widgets__link">
								<h2 class="widget-title">
									<span>Danh Mục</span>
								</h2>
								<ul class="widget-link">
									<li class="style2">
										<a href="{{ route('baas') }}" class="style2__link" target="_blank">BAAS</a>
									</li>
									<li class="style2">
										<a href="{{ route('drass') }}"class="style2__link" target="_blank">DRAAS</a>
									</li>
									<li class="style2">
										<a href="{{ route('sync') }}" class="style2__link" target="_blank">SYNC & SHARE</a>
									</li>
									<li class="style2">
										<a href="{{ route('notary') }}" class="style2__link" target="_blank">NOTARY</a>
									</li>
									<li class="style2">
										<a href="{{ route('migration') }}" class="style2__link" target="_blank">MIGRATION</a>
									</li>

									<li class="style2">
										<a href="{{ route('cyber') }}" class="style2__link" target="_blank">CYBER</a>
									</li>
									
									<li class="style2">
										<a href="{{ route('hop-tac') }}" class="style2__link" target="_blank">ĐỐI TÁC</a>
									</li>
									<li class="style2">
										<a href="tai-lieu/PP_What_is_New_in_Acronis_Cyber_Cloud_8.0_EN-US_190716.pptx" class="style2__link" target="_blank">SẢN PHẨM</a>
									</li>
									<li class="style2">
										<a href="{{ route('documents') }}" class="style2__link" target="_blank">TÀI LIỆU</a>
									</li>
									
									<li class="style2">
										<a href="{{ route('video') }}" class="style2__link" target="_blank">VIDEOS</a>
									</li>
									
									<li class="style2">
										<a href="https://kb.acronis.com/" class="style2__link" target="_blank">KB</a>
									</li>
									<li class="style2">
										<a href="{{ route('tin-tuc') }}" class="style2__link" target="_blank">TIN TỨC</a>
									</li>

								</ul>
							</div>
						</div> <!-- end col-3 ft-widgets__link -->

						<div class="col-xs-12 col-md-6 col-lg-3">
							<div class="widgets ft-widgets__feed">
								<h2 class="widget-title">
									<span>SỰ KIỆN NỔI BẬT</span>
								</h2>
								<div class="widget-image">
									<div class="row">
										<div class="col-xs-4">
											<div class="item">
												<img src="img/nguoi1.png" alt="" class="img-responsive">
											</div>
										</div>
										<div class="col-xs-4">
											<div class="item">
												<img src="img/nguoi2.png" alt="" class="img-responsive">
											</div>
										</div>
										<div class="col-xs-4">
											<div class="item">
												<img src="img/nguoi3.png" alt="" class="img-responsive">
											</div>

										</div>
										<div class="w-100"></div>
										<div class="col-xs-4">
											<div class="item">
												<img src="img/nguoi4.png" alt="" class="img-responsive">
											</div>
										</div><div class="col-xs-4">
											<div class="item">
												<img src="img/nguoi5.png" alt="" class="img-responsive">
											</div>
										</div><div class="col-xs-4">
											<div class="item">
												<img src="img/nguoi6.png" alt="" class="img-responsive">
											</div>
										</div>
									</div> <!-- end row -->
								</div>
							</div> <!-- end ft-widgets__feed -->
						</div> <!-- end col-3 ft-widgets__feed internet-->

						<div class="col-xs-12 col-md-6 col-lg-3">
							<div class="widgets ft-widgets__contact pl-4">
								<h2 class="widget-title">
									<span>THÔNG TIN LIÊN HỆ</span>
								</h2>
								<ul>
									<li class="adress">
										<div class="inner">
											<span class="hl">Địa Chỉ:</span>
											<span class="text">268 Lý Thường Kiệt, Phường 14, Quận 10, Hồ Chí Minh</span>
										</div>
									</li>
									<li class="phone">
										<div class="inner">
											<span class="hl">Điện Thoại:</span>
											<span class="text">0989.925.679</span>
										</div>
									</li>
									<li class="email">
										<div class="inner">
											<span class="hl">E-mail:</span>
											<span class="text">contact@baas.vn</span>
										</div>
									</li>
									<li class="skype">
										<div class="inner">
											<span class="hl">Skype:</span>
											<span class="text">ngocphuc788</span>
										</div>
									</li>

								</ul>
							</div>
						</div><!--  end col3- ft-widgets__contact -->
					</div>  <!-- end row -->
				</div> <!-- end ft-widgets -->
			</div>
			<hr class="ngan-footer"></hr>
			<div class="container">
				<div class="ft-bottom">
					<div class="copyright text-center">
						Copyright © 2019 Baas. All Rights Reserved.
					</div> <!-- end copyright -->
				</div><!--  end ft-bottom -->
			</div> <!-- end container -->
		</footer>
		<a id="go-top" data-scrool class="go-top-show" href="#">
			<i class="fa fa-long-arrow-alt-up"></i>
		</a>

	</div> <!-- end wrapper -->
</body>
    <!-- Import Jquery -->
	<script type="text/javascript" src="{{ secure_asset('lib/jquery/jquery-3.4.1.min.js') }}"></script>
	<!-- menu-horizontal -->
	<script type="text/javascript" src="{{ secure_asset('lib/menu-horizontal/menu-horizontal.js') }}"></script>
	<!-- wowjs -->
	<script type="text/javascript" src="{{ secure_asset('lib/wowjs/wow.min.js') }}"></script>
	<!-- lightgallery -->
	<script type="text/javascript" src="{{ secure_asset('lib/lightgallery/dist/js/lightgallery.min.js') }}"></script>
	<!-- A jQuery plugin that adds cross-browser mouse wheel support. (Optional) -->
	<script src="{{ asset('lib/lightgallery/lib/jquery.mousewheel.min.js') }}"></script>
	<!-- lightgallery plugins -->
	<script type="text/javascript" src="{{ secure_asset('lib/lightgallery/modules/lg-share.min.js') }}"></script>
	<script type="text/javascript" src="{{ secure_asset('lib/lightgallery/modules/lg-thumbnail.min.js') }}"></script>
	<script type="text/javascript" src="{{ secure_asset('lib/lightgallery/modules/lg-fullscreen.min.js') }}"></script>
	<script type="text/javascript" src="{{ secure_asset(lib/lightgallery/modules/lg-zoom.min.js') }}"></script>
	<!-- bootstrap4-js -->
	<script type="text/javascript" src="{{ secure_asset('lib/bootstrap-4.3.1/js/bootstrap.min.js') }}"></script>
	<!---video popup simple overplay -->
	<script type="text/javascript" src="{{ secure_asset('lib/simple-overplay/simple-overlay.js') }}"></script>
	<!-- owl-carousel-js -->
	<script type="text/javascript" src="{{ secure_asset('lib/owl-carousel/dist/owl.carousel.min.js')}}"></script>
	@if (Route::currentRouteName() == 'trang-chu')
		<script type="text/javascript" src="{{ secure_asset('lib/circle-slider/jCircle.min.js') }}"></script>
	@endif
	<!-- typejs -->
	@if (Route::currentRouteName() == 'trang-chu')
		<script type="text/javascript" src="{{ secure_asset('lib/typejs/typed.js') }}"></script>
		<script>
	    var circle=new jCircle({
	      'container': 'circles-container',
	      'circle': 'circle',
	      'mainContent':'main-circle-content',
	      'animateCircles':false,
	      'speed':3,
	      'mainViewStyle':'normal',
	      'minCirclesEffectOver':'pulse',
	      'contentType':'images',
	      'stopOnOverMain':false,
	      'mainContentOverAction':'normal'
	    });
	    circle.create();
    </script>
	@endif

	<!-- Style.js -->
	<script type="text/javascript" src="{{ secure_asset('js/style.js') }}"></script>
</html>
