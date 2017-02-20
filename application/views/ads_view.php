<?php

if (isset($_SESSION['logout']) == FALSE) {
    redirect(base_url());
}

//$user  = $_SESSION['user'][0];

?>

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
    <!--    <link rel="stylesheet" href="--><? //= base_url(); ?><!--public/css/magic-check.css">-->
    <!--    <link rel="stylesheet" href="--><? //= base_url(); ?><!--public/css/styleKM.css">-->
    <!--    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">-->
    <!--    <link rel="stylesheet" href="--><? //= base_url(); ?><!--public/style/styleGunk.css">-->
    <!--    <link rel="stylesheet" href="--><? //= base_url(); ?><!--public/css/responsivGk.css">-->
    <!--    <link rel="stylesheet" type="text/css" href="--><? //= base_url(); ?><!--public/css/slickGk.css">-->
    <!--    <link rel="stylesheet" type="text/css" href="--><? //= base_url(); ?><!--public/css/slick-themeGk.css">-->
    <!--    <meta name="viewport" content="width=device-width, initial-scale=1.0">-->
    <!--    <link rel="stylesheet" type="text/css" href="--><? //= base_url(); ?><!--public/css/stylemv.css">-->
    <!--    <link rel="stylesheet" type="text/css" href="--><? //= base_url(); ?><!--public/css/stylege.css">-->
    <!--    <link rel="stylesheet" type="text/css" href="--><? //= base_url(); ?><!--public/css/stylemv.css">-->
    <!--    <link rel="stylesheet" type="text/css" href="--><? //= base_url(); ?><!--public/css/stylege.css">-->
    <!--    <script type="text/javascript" src="--><? //= base_url(); ?><!--public/js/file.js"></script>-->
    <!---->
    <!---->
    <!--    <link rel="stylesheet" href="--><? //= base_url(); ?><!--public/css/mainSekil.css">-->
    <!--    <link rel="stylesheet" type="text/css" href="--><? //= base_url(); ?><!--public/css/normalizeSekil.css"/>-->
    <!--    <link rel="stylesheet" type="text/css" href="--><? //= base_url(); ?><!--public/css/demoSekil.css"/>-->
    <!--    <link rel="stylesheet" type="text/css" href="--><? //= base_url(); ?><!--public/css/componentSekil.css"/>-->
    <link rel="stylesheet" href="<?= base_url(); ?>public/css/main.css">
    <title>Yeni Elan</title>
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
                    <a class="navbar-brand" href="<?= base_url(); ?>home/"><img src="<?= base_url(); ?>uploads/Home.png"
                                                                                alt=""></a>
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
                    <?php if (isset($_SESSION['logout'])) { ?>
                        <ul class="nav navbar-nav navbar-right">
                            <li class="">
                                <center>  <span class=" glyphicon glyphicon-user">
                  <a href="<?= base_url(); ?>auth/logout">Çıxış</a>
                </span></center>
                            </li>
                        </ul>

                        <ul class="nav navbar-nav navbar-right">
                            <li class="">
                                <center>  <span class=" glyphicon glyphicon-user">
                  <a href="<?= base_url(); ?>profil/">Profilim</a>
                </span></center>
                            </li>
                        </ul>
                    <?php } else { ?>
                        <ul class="nav navbar-nav navbar-right">
                            <li class="navbarli3">
                                <center>  <span class="navbarli3icon glyphicon glyphicon-user">
                  <a href="<?= base_url(); ?>auth/">Giriş / Qeydiyyat</a>
                </span></center>
                            </li>
                        </ul>
                    <?php } ?>
                </div>
            </div>
        </nav>
    </div>
</section>


