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
                            <figure><img src="/../../../assets/images/sidebar/img-01.jpg" alt="img description"></figure>
                            <div class="wt-title">
                                <h2><a href="javascript:void(0);">{{items.Name}} {{items.Surname}}</a></h2>
                                <span>{{items.Username}}</span>
                            </div>
                            <div class="wt-btnarea"><a href="jobPost.php" class="wt-btn">Bir İş İlanı Paylaş</a></div>
                        </div>
                    </div>
                    <nav id="wt-navdashboard" class="wt-navdashboard">
                        <ul>
                            <li class="wt-active">
                                <a href="profile.php">
                                    <i class="ti-briefcase"></i>
                                    <span>Profil</span>
                                </a>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="javascript:void(0);">
                                    <i class="ti-package"></i>
                                    <span>İşler</span>
                                </a>
                                <ul class="sub-menu">
                                    <li><hr><a href="endJob.php">Biten İşler</a></li>
                                    <li><hr><a href="ongoing.php">Aldığım İşler</a></li> <!-- dashboard-ongoingsingle.html -->
                                </ul>
                            </li>
                            <li>
                                <a href="dashboard-managejobs.html">
                                    <i class="ti-announcement"></i>
                                    <span>İşleri Yönet</span>
                                </a>
                            </li>
                            <li>
                                <a href="messages.php">
                                    <i class="ti-pencil-alt"></i>
                                    <span>Mesajlar</span>
                                </a>
                            </li>
                            <li>
                                <a href="accountsettings.php">
                                    <i class="ti-anchor"></i>
                                    <span>Hesap Ayarları</span>
                                </a>
                            </li>
                            <li>
                                <a href="logout.php">
                                    <i class="ti-shift-right"></i>
                                    <span>Çıkış Yap</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <div class="wt-navdashboard-footer">
                        <span>Willingly. © 2019 Bütün Hakları Saklıdır.</span>
                    </div>
                </div>
            </div>
				<!--Sidebar Start-->
				<!--Register Form Start-->
				<section class="wt-haslayout wt-dbsectionspace">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
							<div class="wt-dashboardbox">
								<div class="wt-dashboardboxtitle">
									<h2>Tüm İşler</h2>
								</div>
								<div class="wt-dashboardboxcontent wt-jobdetailsholder">
									<div class="wt-completejobholder">
										<div class="wt-managejobcontent">
											<div class="wt-userlistinghold wt-featured wt-userlistingvtwo" v-for="item in Items">
												<span class="wt-featuredtag"><img src="/../../../assets/images/featured.png" alt="img description" data-tipso="Plus Member" class="template-content tipso_style"></span>
												<div class="wt-userlistingcontent wt-userlistingcontentvtwo">
													<div class="wt-contenthead">
														<div class="wt-title">
															<a href="jobsingle.php"><i class="fa fa-check-circle"></i>
															</a>
															<h2>{{item.Tittle}}</h2>
														</div>
														<ul class="wt-saveitem-breadcrumb wt-userlisting-breadcrumb">
															<li><span class="wt-dashboraddoller"><i class="fas fa-liras-sign"></i> {{item.Price}}</span></li>
															<li><span class="wt-dashboradclock"><i class="far fa-clock"></i> B.Zaman: {{item.Deadline}}</span></li>															
														</ul>
													</div>
													<div class="wt-rightarea">
														<div class="wt-btnarea">
															<span>Verilen Projeler</span>
														</div>
														<div class="wt-hireduserstatus">
															<h4>İşi Alan</h4><span>Abdussamed İnanç</span>
															<ul class="wt-hireduserimgs">
																<li><figure><img src="/../../../assets/images/user/userlisting/img-01.jpg" alt="img description"></figure></li>
															</ul>
														</div>
													</div>
												</div>	
											</div>										
										</div>
									</div>
								</div>
								<nav class="wt-pagination wt-savepagination">
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
				</section>
				<!--Register Form End-->
			</main>
        
<?php require 'inc/frontend/views/footer_start.php'; ?>
<?php require 'inc/frontend/views/footer_end.php'; ?>