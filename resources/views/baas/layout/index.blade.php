@include('baas.layout.header')
<!-- BEGIN slide carousel -->
<!-- Hiệu ứng load -->
<div class="load">
	<img src="img/loader.gif">
</div>
<div class="loader">
	<span class="fas fa-spinner xoay icon"></span>
</div>
<div class="slider">
	<div class="text-slider">
		<div class="hero-description">
			ARCHITECTURE - INTERIOR - BRAND IDENTITY DESIGN
		</div>
		<div class="ut-word-rotator">We are <span id="typist-element"></span></div>
		<div class="hero-btn-holder">  
			<a id="to-about-section" target="" href="#" class="hero-btn default">
				WHO WE ARE                        
			</a>
		</div>
	</div>
	<div class="owl-carousel owl-slider owl-theme">
		<div class="item">
			<img src="img/slider5.png" alt="Chicago" class="img-responsive">
		</div>
		<div class="item">
			<img src="img/icons_arconis/drass_sv/bg_drass_sv.png" alt="Chicago" class="img-responsive">
		</div>
		<div class="item">
			<img src="img/slider2.png" alt="Chicago" class="img-responsive">
		</div>
		<div class="item">
			<img src="img/slider3.png" alt="Chicago" class="img-responsive">
		</div>
		<div class="item">
			<img src="img/slider4.png" alt="Chicago" class="img-responsive">
		</div>


	</div> <!-- end owl-carousel -->
</div> <!-- end slider -->
<!--  end slide carousel -->

</header><!-- /header -->


<!-- Begin our-services	 -->
<div class="wow fadeIn services" data-wow-delay="0.5s">
	<div class="container">
		<div class="title text-center pt-5 pb-4">
			<h2 class="heading-title">Acronis Cyber Cloud</h2>
			<div class="ngan"></div>
			<p class="subtitle">Là một nền tảng cho phép cung cấp dịch vụ để cung cấp bảo vệ mạng một cách DỄ DÀNG, HIỆU QUẢ và AN TOÀN</p>
			<a href="{{ route('cyber') }}" target="_blank"><button type="button" class="btn btn-info m-2" style="font-family: RobRoboto Slab">CHI TIẾT</button></a>
		</div>
		<div class="services__content">
			<div class="row">
				<div class="col-xs-12 col-md-6 col-lg-3">
					<div class="icon-wrap"><img src="img/acronis_backup_cloud_2x.png" alt="" class="img-responsive icon-title"></div>
					<h3 class="heading"> Dịch vụ BAAS</h3>
					<p class="desc">Dịch vụ sao lưu và khôi phục dữ liệu theo mô hình điện toán đám mây, sử dụng các công nghệ hiện đại, tiên tiến và phát triển dựa vào mạng Internet ngày nay.</p>
					<div class="elm-btn">
						<a href="{{ route('baas') }}" target="_blank">Xem Thêm</a>
					</div>
				</div>
				<div class="col-xs-12 col-md-6 col-lg-3">
					<div class="icon-wrap"><img src="img/acronis_disaster_recovery_cloud_2x.png" alt="" class="img-responsive icon-title"></div>
					<h3 class="heading">Dịch vụ DRAAS</h3>
					<p class="desc">Dịch vụ khôi phục hạ tầng công nghệ thông tin do thiên tai lớn, ảnh hưởng đến cả hạ tầng công nghệ thông tin của một công ty, tổ chức, doanh nghiệp hoặc cả Datacenter.</p>
					<div class="elm-btn">
						<a href="{{ route('drass') }}" target="_blank">Xem Thêm</a>
					</div>
				</div>
				<div class="col-xs-12 col-md-6 col-lg-3">
					<div class="icon-wrap"><img src="img/acronis_files_cloud_2x.png" alt="" class="img-responsive icon-title"></i></div>
					<h3 class="heading">Dịch vụ SYNC & SHARE</h3>
					<p class="desc">Dịch vụ cung cấp đến người dùng di động có thể làm việc với nhau một cách an toàn qua việc truy cập, đồng bộ, chia sẻ một cách dễ dàng và an toàn với giải pháp lưu trữ trên Cloud. </p>
					<div class="elm-btn">
						<a href="{{ route('sync') }}" target="_blank">Xem Thêm</a>
					</div>
				</div>
				<div class="col-xs-12 col-md-6 col-lg-3	">
					<div class="icon-wrap">	<img src="img/acronis_notary_cloud_2x.png" alt="" class="img-responsive icon-title"></div>
					<h3 class="heading">Dịch vụ NOTARY</h3>
					<p class="desc">Dịch vụ sử dụng công nghệ tiên tiến của thế giới (blockchain) cho việc lưu trữ các files được chứng thực, chữ ký điện tử, và xác minh thông tin của bất kỳ doanh nghiệp nào.</p>
					<div class="elm-btn">
						<a href="{{ route('notary') }}" target="_blank">Xem Thêm</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div> <!-- end services -->

