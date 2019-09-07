<?php require 'inc/frontend/views/head_start.php'; ?>
<?php require 'inc/frontend/views/head_end.php'; ?>
			<!--Inner Home End-->
			<!--Main Start-->
			<main id="wt-main" class="wt-main wt-haslayout wt-innerbgcolor">
				<div class="wt-haslayout wt-main-section">
					<!-- User Listing Start-->
					<div class="container">
						<div class="row">
							<div id="wt-twocolumns" class="wt-twocolumns wt-haslayout" v-for="result in item.Data">
								<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 float-left">
									<div class="wt-proposalholder">
										<span class="wt-featuredtag"><img src="/../../../assets/images/featured.png" alt="img description" data-tipso="Plus Member" class="template-content tipso_style"></span>
										<div class="wt-proposalhead">
											<h2>{{result.AdvertisementInfo.Tittle}}</h2>
											<ul class="wt-userlisting-breadcrumb wt-userlisting-breadcrumbvtwo">
												<li><span><i class="fas fa-lira-sign wt-viewjobclock"></i> {{result.AdvertisementInfo.Price}} </span></li>
												<li><span class="viewjobclockData"><i class="far fa-clock"></i> {{result.AdvertisementInfo.DeadLine}}</span></li>
											</ul>
										</div>
										<div class="wt-btnarea"><a href="javascrip:void(0);" class="wt-btn">Teklif Gönder</a></div>
									</div>
								</div>
								<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7 col-xl-8 float-left">
									<div class="wt-projectdetail-holder">
										<div class="wt-projectdetail">
											<div class="wt-title">
												<h3>Proje Detay</h3>
											</div>
											<div class="wt-description">
												<p>{{result.AdvertisementInfo.Explanation}}</p>
											</div>
										</div>
										<div class="wt-skillsrequired">
											<div class="wt-title">
												<h3>Gerekli Yetenekler</h3>
											</div>
											<div class="wt-tag wt-widgettag">
												<a href="javascript:void(0);">{{result.AdvertisementInfo.RequiredSkills}}</a>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 col-xl-4 float-left">
									<aside id="wt-sidebar" class="wt-sidebar">
										<div class="wt-proposalsr">
											<div class="wt-proposalsrcontent">
												<span class="wt-proposalsicon"><i class="fa fa-angle-double-down"></i><i class="fa fa-newspaper"></i></span>
												<div class="wt-title">
													<h3>{{150}}</h3>
													<span>Alınan Teklif Sayısı</span>
												</div>
											</div>
											<div class="tg-authorcodescan">
												<figure class="tg-qrcodeimg" style="margin: 0px 0px 20px 0px !important;">
													<img src="/../../../assets/images/qrcode.png" alt="img description">
												</figure>
												<div class="tg-qrcodedetail">
													<div class="tg-qrcodefeat">
													<h3>Mobil uygulama için <span>QR kodu </span>telefona okutunuz.</h3>
													</div>
												</div>
											</div>
										</div>
										<div class="wt-widget wt-companysinfo-jobsingle">
											<div class="wt-companysdetails">
												<figure class="wt-companysimg">
													<img v-bind:src="result.UserInfo.PhotoSrc" alt="img description">
												</figure>
												<div class="wt-companysinfo">
													<figure><img  v-bind:src="result.UserInfo.PhotoSrc" alt="img description"></figure>
													<div class="wt-title">
														<h2>{{result.UserInfo.Name}}</h2>
													</div>
													<ul class="wt-postarticlemeta">
														<li>
															<a href="javascript:void(0);">
																<span>İşlere Bak</span>
															</a>
														</li>
														<li>
															<a href="javascript:void(0);">
																<span>Profil</span>
															</a>
														</li>
													</ul>
												</div>
											</div>
										</div>
										<div class="wt-widget wt-sharejob">
											<div class="wt-widgettitle">
												<h2>İşi Paylaş</h2>
											</div>
											<div class="wt-widgetcontent">
												<ul class="wt-socialiconssimple">
													<li class="wt-facebook"><a href="https://www.facebook.com/sharer/sharer.php?u=#url" target="_blank"><i class="fab fa-facebook-f"></i>Facebook</a></li>
													<li class="wt-twitter"><a href="http://www.twitter.com/share?url=#url"><i class="fab fa-twitter"></i>Twitter</a></li>
													<li class="wt-linkedin"><a href="https://www.linkedin.com/sharing/share-offsite/?url=#url"><i class="fab fa-linkedin-in"></i>Linkedin</a></li>
												</ul>
											</div>
										</div>
									</aside>
								</div>
							</div>
						</div>
					</div>
					<!-- User Listing End-->
				</div>
			</main>

<?php require 'inc/frontend/views/footer_start.php'; ?>
<?php require 'inc/frontend/views/footer_end.php'; ?>