<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?= $title ?></title>


<?php
    loadView("panel/dependencies/js");
    loadView("panel/dependencies/css");
?>

</head>

<body>

<!-- Main navbar -->
<div class="navbar navbar-expand-md navbar-dark">
    <div class="navbar-brand">

            <h6 class="ml-5" style="margin-bottom:-10px !important;">DASHBOARD</h6>

    </div>

    <div class="d-md-none">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-mobile">
            <i class="icon-tree5"></i>
        </button>
        <button class="navbar-toggler sidebar-mobile-main-toggle" type="button">
            <i class="icon-paragraph-justify3"></i>
        </button>
    </div>

    <div class="collapse navbar-collapse" id="navbar-mobile">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a href="#" class="navbar-nav-link sidebar-control sidebar-main-toggle d-none d-md-block">
                    <i class="icon-paragraph-justify3"></i>
                </a>
            </li>

        </ul>

        <span class="badge bg-success ml-md-3 mr-md-auto">Online</span>

        <ul class="navbar-nav">


            <li class="nav-item dropdown dropdown-user">
                <a href="#" class="navbar-nav-link d-flex align-items-center dropdown-toggle" data-toggle="dropdown">
                    <img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle mr-2" height="34" alt="">
                    <span>Ayarlar</span>
                </a>

                <div class="dropdown-menu dropdown-menu-right">
                    <a href="#" class="dropdown-item"><i class="icon-user-plus"></i> Ayarlar</a>
                    <a href="<?php echo base_url("admin/login/logout") ?>" class="dropdown-item"><i class="icon-switch2"></i> Logout</a>
                </div>
            </li>
        </ul>
    </div>
</div>
<!-- /main navbar -->