<div class="row-why-us">	
	<div class="row">
		<div class="col-xs-12 col-md-12 col-lg-6 wow fadeInLeft modal-video">
			<div class="modal-video__img">
				<img src="img/photo.png" alt="" class="img-responsive">
				<div class="icon-play-video js-video-button" data-video-id="xnGOquZwUqQ">
					<a href="https://www.youtube.com/watch?v=xnGOquZwUqQ"
					data-youtube="<iframe width='560' height='315' src='https://www.youtube.com/embed/xnGOquZwUqQ' frameborder='0' allowfullscreen></iframe>"
					class="youtube-demo"><i class="fa fa-play"></i></a>
				</div>
			</div>
		</div> <!-- end modal-video -->

	<div class="col-xs-12 col-md-12 col-lg-6 why-content wow fadeInRight">
			<div class="title text-center">
				<h2 class="heading-title">LÝ DO CHỌN BAAS ?</h2>
				<div class="ngan"></div>
			<p class="subtitle">Với mức độ bảo vệ cao, cùng việc sử dụng các tiêu chuẩn công nghệ mới, BaaS cho phép đưa toàn bộ hệ thống trở lại trạng thái trước khi gặp sự cố, dữ liệu sẽ được bảo vệ an toàn và khôi phục nhanh chóng khi sự cố xảy ra, giảm thiểu thời gian ngưng trệ, đảm bảo hệ thống sẽ luôn hoạt động liên tục.</p>
			</div>
			<div class="row">
				<div class="col-lg-7 col-xs-4 offset-lg-2 pb-2">
						<div id="circles-container" style="margin:0!important; height: auto!important;"> 
				<div id="main-circle-content"></div>
				<div id="circle">
					<div class="min-circle" data-inside="min-circle">
						<a href="img/imgs/7.jpg">
							<img src="img/imgs/thumb_1.jpg" alt="">
						</a>
						<!-- <div class="content-text">Sử dụng công nghệ của Acronis hàng đầu thế giới</div> -->
					</div>
					<div class="min-circle" data-inside="min-circle">
						<a href="img/imgs/2.jpg">
							<img src="img/imgs/thumb_2.jpg" alt="">
						</a>
						<!-- <div class="content-text">Linh hoạt lựa chọn một trong các nơi lưu trữ </div> -->

					</div>
					<div class="min-circle" data-inside="min-circle">
						<a href="img/imgs/3.jpg">
							<img src="img/imgs/thumb_3.jpg" alt="">
						</a>
					<!-- 	<div class="content-text">Thời gian khôi phục nhanh nhất thế giới</div> -->
					</div>
					<div class="min-circle" data-inside="min-circle">
						<a href="img/imgs/4.jpg">
							<img src="img/imgs/thumb_4.jpg" alt="">
						</a>
						<!-- <div class="content-text">Công nghệ chống Ransomware bằng AI duy nhất</div> -->
					</div>
					<div class="min-circle" data-inside="min-circle">
						<a href="img/imgs/5.jpg">
							<img src="img/imgs/thumb_5.jpg" alt="">
						</a>
						<!-- <div class="content-text">Caption 7</div> -->
					</div>
					<div class="min-circle" data-inside="min-circle">
						<a href="img/imgs/6.jpg">
							<img src="img/imgs/thumb_6.jpg" alt="">
						</a>
						<!-- <div class="content-text">Quản lý tập trung, một giao diện cho tất cả hạ tầng công nghệ thông tin</div> -->
					</div>

				</div>
			</div>
				</div>
		
			</div>
			
		</div> <!-- end why-content -->
	</div> <!-- end row -->
</div> <!-- end row-why-us -->

