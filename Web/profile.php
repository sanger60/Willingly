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
                            <figure><img src="http://amentotech.com/htmls/worktern/images/sidebar/img-02.jpg" alt="img description"></figure>
                            <div class="wt-title">
                                <h2><a href="javascript:void(0);">{{items.Name}} {{items.Surname}}</a></h2>
                                <span>{{items.Username}}</span>
                            </div>
                            <div class="wt-btnarea"><a href="dashboard-postjob.html" class="wt-btn">Bir İş İlanı Paylaş</a></div>
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
                            <li class="wt-active">
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
                                        </li>
                                        <li class="nav-item"><a data-toggle="tab" href="#wt-education">Tecrübe &amp; Eğitim</a></li>
                                        <li class="nav-item"><a data-toggle="tab" href="#wt-awards">Projeler &amp; Ödüller</a></li>
                                    </ul>
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
                                                    <div class="form-group form-group-half">
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
                                    <div class="wt-educationholder tab-pane fade" id="wt-education">
                                        <div class="wt-userexperience wt-tabsinfo">
                                            <div class="wt-tabscontenttitle wt-addnew">
                                                <h2>Deneyimlerini Ekle</h2>
                                                <a href="javascript:void(0);">Yeni Ekle</a>
                                            </div>
                                            <ul class="wt-experienceaccordion accordion">
                                                <li>
                                                    <div class="wt-accordioninnertitle">
                                                        <span id="accordioninnertitle" data-toggle="collapse" data-target="#innertitle">Web &amp; Apps Project Manager<em>(Jun 2017 - Jul 2018)</em></span>
                                                        <div class="wt-rightarea">
                                                            <a href="javascript:void(0);" class="wt-addinfo wt-skillsaddinfo" id="accordioninnertitle" data-toggle="collapse" data-target="#innertitle" aria-expanded="true"><i class="lnr lnr-pencil"></i></a>
                                                            <a href="javascript:void(0);" class="wt-deleteinfo"><i class="lnr lnr-trash"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="wt-collapseexp collapse show" id="innertitle" aria-labelledby="accordioninnertitle" data-parent="#accordion">
                                                        <form class="wt-formtheme wt-userform">
                                                            <fieldset>
                                                                <div class="form-group form-group-half">
                                                                    <input type="text" name="Company Title" class="form-control" placeholder="Company Title">
                                                                </div>
                                                                <div class="form-group form-group-half">
                                                                    <input type="text" name="Starting Date" class="form-control" placeholder="Starting Date">
                                                                </div>
                                                                <div class="form-group form-group-half">
                                                                    <input type="email" name="Ending Date" class="form-control" placeholder="Ending Date *">
                                                                </div>
                                                                <div class="form-group form-group-half">
                                                                    <input type="number" name="Job Title" class="form-control" placeholder="Your Job Title">
                                                                </div>
                                                                <div class="form-group">
                                                                    <textarea name="message" class="form-control" placeholder="Your Job Description"></textarea>
                                                                </div>
                                                                <div class="form-group">
                                                                    <span>* Leave ending date empty if its your current job</span>
                                                                </div>
                                                            </fieldset>
                                                        </form>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="wt-accordioninnertitle">
                                                        <span id="accordioninnertitlea" data-toggle="collapse" data-target="#innertitlea">Sr. PHP &amp; Laravel Developer<em>(Jun 2017 - Jul 2018)</em></span>
                                                        <div class="wt-rightarea">
                                                            <a href="javascript:void(0);" class="wt-addinfo wt-skillsaddinfo" id="accordioninnertitlea" data-toggle="collapse" data-target="#innertitlea" aria-expanded="true"><i class="lnr lnr-pencil"></i></a>
                                                            <a href="javascript:void(0);" class="wt-deleteinfo"><i class="lnr lnr-trash"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="wt-collapseexp collapse hide" id="innertitlea" aria-labelledby="accordioninnertitleaa" data-parent="#accordion">
                                                        <form class="wt-formtheme wt-userform">
                                                            <fieldset>
                                                                <div class="form-group form-group-half">
                                                                    <input type="text" name="Company Title" class="form-control" placeholder="Company Title">
                                                                </div>
                                                                <div class="form-group form-group-half">
                                                                    <input type="text" name="Starting Date" class="form-control" placeholder="Starting Date">
                                                                </div>
                                                                <div class="form-group form-group-half">
                                                                    <input type="email" name="Ending Date" class="form-control" placeholder="Ending Date *">
                                                                </div>
                                                                <div class="form-group form-group-half">
                                                                    <input type="number" name="Job Title" class="form-control" placeholder="Your Job Title">
                                                                </div>
                                                                <div class="form-group">
                                                                    <textarea name="message" class="form-control" placeholder="Your Job Description"></textarea>
                                                                </div>
                                                                <div class="form-group">
                                                                    <span>* Leave ending date empty if its your current job</span>
                                                                </div>
                                                            </fieldset>
                                                        </form>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="wt-accordioninnertitle">
                                                        <span id="accordioninnertitleb" data-toggle="collapse" data-target="#innertitleb">PHP &amp; Laravel Developer <em>(Apr 2016 - Jul 2017)</em></span>
                                                        <div class="wt-rightarea">
                                                            <a href="javascript:void(0);" class="wt-addinfo wt-skillsaddinfo" id="accordioninnertitleb" data-toggle="collapse" data-target="#innertitleb" aria-expanded="true"><i class="lnr lnr-pencil"></i></a>
                                                            <a href="javascript:void(0);" class="wt-deleteinfo"><i class="lnr lnr-trash"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="wt-collapseexp collapse hide" id="innertitleb" aria-labelledby="accordioninnertitleb" data-parent="#accordion">
                                                        <form class="wt-formtheme wt-userform">
                                                            <fieldset>
                                                                <div class="form-group form-group-half">
                                                                    <input type="text" name="Company Title" class="form-control" placeholder="Company Title">
                                                                </div>
                                                                <div class="form-group form-group-half">
                                                                    <input type="text" name="Starting Date" class="form-control" placeholder="Starting Date">
                                                                </div>
                                                                <div class="form-group form-group-half">
                                                                    <input type="email" name="Ending Date" class="form-control" placeholder="Ending Date *">
                                                                </div>
                                                                <div class="form-group form-group-half">
                                                                    <input type="number" name="Job Title" class="form-control" placeholder="Your Job Title">
                                                                </div>
                                                                <div class="form-group">
                                                                    <textarea name="message" class="form-control" placeholder="Your Job Description"></textarea>
                                                                </div>
                                                                <div class="form-group">
                                                                    <span>* Leave ending date empty if its your current job</span>
                                                                </div>
                                                            </fieldset>
                                                        </form>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="wt-userexperience">
                                            <div class="wt-tabscontenttitle wt-addnew">
                                                <h2>Add Your Education</h2>
                                                <a href="javascript:void(0);">Add New</a>
                                            </div>
                                            <ul class="wt-experienceaccordion accordion">
                                                <li>
                                                    <div class="wt-accordioninnertitle">
                                                        <span id="accordioninnertitle1" data-toggle="collapse" data-target="#innertitle1">Web &amp; Apps Project Manager<em>(Jun 2017 - Jul 2018)</em></span>
                                                        <div class="wt-rightarea">
                                                            <a href="javascript:void(0);" class="wt-addinfo wt-skillsaddinfo" id="accordioninnertitle1" data-toggle="collapse" data-target="#innertitle1" aria-expanded="true"><i class="lnr lnr-pencil"></i></a>
                                                            <a href="javascript:void(0);" class="wt-deleteinfo"><i class="lnr lnr-trash"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="wt-collapseexp collapse show" id="innertitle1" aria-labelledby="accordioninnertitle1" data-parent="#accordion">
                                                        <form class="wt-formtheme wt-userform">
                                                            <fieldset>
                                                                <div class="form-group form-group-half">
                                                                    <input type="text" name="Company Title" class="form-control" placeholder="Company Title">
                                                                </div>
                                                                <div class="form-group form-group-half">
                                                                    <input type="text" name="Starting Date" class="form-control" placeholder="Starting Date">
                                                                </div>
                                                                <div class="form-group form-group-half">
                                                                    <input type="email" name="Ending Date" class="form-control" placeholder="Ending Date *">
                                                                </div>
                                                                <div class="form-group form-group-half">
                                                                    <input type="number" name="Job Title" class="form-control" placeholder="Your Job Title">
                                                                </div>
                                                                <div class="form-group">
                                                                    <textarea name="message" class="form-control" placeholder="Your Job Description"></textarea>
                                                                </div>
                                                                <div class="form-group">
                                                                    <span>* Leave ending date empty if its your current job</span>
                                                                </div>
                                                            </fieldset>
                                                        </form>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="wt-accordioninnertitle">
                                                        <span id="accordioninnertitlea2" data-toggle="collapse" data-target="#innertitlea2">Sr. PHP &amp; Laravel Developer<em>(Jun 2017 - Jul 2018)</em></span>
                                                        <div class="wt-rightarea">
                                                            <a href="javascript:void(0);" class="wt-addinfo wt-skillsaddinfo" id="accordioninnertitlea2" data-toggle="collapse" data-target="#innertitlea2" aria-expanded="true"><i class="lnr lnr-pencil"></i></a>
                                                            <a href="javascript:void(0);" class="wt-deleteinfo"><i class="lnr lnr-trash"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="wt-collapseexp collapse hide" id="innertitlea2" aria-labelledby="accordioninnertitleaa" data-parent="#accordion">
                                                        <form class="wt-formtheme wt-userform">
                                                            <fieldset>
                                                                <div class="form-group form-group-half">
                                                                    <input type="text" name="Company Title" class="form-control" placeholder="Company Title">
                                                                </div>
                                                                <div class="form-group form-group-half">
                                                                    <input type="text" name="Starting Date" class="form-control" placeholder="Starting Date">
                                                                </div>
                                                                <div class="form-group form-group-half">
                                                                    <input type="email" name="Ending Date" class="form-control" placeholder="Ending Date *">
                                                                </div>
                                                                <div class="form-group form-group-half">
                                                                    <input type="number" name="Job Title" class="form-control" placeholder="Your Job Title">
                                                                </div>
                                                                <div class="form-group">
                                                                    <textarea name="message" class="form-control" placeholder="Your Job Description"></textarea>
                                                                </div>
                                                                <div class="form-group">
                                                                    <span>* Leave ending date empty if its your current job</span>
                                                                </div>
                                                            </fieldset>
                                                        </form>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="wt-accordioninnertitle">
                                                        <span id="accordioninnertitleb3" data-toggle="collapse" data-target="#innertitleb3">PHP &amp; Laravel Developer <em>(Apr 2016 - Jul 2017)</em></span>
                                                        <div class="wt-rightarea">
                                                            <a href="javascript:void(0);" class="wt-addinfo wt-skillsaddinfo" id="accordioninnertitleb" data-toggle="collapse" data-target="#innertitleb" aria-expanded="true"><i class="lnr lnr-pencil"></i></a>
                                                            <a href="javascript:void(0);" class="wt-deleteinfo"><i class="lnr lnr-trash"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="wt-collapseexp collapse hide" id="innertitleb3" aria-labelledby="accordioninnertitleb3" data-parent="#accordion">
                                                        <form class="wt-formtheme wt-userform">
                                                            <fieldset>
                                                                <div class="form-group form-group-half">
                                                                    <input type="text" name="Company Title" class="form-control" placeholder="Company Title">
                                                                </div>
                                                                <div class="form-group form-group-half">
                                                                    <input type="text" name="Starting Date" class="form-control" placeholder="Starting Date">
                                                                </div>
                                                                <div class="form-group form-group-half">
                                                                    <input type="email" name="Ending Date" class="form-control" placeholder="Ending Date *">
                                                                </div>
                                                                <div class="form-group form-group-half">
                                                                    <input type="number" name="Job Title" class="form-control" placeholder="Your Job Title">
                                                                </div>
                                                                <div class="form-group">
                                                                    <textarea name="message" class="form-control" placeholder="Your Job Description"></textarea>
                                                                </div>
                                                                <div class="form-group">
                                                                    <span>* Leave ending date empty if its your current job</span>
                                                                </div>
                                                            </fieldset>
                                                        </form>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="wt-awardsholder tab-pane fade" id="wt-awards">
                                        <div class="wt-addprojectsholder wt-tabsinfo">
                                            <div class="wt-tabscontenttitle wt-addnew">
                                                <h2>Add Your Projects</h2>
                                                <a href="javascript:void(0);">Add New</a>
                                            </div>
                                            <ul class="wt-experienceaccordion accordion">
                                                <li>
                                                    <div class="wt-accordioninnertitle">
                                                        <div class="wt-projecttitle collapsed" data-toggle="collapse" data-target="#innertitleaone">
                                                            <figure><img src="/../../../assets/images/thumbnail/img-11.jpg" alt="img description"></figure>
                                                            <h3>Project Title Here<span>www.themeforest.net</span></h3>
                                                        </div>
                                                        <div class="wt-rightarea">
                                                            <a href="javascript:void(0);" class="wt-addinfo wt-skillsaddinfo" data-toggle="collapse" data-target="#innertitleaone"><i class="lnr lnr-pencil"></i></a>
                                                            <a href="javascript:void(0);" class="wt-deleteinfo"><i class="lnr lnr-trash"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="wt-collapseexp collapse" id="innertitleaone" aria-labelledby="accordioninnertitle" data-parent="#accordion">
                                                        <form class="wt-formtheme wt-userform wt-formprojectinfo">
                                                            <fieldset>
                                                                <div class="form-group form-group-half">
                                                                    <input type="text" name="Project Title" class="form-control" placeholder="Project Title">
                                                                </div>
                                                                <div class="form-group form-group-half">
                                                                    <input type="text" name="Project URL" class="form-control" placeholder="Project URL">
                                                                </div>
                                                                <div class="form-group form-group-label wt-infouploading">
                                                                    <div class="wt-labelgroup">
                                                                        <label for="filen">
                                                                            <span class="wt-btn">Select Files</span>
                                                                            <input type="file" name="file" id="filen">
                                                                        </label>
                                                                        <span>Drop files here to upload</span>
                                                                        <em class="wt-fileuploading">Uploading<i class="fa fa-spinner fa-spin"></i></em>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <ul class="wt-attachfile">
                                                                        <li class="wt-uploading">
                                                                            <span>Logo.jpg</span>
                                                                            <em>File size: 300 kb<a href="javascript:void(0);" class="lnr lnr-cross"></a></em>
                                                                        </li>
                                                                        <li>
                                                                            <span>Wireframe Document.doc</span>
                                                                            <em>File size: 512 kb<a href="javascript:void(0);" class="lnr lnr-cross"></a></em>
                                                                        </li>
                                                                        <li>
                                                                            <span>Requirments.pdf</span>
                                                                            <em>File size: 110 kb<a href="javascript:void(0);" class="lnr lnr-cross"></a></em>
                                                                        </li>
                                                                        <li>
                                                                            <span>Company Intro.docx</span>
                                                                            <em>File size: 224 kb<a href="javascript:void(0);" class="lnr lnr-cross"></a></em>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="form-group wt-btnarea">
                                                                    <a href="javascript:void(0);" class="wt-btn">Save</a>
                                                                </div>
                                                            </fieldset>
                                                        </form>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="wt-accordioninnertitle">
                                                        <div class="wt-projecttitle collapsed" data-toggle="collapse" data-target="#innertitlebone">
                                                            <figure><img src="/../../../assets/images/thumbnail/img-12.jpg" alt="img description"></figure>
                                                            <h3>Project Title Here<span>www.themeforest.net</span></h3>
                                                        </div>
                                                        <div class="wt-rightarea">
                                                            <a href="javascript:void(0);" class="wt-addinfo wt-skillsaddinfo" data-toggle="collapse" data-target="#innertitlebone"><i class="lnr lnr-pencil"></i></a>
                                                            <a href="javascript:void(0);" class="wt-deleteinfo"><i class="lnr lnr-trash"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="wt-collapseexp collapse show" id="innertitlebone" aria-labelledby="accordioninnertitle1" data-parent="#accordion">
                                                        <form class="wt-formtheme wt-userform wt-formprojectinfo">
                                                            <fieldset>
                                                                <div class="form-group form-group-half">
                                                                    <input type="text" name="Project Title" class="form-control" placeholder="Project Title">
                                                                </div>
                                                                <div class="form-group form-group-half">
                                                                    <input type="text" name="Project URL" class="form-control" placeholder="Project URL">
                                                                </div>
                                                                <div class="form-group form-group-label wt-infouploading">
                                                                    <div class="wt-labelgroup">
                                                                        <label for="filet">
                                                                            <span class="wt-btn">Select Files</span>
                                                                            <input type="file" name="file" id="filet">
                                                                        </label>
                                                                        <span>Drop files here to upload</span>
                                                                        <em class="wt-fileuploading">Uploading<i class="fa fa-spinner fa-spin"></i></em>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <ul class="wt-attachfile">
                                                                        <li class="wt-uploading">
                                                                            <span>Logo.jpg</span>
                                                                            <em>File size: 300 kb<a href="javascript:void(0);" class="lnr lnr-cross"></a></em>
                                                                        </li>
                                                                        <li>
                                                                            <span>Wireframe Document.doc</span>
                                                                            <em>File size: 512 kb<a href="javascript:void(0);" class="lnr lnr-cross"></a></em>
                                                                        </li>
                                                                        <li>
                                                                            <span>Requirments.pdf</span>
                                                                            <em>File size: 110 kb<a href="javascript:void(0);" class="lnr lnr-cross"></a></em>
                                                                        </li>
                                                                        <li>
                                                                            <span>Company Intro.docx</span>
                                                                            <em>File size: 224 kb<a href="javascript:void(0);" class="lnr lnr-cross"></a></em>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="form-group wt-btnarea">
                                                                    <a href="javascript:void(0);" class="wt-btn">Save</a>
                                                                </div>
                                                            </fieldset>
                                                        </form>
                                                    </div>
                                                </li>
                                                <li>
                                                <div class="wt-accordioninnertitle">
                                                    <div class="wt-projecttitle collapsed" data-toggle="collapse" data-target="#innertitlecone">
                                                        <figure><img src="/../../../assets/images/thumbnail/img-13.jpg" alt="img description"></figure>
                                                        <h3>Project Title Here<span>www.themeforest.net</span></h3>
                                                    </div>
                                                    <div class="wt-rightarea">
                                                        <a href="javascript:void(0);" class="wt-addinfo wt-skillsaddinfo" data-toggle="collapse" data-target="#innertitlecone"><i class="lnr lnr-pencil"></i></a>
                                                        <a href="javascript:void(0);" class="wt-deleteinfo"><i class="lnr lnr-trash"></i></a>
                                                    </div>
                                                </div>
                                                <div class="wt-collapseexp collapse" id="innertitlecone" aria-labelledby="accordioninnertitle1" data-parent="#accordion">
                                                    <form class="wt-formtheme wt-userform wt-formprojectinfo">
                                                        <fieldset>
                                                            <div class="form-group form-group-half">
                                                                <input type="text" name="Project Title" class="form-control" placeholder="Project Title">
                                                            </div>
                                                            <div class="form-group form-group-half">
                                                                <input type="text" name="Project URL" class="form-control" placeholder="Project URL">
                                                            </div>
                                                            <div class="form-group form-group-label wt-infouploading">
                                                                <div class="wt-labelgroup">
                                                                    <label for="fileb">
                                                                        <span class="wt-btn">Select Files</span>
                                                                        <input type="file" name="file" id="fileb">
                                                                    </label>
                                                                    <span>Drop files here to upload</span>
                                                                    <em class="wt-fileuploading">Uploading<i class="fa fa-spinner fa-spin"></i></em>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <ul class="wt-attachfile">
                                                                    <li class="wt-uploading">
                                                                        <span>Logo.jpg</span>
                                                                        <em>File size: 300 kb<a href="javascript:void(0);" class="lnr lnr-cross"></a></em>
                                                                    </li>
                                                                    <li>
                                                                        <span>Wireframe Document.doc</span>
                                                                        <em>File size: 512 kb<a href="javascript:void(0);" class="lnr lnr-cross"></a></em>
                                                                    </li>
                                                                    <li>
                                                                        <span>Requirments.pdf</span>
                                                                        <em>File size: 110 kb<a href="javascript:void(0);" class="lnr lnr-cross"></a></em>
                                                                    </li>
                                                                    <li>
                                                                        <span>Company Intro.docx</span>
                                                                        <em>File size: 224 kb<a href="javascript:void(0);" class="lnr lnr-cross"></a></em>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="form-group wt-btnarea">
                                                                <a href="javascript:void(0);" class="wt-btn">Save</a>
                                                            </div>
                                                        </fieldset>
                                                    </form>
                                                </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="wt-addprojectsholder">
                                            <div class="wt-tabscontenttitle wt-addnew">
                                                <h2>Add Your Awards</h2>
                                                <a href="javascript:void(0);">Add New</a>
                                            </div>
                                            <ul class="wt-experienceaccordion accordion">
                                                <li>
                                                    <div class="wt-accordioninnertitle">
                                                        <div class="wt-projecttitle collapsed" data-toggle="collapse" data-target="#innertitleawone">
                                                            <figure><img src="/../../../assets/images/thumbnail/img-08.jpg" alt="img description"></figure>
                                                            <h3>Awards Title Here<samp>Apr 27, 2016</samp></h3>
                                                        </div>
                                                        <div class="wt-rightarea">
                                                            <a href="javascript:void(0);" class="wt-addinfo wt-skillsaddinfo" data-toggle="collapse" data-target="#innertitleawone"><i class="lnr lnr-pencil"></i></a>
                                                            <a href="javascript:void(0);" class="wt-deleteinfo"><i class="lnr lnr-trash"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="wt-collapseexp collapse" id="innertitleawone" aria-labelledby="accordioninnertitle" data-parent="#accordion">
                                                        <form class="wt-formtheme wt-userform wt-formprojectinfo">
                                                            <fieldset>
                                                                <div class="form-group form-group-half">
                                                                    <input type="text" name="Awards" class="form-control" placeholder="Award Title">
                                                                </div>
                                                                <div class="form-group form-group-half">
                                                                    <input type="text" name="awards" class="form-control" placeholder="Award Date">
                                                                </div>
                                                                <div class="form-group form-group-label wt-infouploading">
                                                                    <div class="wt-labelgroup">
                                                                        <label for="file">
                                                                            <span class="wt-btn">Select Files</span>
                                                                            <input type="file" name="file" id="file">
                                                                        </label>
                                                                        <span>Drop files here to upload</span>
                                                                        <em class="wt-fileuploading">Uploading<i class="fa fa-spinner fa-spin"></i></em>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <ul class="wt-attachfile">
                                                                        <li class="wt-uploading">
                                                                            <span>Logo.jpg</span>
                                                                            <em>File size: 300 kb<a href="javascript:void(0);" class="lnr lnr-cross"></a></em>
                                                                        </li>
                                                                        <li>
                                                                            <span>Wireframe Document.doc</span>
                                                                            <em>File size: 512 kb<a href="javascript:void(0);" class="lnr lnr-cross"></a></em>
                                                                        </li>
                                                                        <li>
                                                                            <span>Requirments.pdf</span>
                                                                            <em>File size: 110 kb<a href="javascript:void(0);" class="lnr lnr-cross"></a></em>
                                                                        </li>
                                                                        <li>
                                                                            <span>Company Intro.docx</span>
                                                                            <em>File size: 224 kb<a href="javascript:void(0);" class="lnr lnr-cross"></a></em>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="form-group wt-btnarea">
                                                                    <a href="javascript:void(0);" class="wt-btn">Save</a>
                                                                </div>
                                                            </fieldset>
                                                        </form>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="wt-accordioninnertitle">
                                                        <div class="wt-projecttitle collapsed" data-toggle="collapse" data-target="#innertitlebwone">
                                                            <figure><img src="/../../../assets/images/thumbnail/img-08.jpg" alt="img description"></figure>
                                                            <h3>Awards Title Here<samp>Apr 27, 2016</samp></h3>
                                                        </div>
                                                        <div class="wt-rightarea">
                                                            <a href="javascript:void(0);" class="wt-addinfo wt-skillsaddinfo" data-toggle="collapse" data-target="#innertitlebwone"><i class="lnr lnr-pencil"></i></a>
                                                            <a href="javascript:void(0);" class="wt-deleteinfo"><i class="lnr lnr-trash"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="wt-collapseexp collapse show" id="innertitlebwone" aria-labelledby="accordioninnertitle1" data-parent="#accordion">
                                                        <form class="wt-formtheme wt-userform wt-formprojectinfo">
                                                            <fieldset>
                                                                <div class="form-group form-group-half">
                                                                    <input type="text" name="Award Title" class="form-control" placeholder="Award Title">
                                                                </div>
                                                                <div class="form-group form-group-half">
                                                                    <input type="text" name="Award Date" class="form-control" placeholder="Award Date">
                                                                </div>
                                                                <div class="form-group form-group-label wt-infouploading">
                                                                    <div class="wt-labelgroup">
                                                                        <label for="filea">
                                                                            <span class="wt-btn">Select Files</span>
                                                                            <input type="file" name="file" id="filea">
                                                                        </label>
                                                                        <span>Drop files here to upload</span>
                                                                        <em class="wt-fileuploading">Uploading<i class="fa fa-spinner fa-spin"></i></em>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <ul class="wt-attachfile">
                                                                        <li class="wt-uploading">
                                                                            <span>Logo.jpg</span>
                                                                            <em>File size: 300 kb<a href="javascript:void(0);" class="lnr lnr-cross"></a></em>
                                                                        </li>
                                                                        <li>
                                                                            <span>Wireframe Document.doc</span>
                                                                            <em>File size: 512 kb<a href="javascript:void(0);" class="lnr lnr-cross"></a></em>
                                                                        </li>
                                                                        <li>
                                                                            <span>Requirments.pdf</span>
                                                                            <em>File size: 110 kb<a href="javascript:void(0);" class="lnr lnr-cross"></a></em>
                                                                        </li>
                                                                        <li>
                                                                            <span>Company Intro.docx</span>
                                                                            <em>File size: 224 kb<a href="javascript:void(0);" class="lnr lnr-cross"></a></em>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="form-group wt-btnarea">
                                                                    <a href="javascript:void(0);" class="wt-btn">Save</a>
                                                                </div>
                                                            </fieldset>
                                                        </form>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="wt-accordioninnertitle">
                                                        <div class="wt-projecttitle collapsed" data-toggle="collapse" data-target="#innertitlecwone">
                                                            <figure><img src="/../../../assets/images/thumbnail/img-09.jpg" alt="img description"></figure>
                                                            <h3>Awards Title Here<samp>Apr 27, 2016</samp></h3>
                                                        </div>
                                                        <div class="wt-rightarea">
                                                            <a href="javascript:void(0);" class="wt-addinfo wt-skillsaddinfo" data-toggle="collapse" data-target="#innertitlecwone"><i class="lnr lnr-pencil"></i></a>
                                                            <a href="javascript:void(0);" class="wt-deleteinfo"><i class="lnr lnr-trash"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="wt-collapseexp collapse" id="innertitlecwone" aria-labelledby="accordioninnertitle1" data-parent="#accordion">
                                                        <form class="wt-formtheme wt-userform wt-formprojectinfo">
                                                            <fieldset>
                                                                <div class="form-group form-group-half">
                                                                    <input type="text" name="Award Title" class="form-control" placeholder="Award Title">
                                                                </div>
                                                                <div class="form-group form-group-half">
                                                                    <input type="text" name="Award Date" class="form-control" placeholder="Award Date">
                                                                </div>
                                                                <div class="form-group form-group-label wt-infouploading">
                                                                    <div class="wt-labelgroup">
                                                                        <label for="filec">
                                                                            <span class="wt-btn">Select Files</span>
                                                                            <input type="file" name="file" id="filec">
                                                                        </label>
                                                                        <span>Drop files here to upload</span>
                                                                        <em class="wt-fileuploading">Uploading<i class="fa fa-spinner fa-spin"></i></em>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <ul class="wt-attachfile">
                                                                        <li class="wt-uploading">
                                                                            <span>Logo.jpg</span>
                                                                            <em>File size: 300 kb<a href="javascript:void(0);" class="lnr lnr-cross"></a></em>
                                                                        </li>
                                                                        <li>
                                                                            <span>Wireframe Document.doc</span>
                                                                            <em>File size: 512 kb<a href="javascript:void(0);" class="lnr lnr-cross"></a></em>
                                                                        </li>
                                                                        <li>
                                                                            <span>Requirments.pdf</span>
                                                                            <em>File size: 110 kb<a href="javascript:void(0);" class="lnr lnr-cross"></a></em>
                                                                        </li>
                                                                        <li>
                                                                            <span>Company Intro.docx</span>
                                                                            <em>File size: 224 kb<a href="javascript:void(0);" class="lnr lnr-cross"></a></em>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="form-group wt-btnarea">
                                                                    <a href="javascript:void(0);" class="wt-btn">Kaydet</a>
                                                                </div>
                                                            </fieldset>
                                                        </form>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>										
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="wt-updatall">
                            <i class="ti-announcement"></i>
                            <span>Yaptığınız bütün değişikler "Kaydet &amp; Devam Et” tuşuna bastığınız anda kaydedilecektir.</span>
                            <a class="wt-btn" href="javascript:void(0);">Kaydet &amp; Devam Et</a>
                        </div>
                    </div>
                </div>
            </section>
            <!--Register Form End-->
        </main>
        <!--Main End-->	
<?php require 'inc/frontend/views/footer_start.php'; ?>
<?php require 'inc/frontend/views/footer_end.php'; ?>