<!-- Page content -->
<div class="page-content">

    <!-- Main sidebar -->
    <div class="sidebar sidebar-dark sidebar-main sidebar-expand-md">

        <!-- Sidebar mobile toggler -->
        <div class="sidebar-mobile-toggler text-center">
            <a href="#" class="sidebar-mobile-main-toggle">
                <i class="icon-arrow-left8"></i>
            </a>
            Navigation
            <a href="#" class="sidebar-mobile-expand">
                <i class="icon-screen-full"></i>
                <i class="icon-screen-normal"></i>
            </a>
        </div>
        <!-- /sidebar mobile toggler -->


        <!-- Sidebar content -->
        <div class="sidebar-content">



            <!-- Main navigation -->
            <div class="card card-sidebar-mobile">
                <ul class="nav nav-sidebar" data-nav-type="accordion">

                    <!-- Main -->
                    <li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs">Menu</div> <i class="icon-menu" title="Main"></i></li>
                    <li class="nav-item">
                        <a href="index.html" class="nav-link ">
                            <i class="icon-home4"></i>
                            <span>
									Özet
								</span>
                        </a>
                    </li>
                    <li class="nav-item nav-item-submenu">
                        <a href="#" class="nav-link"><i class="icon-copy"></i> <span>Kullanıcılar</span></a>

                        <ul class="nav nav-group-sub" data-submenu-title="Layouts">
                            <li class="nav-item"><a href="<?php echo base_url("admin/users") ?>" class="nav-link ">Kullanıcıları Görüntüle</a></li>
                            <li class="nav-item"><a href="<?php echo base_url("admin/users/addForm") ?>" class="nav-link">Kullanıcı Ekle</a></li>
                        </ul>
                    </li>
                    <li class="nav-item nav-item-submenu">
                        <a href="#" class="nav-link"><i class="icon-copy"></i> <span>Sayfalar</span></a>

                        <ul class="nav nav-group-sub" data-submenu-title="Layouts">
                            <li class="nav-item"><a href="index.html" class="nav-link ">Hakkımızda</a></li>
                            <li class="nav-item"><a href="../../../../layout_2/LTR/default/full/index.html" class="nav-link">Politikalarımız</a></li>
                            <li class="nav-item"><a href="../../../../layout_4/LTR/default/full/index.html" class="nav-link">Yasal Uyarı</a></li>
                            <li class="nav-item"><a href="../../../../layout_5/LTR/default/full/index.html" class="nav-link">Gizlilik</a></li>
                            <li class="nav-item"><a href="../../../../layout_6/LTR/default/full/index.html" class="nav-link">Bilgi Toplumu Hizmetleri</a></li>
                            <li class="nav-item"><a href="../../../../layout_6/LTR/default/full/index.html" class="nav-link">Pop-Up</a></li>
                        </ul>
                    </li>


                    <li class="nav-item"><a href="<?= base_url("panel/products") ?>" class="nav-link "><i class="icon-copy"></i>Ürünler</a></li>

                    <li class="nav-item nav-item-submenu">
                        <a href="#" class="nav-link"><i class="icon-copy"></i> <span>Haberler</span></a>

                        <ul class="nav nav-group-sub" data-submenu-title="Layouts">
                            <li class="nav-item"><a href="index.html" class="nav-link ">Haberleri Görüntüle</a></li>
                            <li class="nav-item"><a href="../../../../layout_2/LTR/default/full/index.html" class="nav-link">Haber Ekle</a></li>
                            <li class="nav-item"><a href="../../../../layout_3/LTR/default/full/index.html" class="nav-link">Haber Güncelle</a></li>
                            <li class="nav-item"><a href="../../../../layout_4/LTR/default/full/index.html" class="nav-link">Haber Sil</a></li>
                        </ul>
                    </li>
                    <li class="nav-item nav-item-submenu">
                        <a href="#" class="nav-link"><i class="icon-folder"></i> <span>Dosyalar</span></a>

                        <ul class="nav nav-group-sub" data-submenu-title="Layouts">
                            <li class="nav-item"><a href="index.html" class="nav-link ">Dosyaları Görüntüle</a></li>
                            <li class="nav-item"><a href="../../../../layout_2/LTR/default/full/index.html" class="nav-link">Dosya Ekle</a></li>
                            <li class="nav-item"><a href="../../../../layout_3/LTR/default/full/index.html" class="nav-link">Dosya Güncelle</a></li>
                            <li class="nav-item"><a href="../../../../layout_4/LTR/default/full/index.html" class="nav-link">Dosya Sil</a></li>
                        </ul>
                    </li>
                    <li class="nav-item nav-item-submenu">
                        <a href="#" class="nav-link"><i class="icon-folder"></i> <span>İnsan Kaynakları</span></a>

                        <ul class="nav nav-group-sub" data-submenu-title="Layouts">
                            <li class="nav-item"><a href="index.html" class="nav-link ">Başvuruları Görüntüle</a></li>
                        </ul>
                    </li>


                </ul>
            </div>
            <!-- /main navigation -->

        </div>
        <!-- /sidebar content -->

    </div>
    <!-- /main sidebar -->


    <!-- Main content -->
    <div class="content-wrapper">

        <!-- Page header -->
        <div class="page-header page-header-light">
            

            <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
                <div class="d-flex">
                    <div class="breadcrumb">
                        <a href="index.html" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
                        <span class="breadcrumb-item active">Dashboard</span>
                    </div>

                    <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
                </div>

                <div class="header-elements d-none">
                    <div class="breadcrumb justify-content-center">
                        <a href="#" class="breadcrumb-elements-item">
                            <i class="icon-comment-discussion mr-2"></i>
                            Support
                        </a>

                        <div class="breadcrumb-elements-item dropdown p-0">
                            <a href="#" class="breadcrumb-elements-item dropdown-toggle" data-toggle="dropdown">
                                <i class="icon-gear mr-2"></i>
                                Settings
                            </a>

                            <div class="dropdown-menu dropdown-menu-right">
                                <a href="#" class="dropdown-item"><i class="icon-user-lock"></i> Account security</a>
                                <a href="#" class="dropdown-item"><i class="icon-statistics"></i> Analytics</a>
                                <a href="#" class="dropdown-item"><i class="icon-accessibility"></i> Accessibility</a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item"><i class="icon-gear"></i> All settings</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /page header -->


        <!-- Content area -->
        <div class="content">

          <?php $this->load->view($view); ?>

        </div>
        <!-- /content area -->


        <!-- Footer -->
        <div class="navbar navbar-expand-lg navbar-light">
            <div class="text-center d-lg-none w-100">
                <button type="button" class="navbar-toggler dropdown-toggle" data-toggle="collapse" data-target="#navbar-footer">
                    <i class="icon-unfold mr-2"></i>
                    Footer
                </button>
            </div>

            <div class="navbar-collapse collapse" id="navbar-footer">
					<span class="navbar-text">
						&copy; 2015 - 2018. <a href="#">Limitless Web App Kit</a> by <a href="http://themeforest.net/user/Kopyov" target="_blank">Eugene Kopyov</a>
					</span>

                <ul class="navbar-nav ml-lg-auto">
                    <li class="nav-item"><a href="https://kopyov.ticksy.com/" class="navbar-nav-link" target="_blank"><i class="icon-lifebuoy mr-2"></i> Support</a></li>
                    <li class="nav-item"><a href="http://demo.interface.club/limitless/docs/" class="navbar-nav-link" target="_blank"><i class="icon-file-text2 mr-2"></i> Docs</a></li>

