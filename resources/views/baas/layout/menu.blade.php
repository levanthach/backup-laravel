				<!-- begin menu-header -->
				<div class="menu-header">
					<!-- begin container menu-header -->
					<div class="container">
						<!-- ------------------------------- -->
						<!-- BEGIN navbar mobile -->
						<nav class="navbar navbar-expand-md">
							<div class="menu-toggle">
								<a href="{{ route('trang-chu') }}">
									<img src="img/logo.jpg" alt="" class="img-responsive">
								</a>
								<button type="button" id="menu-btn">
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
							</div>
							<!-- Responsive Menu Structure-->
							<div class="logo d-none d-lg-block mr-5">
								<a href="{{ route('trang-chu') }}">
									<img src="img/logo.jpg" alt="" class="img-responsive">
								</a>
							</div>
							<ul id="respMenu" class="ace-responsive-menu" data-menu-style="horizontal">
								<li>
									<a href="{{ route('trang-chu') }}">
										<i class="fa fa-home" aria-hidden="true"></i>
										<span class="title">Trang Chủ</span>
									</a>
								</li>
								<li>
									<a href="javascript:;">
										<i class="fa fa-user-shield" aria-hidden="true"></i>
										<span class="title">Dịch vụ</span>
									</a>
									<!-- Level Two-->
									<ul>
										<li>
											<a href="{{ route('baas') }}" target="_blank">
												<img src="img/acronis_backup_cloud_2x.png" alt="" class="img-responsive icon-img">
												Dịch vụ BaaS	
											</a>
										</li>
										<li>
											<a href="{{ route('drass') }}" target="_blank">
												<img src="img/acronis_disaster_recovery_cloud_2x.png" alt="" class="img-responsive icon-img">
												Dịch vụ DRaaS		
											</a>
										</li>
										<li>
											<a href="{{ route('sync') }}" target="_blank">
												<img src="img/acronis_files_cloud_2x.png" alt="" class="img-responsive icon-img">
												Dịch vụ Sync & Share			
											</a>
										</li>
										<li>
											<a href="{{ route('notary') }}" target="_blank">
												<img src="img/acronis_notary_cloud_2x.png" alt="" class="img-responsive icon-img">
												Dịch vụ Notary				 
											</a>
										</li>
										<li>
											<a href="{{ route('migration') }}" target="_blank">
												<i class="fas fa-cogs" aria-hidden="true"></i>
												Server Migration				
											</a>
										</li>
										<li>
											<a href="javascript:;" target="_blank">
												<i class="fa fa-server" aria-hidden="true"></i>
												Dịch vụ Khác				
											</a>
										</li> 

									</ul>	
								</li>
								<li>
									<a href="{{ route('hop-tac') }}">
										<i class="fa fa-handshake" aria-hidden="true"></i>
										<span class="title">Đối tác</span>
									</a>

								</li>
								<li>
									<a href="javascript:;">
										<i class="fa fa-file-word" aria-hidden="true"></i>
										<span class="title">Tài liệu</span>
									</a>
									<!-- Level Two-->
									<ul>
										<li>
											<a href="tai-lieu/PP_What_is_New_in_Acronis_Cyber_Cloud_8.0_EN-US_190716.pptx">
												<i class="fas fa-sync-alt" aria-hidden="true"></i>Cập nhật sản phẩm
											</a>
											<a href="{{ route('documents') }}" target="_blank">
												<i class="fas fa-book" aria-hidden="true"></i>Documents
											</a>
											<a href="{{ route('video') }}" target="_blank">
												<i class="fa fa-video" aria-hidden="true"></i>Videos
											</a>
											<a href="https://kb.acronis.com/" target="_blank">
												<i class="fa fa-question" aria-hidden="true"></i>Knowledge Base (KB)
											</a>
										</li>
										
										
									</ul>		
								</li>
								<li>
									<a href="{{ route('tin-tuc') }}">
										<i class="fa fa-newspaper" aria-hidden="true"></i>
										<span class="title">Tin tức</span>
									</a>
								</li>
								<li class="last-child">
									<a href="{{ route('lien-he') }}">
										<i class="fa fa-envelope" aria-hidden="true"></i>
										<span class="title">Liên Hệ</span>
									</a>
								</li>
							</ul>
						</div> <!--  end menu header -->
					</nav> <!-- END navbar mobile -->
				</div> <!-- end container-header -->
			</div> <!-- end header-wrap -->
			@yield('main-content')
