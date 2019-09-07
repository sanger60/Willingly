<?php require 'inc/frontend/views/head_start.php'; ?>
<link rel="stylesheet" href="/../../../assets/css/dashboard.css">
<link rel="stylesheet" href="/../../../assets/css/dbresponsive.css">
<?php require 'inc/frontend/views/head_end.php'; ?>

<main id="wt-main" class="wt-main wt-haslayout">
				<!--Sidebar Start-->
				<div id="wt-sidebarwrapper" class="wt-sidebarwrapper">
					<div id="wt-btnmenutoggle" class="wt-btnmenutoggle">
						<span class="menu-icon">
							<em></em>
							<em></em>
							<em></em>
						</span>
					</div>
					<div id="wt-verticalscrollbar" class="wt-verticalscrollbar">
						<div class="wt-companysdetails wt-usersidebar">
							<figure class="wt-companysimg">
								<img src="images\sidebar\img-01.jpg" alt="img description">
							</figure>
							<div class="wt-companysinfo">
								<figure><img src="images\sidebar\img-02.jpg" alt="img description"></figure>
								<div class="wt-title">
									<h2><a href="javascript:void(0);"> Louanne Mattioli</a></h2>
									<span>Amento Tech</span>
								</div>
								<div class="wt-btnarea"><a href="dashboard-postjob.html" class="wt-btn">Post a Job</a></div>
							</div>
						</div>
						<nav id="wt-navdashboard" class="wt-navdashboard">
							<ul>
								<li class="menu-item-has-children">
									<a href="javascript:void(0);">
										<i class="ti-dashboard"></i>
										<span>Insights</span>
									</a>
									<ul class="sub-menu">
										<li><hr><a href="dashboard-insights.html">Insights</a></li>
										<li><hr><a href="dashboard-insightsuser.html">Insights User</a></li>
									</ul>
								</li>
								<li>
									<a href="dashboard-profile.html">
										<i class="ti-briefcase"></i>
										<span>My Profile</span>
									</a>
								</li>
								<li class="menu-item-has-children wt-active">
									<a href="javascript:void(0);">
										<i class="ti-package"></i>
										<span>All Jobs</span>
									</a>
									<ul class="sub-menu">
										<li><hr><a href="dashboard-completejobs.html">Completed Jobs</a></li>
										<li><hr><a href="dashboard-canceljobs.html">Cancelled Jobs</a></li>
										<li><hr><a href="dashboard-ongoingjob.html">Ongoing Jobs</a></li>
										<li><hr><a href="dashboard-ongoingsingle.html">Ongoing Single</a></li>
									</ul>
								</li>
								<li>
									<a href="dashboard-managejobs.html">
										<i class="ti-announcement"></i>
										<span>Manage Jobs</span>
									</a>
								</li>
								<li class="wt-notificationicon menu-item-has-children">
									<a href="javascript:void(0);">
										<i class="ti-pencil-alt"></i>
										<span>Messages</span>
									</a>
									<ul class="sub-menu">
										<li><hr><a href="dashboard-messages.html">Messages</a></li>
										<li><hr><a href="dashboard-messages2.html">Messages V 2</a></li>
									</ul>
								</li>
								<li>
									<a href="dashboard-saveitems.html">
										<i class="ti-heart"></i>
										<span>My Saved Items</span>
									</a>
								</li>
								<li>
									<a href="dashboard-invocies.html">
										<i class="ti-file"></i>
										<span>Invoices</span>
									</a>
								</li>
								<li>
									<a href="dashboard-category.html">
										<i class="ti-layers"></i>
										<span>Category</span>
									</a>
								</li>
								<li>
									<a href="dashboard-packages.html">
										<i class="ti-money"></i>
										<span>Packages</span>
									</a>
								</li>
								<li>
									<a href="dashboard-proposals.html">
										<i class="ti-bookmark-alt"></i>
										<span>Proposals</span>
									</a>
								</li>
								<li>
									<a href="dashboard-accountsettings.html">
										<i class="ti-anchor"></i>
										<span>Account Settings</span>
									</a>
								</li>
								<li>
									<a href="dashboard-helpsupport.html">
										<i class="ti-tag"></i>
										<span>Help &amp; Support</span>
									</a>
								</li>
								<li>
									<a href="index.html">
										<i class="ti-shift-right"></i>
										<span>Logout</span>
									</a>
								</li>
							</ul>
						</nav>
						<div class="wt-navdashboard-footer">
							<span>Worktern. © 2019 All Rights Reserved.</span>
						</div>
					</div>
				</div>
				<!--Sidebar Start-->
				<!--Register Form Start-->
				<section class="wt-haslayout wt-dbsectionspace">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-8 col-xl-6 float-left">
							<div class="wt-dashboardbox">
								<div class="wt-dashboardboxtitle">
									<h2>İlan Paylaş</h2>
								</div>
								<div class="wt-dashboardboxcontent">
									<div class="wt-jobdescription wt-tabsinfo">
										<div class="wt-tabscontenttitle">
											<h2>İş Tanımı</h2>
										</div>
										<form class="wt-formtheme wt-userform wt-userformvtwo">
											<fieldset>
												<div class="form-group">
													<input type="text" name="title" id="tittle" class="form-control" placeholder="Başlık">
												</div>
												<div class="form-group form-group-half wt-formwithlabel" style="width:100% !important;">
													<span class="wt-select">
                                                        <label for="selectoption">İlan Bitiş Zamanı:</label>
                                                        <input type="date" name="deadDate" id="deadline" />
													</span>
                                                </div>
                                                <div class="form-group form-group-half wt-formwithlabel">
													<span class="wt-select">
                                                        <label for="selectoption">Bağışlanan Yüzde:</label>
                                                        <input type="number" name="donationPercent" id="donationPerce" min="7" />
                                                        <em>Buradaki tutar şirketimizin minimum hizmet bedelidir.</em>
                                                        <em>Tamamen kurumlara bağışlanacaktır.</em>
													</span>
                                                </div>
                                                <div class="form-group form-group-half wt-formwithlabel">
													<span class="wt-select">
                                                        <label for="selectoption">İlan Tutarı:</label>
                                                        <input type="text" id="number" pattern="[0-9]*">
                                                        <em>Buradaki tutar şirketimizin minimum hizmet bedelidir.</em>
                                                        <em>Tamamen kurumlara bağışlanacaktır.</em>
													</span>
                                                </div>
											</fieldset>
										</form>
									</div>
									<div class="wt-jobdetails wt-tabsinfo">
										<div class="wt-tabscontenttitle">
											<h2>İlan Detay</h2>
										</div>
										<form class="wt-formtheme wt-userform wt-userformvtwo">
											<fieldset>
												<div class="form-group">
													<textarea id="wt-tinymceeditor" class="wt-tinymceeditor" placeholder="İlan Detaylarını Giriniz..."></textarea>
                                                </div>
                                                <div class="form-group">
                                                <span class="wt-select">
                                                    <label>Kategori Seçiniz:</label>
                                                    <select id="categories">
															<option v-bind:value="item.Id" v-for="item in items">
                                                                {{item.Name}}
                                                            </option>
													</select>
                                                </span>
												</div>
											</fieldset>
										</form>
									</div>
									<div class="wt-jobskills wt-tabsinfo">
										<div class="wt-tabscontenttitle">
											<h2>Gerekli Olan Nitelikler</h2>
										</div>
										<form class="wt-formtheme wt-userform wt-userformvtwo">
											<fieldset>
												<div class="form-group">
                                                    <input type="text" class="form-control" id="skillJob" />
												</div>
												<div class="form-group wt-btnarea">
													<a href="javascript:;" class="wt-btn" onclick="JobSkillsAdd();">Ekle</a>
												</div>
												<div class="form-group wt-myskills">
													<ul class="" id="AddedSkils">
														<li>

														</li>
													</ul>
												</div>
											</fieldset>
										</form>
									</div>
								</div>
							</div>
							<div class="wt-updatall">
								<i class="ti-announcement"></i>
								<span>"Şimdi Gönder" düğmesine tıklayarak işi gönderin</span>
								<a class="wt-btn" href="javascript:;" onclick="JobAdd();">Şimdi Gönder</a>
							</div>
						</div>
					</div>
				</section>
				<!--Register Form End-->
            </main>
            
<?php require 'inc/frontend/views/footer_start.php'; ?>
<?php require 'inc/frontend/views/footer_end.php'; ?>