<div class="container">
    <div class="row">
        <div style="margin-bottom: 150px;"></div>
        <div class="col-md-offset-1 col-md-10">
            <h2 style="font-size: 25px; padding-bottom: 20px; font-weight: 700">Yeni elan</h2>

            <div class="col-md-8 main">
                <form action="<?= base_url(); ?>addAds/add" method="post" enctype="multipart/form-data">

                    <div class="row">
                        <div class="col-md-4">
                            <?php
                            if (form_error('hometype')) {
                                ?>
                                <label for="category" style="color: red;">* Əmlakın növü</label>
                            <?php }else { ?>
                                <label for="category"> Əmlakın növü</label>
                            <?php } ?>
                        </div>
                        <div class="col-md-7">
                            <select class="form-control" id="category" name="hometype">
                                <option value> Siyahidan secin</option>
                                <?php foreach ($hometype_list as $hometype) { ?>
                                    <option value="<?= $hometype['id'] ?>"><?= $hometype['home_type_name'] ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <?php
                            if (form_error('citylist')) {
                                ?>
                                <label for="category" style="color: red;">* Şəhər</label>
                            <?php }else { ?>
                                <label for="category"> Şəhər</label>
                            <?php } ?>
                        </div>
                        <div class="col-md-7">
                            <select class="form-control" id="city" name="citylist">
                                <option value> Siyahidan secin</option>
                                <?php foreach ($city_list as $city) { ?>
                                    <option value="<?= $city->id ?>"><?= $city->city_name ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <?php
                            if (form_error('hometype')) {
                                ?>
                                <label for="category" style="color: red;">* Rayon</label>
                            <?php }else { ?>
                                <label for="category"> Rayon</label>
                            <?php } ?>
                        </div>
                        <div class="col-md-7">
                            <select class="form-control" id="town" name="townlist" disabled='false'>
                                <option value=""></option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <?php
                            if (form_error('hometype')) {
                                ?>
                                <label for="category" style="color: red;">* Metro</label>
                            <?php }else { ?>
                                <label for="category"> Metro</label>
                            <?php } ?>
                        </div>
                        <div class="col-md-7">
                            <select class="form-control" id="metro" name="metrolist" disabled=''>
                                <option value=""></option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <?php
                            if (form_error('price')) {
                                ?>
                                <label for="category" style="color: red;">* Qiymət</label>
                            <?php }else { ?>
                                <label for="category"> Qiymət</label>
                            <?php } ?>
                        </div>
                        <div class="col-md-7">
                            <input type="text" class="form-control" id="usr" name="price">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <?php
                            if (form_error('roomlist')) {
                                ?>
                                <label for="category" style="color: red;">* Otaq sayı</label>
                            <?php }else { ?>
                                <label for="category"> Otaq sayı</label>
                            <?php } ?>
                        </div>
                        <div class="col-md-7">
                            <select class="form-control" id="category" name="roomlist">
                                <option value> Siyahidan secin</option>
                                <?php foreach ($rooms_list as $rooms) { ?>
                                    <option value="<?= $rooms['id'] ?>"><?= $rooms['rooms_count'] ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <?php
                            if (form_error('adress')) {
                                ?>
                                <label for="category" style="color: red;">* Ünvan</label>
                            <?php }else { ?>
                                <label for="category"> Ünvan</label>
                            <?php } ?>
                        </div>
                        <div class="col-md-7">
                            <input type="text" class="form-control" id="usr" name="adress">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <?php
                            if (form_error('comment')) {
                                ?>
                                <label for="category" style="color: red;">* Əlavə məlumat</label>
                            <?php }else { ?>
                                <label for="category"> Əlavə məlumat</label>
                            <?php } ?>
                        </div>
                        <div class="col-md-7">
                            <textarea class="form-control textarea" rows="5" cols="15" id="comment"
                                      style="margin-bottom: 10px;" name="comment"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <?php
                            if (form_error('contact')) {
                                ?>
                                <label for="category" style="color: red;">* Əlaqəli şəxs</label>
                            <?php }else { ?>
                                <label for="category"> Əlaqəli şəxs</label>
                            <?php } ?>
                        </div>
                        <div class="col-md-7">
                            <input type="text" class="form-control" id="usr" name="contact" value="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <?php
                            if (form_error('contact')) {
                                ?>
                                <label for="category" style="color: red;">* Telefon</label>
                            <?php }else { ?>
                                <label for="category"> Telefon</label>
                            <?php } ?>
                        </div>
                        <div class="col-md-7">
                            <input type="text" class="form-control" id="usr" name="phone" value="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <?php
                            if (form_error('email')) {
                                ?>
                                <label for="category" style="color: red;">* Email</label>
                            <?php }else { ?>
                                <label for="category"> Email</label>
                            <?php } ?>
                        </div>
                        <div class="col-md-7">
                            <input type="text" class="form-control" id="usr" name="email" value="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
<!--                            --><?php
//                            if (form_error('photo')) {
//                                ?>
<!--                                <label for="category" style="color: red;">* Şəkil</label>-->
<!--                            --><?php //}else { ?>
                                <label for="category"> Şəkil</label>
<!--                            --><?php //} ?>
                        </div>
                        <div class="col-md-7">
                            <input type="file" name="uploadimage[]" class="form-control" id="img" multiple="multiple">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <button type="submit" name="button" class="btn btn-lg btn-block elaveEtNew">Əlavə et
                            </button>
                        </div>
                    </div>
                </form>
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
<div style="margin-bottom: 100px;"></div>

<div class="container-fluid">
    <div class="row">
        <div class="copyright text-center">
            <p>&copy; 2016 evyoldaşı.az All Rights Reserved.</p>
        </div>
    </div>
</div>
<script src='<?= base_url(); ?>public/js/javascript.js'></script>
<script src='<?= base_url(); ?>public/js/jquery-3.1.1.js'></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('#city').on('change', function () {
            var city_id = $(this).val();
            $('#town').empty();
            $('#metro').empty();
            $('#town').append("<option>Siyahidan secin</option>");
            $('#metro').append("<option>Siyahidan secin</option>");
            if (city_id == '8') {
                $('#town').prop('disabled', false),
                    $('#metro').prop('disabled', false);
                $.ajax({
                    url: '<?= base_url(); ?>addAds/get_metros',
                    type: 'POST',
                    data: {'city_id': city_id},
                    dataType: 'json',
                    success: function (data) {
                        $('#town').html(data.town);
                        $('#metro').html(data.metro);
                    },
                    error: function () {
                        alert('Error olmadi');
                    }
                });
            }
            else {
                $('#town').prop('disabled', true);
                $('#metro').prop('disabled', true);
            }
        });
    });
</script>


</body>
</html>
<script type="text/javascript" src="<?= base_url(); ?>public/js/custom-file-input.js"></script>