<!-- BEGIN Count parrallax -->
<div class='wow fadeIn section-space parallax parallax-funfactor light-txt'>
	<div class="container">
		<div class="title text-center pt-5">
			<h2 class="heading-title">Thông tin Acronis toàn cầu</h2>
			<div class="ngan"></div>
		</div><!--  end title -->
		<div class="row">
			<div class="col-sm-12 col-md-3 wow fadeInUp">
				<div class="fun-box text-center">
					<div class="flag"><img src="img/icon_1.png" alt="" class="img-responsive"></div>
					<div class="value-animated timer count-title count-number" data-to="25" data-speed="2000">25+</div>
					<div class="ngan"></div>
					<div class="title">Văn phòng tại 18 nước</div>
				</div>
			</div> <!-- end col -->
			<div class="col-sm-12 col-md-3 wow fadeInUp">
				<div class="fun-box text-center">
					<div class="flag"><img src="img/icon_2.png" alt="" class="img-responsive"></div>
					<div class="value-animated timer count-title count-number" data-to="20" data-speed="2000">20</div>
					<div class="ngan"></div>
					<div class="title">Hỗ trợ hơn 20 ngôn ngữ</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-3 wow fadeInUp">
				<div class="fun-box text-center">
					<div class="flag"><img src="img/icon_3.png" alt="" class="img-responsive"></div>
					<div class="value-animated timer count-title count-number" data-to="1000" data-speed="2000">1,000</div>
					<div class="ngan"></div>
					<div class="title">1,000 nhân viên trên toàn cầu</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-3 wow fadeInUp">
				<div class="fun-box text-center">
					<div class="flag"><img src="img/icon_4.png" alt="" class="img-responsive"></div>
					<div class="value-animated timer count-title count-number" data-to="5000" data-speed="2000">500,000+</div>
					<div class="ngan"></div>
					<div class="title">5,000 khách hàng doanh nghiệp</div>
				</div>
			</div>
		</div>
	</div> <!-- end container -->
	<!-- end counter -->
</div> <!-- END Count parrallax -->

<!-- BEGIN GALLERY -->
<div class="wow slideInUp gallery">
	<div class="container">
		<div class="title text-center pt-5 pb-4">
			<h2 class="heading-title">SẢN PHẨM KHÁC</h2>
			<div class="ngan"></div>
			<p class="subtitle">Ngoài các sản phẩm được tích hợp lên nền tảng Cloud, Acronis cũng cung cấp các dạng license, cũng như cho phép khách hàng có thể mua gói Cloud và backup ở local <br> (Thông tin chi tiết, vui lòng liên hệ hoặc để lại thông tin nhu cầu khách hàng cần)</p>
		</div><!--  end title -->
		<div class="row">
			<div class="owl-carousel owl-img owl-theme">
				<div class="item">
					<div class="gallery-box">
						<div class="inner">
							<div class="hover-img">
								<div class="gallery-image">
									<img class="img-responsive" src="img/sp1_smail.png" ></img>
								</div>
								<div class="text">
									<div class="text__icon" data-src="img/sp1.jpg"><i class="fa fa-search-plus"></i></div>
									<h2 class="text__title"><a href="#">CHI TIẾT</a></h2>
								</div>
							</div>
						</div>
					</div>
				</div> <!-- end col-4 item -->
				<div class="item">
					<div>
						<div class="gallery-box">
							<div class="inner">
								<div class="hover-img">
									<div class="gallery-image">
										<img class="img-responsive" src="img/sp2_smail.png" ></img>
									</div>
									<div class="text">
										<div class="text__icon" data-src="img/sp2.jpg"><i class="fa fa-search-plus"></i></div>
										<h2 class="text__title"><a href="#">CHI TIẾT</a></h2>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div> <!-- end col-4 item-->
				<div class="item">
					<div>
						<div class="gallery-box">
							<div class="inner">
								<div class="hover-img">
									<div class="gallery-image" >
										<img class="img-responsive" src="img/sp3_smail.png"></img>
									</div>
									<div class="text">
										<div class="text__icon" data-src="img/sp3.jpg"><i class="fa fa-search-plus"></i></div>
										<h2 class="text__title"><a href="#">CHI TIẾT</a></h2>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div> <!-- end col-4 item-->
				<div class="item">
					<div>
						<div class="gallery-box">
							<div class="inner">
								<div class="hover-img">
									<div class="gallery-image">
										<img class="img-responsive" src="img/sp4_smail.png" ></img>
									</div>
									<div class="text">
										<div class="text__icon" data-src="img/sp4.jpg" ><i class="fa fa-search-plus"></i></div>
										<h2 class="text__title"><a href="#">CHI TIẾT</a></h2>
									</div>
								</div>
							</div>
						</div>
					</div>

				</div> <!-- end col-4 item-->
			</div> <!-- END carousel-owl -->
			<div class="w-100"></div>
			<br>
			<!-- 	<button type="button" class="btn btn-primary text-xs-center more-read">Xem thêm</button> -->
		</div> <!-- end row -->

	</div> <!-- end row -->
