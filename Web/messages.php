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
								<img src="/../../../assets/images/sidebar/img-01.jpg" alt="img description">
							</figure>
							<div class="wt-companysinfo">
								<figure><img src="/../../../assets/images/sidebar/img-02.jpg" alt="img description"></figure>
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
								<li class="menu-item-has-children">
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
								<li class="wt-notificationicon menu-item-has-children wt-active">
									<a href="javascript:void(0);">
										<i class="ti-pencil-alt"></i>
										<span>Messages</span>
									</a>
									<ul class="sub-menu">
										<li class="wt-active"><hr><a href="dashboard-messages.html">Messages</a></li>
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
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-8 col-xl-9">
							<div class="wt-dashboardbox wt-messages-holder">
								<div class="wt-dashboardboxtitle">
									<h2>Mesajlar</h2>
								</div>
								<div class="wt-dashboardboxtitle wt-titlemessages">
									<a href="javascript:;" class="wt-back"><i class="ti-arrow-left"></i></a>
									<div class="wt-userlogedin">
										<figure class="wt-userimg">
											<img v-bind:src="">
										</figure>
										<div class="wt-username">
											<h3><i class="fa fa-check-circle"></i> {{result.Name}} {{result.Surname}}</h3>
											<span>{{result.Username}}</span>
										</div>
									</div>
									<a href="javascript:void(0);" class="wt-viewprofile">Profili Göster</a>
								</div>
								<div class="wt-dashboardboxcontent wt-dashboardholder wt-offersmessages">
									<ul>
										<li>
											<form class="wt-formtheme wt-formsearch">
												<fieldset>
													<div class="form-group">
														<input type="text" name="Location" class="form-control" placeholder="Buradan Arayınız...">
														<a href="javascrip:void(0);" class="wt-searchgbtn"><i class="lnr lnr-magnifier"></i></a>
													</div>
												</fieldset>
											</form>
											<div class="wt-verticalscrollbar wt-dashboardscrollbar">
												<div class="wt-ad" v-for="item in items">
													<figure><img v-bind:src="item.userImage" alt=""></figure>
													<div class="wt-adcontent">
														<h3>{{item.userName}}</h3>
														<span>{{item.message}}</span>
													</div>
												</div>
											</div>
										</li>
										<li>
											<div class="wt-chatarea">
												<div class="wt-messages wt-verticalscrollbar wt-dashboardscrollbar">
													<div class="wt-offerermessage">
														<figure><img src="/../../../assets/images/messages/img-12.jpg" alt="image description"></figure>
														<div class="wt-description">
															<p>Consectetur adipisicing elit sei do eiusmod tempor incididunt labore et dolore.</p>
															<div class="clearfix"></div>
															<time datetime="2017-08-08">January 12th, 2011</time>
														</div>
													</div>
													<div class="wt-memessage wt-readmessage">
														<figure><img src="/../../../assets/images/messages/img-11.jpg" alt="image description"></figure>
														<div class="wt-description">
															<p>Eiusmod tempor incididunt labore et dolore magna aliqiu enim ad minim veniam qiuisru exercitation ullamco laborisen nisi ut aliquip exea.</p>
															<div class="clearfix"></div>
															<p><a href="https://themeforest.net" target="_blank">https://themeforest.net</a></p>
															<div class="clearfix"></div>
															<p>It that ok?</p>
															<div class="clearfix"></div>
															<time datetime="2017-08-08">Jun 28, 2017 09:30</time>
															<div class="clearfix"></div>
														</div>
													</div>
													<div class="wt-offerermessage">
														<figure><img src="/../../../assets/images/messages/img-12.jpg" alt="image description"></figure>
														<div class="wt-description">
															<div class="clearfix"></div>
															<p>Consectetur adipisicing elit sei do eiusmod tempor incididunt labore et dolore.</p>
															<div class="clearfix"></div>
															<time datetime="2017-08-08">January 12th, 2011</time>
															<div class="clearfix"></div>
														</div>
													</div>
													<div class="wt-memessage wt-readmessage">
														<figure><img src="/../../../assets/images/messages/img-11.jpg" alt="image description"></figure>
														<div class="wt-description">
															<div class="clearfix"></div>
															<p>Eiusmod tempor incididunt labore et dolore magna aliqiu enim ad minim veniam qiuisru exercitation ullamco laborisen nisi ut aliquip exea.</p>
															<div class="clearfix"></div>
															<p><a href="https://themeforest.net" target="_blank">https://themeforest.net</a></p>
															<div class="clearfix"></div>
															<p>It that ok?</p>
															<div class="clearfix"></div>
															<time datetime="2017-08-08">Jun 28, 2017 09:30</time>
															<div class="clearfix"></div>
														</div>
													</div>
												</div>
												<div class="wt-replaybox">
													<div class="form-group">
														<textarea class="form-control" name="reply" placeholder="Type message here"></textarea>
													</div>
													<div class="wt-iconbox">
														<i class="lnr lnr-thumbs-up"></i>
														<i class="lnr lnr-thumbs-down"></i>
														<i class="lnr lnr-smile"></i>
														<a href="javascript:void(0);" class="wt-btnsendmsg">Send</a>
													</div>
												</div>
											</div>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-3">
							<div class="wt-dashboardbox wt-messagebox">
								<span class="wt-featuredtag"><img src="/../../../assets/images/featured.png" alt="img description" data-tipso="Plus Member" class="template-content tipso_style"></span>
								<div class="wt-dashboardboxcontent">
									<div class="wt-userprofile">
										<figure>
											<img src="/../../../assets/images/profile/img-02.jpg" alt="img description">
											<div class="wt-userdropdown wt-online">
											</div>
										</figure>
										<div class="wt-title">
											<h3><i class="fa fa-check-circle"></i> Valentine Mehring</h3>
											<span>5.0/5 <a class="javascript:void(0);">(860 Feedback)</a> <br>Member since May 30, 2013 <br><a href="javascript:void(0);">@valentine20658</a></span>
										</div>
									</div>
									<div class="wt-applyfilters">
										<span>Adpsicing elit sed do eiusmod tempor<br> incididunt ut labore et dolore.</span>
										<a href="javascript:void(0);" class="wt-btn">View Profile</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<!--Register Form End-->
            </main>
            

<?php require 'inc/frontend/views/footer_start.php'; ?>
<script>
		const menu_icon = document.querySelector('.menu-icon');
		function addClassFunThree() {
	        this.classList.toggle("click-menu-icon");
	    }
	    menu_icon.addEventListener('click', addClassFunThree);
</script>
<script src="/../../../assets/js/custom/message.js"></script>
<?php require 'inc/frontend/views/footer_end.php'; ?>