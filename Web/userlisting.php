
			<?php require 'inc/frontend/views/head_start.php'; ?>
			<?php require 'inc/frontend/views/head_end.php'; ?>

			<div class="wt-categoriesslider-holder wt-haslayout">
				<div class="wt-title">
					<h2>Browse Top Job Categories:</h2>
				</div>
				<div id="wt-categoriesslider" class="wt-categoriesslider owl-carousel">
					<div class="wt-categoryslidercontent item">
						<figure><img src="/../../../assets/images/categories/slider/img-01.png" alt="image description"></figure>
						<div class="wt-cattitle">
							<h3><a href="javascrip:void(0);">Graphic &amp; Design</a></h3>
							<span>Items: 523,112</span>
						</div>
					</div>
					<div class="wt-categoryslidercontent item">
						<figure><img src="/../../../assets/images/categories/slider/img-02.png" alt="image description"></figure>
						<div class="wt-cattitle">
							<h3><a href="javascrip:void(0);">Digital Marketing</a></h3>
							<span>Items: 523,112</span>
						</div>
					</div>
					<div class="wt-categoryslidercontent item">
						<figure><img src="/../../../assets/images/categories/slider/img-03.png" alt="image description"></figure>
						<div class="wt-cattitle">
							<h3><a href="javascrip:void(0);">Writing &amp; Translation</a></h3>
							<span>Items: 325,442</span>
						</div>
					</div>
					<div class="wt-categoryslidercontent item">
						<figure><img src="/../../../assets/images/categories/slider/img-04.png" alt="image description"></figure>
						<div class="wt-cattitle">
							<h3><a href="javascrip:void(0);">Video &amp; Animation</a></h3>
							<span>Items: 421,305</span>
						</div>
					</div>
					<div class="wt-categoryslidercontent item">
						<figure><img src="/../../../assets/images/categories/slider/img-05.png" alt="image description"></figure>
						<div class="wt-cattitle">
							<h3><a href="javascrip:void(0);">Music &amp; Audio</a></h3>
							<span>Items: 421,305</span>
						</div>
					</div>
					<div class="wt-categoryslidercontent item">
						<figure><img src="/../../../assets/images/categories/slider/img-01.png" alt="image description"></figure>
						<div class="wt-cattitle">
							<h3><a href="javascrip:void(0);">Programing &amp; Tech</a></h3>
							<span>Items: 421,305</span>
						</div>
					</div>
				</div>
			</div>
			<!--Inner Home End-->
			<!--Main Start-->
			<main id="wt-main" class="wt-main wt-haslayout wt-innerbgcolor">
				<div class="wt-main-section wt-haslayout">
					<!-- User Listing Start-->
					<div class="wt-haslayout">
						<div class="container">
							<div class="row">
								<div id="wt-twocolumns" class="wt-twocolumns wt-haslayout">
									<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 col-xl-4 float-left">
										<div class="wt-usersidebaricon">
											<span class="fa fa-cog wt-usersidebardown">
												<i></i>
											</span>
										</div>
										<aside id="wt-sidebar" class="wt-sidebar wt-usersidebar">
											<div class="wt-widget wt-effectiveholder">
												<div class="wt-widgettitle">
													<h2>Kategoriler</h2>
												</div>
												<div class="wt-widgetcontent">
													<form class="wt-formtheme wt-formsearch">
														<fieldset>
															<div class="form-group">
																<input type="text" name="Search" onkeydown="FreeLancerFilter(this,'category');" onchange="FreeLancerFilter(this,'category');" class="form-control" placeholder="Kategori Ara">
															</div>
														</fieldset>
														<fieldset>
															<div class="wt-checkboxholder wt-verticalscrollbar">
																<span class="wt-checkbox">
																	<input id="wordpress" type="checkbox" name="category" value="grafik & tasarım" checked="">
																	<label for="wordpress"> Grafik & Tasarım</label>
																</span>
																<span class="wt-checkbox">
																	<input id="graphic" type="checkbox" name="category" value="internet reklamcılığı">
																	<label for="graphic"> İnternet Reklamcılığı</label>
																</span>
																<span class="wt-checkbox">
																	<input id="website" type="checkbox" name="category" value="yazı & çeviri">
																	<label for="website"> Yazı & Çeviri</label>
																</span>
																<span class="wt-checkbox">
																	<input id="article" type="checkbox" name="category" value="video & animasyon">
																	<label for="article"> Video & Animasyon</label>
																</span>
																<span class="wt-checkbox">
																	<input id="software" type="checkbox" name="category" value="ses & müzik">
																	<label for="software"> Ses & Müzik</label>
																</span>
																<span class="wt-checkbox">
																	<input id="wordpress1" type="checkbox" name="category" value="yazılım & teknoloji">
																	<label for="wordpress1"> Yazılım & Teknoloji</label>
																</span>
																<span class="wt-checkbox">
																	<input id="graphic1" type="checkbox" name="category" value="iş & yönetim">
																	<label for="graphic1"> İş & Yönetim</label>
																</span>
															</div>
														</fieldset>
													</form>
												</div>
											</div>
											<div class="wt-widget wt-effectiveholder">
												<div class="wt-widgettitle">
													<h2>Fiyat</h2>
												</div>
												<div class="wt-widgetcontent">
													<form class="wt-formtheme wt-formsearch">
														<fieldset>
															<div class="wt-checkboxholder wt-verticalscrollbar">
																Min:
																<input type="range" min="10" max="10000" value="10" oninput="updateTextInput(this.value);" id="min-range" class="my-range">
																<output name="ageOutputName" id="minOutput">10 ₺</output>
																<br/>
																Max:
																<input type="range" min="10" max="10000" value="10" oninput="updateTextInput2(this.value);" id="max-range" class="my-range">
																<output name="ageOutputName" id="maxOutput">10 ₺</output>
															</div>
														</fieldset>
													</form>
												</div>
											</div>
											<div class="wt-widget wt-applyfilters-holder">
												<div class="wt-widgetcontent">
													<div class="wt-applyfilters">
														<span>En son uygulamak için “Filtre Uygula” ya tıklayın <br> Sizin tarafınızdan yapılan değişiklikler.</span>
														<a href="javascript:void(0);" class="wt-btn">Filtre Uygula</a>
													</div>
												</div>
											</div>
										</aside>
									</div>
									<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7 col-xl-8 float-left">
										<div class="wt-userlistingholder wt-userlisting wt-haslayout">
											<div class="wt-userlistingtitle">
												<span>01 - 48 of 57143 results for <em>"Logo Design"</em></span>
											</div>
											<div class="wt-filterholder">
												<ul class="wt-filtertag">
													<li class="wt-filtertagclear">
														<a href="javascrip:void(0)"><i class="fa fa-times"></i> <span>Clear All Filter</span></a>
													</li>
												 	<li class="alert alert-dismissable fade in">
														<a href="javascrip:void(0)"><i class="fa fa-times close" data-dismiss="alert" aria-label="close"></i> <span>Graphic Design</span></a>
													</li>
													<li class="alert alert-dismissable fade in">
														<a href="javascrip:void(0)"><i class="fa fa-times close" data-dismiss="alert" aria-label="close"></i> <span>Any Hourly Rate</span></a>
													</li>
													<li class="alert alert-dismissable fade in">
														<a href="javascrip:void(0)"><i class="fa fa-times close" data-dismiss="alert" aria-label="close"></i> <span>Any Freelancer Type</span></a>
													</li>
													<li class="alert alert-dismissable fade in">
														<a href="javascrip:void(0)"><i class="fa fa-times close" data-dismiss="alert" aria-label="close"></i> <span>Chinese</span></a>
													</li>
													<li class="alert alert-dismissable fade in">
														<a href="javascrip:void(0)"><i class="fa fa-times close" data-dismiss="alert" aria-label="close"></i> <span>English</span></a>
													</li>
												</ul>
											</div>
											<div class="wt-userlistinghold" v-for="item in items.data">
												<span class="wt-featuredtag">
													<img src="/../../../assets/images/featured.png" alt="img description" data-tipso="Plus Member" class="template-content tipso_style"></span>
												<figure class="wt-userlistingimg">
													<img v-bind:src="item.pictureUrl" alt="image">
												</figure>
												<div class="wt-userlistingcontent">
													<div class="wt-contenthead">
														<div class="wt-title">
															<a href="usersingle.html"><i class="fa fa-check-circle"></i> {{item.UserName}}
															</a>
															<h2>{{item.UserAdvertisement}}</h2>
														</div>
														<ul class="wt-userlisting-breadcrumb">
															<li><span><i class="far fa-money-bill-alt"></i> {{item.Price}} </span></li>
															<li><span>{{item.UserCountry}}</span></li>
															<li><a href="javascript:void(0);" class="wt-clicksave"><i class="fa fa-heart"></i> Save</a></li>
														</ul>
													</div>
													<div class="wt-rightarea">
														<span class="wt-starsvtwo">
															<i class="fa fa-star fill"></i>
															<i class="fa fa-star fill"></i>
															<i class="fa fa-star fill"></i>
															<i class="fa fa-star fill"></i>
															<i class="fa fa-star fill"></i>
														</span>
														<span class="wt-starcontent">{{item.rate}}/<sub>5</sub> <em>({{item.feedback}} Feedback)</em></span>
													</div>
												</div>
												<div class="wt-description">
													<p>{{item.adDescription}}</p>
												</div>
												<div class="wt-tag wt-widgettag" v-for="item2 in item.widgets">
													<a href="javascript:void(0);">{{item2.name}}</a>
												</div>
											</div>
											<nav class="wt-pagination">
												<ul>
													<li class="wt-prevpage"><a href="javascrip:void(0);"><i class="lnr lnr-chevron-left"></i></a></li>
													<li><a href="javascrip:void(0);">1</a></li>
													<li><a href="javascrip:void(0);">2</a></li>
													<li><a href="javascrip:void(0);">3</a></li>
													<li><a href="javascrip:void(0);">4</a></li>
													<li><a href="javascrip:void(0);">...</a></li>
													<li><a href="javascrip:void(0);">50</a></li>
													<li class="wt-nextpage"><a href="javascrip:void(0);"><i class="lnr lnr-chevron-right"></i></a></li>
												</ul>
											</nav>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- User Listing End-->
				</div>
			</main>
			<!--Main End-->
			<!--Footer Start-->
			<?php require 'inc/frontend/views/footer_start.php'; ?>
			<?php require 'inc/frontend/views/footer_end.php'; ?>