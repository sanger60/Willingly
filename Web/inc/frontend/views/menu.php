			<!-- Header Start -->
			<header id="wt-header" class="wt-header wt-haslayout">
				<div class="wt-navigationarea">
					<div class="container-fluid">
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
								<strong class="wt-logo"><a href="/"><img src="/../../../assets/images/logo.png" alt="company logo here"></a></strong>
								<div class="wt-rightarea">
									<nav id="wt-nav" class="wt-nav navbar-expand-lg">
										<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
											<i class="lnr lnr-menu"></i>
										</button>
										<div class="collapse navbar-collapse wt-navigation" id="navbarNav">
											<ul class="navbar-nav">
												<li class="menu-item-has-children page_item_has_children">
													<a href="index.php">Ana Sayfa</a>
												</li>
												<li>
											</ul>
										</div>
									</nav>
									<?php if($Global_IsLogin == false){ ?>
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
												<form class="wt-formtheme wt-loginform do-login-form" id="login-form">
													<fieldset>
														<div class="form-group">
															<input type="text" name="username" id="LoginEmail" class="form-control" placeholder="Email" onfocusout="ErrorCode(this)" required>
														</div>
														<div class="form-group">
															<input type="password" name="password" id="pwdLogin" class="form-control" placeholder="Şifre" onfocusout="ErrorCode(this)" required>
														</div>
														<div class="wt-logininfo">
															<a href="javascript:;" onclick="LoginCheck()" class="wt-btn do-login-button">Giriş Yap</a>
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
										<a href="register.php" class="wt-btn">Şimdi Başla</a>
									</div>
									<?php }else{ ?>
										<div class="wt-userlogedin"style="display:block;">
										<figure class="wt-userimg">
											<img src="/../../../assets/images/user-img.jpg" alt="image description">
										</figure>
										<div class="wt-username">
											<h3><?php echo $Global_Name; ?></h3>
											<span><?php echo $Global_Email; ?></span>
										</div>
										<nav class="wt-usernav">
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
									</div>
									<?php } ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>