</div> <!-- end gallery -->

<!-- BEGIN certified(chung-nhan) -->
<div class="wow fadeInUp certified">	
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-xs-12 col-md-12 col-lg-9">
				<div class="row">
					<div class="col-12 col-md-3">
						<div class="certified__logo text-center">
							<img src="img/cloud2.png" alt="" class="img-responsive">
						</div>
					</div> <!-- end col-3 -->
					<div class="col-12 col-md-9">
						<div class="certified__content text-center text-md-left">
							<div class="headding">Chứng chỉ và cam kết của BAAS</div>
							<div class="desc">Để đảm bảo các yêu cầu tư vấn, hỗ trợ khách hàng được tốt nhất, chúng tôi có các chứng chỉ do Acronis cấp cho nhà cung cấp tại Việt Nam, cũng như các cam kết dịch vụ (SLA). <br>
								Ngoài ra các đối tác cũng sẽ được đào tạo, cũng như cấp chứng chỉ dành cho các nhà cung cấp của BAAS.VN tại Việt Nam
							</div>
							<div class="elm-btn">
								<a href="" class="elm-btn__white" data-toggle="modal" data-target="#myModal">Xem Chứng Chỉ</a>
							</div>
							<!-- The Modal -->
							<div class="modal fade" id="myModal">
								<div class="modal-dialog modal-lg">
									<div class="modal-content">

										<!-- Modal Header -->
										<div class="modal-header">
											<h4 class="modal-title">CHỨNG CHỈ ACRONIS CẤP</h4>
											<button type="button" class="close" data-dismiss="modal">&times;</button>
										</div>

										<!-- Modal body -->
										<div class="modal-body">
											<img src="img/chung-chi-1.jpg" alt="chung-chi" class="img-responsive">
											<img src="img/chung-chi-2.png" alt="chung-chi" class="img-responsive">
											<img src="img/chung-chi-3.jpg" alt="chung-chi" class="img-responsive">
										</div>


										<!-- Modal footer -->
										<div class="modal-footer">
											<button type="button" class="btn btn-danger" data-dismiss="modal">CLOSE</button>
										</div>

									</div>
								</div>
							</div>
						</div>

					</div>
				</div> <!-- end row -->
			</div><!--  end col-9 content-center -->
		</div>
	</div>
</div>
<!-- END certified(chung-nhan) -->

<!-- BEGIN about -->
<div class="wow zoomIn about">	
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-md-12 col-lg-6 about__img">
				<div class="row">
					<div class="col-6 photo">
						<img src="img/bk1.jpg" alt="" class="img-responsive ">
					</div>
					<div class="col-6 photo">
						<img src="img/bk2.jpg" alt="" class="img-responsive ">

					</div>
				</div>
			</div> <!-- end img-about -->

			<div class="col-xs-12 col-md-12 col-lg-6 about__content">
				<div class="title">
					<h2 class="heading-title">Quá trình phát triển</h2>
					<div class="ngan"></div>
					<p class="subtitle">BAAS (Backup as a service) sản phẩm ra mắt tháng 5 năm 2015 tại sự kiện Cloud8. Sử dụng công nghệ từ Acronis.  
						<br>
						Với xu hướng công nghệ Cloud Computing đang trở nên phổ biến, cũng như tiện dụng như hiện nay, thì BAAS cũng đang dần hoàn thiện với việc tích hợp gần như đầy đủ để các tính năng, tương thích mọi thiết bị, nền tảng, ứng dụng trên thế giới.<br>
						Ngoài ra không chỉ là Backup dữ liệu khách hàng, Acronis hướng đến một giải pháp tổng thể, với đầy đủ các yêu cầu của mọi đối tượng khách hàng, vì vậy Acronis đã thay đổi từ ACRONIS DATA CLOUD thành ACRONIS CYBER CLOUD với đầy đủ các tiêu chí SAPAS
					</p>
					<a href="#" class="wprt-button solid accent">
						<span>XEM THÊM </span>
					</a>
				</div>

			</div> <!-- end why-content -->
		</div> <!-- end row about -->
	</div> <!-- end container-about -->
