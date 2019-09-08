<?php require 'inc/frontend/views/head_start.php'; ?>
<?php require 'inc/frontend/views/head_end.php'; ?>
            
<div class="wt-haslayout wt-innerbannerholder wt-innerbannerholdervtwo">
				<div class="container">
					<div class="row justify-content-md-center">
						<div class="col-xs-12 col-sm-12 col-md-8 push-md-2 col-lg-6 push-lg-3">
						</div>
					</div>
				</div>
			</div>
			<!--Inner Home End-->
			<!--Main Start-->
			<main id="wt-main" class="wt-main wt-haslayout wt-innerbgcolor">
				<!-- User Profile Start-->
				<div class="wt-main-section wt-paddingtopnull wt-haslayout">
					<div class="container">
						<div class="row">	
							<div class="col-12 col-sm-12 col-md-12 col-lg-12 float-left">
								<div class="wt-userprofileholder" v-for="result in item.Data">
									<span class="wt-featuredtag"><img src="/../../../assets/images/featured.png" alt="img description" data-tipso="Plus Member" class="template-content tipso_style"></span>
									<div class="col-12 col-sm-12 col-md-12 col-lg-3 float-left">
										<div class="row">
											<div class="wt-userprofile">
												<figure>
													<img src="/../../../assets/images/profile/img-01.jpg" alt="img description">
												</figure>
												<div class="wt-title">
													<h3><i class="fa fa-check-circle"></i> {{result.Name}}</h3>
													<span>{{result.AdvertisementInfo.AdvertisementRate}}/5 <a class="javascript:void(0);">(150 Feedback)</a> <br>Member since {{result.AdvertisementInfo.MemberDate}} </span>
												</div>
											</div>
										</div>
									</div>
									<div class="col-12 col-sm-12 col-md-12 col-lg-9 float-left">
										<div class="row">
											<div class="wt-proposalhead wt-userdetails">
												<h2>{{result.Tittle}}</h2>
												<ul class="wt-userlisting-breadcrumb wt-userlisting-breadcrumbvtwo">
													<li><span><i class="far fa-money-bill-alt"></i> {{result.Price}}</span></li>
												</ul>
												<div class="wt-description">
                                                    <p>
                                                        {{result.AdvertisementInfo.Explanation}}
                                                    </p>
												</div>
											</div>
											<div id="wt-statistics" class="wt-statistics wt-profilecounter">
												<div class="wt-statisticcontent wt-countercolor1">
													<h3 data-from="0" data-to="03" data-speed="800" data-refresh-interval="03">03</h3>
													<h4>Devam Eden <br>Projeler</h4>
												</div>
												<div class="wt-statisticcontent wt-countercolor2">
													<h3 data-from="0" data-to="1503" data-speed="8000" data-refresh-interval="100">1503</h3>
													<h4>Biten <br>Projeler</h4>
												</div>
												<div class="wt-statisticcontent wt-countercolor4">
													<h3 data-from="0" data-to="02" data-speed="800" data-refresh-interval="02">02</h3>
													<h4>İptal Edilen <br>Projeler</h4>
												</div>
												<div class="wt-statisticcontent wt-countercolor3">
                                                    <h3 data-from="0" data-to="25" data-speed="8000" data-refresh-interval="100">10</h3>
                                                    <em>Gün</em>
													<h4>Süre</h4>
												</div>
												<div class="wt-description">
													<a href="javascript:void(0);" class="wt-btn" data-toggle="modal" data-target="#reviewermodal">Teklif Gönder</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- User Profile End-->
					<!-- User Listing Start-->
					<div class="container">
						<div class="row">
							<div id="wt-twocolumns" class="wt-twocolumns wt-haslayout">
								<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7 col-xl-8 float-left">
									<div class="wt-usersingle">
										<div class="wt-experience">
											<div class="wt-usertitle">
												<h2>Deneyimler</h2>
											</div>
											<div class="wt-experiencelisting-hold">
												<div class="wt-experiencelisting wt-bgcolor">
													<div class="wt-title">
														<h3>Java Yazilim Uzmanligi</h3>
													</div>
													<div class="wt-experiencecontent">
														<ul class="wt-userlisting-breadcrumb">
															<li><span><i class="far fa-building"></i> Asli Boluk</span></li>
															<li><span><i class="far fa-calendar"></i> Aug 2019</span></li>
														</ul>
														<div class="wt-description">
															<p>“ Java öğrenmek isteyen arkadaşlar! Java’yı' Dersleri anlaşılır ve akıcı. Dinlerken keyif alıyorsunuz. Bire bir özel sorularınıza yanıt alıyorsunuz. Bu fırsat kaçmaz! ”</p>
														</div>
													</div>
												</div>
												<div class="divheight"></div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 col-xl-4 float-left">
									<aside id="wt-sidebar" class="wt-sidebar">
										<div id="wt-ourskill" class="wt-widget">
											<div class="wt-widgettitle">
												<h2>Beceriler</h2>
											</div>
											<div class="wt-widgetcontent wt-skillscontent">
												<div class="wt-skillholder" data-percent="90%" v-for="result in item.Data">
													<span>{{result.AdvertisementSkills}}</span>
													<div class="wt-skillbarholder"><div class="wt-skillbar"></div></div>
												</div>
											</div>
										</div>
										<div class="wt-proposalsr">
											<div class="tg-authorcodescan tg-authorcodescanvtwo">
												<figure class="tg-qrcodeimg">
													<img src="/../../../assets/images/qrcode.png" alt="img description">
												</figure>
												<div class="tg-qrcodedetail">
													<span class="lnr lnr-laptop-phone"></span>
													<div class="tg-qrcodefeat">
														<h3>Mobil uygulama için <span>QR kodu </span>telefona okutunuz.</h3>
													</div>
												</div>
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
            <div class="modal fade wt-offerpopup" tabindex="-1" role="dialog" id="reviewermodal">
		<div class="modal-dialog" role="document">
			<div class="wt-modalcontent modal-content">
				<div class="wt-popuptitle">
					<h2>Freelancer'a Teklif Gönder</h2>
					<a href="javascript;void(0);" class="wt-closebtn close"><i class="fa fa-close" data-dismiss="modal" aria-label="Close"></i></a>
				</div>
				<div class="modal-body">
					<div class="wt-projectdropdown-hold">
						<div class="wt-projectdropdown">
							<div class="wt-projectselect">
								<figure><img src="/../../../assets/images/thumbnail/img-07.jpg" alt="img description"></figure>
								<div class="wt-projectselect-content">
									<h3>{{result.Tittle}}</h3>
									<span><i class="lnr lnr-calendar-full"></i> Bitiş Tarihi : {{result.BitisTarihi}}</span>
								</div>
							</div>
						</div>
						<div class="wt-projectdropdown-option">
							<div class="wt-projectselect">
								<figure><img src="/../../../assets/images/thumbnail/img-07.jpg" alt="img description"></figure>
								<div class="wt-projectselect-content">
									<h3>{{result.Tittle}}</h3>
									<span><i class="lnr lnr-calendar-full"></i> Bitiş Tarihi : {{result.BitisTarihi}}</span>
								</div>
							</div>
						</div>
					</div>
					<form class="wt-formtheme wt-formpopup">
						<fieldset>
							<div class="form-group">
								<textarea class="form-control" id="txtOffer" placeholder="Freelancer'a teklifiniz nedir ?*"></textarea>
							</div>
							<div class="form-group wt-btnarea">
								<a href="javascript:void(0);" class="wt-btn" onclick="window.location.reload();">Teklif Gönder</a>
							</div>
						</fieldset>
					</form>
				</div>
			</div>
		</div>
    </div>
    
<?php require 'inc/frontend/views/footer_start.php'; ?>
<?php require 'inc/frontend/views/footer_end.php'; ?>