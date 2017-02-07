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


    <title>Ana səhifə</title>
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

<section id="mainImg">
    <div class="padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="search">
                        <h2 style="margin-bottom: 60px;">Özünə otaq yoldaşı axtar!</h2>
                    </div>
                    <form>
                        <div class="search-type-box">
                            <div class="menu1">
                                <input class="form-control col-sm-12 col-xs-12" id="inputsm" type="text"
                                       placeholder="Axtarmaq üçün nə isə yazın">
                                <div class="row">
                                    <button type="button" name="button" class="btn btn-primary col-sm-12 col-xs-12">
                                        Axtar
                                    </button>
                                </div>
                            </div>
                            <div class="row menu2">
                                <div class="col-md-4">
                                    <p>Əmlakın növü:</p>
                                    <select class="form-control" id="sel1">
                                        <option>Seçin</option>
                                        <option>Mənzil</option>
                                        <option>Həyət evi</option>
                                        <option>Villa</option>
                                        <!-- <option>4</option> -->
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <p>Qiymət:</p>
                                    <input class="form-control" id="inputsm" type="text" placeholder="min">
                                </div>
                                <div class="col-md-4">
                                    <p></p><br>
                                    <input class="form-control" id="inputsm" type="text" placeholder="max">
                                </div>
                            </div>
                            <p class="more-search-options-trigger open">Əlavə</p>
                            <script type="text/javascript">
                                $(document).ready(function () {
                                    $(".open").click(function () {
                                        $(".more-search-options").toggleClass('active');
                                        $(".ox").toggleClass('activeOx');
                                    })

                                })
                            </script>
                            <div class="more-search-options">
                                <div class="more-search-options-container">
                                    <div class="row with-forms" style="margin-top: 20px;">
                                        <div class="col-md-6">
                                            <p>Şəhər:</p>
                                            <select class="form-control" id="sel1">
                                                <option>Seçin</option>
                                                <option>Bakı</option>
                                                <option>Sumqayıt</option>
                                                <option>Şəki</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <p>Rayon / Qəsəbə:</p>
                                            <select class="form-control" id="sel1">
                                                <option>Seçin</option>
                                                <option>Buzovna</option>
                                                <option>Maştağa</option>
                                                <option>Bilgəh</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row with-forms" style="margin-top: 20px;">

                                        <div class="col-md-6">
                                            <p>Otaq sayı:</p>


                                            <select class="form-control" id="sel1">
                                                <option>Seçin</option>
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                            </select>
                                        </div>

                                        <div class="col-md-6">
                                            <p>Universitet:</p>
                                            <select class="form-control" id="sel1">
                                                <option>Seçin</option>
                                                <option>BDU</option>
                                                <option>ADNSU</option>
                                                <option>AzTu</option>
                                                <option>ADMİU</option>
                                                <option>ADPU</option>
                                                <option>ADA</option>
                                            </select>
                                        </div>

                                    </div>
                                    <div class="checkboxes in-row" style="margin-top: 20px;">

                                        <input class="magic-checkbox" id="check-2" type="checkbox" name="check1">
                                        <label for="check-2">Təmirli</label>

                                        <input class="magic-checkbox" id="check-3" type="checkbox" name="check2">
                                        <label for="check-3">Tələbə</label>

                                        <input class="magic-checkbox" id="check-4" type="checkbox" name="check3">
                                        <label for="check-4">Komunal</label>

                                        <input class="magic-checkbox" id="check-6" type="checkbox" name="check4">
                                        <label for="check-6">Telefon</label>

                                        <input class="magic-checkbox" id="check-7" type="checkbox" name="check5">
                                        <label for="check-7">Şərait</label>

                                        <input class="magic-checkbox" id="check-8" type="checkbox" name="check6">
                                        <label for="check-8">Ev sahibi</label>

                                    </div>
                                </div>
                            </div>
                        </div>


                    </form>
                </div>
            </div>
        </div>
    </div>
</section>


<iframe width="100%" height="600px" frameborder="0" scrolling="no" marginheight="0"
        src="https://maps.google.com/maps?q=Baku, AZ, &t=&z=13&ie=UTF8&iwloc=&output=embed" marginwidth="0"><a
            class="addmaps" href="http://www.map-embed.com/wordpress-themes/" id="get-map-data"
            mce_href="http://maps.google.com/maps/api/js?sensor=false">Baku, AZ, </a>
    <style>#gmap_canvas img {
        }</style>
