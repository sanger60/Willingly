<?php require 'inc/frontend/views/head_start.php'; ?>
<link rel="stylesheet" href="/../../../assets/css/dashboard.css">
<link rel="stylesheet" href="/../../../assets/css/dbresponsive.css">
<?php require 'inc/frontend/views/head_end.php'; ?>

<main id="wt-main" class="wt-main wt-haslayout">
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
                            <figure><img src="http://amentotech.com/htmls/worktern/images/sidebar/img-02.jpg" alt="img description"></figure>
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
							<div class="wt-dashboardbox wt-messages-holder">
								<div class="wt-dashboardboxtitle">
									<h2>Mesajlar</h2>
								</div>
								<div class="wt-dashboardboxtitle wt-titlemessages">
									<a href="javascript:;" class="wt-back"><i class="ti-arrow-left"></i></a>
									<div class="wt-userlogedin">
										<figure class="wt-userimg">
											<img>
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
												<div class="wt-ad  wt-active" v-for="item in items" onclick="ViewMessage(this);">
													<figure><img v-bind:src="item.userImage" alt=""></figure>
													<div class="wt-adcontent">
														<h3>{{item.userName}}</h3>
                                                        <span>{{item.message}}</span>
                                                        <input type="hidden" v-bind:value="item.Id"  />
													</div>
												</div>
											</div>
										</li>
										<li>
											<div class="wt-chatarea">
												<div class="wt-messages wt-verticalscrollbar wt-dashboardscrollbar" id="msgList">


												</div>
												<div class="wt-replaybox">
													<div class="form-group">
														<textarea class="form-control" name="reply" placeholder="Type message here"></textarea>
													</div>
													<div class="wt-iconbox">
														<i class="lnr lnr-thumbs-up"></i>
														<i class="lnr lnr-thumbs-down"></i>
														<i class="lnr lnr-smile"></i>
														<a href="javascript:void(0);" class="wt-btnsendmsg">Gönder</a>
													</div>
												</div>
											</div>
										</li>
									</ul>
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