<?php require 'inc/frontend/views/head_start.php'; ?>
<?php require 'inc/frontend/views/head_end.php'; ?>
			<!--Header End-->
			<!--Inner Home Banner Start-->
			<div class="wt-haslayout wt-innerbannerholder">
				<div class="container">
					<div class="row justify-content-md-center">
						<div class="col-xs-12 col-sm-12 col-md-8 push-md-2 col-lg-6 push-lg-3">
							<div class="wt-innerbannercontent">
							<div class="wt-title"><h2>Join Now For FREE</h2></div>
							<ol class="wt-breadcrumb">
								<li><a href="index.html">Home</a></li>
								<li class="wt-active">Join Now</li>
							</ol>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--Inner Home End-->
			<!--Main Start-->
			<main id="wt-main" class="wt-main wt-haslayout wt-innerbgcolor">
				<!--Register Form Start-->
				<div class="wt-haslayout wt-main-section">
					<div class="container">
						<div class="row justify-content-md-center">
							<div class="col-xs-12 col-sm-12 col-md-10 push-md-1 col-lg-8 push-lg-2">
								<div class="wt-registerformhold">
									<div class="wt-registerformmain">
										<div class="wt-registerhead">
											<div class="wt-title">
												<h3>İyi Bir Başlangıç ​​İçin Katılın</h3>
											</div>
											<div class="wt-description">
												<p>Siz bize güvenin.</p>
											</div>
										</div>
										<div class="wt-joinforms">
											<form class="wt-formtheme wt-formregister" onsubmit="RegisterCheck()" id="registerForm">
												<fieldset class="wt-registerformgroup">
													<div class="form-group form-group-half">
														<input type="text" name="First Name" id="name" class="form-control" onfocusout="ErrorCode(this)" placeholder="Ad" required>
													</div>
													<div class="form-group form-group-half">
														<input type="text" name="Last Name" id="lastname" class="form-control" onfocusout="ErrorCode(this)" placeholder="Soyad" required>
													</div>
													<div class="form-group">
														<input type="text" name="Username" id="RegisterUsername" class="form-control" onfocusout="ErrorCode(this)" placeholder="Kullanıcı Adı" required>
													</div>
													<div class="form-group">
														<input type="mail" name="Email" id="email" class="form-control" onfocusout="ErrorCode(this)" placeholder="Email" required>
													</div>
													<div class="form-group">
														<input type="password" name="Password" id="pwd" class="form-control" onfocusout="ErrorCode(this)" placeholder="Şifre" required>
													</div>
													<div class="form-group">
														<input type="password" name="Password" id="pwdCheck" class="form-control" onfocusout="ErrorCode(this)" placeholder="Şifre (Tekrar)" required>
													</div>
													<div class="form-group">
														<a href="javascript:;" id="registerFormBtn" onclick="RegisterFormSubmitEvent()" class="wt-btn">Şimdi Başla</a>
													</div>
												</fieldset>
											</form>
											<div class="wt-joinnowholder">
												<div class="wt-title">
													<h4>Şimdi Katıl</h4>
												</div>
												<div class="wt-description">
													<p>Doğrudan hesabınıza girmek ve iyi bir iş başlatmak için daha hızlı giriş yapmak veya kolay kayıt için bir sosyal hesap kullanın</p>
												</div>
												<ul class="wt-socialicons wt-iconwithtext">
													<li class="wt-facebook"><a href="javascript:void(0);"><i class="fa fa-facebook-f"></i><em>Facebook</em></a>
													</li>
													<li class="wt-googleplus"><a href="javascript:void(0);"><i class="fab fa-google-plus-g"></i><em>Google</em></a></li>
												</ul>
											</div>
										</div>
									</div>
									<div class="wt-registerformfooter">
										<span>Hesabınız var mı? <a href="javascript:void(0);">Giriş Yap</a></span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--Register Form End-->
			</main>
			
			<!--Main End-->
			<!--Footer Start-->
			<?php require 'inc/frontend/views/footer_start.php'; ?>
			<?php require 'inc/frontend/views/footer_end.php'; ?>
</html>