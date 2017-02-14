
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Material Admin - Login</title>

    <!-- BEGIN META -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="your,keywords">
    <meta name="description" content="Short explanation about this website">
    <!-- END META -->

    <!-- BEGIN STYLESHEETS -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:300italic,400italic,300,400,500,700,900' rel='stylesheet' type='text/css'/>
    <link type="text/css" rel="stylesheet" href="<?= base_url(); ?>public/css/theme-default/bootstrap.css?1422792965" />
    <link type="text/css" rel="stylesheet" href="<?= base_url(); ?>public/css/theme-default/materialadmin.css?1425466319" />
    <link type="text/css" rel="stylesheet" href="<?= base_url(); ?>public/css/theme-default/font-awesome.min.css?1422529194" />
    <link type="text/css" rel="stylesheet" href="<?= base_url(); ?>public/css/theme-default/material-design-iconic-font.min.css?1421434286" />
    <!-- END STYLESHEETS -->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script type="text/javascript" src="<?= base_url(); ?>public/js/libs/utils/html5shiv.js?1403934957"></script>
    <script type="text/javascript" src="<?= base_url(); ?>public/js/libs/utils/respond.min.js?1403934956"></script>
    <![endif]-->
</head>
<body class="menubar-hoverable header-fixed ">

<!-- BEGIN LOGIN SECTION -->
<section class="section-account">
    <div class="img-backdrop" style="background-image: url('<?= base_url(); ?>uploads/friend.jpg')"></div>
    <div class="spacer"></div>
    <div class="card contain-sm style-transparent">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-6">
                    <br/>
                    <span class="text-lg text-bold text-primary">ADMIN GİRİŞ</span>
                    <br/><br/>
                    <form class="form floating-label" action="<?= base_url(); ?>adminController/adminLogin" accept-charset="utf-8" method="post">

                        <div class="form-group">
                            <input type="email" class="form-control" id="username" name="email">
                            <label for="username">Email</label>
                        </div>
                           <?php
//                              echo (form_error('email'));
                           if(form_error('email')){?>
                               <div ><p style="color:#E57C67">Email-i boş buraxmayın</p></div>
                           <?php }?>

                        <div class="form-group">
                            <input type="password" class="form-control" id="password" name="password">
                            <label for="password">Password</label>
<!--                            <p class="help-block"><a href="#">Forgotten?</a></p>-->
                        </div>
                        <?php
                        if(form_error('password')){?>
                            <div ><p style="color:#E57C67">Şifrə-ni boş buraxmayın</p></div>
                        <?php }?>

                        <?php
                        if(isset($_SESSION['yalniw'])){ ?>
                            <div ><p style="color:#E57C67">Email və ya şifrə yalnışdır</p></div>
                     <?php
                        unset($_SESSION['yalniw']);
                        }
                        ?>

                        <br/>
                        <div class="row">
                            <div class="col-xs-6 text-left">
                                <div class="checkbox checkbox-inline checkbox-styled">
<!--                                    <label>-->
<!--                                        <input type="checkbox"> <span>Remember me</span>-->
<!--                                    </label>-->
                                </div>
                            </div><!--end .col -->
                            <div class="col-xs-6 text-right">
                                <button class="btn btn-primary btn-raised" type="submit">Login</button>
                            </div><!--end .col -->
                        </div><!--end .row -->
                    </form>
                </div><!--end .col -->
<!--                <div class="col-sm-5 col-sm-offset-1 text-center">-->
<!--                    <br><br>-->
<!--                    <h3 class="text-light">-->
<!--                        No account yet?-->
<!--                    </h3>-->
<!--                    <a class="btn btn-block btn-raised btn-primary" href="#">Sign up here</a>-->
<!--                    <br><br>-->
<!--                    <h3 class="text-light">-->
<!--                        or-->
<!--                    </h3>-->
<!--                    <p>-->
<!--                        <a href="#" class="btn btn-block btn-raised btn-info"><i class="fa fa-facebook pull-left"></i>Login with Facebook</a>-->
<!--                    </p>-->
<!--                    <p>-->
<!--                        <a href="#" class="btn btn-block btn-raised btn-info"><i class="fa fa-twitter pull-left"></i>Login with Twitter</a>-->
<!--                    </p>-->
<!--                </div><!--end .col -->
            </div><!--end .row -->
        </div><!--end .card-body -->
    </div><!--end .card -->
</section>
<!-- END LOGIN SECTION -->

<!-- BEGIN JAVASCRIPT -->
<script src="<?= base_url(); ?>public/js/libs/jquery/jquery-1.11.2.min.js"></script>
<script src="<?= base_url(); ?>public/js/libs/jquery/jquery-migrate-1.2.1.min.js"></script>
<script src="<?= base_url(); ?>public/js/libs/bootstrap/bootstrap.min.js"></script>
<script src="<?= base_url(); ?>public/js/libs/spin.js/spin.min.js"></script>
<script src="<?= base_url(); ?>public/js/libs/autosize/jquery.autosize.min.js"></script>
<script src="<?= base_url(); ?>public/js/libs/nanoscroller/jquery.nanoscroller.min.js"></script>
<script src="<?= base_url(); ?>public/js/core/source/App.js"></script>
<script src="<?= base_url(); ?>public/js/core/source/AppNavigation.js"></script>
<script src="<?= base_url(); ?>public/js/core/source/AppOffcanvas.js"></script>
<script src="<?= base_url(); ?>public/js/core/source/AppCard.js"></script>
<script src="<?= base_url(); ?>public/js/core/source/AppForm.js"></script>
<script src="<?= base_url(); ?>public/js/core/source/AppNavSearch.js"></script>
<script src="<?= base_url(); ?>public/js/core/source/AppVendor.js"></script>
<script src="<?= base_url(); ?>public/js/core/demo/Demo.js"></script>
<!-- END JAVASCRIPT -->

</body>
</html>
