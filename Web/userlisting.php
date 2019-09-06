
			<?php require 'inc/frontend/views/head_start.php'; ?>
			<?php require 'inc/frontend/views/head_end.php'; ?>
			<div id="mainVue">
				<div class="wt-categoriesslider-holder wt-haslayout" id="MenuBottomBar">
					<div id="wt-categoriesslider" class="wt-categoriesslider owl-carousel" style="max-height: 60px;">
						<div class="wt-categoryslidercontent item" v-for="item in categories">
							<figure><img src="/../../../assets/images/categories/slider/img-01.png" alt="image description"></figure>
							<div class="wt-cattitle">
								<h3>
									<form method="GET">
									<input type="hidden" v-bind:value="item.Id" name="category" />
									<input type="submit" v-bind:value="item.Name" class="btnCategory" />
									</form>
								</h3>
								
								<span>Items: {{categories.length}}</span>
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
														<h2>Fiyat</h2>
													</div>
													<div class="wt-widgetcontent">
														<form class="wt-formtheme wt-formsearch">
															<fieldset>
																<div class="wt-checkboxholder wt-verticalscrollbar">
																	Min:
																	<input type="range" v-bind:min="MinPrice" v-bind:max="MaxPrice" v-bind:value="MinPrice" oninput="updateTextInput(this.value);" id="min-range" class="my-range">
																	<output name="ageOutputName" id="minOutput">{{MinPrice}} ₺</output>
																	<br/>
																	Max:
																	<input type="range" v-bind:min="MinPrice" v-bind:max="MaxPrice" v-bind:value="MaxPrice" oninput="updateTextInput2(this.value);" id="max-range" class="my-range">
																	<output name="ageOutputName" id="maxOutput">{{MaxPrice}} ₺</output>
																</div>
															</fieldset>
														</form>
													</div>
												</div>
												<div class="wt-widget wt-applyfilters-holder">
													<div class="wt-widgetcontent">
														<div class="wt-applyfilters">
															<span>En son uygulamak için “Filtre Uygula” ya tıklayın <br> Sizin tarafınızdan yapılan değişiklikler.</span>
																<input type="submit" class="wt-btn" id="btnFilter" onclick="FreeLancerFilter();" />
														</div>
													</div>
												</div>
											</aside>
										</div>
										<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7 col-xl-8 float-left">
											<div class="wt-userlistingholder wt-userlisting wt-haslayout">
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
												<div class="wt-userlistinghold" v-for="item in items.Data">
													<figure class="wt-userlistingimg">
														<img src="http://amentotech.com/htmls/worktern/images/user/userlisting/img-01.jpg" alt="image">
													</figure>
													<div class="wt-userlistingcontent">
														<div class="wt-contenthead">
															<div class="wt-title">
																<a href="javascript:;"><i class="fa fa-check-circle"></i> {{item.UserId}} Id
																</a>
																<a href="javascript:;" onclick="AdDetail(this);" v-bind:title="item.Id"><h2>{{item.Tittle}}</h2></a>
															</div>
															<ul class="wt-userlisting-breadcrumb">
																<li><span><i class="far fa-money-bill-alt"></i> {{item.Price}} ₺</span></li>
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
															<span class="wt-starcontent">{{item.AdvertisementRate}}/<sub>5</sub> <em>(88 Feedback)</em></span>
														</div>
													</div>
													<div class="wt-description">
														<p>{{item.Explanation}}</p>
													</div>
													<div class="wt-tag wt-widgettag">
														<a href="javascript:void(0);">{{item.AdvertisementSkills}}</a>
													</div>
												</div>
												<nav class="wt-pagination">
													<ul>
														<li class="wt-prevpage"><a href="javascrip:void(0);"><i class="lnr lnr-chevron-left"></i></a></li>
														<li>
															<input type="submit" class="paginationBtn" onclick="pageChanged(this);" value="1" />
														</li>
														<li>
															<input type="submit" class="paginationBtn" onclick="pageChanged(this);" value="2" />
														</li>
														<li>
															<input type="submit" class="paginationBtn" onclick="pageChanged(this);" value="3" />
														</li>
														<li>
															<input type="submit" class="paginationBtn" onclick="pageChanged(this);" value="4" />
														</li>
														<li><a href="javascrip:void(0);">...</a></li>
														<li>
															<input type="submit" class="paginationBtn" onclick="pageChanged(this);" value="50" />
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
			</div>
			<!--Main End-->
			<!--Footer Start-->
			<?php require 'inc/frontend/views/footer_start.php'; ?>
			<?php require 'inc/frontend/views/footer_end.php'; ?>