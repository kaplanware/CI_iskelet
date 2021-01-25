<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Giriş Ekranı</title>

    <!-- Global stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url("assets") ?>/global_assets/css/icons/icomoon/styles.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url("assets") ?>/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url("assets") ?>/assets/css/bootstrap_limitless.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url("assets") ?>/assets/css/layout.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url("assets") ?>/assets/css/components.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url("assets") ?>/assets/css/colors.min.css" rel="stylesheet" type="text/css">
    <!-- /global stylesheets -->

    <!-- Core JS files -->
    <script src="<?php echo base_url("assets") ?>/global_assets/js/main/jquery.min.js"></script>
    <script src="<?php echo base_url("assets") ?>/global_assets/js/main/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url("assets") ?>/global_assets/js/plugins/loaders/blockui.min.js"></script>
    <!-- /core JS files -->

    <!-- Theme JS files -->
    <script src="<?php echo base_url("assets") ?>/global_assets/js/plugins/forms/styling/uniform.min.js"></script>

    <script src="<?php echo base_url("assets") ?>assets/js/app.js"></script>
    <script src="<?php echo base_url("assets") ?>/global_assets/js/demo_pages/login.js"></script>
    <!-- /theme JS files -->

</head>

<body class="bg-slate-800">

<!-- Page content -->
<div class="page-content">

    <!-- Main content -->
    <div class="content-wrapper">

        <!-- Content area -->
        <div class="content d-flex justify-content-center align-items-center">
            <!-- Login card -->
            <form class="login-form" action="<?php echo base_url("login/login") ?>" method="post">
                <div class="card mb-0">
                    <div class="card-body">
                        <div class="text-center mb-3">
                            <i class="icon-people icon-2x text-warning-400 border-warning-400 border-3 rounded-round p-3 mb-3 mt-1"></i>
                            <h5 class="mb-0"><?= $title ?></h5>
                            <span class="d-block text-muted">Yönetim Paneli</span>
                        </div>

                        <div class="form-group form-group-feedback form-group-feedback-left">
                            <input type="text" class="form-control" name="username" placeholder="Username">
                            <div class="form-control-feedback">
                                <i class="icon-user text-muted"></i>
                            </div>
                        </div>

                        <div class="form-group form-group-feedback form-group-feedback-left">
                            <input type="password" class="form-control" name="password" placeholder="Password">
                            <div class="form-control-feedback">
                                <i class="icon-lock2 text-muted"></i>
                            </div>
                        </div>

                        <div class="form-group d-flex align-items-center">
                            <div class="form-check mb-0">
                                <label class="form-check-label">
                                    <input type="checkbox" name="remember" class="form-input-styled" checked data-fouc>
                                    Hatırla
                                </label>
                            </div>

                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block">Giriş Yap <i class="icon-circle-right2 ml-2"></i></button>
                        </div>
                        <?php echo $this->session->userdata("error"); ?>

                        <span class="form-text text-center text-muted"></a></span>
                    </div>
                </div>
            </form>
            <!-- /login card -->

        </div>
        <!-- /content area -->

    </div>
    <!-- /main content -->

</div>
<!-- /page content -->

</body>
</html>