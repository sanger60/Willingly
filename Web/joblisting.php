<?php require 'inc/frontend/views/head_start.php'; ?>
<?php require 'inc/frontend/views/head_end.php'; ?>

<main id="wt-main" class="wt-main wt-haslayout wt-innerbgcolor">
				<div class="wt-haslayout wt-main-section">
					<!-- User Listing Start-->
					<div class="wt-haslayout">
						<div class="container">
							<div class="row">
								<div id="wt-twocolumns" class="wt-twocolumns wt-haslayout">
									<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 col-xl-4 float-left">
										<aside id="wt-sidebar" class="wt-sidebar">
                                            <div class="wt-widget wt-effectiveholder">
													<div class="wt-widgettitle">
														<h2>Kategoriler</h2>
													</div>
													<div class="wt-widgetcontent">
														<form class="wt-formtheme wt-formsearch">
															<fieldset>
																<div class="form-group">
																	<input type="text" name="Search" onkeydown="FreeLancerCategoryFilter(this,'category');" onchange="FreeLancerCategoryFilter(this,'category');" class="form-control" placeholder="Kategori Ara">
																</div>
															</fieldset>
															<fieldset>
																<div class="wt-checkboxholder wt-verticalscrollbar">
																	<span class="wt-checkbox" v-for="item in categories">
																		<input v-bind:id="item.Name" type="checkbox" name="category" v-bind:value="item.Id" checked="true">
																		<label v-bind:for="item.Name"> {{item.Name}}</label>
																	</span>
																</div>
															</fieldset>
														</form>
													</div>
                                            </div>
											<div class="wt-widget wt-effectiveholder">
												<div class="wt-widgettitle">
													<h2>Fiyat Ölçeklendirme</h2>
												</div>
												<div class="wt-widgetcontent">
													<form class="wt-formtheme wt-formsearch">
														<fieldset>
															<div class="wt-checkboxholder">
																<div id="wt-productrangeslider" class="wt-productrangeslider wt-themerangeslider"></div>
																<div class="wt-amountbox">
																	<input type="text" id="wt-consultationfeeamount" readonly="">
																</div>
															</div>
														</fieldset>
													</form>
												</div>
											</div>
                                            <div class="wt-widget wt-applyfilters-holder">
													<div class="wt-widgetcontent">
														<div class="wt-applyfilters">
															<span>En son uygulamak için “Filtre Uygula” ya tıklayın <br> Sizin tarafınızdan yapılan değişiklikler.</span>
																<input type="submit" class="wt-btn" id="btnFilter" onclick="JobFilter();" />
														</div>
													</div>
											</div>
										</aside>
									</div>
									<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7 col-xl-8 float-left">
										<div class="wt-userlistingholder wt-haslayout">
											<div class="wt-userlistingtitle">
                                                 <span>01 - 48 / 57143 <em>"Kategori Adı"</em> için sonuçlar</span>
											</div>
                                            <div class="wt-filterholder">
													<ul class="wt-filtertag" id="filtertags">
														<li class="alert alert-dismissable fade in">
															<a href="javascrip:void(0)"><span></span></a>
														</li>
													</ul>
											</div>
											<div class="wt-userlistinghold wt-featured wt-userlistingholdvtwo" v-for="item in items.Data">
												<span class="wt-featuredtag"><img src="/../../../assets/images/featured.png" alt="img description" data-tipso="Plus Member" class="template-content tipso_style"></span>
												<div class="wt-userlistingcontent">
													<div class="wt-contenthead">
														<div class="wt-title">
															<a href="usersingle.html"><i class="fa fa-check-circle"></i> {{item.UserInfo.Name}}</a>
															<a href="jobsingle.html"><h2>{{item.AdvertisementInfo.Tittle}}</h2></a>
														</div>
														<div class="wt-description">
															<p>{{item.AdvertisementInfo.Explanation}}</p>
														</div>
														<div class="wt-tag wt-widgettag">
															<a href="#">{{item.AdvertisementInfo.RequiredSkills}}</a>
														</div>
													</div>
													<div class="wt-viewjobholder">
														<ul>
															<li><span><i class="fa fa-dollar-sign wt-viewjobdollar"></i>{{item.AdvertisementInfo.Price}} ₺</span></li> <!-- Orta düzy yatırım - yüksek yatırım - düşük yatırım -->
															<li><span class="viewjobclockData"><i class="far fa-clock wt-viewjobclock"></i>{{item.AdvertisementInfo.DeadLine}}</span></li>
															<li><span><i class="fa fa-tag wt-viewjobtag"></i>No: {{item.AdvertisementInfo.Id}}</span></li> <!-- gy3yV2Vm5u -->
															<li class="wt-btnarea"><a href="javascript:;" class="wt-btn" onclick="JobDetail(this);" v-bind:title="item.AdvertisementInfo.Id">Detay Göster</a></li>
														</ul>
													</div>
												</div>
											</div>
                                            <nav class="wt-pagination">
													<ul>
														<li class="wt-prevpage"><a href="javascrip:void(0);"><i class="lnr lnr-chevron-left"></i></a></li>
														<li>
															<input type="submit" class="paginationBtn" onclick="JobPageChanged(this);" value="1" />
														</li>
														<li>
															<input type="submit" class="paginationBtn" onclick="JobPageChanged(this);" value="2" />
														</li>
														<li>
															<input type="submit" class="paginationBtn" onclick="JobPageChanged(this);" value="3" />
														</li>
														<li>
															<input type="submit" class="paginationBtn" onclick="JobPageChanged(this);" value="4" />
														</li>
														<li><a href="javascrip:void(0);">...</a></li>
														<li>
															<input type="submit" class="paginationBtn" onclick="JobPageChanged(this);" value="50" />
														</li>
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

<?php require 'inc/frontend/views/footer_start.php'; ?>
<?php require 'inc/frontend/views/footer_end.php'; ?>