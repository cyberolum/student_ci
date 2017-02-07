<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">

    <script
            src="https://code.jquery.com/jquery-3.1.1.js"
            integrity="sha256-16cdPddA6VdVInumRGo6IbivbERE8p7CQR3HzTBuELA="
            crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.1.0.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
          integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
            integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
            crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url(); ?>public/css/magic-check.css">
    <link rel="stylesheet" href="<?= base_url(); ?>public/css/styleKM.css">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>public/style/styleGunk.css">

    <link rel="stylesheet" href="<?= base_url(); ?>public/css/responsivGk.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>public/css/slickGk.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>public/css/slick-themeGk.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>public/css/stylemv.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>public/css/stylege.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>public/style/styleTMR.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>public/css/stylemv.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>public/css/stylege.css">
    <script type="text/javascript" src="<?= base_url(); ?>public/js/file.js"></script>

    <link rel="stylesheet" href="<?= base_url(); ?>public/css/mainSekil.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>public/css/normalizeSekil.css"/>
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>public/css/demoSekil.css"/>
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>public/css/componentSekil.css"/>
    <title>Elan</title>
    <script>(function (e, t, n) {
            var r = e.querySelectorAll("html")[0];
            r.className = r.className.replace(/(^|\s)no-js(\s|$)/, "$1js$2")
        })(document, window, 0);</script>
</head>
<body>


<section class="myNavbar col-md-12" style="z-index: 9999">
    <div class="container-fluid">
        <nav class="navbar ">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button style="margin-top:20px" type="button" class="navbar-toggle menubutton"
                            data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?= base_url(); ?>home/"><img src="<?= base_url(); ?>uploads/Home.png" alt=""></a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav">
                        <li class="navbarli1">
             <span class="navbarli1icon glyphicon glyphicon-home ">
                  <a href="<?= base_url(); ?>home/">Ana səhifə</a>
              </span>

                        </li>
                        <li class="navbarli4">
             <span class="navbarli4icon glyphicon glyphicon-info-sign">
                  <a href="<?= base_url(); ?>home/about">Haqqımızda</a>
              </span>

                        </li>

                        <li class="navbarli2">
             <span class="navbarli2icon glyphicon glyphicon-phone">
                  <a href="<?= base_url(); ?>home/contact">Əlaqə</a>
            </span>
                        </li>

                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="navbarli3">
                            <center>  <span class="navbarli3icon glyphicon glyphicon-user">
                  <a href="<?= base_url(); ?>auth/login">Giriş / Qeydiyyat</a>
                </span></center>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</section>


<div class="empty11"></div>

<section id="contact-us">
    <div class="container">
        <div class="row">

            <div class="col-lg-8 contact-us-form">
                <form action="" method="post">
                    <input type="hidden" name="_token" value="">
                    <div class="form-group">
                        <input type="text" name="name" class="form-control" id="name" value="" placeholder="Ad, Soyad">
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" class="form-control" id="email" value="" placeholder="E-poçt">
                    </div>
                    <div class="form-group">
                        <textarea id="message" class="form-control" name="message" rows="8" cols="80"
                                  placeholder="Mesaj"></textarea>
                    </div>
                    <button type="button" name="button" class=" empty21 btn btn-lg btn-block elaveEtNew">Göndər</button>
                </form>
            </div>


            <div class="col-lg-4">
                <div class="col-lg-12 padding0">
                    <ul class=" empy13 contact-list list-inline col-lg-12 padding0">
                        <li class="col-lg-3"><img src="<?= base_url(); ?>uploads/fb1.png" class=" bor img-responsive" alt="Facebook icon">
                        </li>
                        <li class="col-lg-9"><a href="#"><h1 class="fb">/evyoldaşı.az</h1></a></li>


                    </ul>

                    <ul class="contact-list list-inline col-lg-12 padding0">
                        <li class="col-lg-3"><img src="<?= base_url(); ?>uploads/tw2.png" class=" bor img-responsive" alt="Twitter icon">
                        </li>
                        <li class="col-lg-9"><a href="#"><h1 class="tw">@evyoldaşı.az</h1></a></li>
                    </ul>

                    <ul class="contact-list list-inline col-lg-12 padding0">
                        <li class="col-lg-3"><img src="<?= base_url(); ?>uploads/g3.png" class=" bor img-responsive" alt="Twitter icon">
                        </li>
                        <li class="col-lg-9"><a href="#"><h1 class="gmaill">+evyoldaşı.az</h1></a></li>


                    </ul>
                </div>
            </div>


        </div>
    </div>
</section>


<div class="empty21"></div>


<div class="container-fluid">
    <div class="row">
        <div class="copyright text-center">
            <p>&copy; 2016 evyoldaşı.az All Rights Reserved.</p>
        </div>
    </div>
</div>
<script src='<?= base_url(); ?>public/js/javascript.js'></script>


</body>
</html>
<script type="text/javascript" src="<?= base_url(); ?>public/js/custom-file-input.js"></script>


