<?php require 'inc/frontend/views/head_start.php'; ?>
<?php require 'inc/frontend/views/head_end.php'; ?>
			<!--Header End-->
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
											<form class="wt-formtheme wt-formregister" id="registerForm">
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
														<input type="password" name="CheckPassword" id="pwdCheck" class="form-control" onfocusout="ErrorCode(this)" placeholder="Şifre (Tekrar)" required>
													</div>
													<div class="form-group">
														<a href="javascript:;" id="registerFormBtn" onclick="RegisterCheck()" class="wt-btn">Şimdi Başla</a>
													</div>
												</fieldset>
											</form>
										</div>
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