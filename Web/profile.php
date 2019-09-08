<?php require 'inc/frontend/views/head_start.php'; ?>
<link rel="stylesheet" href="/../../../assets/css/dashboard.css">
<link rel="stylesheet" href="/../../../assets/css/dbresponsive.css">

<?php require 'inc/frontend/views/head_end.php'; ?>
        <!--Main Start-->
        <!--Main Start-->
        <main id="wt-main" class="wt-main wt-haslayout" >
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
            <section class="wt-haslayout">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-">
                        <div class="wt-haslayout wt-dbsectionspace">
                            <div class="wt-dashboardbox wt-dashboardtabsholder">
                                <div class="wt-dashboardboxtitle">
                                    <h2>Profilim</h2>
                                </div>
                                <div class="wt-dashboardtabs">
                                    <ul class="wt-tabstitle nav navbar-nav">
                                        <li class="nav-item">
                                            <a class="active" data-toggle="tab" href="#wt-skills">Kişisel Özellikler &amp; Yetenekler</a>
                                        </li>                                    </ul>
                                </div>
                                <div class="wt-tabscontent tab-content">
                                    <div class="wt-personalskillshold tab-pane active fade show" id="wt-skills">
                                        <div class="wt-yourdetails wt-tabsinfo">
                                            <div class="wt-tabscontenttitle">
                                                <h2>Kişisel Bilgilerin</h2>
                                            </div>
                                            <form class="wt-formtheme wt-userform">
                                                <fieldset>
                                                    <div class="form-group form-group-half">
                                                        <input type="text" id="Name" name="first name" class="form-control" placeholder="İsim" v-bind:value="items.Name">
                                                    </div>
                                                    <div class="form-group form-group-half">
                                                        <input type="email" id="Surname" name="last name" class="form-control" placeholder="Soyisim" v-bind:value="items.Surname">
                                                    </div>
                                                    <div class="form-group">
                                                        <textarea name="message" class="form-control" placeholder="Hakkında" v-bind:value="items.About" id="about"></textarea>
                                                    </div>
                                                </fieldset>
                                            </form>
                                        </div>
                                        <div class="wt-profilephoto wt-tabsinfo">
                                            <div class="wt-tabscontenttitle">
                                                <h2>Profil Fotoğrafı</h2>
                                            </div>
                                            <div class="wt-profilephotocontent">
                                                <form class="wt-formtheme wt-formprojectinfo wt-formcategory">
                                                    <fieldset>
                                                        <div class="form-group form-group-label">
                                                            <div class="wt-labelgroup">
                                                                <label for="filep">
                                                                    <span class="wt-btn">Dosyaları Seç</span>
                                                                    <input type="file" name="file" id="filep">
                                                                </label>
                                                                <span>Dosyaları yüklemek için sürükle.</span>
                                                                <em class="wt-fileuploading">Yükleniyor<i class="fa fa-spinner fa-spin"></i></em>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <ul class="wt-attachfile wt-attachfilevtwo">
                                                                <li class="wt-uploadingholder wt-companyimg-uploading">
                                                                    <div class="wt-uploadingbox">
                                                                        <figure><img src="/../../../assets/images/company/img-07.jpg" alt="img description"></figure>
                                                                        <div class="wt-uploadingbar wt-uploading">
                                                                            <span class="uploadprogressbar"></span>
                                                                            <span>Profil Fotografı.jpg</span>
                                                                            <em>Dosya Boyutu: 300 kb<a href="javascript:void(0);" class="lnr lnr-cross"></a></em>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="wt-uploadingholder wt-companyimg-user">
                                                                    <div class="wt-uploadingbox">
                                                                        <figure><img src="/../../../assets/images/company/img-08.jpg" alt="img description"></figure>
                                                                        <div class="wt-uploadingbar wt-uploading">
                                                                            <span class="uploadprogressbar"></span>
                                                                            <span>Profil Fotografı.jpg</span>
                                                                            <em>Dosya Boyutu: 300 kb<a href="javascript:void(0);" class="lnr lnr-cross"></a></em>
                                                                        </div>	
                                                                    </div>
                                                                </li>
                                                                <li class="wt-uploadingholder">
                                                                    <div class="wt-uploadingbox">
                                                                        <div class="wt-designimg">
                                                                            <input id="demoz" type="radio" name="employees" value="company" checked="">
                                                                            <label for="demoz"><img src="/../../../assets/images/company/img-09.jpg" alt="img description"><i class="fa fa-check"></i></label>
                                                                        </div>
                                                                        <div class="wt-uploadingbar wt-uploading">
                                                                            <span class="uploadprogressbar"></span>
                                                                            <span>Profil Fotografı.jpg</span>
                                                                            <em>Dosya Boyutu: 300 kb<a href="javascript:void(0);" class="lnr lnr-cross"></a></em>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </fieldset>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="wt-location wt-tabsinfo">
                                            <div class="wt-tabscontenttitle">
                                                <h2>Lokasyon</h2>
                                            </div>
                                            <form class="wt-formtheme wt-userform">
                                                <fieldset>
                                                    <div class="form-group form-group-half" style="width:100% !important;">
                                                        <textarea name="address" class="form-control" placeholder="Adres" v-bind:value="items.Adress" id="Adresses"></textarea>
                                                    </div>

                                                </fieldset>
                                            </form>
                                        </div>
                                        <div class="wt-skills">
                                            <div class="wt-tabscontenttitle">
                                                <h2>Yeteneklerim</h2>
                                            </div>
                                            <div class="wt-skillscontent-holder">
                                                <form class="wt-formtheme wt-skillsform">
                                                    <fieldset>
                                                        <div class="form-group">
                                                                <input type="text" name="skill" id="skillUser" class="form-control" placeholder="Yeteneğinizi Seçiniz">
                                                                <input type="number" name="rate" id="skillRate" class="form-control" placeholder="Yeteneğini değerlendir (%0'dan %100'e)" style="float:left">
                                                        </div>
                                                        <div class="form-group wt-btnarea">
                                                            <a href="javascript:void(0);" class="wt-btn" onclick="UserSkillsAdd();">Yetenek Ekle</a>
                                                        </div>
                                                    </fieldset>
                                                </form>
                                                <div class="wt-myskills">
                                                    <ul class="sortable list" id="skillList">

                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="wt-updatall">
                            <i class="ti-announcement"></i>
                            <span>Yaptığınız bütün değişikler "Kaydet &amp; Devam Et” tuşuna bastığınız anda kaydedilecektir.</span>
                            <a class="wt-btn" href="javascript:;" onclick="UserUpdate();">Kaydet &amp; Devam Et</a>
                        </div>
                    </div>
                </div>
            </section>
            <!--Register Form End-->
        </main>
        <!--Main End-->	
<?php require 'inc/frontend/views/footer_start.php'; ?>
<?php require 'inc/frontend/views/footer_end.php'; ?>