</iframe>


<section class="SonElanlarinSiyasi">
    <div class="container" style="margin-bottom: 15px;">
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-2">
                    <h2 class="SonElanlar">Son Elanlar</h2>
                </div>
                <div class="col-md-4">

                    <h2 class="ButunElanlar">Hamısını göstər</h2>
                    <span class="border"></span>
                </div>
                <div class="col-md-6 col-xs-6 text-right" style="margin-top:30px;float: right;">
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <section class="regular slider">

                <div class="col-md-4  UmumiElan" style="border-left:3px solid #E7DFDD">
                    <div class="col-md-12 ">
                        <img class="ElanSekil" src="<?= base_url(); ?>uploads/ev1.jpg" alt="">
                    </div>
                    <div class="col-md-12 ">
                        <h3 class="h33">Yerleşdiyi yer</h3>
                    </div>
                    <div class="col-md-12 ">
                        <a><i class="fa fa-map-marker Unvan" aria-hidden="true"></i></a>
                        <h4 class="UnvaniHaqqindaMelumat">28 May</h4>
                    </div>
                    <div class="col-md-12 " style="background: lavender; top:40px; height: 80px; ">
                        <div class="col-md-12 " style="top:20px;">
                            <h6 class="Sahesi" style="margin:0;padding: 0; ">Sahə</h6>
                            <h6 class="OtaqSayi" style="margin:0;padding: 0;margin-left: 65px;">Otaq sayı</h6>
                        </div>
                        <div class="col-md-12 " style="top:30px;">
                            <h6 class="Sahesi" style="margin:0;padding: 0; ">160</h6>
                            <h6 class="OtaqSayi" style="margin:0;padding: 0; margin-left: 95px; ">3</h6>
                        </div>

                    </div>
                    <div class="col-md-12" style="top:40px; height:100px;">
                        <div class="col-md-12" style="margin-top:30px; margin-left:-30px">
                            <div class="col-md-8">
                                <a><i class="fa fa-user Sahibkar" aria-hidden="true"></i></a>
                                <h4 class="AdSoyad">name</h4>
                            </div>
                            <div class="col-md-4">
                                <h4 class="Tarix">11.12.16</h4>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-md-4  UmumiElan" style="border-left:3px solid #E7DFDD">
                    <div class="col-md-12 ">
                        <img class="ElanSekil" src="<?= base_url(); ?>uploads/ev3.jpg" alt="">
                    </div>
                    <div class="col-md-12 ">
                        <h3 class="h33">Yerleşdiyi yer</h3>
                    </div>
                    <div class="col-md-12 ">
                        <a><i class="fa fa-map-marker Unvan" aria-hidden="true"></i></a>
                        <h4 class="UnvaniHaqqindaMelumat">28 May</h4>
                    </div>
                    <div class="col-md-12 " style="background: lavender; top:40px; height: 80px; ">
                        <div class="col-md-12 " style="top:20px;">
                            <h6 class="Sahesi" style="margin:0;padding: 0; ">Sahe</h6>
                            <h6 class="OtaqSayi" style="margin:0;padding: 0;margin-left: 65px;">Otaq sayı</h6>
                        </div>
                        <div class="col-md-12 " style="top:30px;">
                            <h6 class="Sahesi" style="margin:0;padding: 0; ">160</h6>
                            <h6 class="OtaqSayi" style="margin:0;padding: 0; margin-left: 95px; ">3</h6>
                        </div>

                    </div>
                    <div class="col-md-12" style="top:40px; height:100px;">
                        <div class="col-md-12" style="margin-top:30px; margin-left:-30px">
                            <div class="col-md-8">
                                <a><i class="fa fa-user Sahibkar" aria-hidden="true"></i></a>
                                <h4 class="AdSoyad">name</h4>
                            </div>
                            <div class="col-md-4">
                                <h4 class="Tarix">11.12.16</h4>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-md-4  UmumiElan" style="border-left:3px solid #E7DFDD">
                    <div class="col-md-12 ">
                        <img class="ElanSekil" src="<?= base_url(); ?>uploads/ev5.jpg" alt="">
                    </div>
                    <div class="col-md-12 ">
                        <h3 class="h33">Yerleşdiyi yer</h3>
                    </div>
                    <div class="col-md-12 ">
                        <a><i class="fa fa-map-marker Unvan" aria-hidden="true"></i></a>
                        <h4 class="UnvaniHaqqindaMelumat">28 May</h4>
                    </div>
                    <div class="col-md-12 " style="background: lavender; top:40px; height: 80px; ">
                        <div class="col-md-12 " style="top:20px;">
                            <h6 class="Sahesi" style="margin:0;padding: 0; ">Sahe</h6>
                            <h6 class="OtaqSayi" style="margin:0;padding: 0;margin-left: 65px;">Otaq sayı</h6>
                        </div>
                        <div class="col-md-12 " style="top:30px;">
                            <h6 class="Sahesi" style="margin:0;padding: 0; ">160</h6>
                            <h6 class="OtaqSayi" style="margin:0;padding: 0; margin-left: 95px; ">3</h6>
                        </div>

                    </div>
                    <div class="col-md-12" style="top:40px; height:100px;">
                        <div class="col-md-12" style="margin-top:30px; margin-left:-30px">
                            <div class="col-md-8">
                                <a><i class="fa fa-user Sahibkar" aria-hidden="true"></i></a>
                                <h4 class="AdSoyad">name</h4>
                            </div>
                            <div class="col-md-4">
                                <h4 class="Tarix">11.12.16</h4>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-md-4  UmumiElan" style="border-left:3px solid #E7DFDD">
                    <div class="col-md-12 ">
                        <img class="ElanSekil" src="<?= base_url(); ?>uploads/ev1.jpg" alt="">
                    </div>
                    <div class="col-md-12 ">
                        <h3 class="h33">Yerleşdiyi yer</h3>
                    </div>
                    <div class="col-md-12 ">
                        <a><i class="fa fa-map-marker Unvan" aria-hidden="true"></i></a>
                        <h4 class="UnvaniHaqqindaMelumat">28 May</h4>
                    </div>
                    <div class="col-md-12 " style="background: lavender; top:40px; height: 80px; ">
                        <div class="col-md-12 " style="top:20px;">
                            <h6 class="Sahesi" style="margin:0;padding: 0; ">Sahe</h6>
                            <h6 class="OtaqSayi" style="margin:0;padding: 0;margin-left: 65px;">Otaq sayı</h6>
                        </div>
                        <div class="col-md-12 " style="top:30px;">
                            <h6 class="Sahesi" style="margin:0;padding: 0; ">160</h6>
                            <h6 class="OtaqSayi" style="margin:0;padding: 0; margin-left: 95px; ">3</h6>
                        </div>

                    </div>
                    <div class="col-md-12" style="top:40px; height:100px;">
                        <div class="col-md-12" style="margin-top:30px; margin-left:-30px">
                            <div class="col-md-8">
                                <a><i class="fa fa-user Sahibkar" aria-hidden="true"></i></a>
                                <h4 class="AdSoyad">name</h4>
                            </div>
                            <div class="col-md-4">
                                <h4 class="Tarix">11.12.16</h4>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-md-4  UmumiElan" style="border-left:3px solid #E7DFDD">
                    <div class="col-md-12 ">
                        <img class="ElanSekil" src="<?= base_url(); ?>uploads/ev3.jpg" alt="">
                    </div>
                    <div class="col-md-12 ">
                        <h3 class="h33">Yerleşdiyi yer</h3>
                    </div>
                    <div class="col-md-12 ">
                        <a><i class="fa fa-map-marker Unvan" aria-hidden="true"></i></a>
                        <h4 class="UnvaniHaqqindaMelumat">28 May</h4>
                    </div>
                    <div class="col-md-12 " style="background: lavender; top:40px; height: 80px; ">
                        <div class="col-md-12 " style="top:20px;">
                            <h6 class="Sahesi" style="margin:0;padding: 0; ">Sahe</h6>
                            <h6 class="OtaqSayi" style="margin:0;padding: 0;margin-left: 65px;">Otaq sayı</h6>
                        </div>
                        <div class="col-md-12 " style="top:30px;">
                            <h6 class="Sahesi" style="margin:0;padding: 0; ">160</h6>
                            <h6 class="OtaqSayi" style="margin:0;padding: 0; margin-left: 95px; ">3</h6>
                        </div>

                    </div>
                    <div class="col-md-12" style="top:40px; height:100px;">
                        <div class="col-md-12" style="margin-top:30px; margin-left:-30px">
                            <div class="col-md-8">
                                <a><i class="fa fa-user Sahibkar" aria-hidden="true"></i></a>
                                <h4 class="AdSoyad">name</h4>
                            </div>
                            <div class="col-md-4">
                                <h4 class="Tarix">11.12.16</h4>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-md-4  UmumiElan" style="border-left:3px solid #E7DFDD">
                    <div class="col-md-12 ">
                        <img class="ElanSekil" src="<?= base_url(); ?>uploads/ev5.jpg" alt="">
                    </div>
                    <div class="col-md-12 ">
                        <h3 class="h33">Yerleşdiyi yer</h3>
                    </div>
                    <div class="col-md-12 ">
                        <a><i class="fa fa-map-marker Unvan" aria-hidden="true"></i></a>
                        <h4 class="UnvaniHaqqindaMelumat">28 May</h4>
                    </div>
                    <div class="col-md-12 " style="background: lavender; top:40px; height: 80px; ">
                        <div class="col-md-12 style=" top:20px;
                        "">
                        <h6 class="Sahesi" style="margin:0;padding: 0; ">Sahe</h6>
                        <h6 class="OtaqSayi" style="margin:0;padding: 0;margin-left: 65px;">Otaq sayı</h6>
                    </div>
                    <div class="col-md-12 " style="top:30px;">
                        <h6 class="Sahesi" style="margin:0;padding: 0; ">160</h6>
                        <h6 class="OtaqSayi" style="margin:0;padding: 0; margin-left: 95px; ">3</h6>
                    </div>

                </div>
                <div class="col-md-12" style="top:40px; height:100px;">
                    <div class="col-md-12" style="margin-top:30px; margin-left:-30px">
                        <div class="col-md-8">
                            <a><i class="fa fa-user Sahibkar" aria-hidden="true"></i></a>
                            <h4 class="AdSoyad">name</h4>
                        </div>
                        <div class="col-md-4">
                            <h4 class="Tarix">11.12.16</h4>
                        </div>
                    </div>

                </div>
        </div>


