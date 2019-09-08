<?php require 'inc/frontend/views/head_start.php'; ?>
<?php require 'inc/frontend/views/head_end.php'; ?>

			<!--Header End-->
			<!--Home Banner Start-->
			<div class="wt-haslayout wt-bannerholder">
				<div class="container">
					<div class="row">
						<div class="col-12 col-sm-12 col-md-12 col-lg-5">
							<div class="wt-bannerimages">
								<figure class="wt-bannermanimg" data-tilt>
									<img src="/../../../assets/images/bannerimg/img-01.png" alt="img description">
									<img src="/../../../assets/images/bannerimg/img-02.png" class="wt-bannermanimgone" alt="img description">
									<img src="/../../../assets/images/bannerimg/img-03.png" class="wt-bannermanimgtwo" alt="img description">
								</figure>
							</div>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-7">
							<div class="wt-bannercontent">
								<div class="wt-bannerhead">
									<div class="wt-title">
										<h1><span>Yetenekli freelancer'larla</span> daha çok iş yapın.</h1>
									</div>
									<div class="wt-description">
										<p>Willingly, yetenekli freelancer'ların kendilerine uygun işletmeler ve girişimlerle buluştuğu, topluluk mantığıyla ​i​şleyen ​​özgürlükçü bir çalışma platformudur.</p>
									</div>
								</div>
								<form class="wt-formtheme wt-formbanner" method="GET" id="searchDataForm">
									<fieldset>
										<div class="form-group">
											<input type="text" name="fullname" id="SearchKey" class="form-control" placeholder="Ne tür bir işe ihtiyacın var?">
											<div class="wt-formoptions">
												<div class="wt-dropdown">
													<span>In: <em class="selected-search-type">Willingers </em><i class="lnr lnr-chevron-down"></i></span>
												</div>
												<div class="wt-radioholder">
													<span class="wt-radio">
														<input id="wt-freelancers" data-title="Willingers" type="radio" name="SearchType" value="Willingers" checked>
														<label for="wt-freelancers">Willingers</label>
													</span>
													<span class="wt-radio">
														<input id="wt-jobs"  data-title="MeetUp" type="radio"  name="SearchType" value="MeetUp">
														<label for="wt-jobs">İhtiyaçlar</label>
													</span>
													<input type="hidden" value="1" name="page" id="pageIndex" />
												</div>
												<a href="javascript:;" class="wt-searchbtn" onclick="SearchBtn();"><i class="lnr lnr-magnifier"></i></a>
											</div>
										</div>
									</fieldset>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--Home Banner End-->
			<!--Main Start-->
			<main id="wt-main" class="wt-main wt-haslayout">
				<!--Categories Start-->
				<section class="wt-haslayout wt-main-section">
					<div class="container">
						<div class="row justify-content-md-center">
							<div class="col-xs-12 col-sm-12 col-md-8 push-md-2 col-lg-6 push-lg-3">
								<div class="wt-sectionhead wt-textcenter">
									<div class="wt-sectiontitle">
										<h2>Kategoriler</h2>
										<span>Ne tarz bir işe ihtiyacınız var?</span>
									</div>
								</div>
							</div>
							<div class="wt-categoryexpl">
								<div class="col-12 col-sm-12 col-md-3 col-lg-3 float-left">
									<div class="wt-categorycontent">
										<figure><img src="/../../../assets/images/categories/img-01.png" alt="image description"></figure>
										<div class="wt-cattitle">
											<h3><a href="javascrip:void(0)">Grafik Tasarım</a></h3>
										</div>
										<div class="wt-categoryslidup">
											<a href="https://willingly.tk/userlisting.php/?searchType=1&page=1">Keşfet <i class="fa fa-arrow-right"></i></a>
										</div>
									</div>
								</div>
								<div class="col-12 col-sm-12 col-md-3 col-lg-3 float-left">
									<div class="wt-categorycontent">
										<figure><img src="/../../../assets/images/categories/img-08.png" alt="image description"></figure>
										<div class="wt-cattitle">
											<h3><a href="javascrip:void(0);">İnternet Reklamcılığı</a></h3>
										</div>
										<div class="wt-categoryslidup">
											<a href="https://willingly.tk/userlisting.php/?searchType=1&page=1">Keşfet <i class="fa fa-arrow-right"></i></a>
										</div>
									</div>
								</div>
								<div class="col-12 col-sm-12 col-md-3 col-lg-3 float-left">
									<div class="wt-categorycontent">
										<figure><img src="/../../../assets/images/categories/img-02.png" alt="image description"></figure>
										<div class="wt-cattitle">
											<h3><a href="javascrip:void(0);">Yazi &amp; Çeviri</a></h3>
										</div>
										<div class="wt-categoryslidup">
											<a href="https://willingly.tk/userlisting.php/?searchType=1&page=1">Keşfet <i class="fa fa-arrow-right"></i></a>
										</div>
									</div>
								</div>
								<div class="col-12 col-sm-12 col-md-3 col-lg-3 float-left">
									<div class="wt-categorycontent">
										<figure><img src="/../../../assets/images/categories/img-03.png" alt="image description"></figure>
										<div class="wt-cattitle">
											<h3><a href="javascrip:void(0);">Video &amp; Animasyon</a></h3>
										</div>
										<div class="wt-categoryslidup">
											<a href="https://willingly.tk/userlisting.php/?searchType=1&page=1">Keşfet <i class="fa fa-arrow-right"></i></a>
										</div>
									</div>
								</div>
								<div class="col-12 col-sm-12 col-md-3 col-lg-3 float-left">
									<div class="wt-categorycontent">
										<figure><img src="/../../../assets/images/categories/img-04.png" alt="image description"></figure>
										<div class="wt-cattitle">
											<h3><a href="javascrip:void(0);">Ses &amp; Müzik</a></h3>
										</div>
										<div class="wt-categoryslidup">
											<a href="https://willingly.tk/userlisting.php/?searchType=1&page=1">Keşfet <i class="fa fa-arrow-right"></i></a>
										</div>
									</div>
								</div>
								<div class="col-12 col-sm-12 col-md-3 col-lg-3 float-left">
									<div class="wt-categorycontent">
										<figure><img src="/../../../assets/images/categories/img-05.png" alt="image description"></figure>
										<div class="wt-cattitle">
											<h3><a href="javascrip:void(0);">Yazılım &amp; Teknoloji</a></h3>
										</div>
										<div class="wt-categoryslidup">
											<a href="https://willingly.tk/userlisting.php/?searchType=1&page=1">Keşfet <i class="fa fa-arrow-right"></i></a>
										</div>
									</div>
								</div>
								<div class="col-12 col-sm-12 col-md-3 col-lg-3 float-left">
									<div class="wt-categorycontent">
										<figure><img src="/../../../assets/images/categories/img-06.png" alt="image description"></figure>
										<div class="wt-cattitle">
											<h3><a href="javascrip:void(0);">İş Yönetimi</a></h3>
										</div>
										<div class="wt-categoryslidup">
											<a href="https://willingly.tk/userlisting.php/?searchType=1&page=1">Keşfet <i class="fa fa-arrow-right"></i></a>
										</div>
									</div>
								</div>
								<div class="col-12 col-sm-12 col-md-3 col-lg-3 float-left">
									<div class="wt-categorycontent">
										<figure><img src="/../../../assets/images/categories/img-07.png" alt="image description"></figure>
										<div class="wt-cattitle">
											<h3><a href="javascrip:void(0);">Eğlence &amp; Yaşam Tarzı</a></h3>
										</div>
										<div class="wt-categoryslidup">
											<a href="https://willingly.tk/userlisting.php/?searchType=1&page=1">Keşfet <i class="fa fa-arrow-right"></i></a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<!--Categories End-->
				<!--Join Company Info Start-->
				<section class="wt-haslayout wt-main-section wt-paddingnull wt-companyinfohold">
					<div class="container">
						<div class="row">
							<div class="col-12 col-sm-12 col-md-12 col-lg-12">
								<div class="wt-companydetails">
									<div class="wt-companycontent">
										<div class="wt-companyinfotitle">
											<h2>Organizatör Olarak Başla</h2>
										</div>
										<div class="wt-description">
										</div>
										<div class="wt-btnarea">
											<a href="register.php" class="wt-btn">Hemen Üye Ol</a>
										</div>
									</div>
									<div class="wt-companycontent">
										<div class="wt-companyinfotitle">
											<h2>Willingers Olarak Başla</h2>
										</div>
										<div class="wt-description">
										</div>
										<div class="wt-btnarea">
											<a href="register.php" class="wt-btn">Hemen Üye Ol</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
			</main>
			<!--Main End-->
			<!--Footer Start-->
<?php require 'inc/frontend/views/footer_start.php'; ?>
<?php require 'inc/frontend/views/footer_end.php'; ?>