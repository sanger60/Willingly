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
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 float-left">
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
												<div class="form-group" style="width:100% !important;">
                                                        <input type="date" placeholder="Bitiş Tarihi" name="deadDate" id="deadline" style="width:100%;" />
                                                </div>
                                                <div class="form-group form-group-half wt-formwithlabel" style="width:50%;">
                                                        <input type="number" name="donationPercent" placeholder="Bağışlanan Yüzde" id="donationPerce" min="7" style="width:100%;" />
                                                        <br/>
                                                        <em>Buradaki tutar şirketimizin minimum hizmet bedelidir.</em>
                                                        <em>Tamamen kurumlara bağışlanacaktır.</em>
                                                </div>
                                                <div class="form-group form-group-half wt-formwithlabel" style="width:50%;">
                                                        <input type="text" placeholder="İlan Tutarı" name="priceTitle" id="number" pattern="[0-9]*" style="float:right;width:100%;">
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
													<textarea id="wt-tinymceeditor" class="wt-tinymceeditor" placeholder="İlan Detaylarını Giriniz..." style="width:100%;"></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <select id="categories" style="width:100%;">
                                                            <option selected="" disabled="">Kategori Seçiniz</option>
															<option v-bind:value="item.Id" v-for="item in items">
                                                                {{item.Name}}
                                                            </option>
													</select>
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