</div> <!-- end row-why-us -->
<!-- END about -->

<!-- BEGIN feed-back custommer -->
<div class="wow fadeIn feed-back" data-wow-delay="0.5s">
	<div class="container">
		<div class="title text-center pt-5 pb-4">
			<h2 class="heading-title">Cảm nhận khách hàng</h2>
			<div class="ngan"></div>
			<p class="subtitle">Dưới đây là một số ý kiến phản hồi & cảm nhận của một vài khách hàng, doanh nghiệp khi sử dụng Dịch vụ Backup của chúng tôi.</p>
		</div><!--  end title -->
		<div class="row">
			<div class="owl-carousel owl-carousel-fb owl-theme">
				<div class="item">
					<div class="inner">
						<div class="thumb">
							<img src="img/customer1.jpg" alt="Image">
						</div>

						<blockquote class="text">
							<p class="maxim">"Đừng để mất bò mới lo làm chuồng" <br>Dữ liệu ngày nay là sống còn của doanh nghiệp, chúng tôi không phải là Backup (sao lưu) dữ liệu cho khách hàng, mà là giải pháp tổng thể về Cyber cho hạ tầng CNTT của doanh nghiệp</p>
							<div class="name-pos">
								<h6 class="name">Phạm Ngọc Phúc</h6>
								<span class="position">Mr Backup</span>
							</div>
						</blockquote>
					</div>
				</div> <!-- end item -->
				<div class="item">
					<div class="inner inner--long">
						<div class="thumb">
							<img src="img/customer2.jpg" alt="Image">
						</div>
						<blockquote class="text">
							<p class="maxim">Nhờ dùng dịch vụ Backup ngay từ đầu khi xây dựng Website, nên tôi đã không làm mất đi cơ sở dữ liệu của công ty, danh sách các khách hàng thực sự tiềm năng cùng với những khách hàng lớn mà chắc chắn rằng họ sẽ tiếp tục quay lại mua hàng của tôi</p>
							<div class="name-pos">
								<h6 class="name">Lê Văn Việt</h6>
								<span class="position">CEO LEVATE</span>
							</div>
						</blockquote>
					</div>
				</div> <!-- end item -->
				<div class="item">
					<div class="inner">
						<div class="thumb">
							<img src="img/customer-3.png" alt="Image" >
						</div>

						<blockquote class="text">
							<p class="maxim">Đối với những người làm trong môi trường doanh nghiệp như tôi, dữ liệu là một phần rất là quan trọng, không thể để mất được. Từ khi biết đến dịch vụ Backup, tôi không còn lo lắng về vấn đề này nữa.</p>
							<div class="name-pos">
								<h6 class="name">Nguyễn Văn Toàn</h6>
								<span class="position">CEO FINATECH</span>
							</div>
						</blockquote>
					</div>
				</div> <!-- end item -->
				<div class="item">
					<div class="inner inner--long">
						<div class="thumb">
							<img src="img/customer4.jpg" alt="Image">
						</div>
						<blockquote class="text">
							<p class="maxim">Dữ Liệu được Backup hằng ngày và có thể được phục hồi lại bất cứ khi nào cần. Tôi không còn lo lắng đối với việc lưu trữ và sợ bị đánh mất dữ liệu của hàng ngàn học sinh trong trường nữa. Cảm ơn dịch vụ của phía công ty bạn rất nhiều.</p>
							<div class="name-pos">
								<h6 class="name">Trần Thị Thu Thủy</h6>
								<span class="position">Hiệu Trưởng Mầm Non</span>
							</div>
						</blockquote>
					</div>
				</div> <!-- end item -->

			</div> <!-- end owl-carousel -->
		</div> <!-- end row -->
	</div><!--  end container -->
</div><!-- END feed-back custommer -->
@include('baas.layout.footer')