</section>

</div>
</div>

</section>

<div class="emp"></div>


<div class="container-fluid">
    <div class="row">
        <div class="copyright text-center">
            <p>&copy; 2016 evyoldaşı.az All Rights Reserved.</p>
        </div>
    </div>
</div>
<script src='<?= base_url(); ?>public/js/javascript.js'></script>


<script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
<script src="<?= base_url(); ?>public/scripts/slickGk.js" type="text/javascript" charset="utf-8"></script>

<script type="text/javascript">
    $(document).on('ready', function () {
        $(".regular").slick({
            responsive: [
                {
                    breakpoint: 2570,
                    settings: {
                        dots: false,
                        infinite: true,
                        slidesToShow: 4,
                        slidesToScroll: 1,
                        dots: false,
                        speed: 200,
                    }
                },
                {
                    breakpoint: 1450,
                    settings: {
                        dots: false,
                        infinite: true,
                        slidesToShow: 3,
                        slidesToScroll: 1,
                        dots: false,
                        speed: 200,
                    }
                },
                {
                    breakpoint: 992,
                    settings: {
                        dots: false,
                        infinite: true,
                        slidesToShow: 2,
                        slidesToScroll: 1,
                        dots: false,
                        speed: 200,
                    }
                },
                {
                    breakpoint: 770,
                    settings: {
                        dots: false,
                        infinite: true,
                        slidesToShow: 2,
                        slidesToScroll: 1,
                        dots: false,
                        speed: 200,
                    }
                },

                {
                    breakpoint: 530,
                    settings: {
                        dots: false,
                        infinite: true,
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        dots: false,
                        speed: 200,
                    }
                }

            ],
            nextArrow: '<div style="position:absolute;top:-30px; right:0;"><i class="fa fa-chevron-right sagsol"></i></div>',
            prevArrow: '<div style="position:absolute;top:-30px; right:30px;"><i class="fa fa-chevron-left sagsol"></i></div>',

        });

    });
</script>

</body>

</html>
