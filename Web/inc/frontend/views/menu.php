			<!-- Header Start -->
			<header id="wt-header" class="wt-header wt-haslayout">
				<div class="wt-navigationarea">
					<div class="container-fluid">
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
								<strong class="wt-logo"><a href="index-2.html"><img src="/../../../assets/images/logo.png" alt="company logo here"></a></strong>
								<div class="wt-rightarea">
									<nav id="wt-nav" class="wt-nav navbar-expand-lg">
										<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
											<i class="lnr lnr-menu"></i>
										</button>
										<div class="collapse navbar-collapse wt-navigation" id="navbarNav">
											<ul class="navbar-nav">
												<li class="menu-item-has-children page_item_has_children">
													<a href="javascript:void(0);">Main</a>
													<ul class="sub-menu">
														<li class="menu-item-has-children page_item_has_children wt-notificationicon"><span class="wt-dropdowarrow"><i class="lnr lnr-chevron-right"></i></span>
															<a href="javascript:void(0);">Home</a>
															<ul class="sub-menu">
																<li><a href="index-2.html">Home v1</a></li>
																<li class="wt-newnoti"><a href="indexvtwo.html">Home v2<em>without login</em></a></li>
															</ul>
														</li>
														<li class="menu-item-has-children page_item_has_children"><span class="wt-dropdowarrow"><i class="lnr lnr-chevron-right"></i></span>
															<a href="javascript:void(0);">Article</a>
															<ul class="sub-menu">
																<li><a href="articlelist.html">Article List</a></li>
																<li><a href="articlegrid.html">Article Grid</a></li>
																<li><a href="articlesingle.html">Article Single</a></li>
																<li><a href="articleclassic.html">Article Classic</a></li>
															</ul>
														</li>
														<li class="menu-item-has-children page_item_has_children"><span class="wt-dropdowarrow"><i class="lnr lnr-chevron-right"></i></span>
															<a href="javascript:void(0);">Company</a>
															<ul class="sub-menu">
																<li><a href="companygrid.html">Company Grid</a></li>
																<li><a href="companysigle.html">Company Sigle</a></li>
															</ul>
														</li>
														<li>
															<a href="about.html">About</a>
														</li>
														<li>
															<a href="privacypolicy.html">Privacy Policy</a>
														</li>
														<li>
															<a href="comingsoon.html">Coming Soon</a>
														</li>
														<li>
															<a href="404page.html">404page</a>
														</li>
													</ul>
												</li>
												<li class="nav-item">
													<a href="howitworks.html">How It Works</a>
												</li>
												<li class="menu-item-has-children page_item_has_children">
													<a href="javascript:void(0);">Browse Jobs</a>
													<ul class="sub-menu">
														<li>
															<a href="joblisting.html">Job Listing</a>
														</li>
														<li class="current-menu-item">
															<a href="jobsingle.html">Job Single</a>
														</li>
														<li>
															<a href="jobproposal.html">Job Proposal</a>
														</li>
													</ul>
												</li>
												<li class="menu-item-has-children page_item_has_children">
													<a href="javascript:void(0);">View Freelancers</a>
													<ul class="sub-menu">
														<li>
															<a href="userlisting.html">User Listing</a>
														</li>
														<li class="current-menu-item">
															<a href="usersingle.html">User Single</a>
														</li>
													</ul>
												</li>
											</ul>
										</div>
									</nav>
									<div class="wt-loginarea">
										<figure class="wt-userimg">
											<img src="/../../../assets/images/user-login.png" alt="img description">
										</figure>
										<div class="wt-loginoption">
											<a href="javascript:void(0);" id="wt-loginbtn" class="wt-loginbtn">Giriş Yap</a>
											<div class="wt-loginformhold">
												<div class="wt-loginheader">
													<span>Giriş</span>
													<a href="javascript:;"><i class="fa fa-times"></i></a>
												</div>
												<form class="wt-formtheme wt-loginform do-login-form" id="login-form" onsubmit="LoginCheck()">
													<fieldset>
														<div class="form-group">
															<input type="text" name="username" id="LoginUsername" class="form-control" placeholder="Kullanıcı Adı">
														</div>
														<div class="form-group">
															<input type="password" name="password" id="pwdLogin" class="form-control" placeholder="Şifre">
														</div>
														<div class="wt-logininfo">
															<a href="javascript:;" onclick="LoginFormSubmitEvent()" class="wt-btn do-login-button">Giriş Yap</a>
															<span class="wt-checkbox">
																<input id="wt-login" type="checkbox" name="rememberme">
																<label for="wt-login">Beni Hatırla</label>
															</span>
														</div>
													</fieldset>
													<div class="wt-loginfooterinfo">
														<a href="javascript:;" class="wt-forgot-password">Şifremi Unuttum?</a>
														<a href="register.php">Hesap Oluştur</a>
													</div>
												</form>
											    <form class="wt-formtheme wt-loginform do-forgot-password-form wt-hide-form">
											        <fieldset>
											            <div class="form-group">
											                <input type="email" name="email" class="form-control get_password" placeholder="Email">
											            </div>
											           
											            <div class="wt-logininfo">
											                <a href="javascript:;" class="wt-btn do-get-password">Get Pasword</a>
											            </div>     
											        </fieldset>
											        <div class="wt-loginfooterinfo">
											            <a href="javascript:void(0);" class="wt-show-login">Giriş Yap</a>
											            <a href="register.php">Kayıt Ol</a>
											        </div>
											    </form>
											</div>
										</div>
										<a href="register.html" class="wt-btn">Join Now</a>
									</div>
									<div class="wt-userlogedin">
										<figure class="wt-userimg">
											<img src="/../../../assets/images/user-img.jpg" alt="image description">
										</figure>
										<div class="wt-username">
											<h3>Louanne Mattioli</h3>
											<span>Amento Tech</span>
										</div>
										<nav class="wt-usernav">
											<ul>
												<li class="menu-item-has-children page_item_has_children">
													<a href="javascript:void(0);">
														<span>Insights</span>
													</a>
													<ul class="sub-menu children">
														<li><a href="dashboard-insights.html">Insights</a></li>
														<li><a href="dashboard-insightsuser.html">Insights User</a></li>
													</ul>
												</li>
												<li>
													<a href="dashboard-profile.html">
														<span>My Profile</span>
													</a>
												</li>
												<li class="menu-item-has-children">
													<a href="javascript:void(0);">
														<span>All Jobs</span>
													</a>
													<ul class="sub-menu">
														<li><a href="dashboard-completejobs.html">Completed Jobs</a></li>
														<li><a href="dashboard-canceljobs.html">Cancelled Jobs</a></li>
														<li><a href="dashboard-ongoingjob.html">Ongoing Jobs</a></li>
														<li><a href="dashboard-ongoingsingle.html">Ongoing Single</a></li>
													</ul>
												</li>
												<li>
													<a href="dashboard-managejobs.html">
														<span>Manage Jobs</span>
													</a>
												</li>
												<li class="wt-notificationicon menu-item-has-children">
													<a href="javascript:void(0);">
														<span>Messages</span>
													</a>
													<ul class="sub-menu">
														<li><a href="dashboard-messages.html">Messages</a></li>
														<li><a href="dashboard-messages2.html">Messages V 2</a></li>
													</ul>
												</li>
												<li>
													<a href="dashboard-saveitems.html">
														<span>My Saved Items</span>
													</a>
												</li>
												<li>
													<a href="dashboard-invocies.html">
														<span>Invoices</span>
													</a>
												</li>
												<li>
													<a href="dashboard-category.html">
														<span>Category</span>
													</a>
												</li>
												<li>
													<a href="dashboard-packages.html">
														<span>Packages</span>
													</a>
												</li>
												<li>
													<a href="dashboard-proposals.html">
														<span>Proposals</span>
													</a>
												</li>
												<li>
													<a href="dashboard-accountsettings.html">
														<span>Account Settings</span>
													</a>
												</li>
												<li>
													<a href="dashboard-helpsupport.html">
														<span>Help &amp; Support</span>
													</a>
												</li>
												<li>
													<a href="index-2.html">
														<span>Logout</span>
													</a>
												</li>
											</ul>
										</nav>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>