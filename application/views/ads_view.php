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
                    <a class="navbar-brand" href="home/"><img src="<?= base_url(); ?>uploads/Home.png" alt=""></a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav">
                        <li class="navbarli1">
             <span class="navbarli1icon glyphicon glyphicon-home ">
                  <a href="home/">Ana səhifə</a>
              </span>

                        </li>
                        <li class="navbarli4">
            <span class="navbarli4icon glyphicon glyphicon-info-sign">
                  <a href="home/about">Haqqımızda</a>
              </span>

                        </li>

                        <li class="navbarli2">
             <span class="navbarli2icon glyphicon glyphicon-phone">
                  <a href="home/contact">Əlaqə</a>
            </span>
                        </li>

                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="navbarli3">
                            <center>  <span class="navbarli3icon glyphicon glyphicon-user">
                  <a href="auth/login">Giriş / Qeydiyyat</a>
                </span></center>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</section>


<div class="container">
    <div class="row">
        <div class="col-md-offset-1 col-md-10">
            <h2 style="font-size: 25px; padding-bottom: 20px; font-weight: 700">Yeni elan</h2>
            <div class="col-md-8 main">

                <div class="row">
                    <div class="col-md-4">
                        <label for="category">Əmlakın növü</label>
                    </div>
                    <div class="col-md-7">
                        <select class="form-control" id="category">
                            <option value> Siyahidan secin</option>
                            <option value="Geyim və ayaqqabılar">Geyim və ayaqqabılar</option>
                            <option value="Saat və zinət əçyaları">Saat və zinət əçyaları</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <label for="">Seher</label>
                    </div>
                    <div class="col-md-7">
                        <select class="form-control" id="category">
                            <option value> Siyahidan secin</option>
                            <option value="Geyim və ayaqqabılar">Geyim və ayaqqabılar</option>
                            <option value="Saat və zinət əçyaları">Saat və zinət əçyaları</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <label for="">Rayon</label>
                    </div>
                    <div class="col-md-7">
                        <select class="form-control" id="category">
                            <option value> Siyahidan secin</option>
                            <option value="Geyim və ayaqqabılar">Geyim və ayaqqabılar</option>
                            <option value="Saat və zinət əçyaları">Saat və zinət əçyaları</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <label for="">Metro</label>
                    </div>
                    <div class="col-md-7">
                        <select class="form-control" id="category">
                            <option value> Siyahidan secin</option>
                            <option value="Geyim və ayaqqabılar">Geyim və ayaqqabılar</option>
                            <option value="Saat və zinət əçyaları">Saat və zinət əçyaları</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <label for="">Qiymet</label>
                    </div>
                    <div class="col-md-7">
                        <input type="text" class="form-control" id="usr">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <label for="">Otaq sayi</label>
                    </div>
                    <div class="col-md-7">
                        <select class="form-control" id="category">
                            <option value> Siyahidan secin</option>
                            <option value="Geyim və ayaqqabılar">Geyim və ayaqqabılar</option>
                            <option value="Saat və zinət əçyaları">Saat və zinət əçyaları</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <label for="">Unvan</label>
                    </div>
                    <div class="col-md-7">
                        <input type="text" class="form-control" id="usr">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <label for="">Elave melumat</label>
                    </div>
                    <div class="col-md-7">
                        <textarea class="form-control textarea" rows="5" cols="15" id="comment"
                                  style="margin-bottom: 10px;"></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <label for="">Elaqeli shexs</label>
                    </div>
                    <div class="col-md-7">
                        <input type="text" class="form-control" id="usr">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <label for="">Telefon</label>
                    </div>
                    <div class="col-md-7">
                        <input type="text" class="form-control" id="usr">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <label for="">Email</label>
                    </div>
                    <div class="col-md-7">
                        <input type="text" class="form-control" id="usr">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <label for="">Shekil</label>
                    </div>
                    <div class="col-md-7">
                        <input type="file" name="file-4[]" id="file-4" class="inputfile inputfile-3"
                               data-multiple-caption="{count} şəkil seçilmişdir" multiple/>
                        <label for="file-4"><span>Şəkil seç&hellip;</span></label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <button type="button" name="button" class="btn btn-lg btn-block elaveEtNew">Əlavə et</button>
                    </div>
                </div>
            </div>
            <div class="col-md-4 main2">
                <div class="">
                    <h2 style="color:red; font-size: 25px;">Qaydalar</h2>
                    <ul class="rules">
                        <li>Eyni elanı bir neçə dəfə təqdim etməyin.</li>
                        <li>Təsvir və ya şəkillərdə telefon, email və ya sayt ünvanı göstərməyin.</li>
                        <li>Ad yerində qiymət yazmayın - bunun üçün ayrıca xana var.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>


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
