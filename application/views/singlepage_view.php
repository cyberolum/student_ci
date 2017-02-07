<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta charset="utf-8">
    <script
            src="https://code.jquery.com/jquery-3.1.1.js"
            integrity="sha256-16cdPddA6VdVInumRGo6IbivbERE8p7CQR3HzTBuELA="
            crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
            integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
            crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">

<!--    <link rel="stylesheet" type="text/css" href="--><?//= base_url(); ?><!--public/css/stylege.css">-->
<!--    <link rel="stylesheet" href="--><?//= base_url(); ?><!--public/css/stylemv2.css">-->
<!--    <link rel="stylesheet" type="text/css" href="--><?//= base_url(); ?><!--public/css/stylemv.css">-->
<!--    <link rel="stylesheet" href="--><?//= base_url(); ?><!--public/css/style.css">-->
<!--    <link rel="stylesheet" href="--><?//= base_url(); ?><!--public/css/styleMv3.css">-->
<!--    <link rel="stylesheet" type="text/css" href="--><?//= base_url(); ?><!--public/css/demoSekil.css"/>-->
    <link rel="stylesheet" href="<?= base_url(); ?>public/css/main.css">
    <script type="text/javascript" src="<?= base_url(); ?>public/js/file.js"></script>
    <script type="text/javascript" src="<?= base_url(); ?>public/js/javascriptmv2.js"></script>
</head>
<body>
<section class="myNavbar col-md-12" style="margin-bottom:50px">
    <div class="container-fluid">
        <nav class="navbar">
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

<div class="gallery">
    <div class="container">
        <div class="col-md-8 col-sm-12 col-xs-12">

            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="main_image">
                        <img class="img-responsive" src="<?= base_url(); ?>uploads/1.jpg"/>
                    </div>
                </div>
            </div>


            <div class="click-slide-images">
                <div class="row">
                    <div class="col-md-2 col-xs-4">
                        <div class="thumb">
                            <div class="overlay"></div>
                            <img class="img-responsive" src="<?= base_url(); ?>uploads/1.jpg"/>
                        </div>
                    </div>

                    <div class="col-md-2 col-xs-4">
                        <div class="thumb">
                            <div class="overlay"></div>
                            <img class="img-responsive" src="<?= base_url(); ?>uploads/4.jpg"/>
                        </div>
                    </div>

                    <div class="col-md-2 col-xs-4">
                        <div class="thumb">
                            <div class="overlay"></div>
                            <img class="img-responsive" src="<?= base_url(); ?>uploads/3.jpg"/>
                        </div>
                    </div>
                    <div class="col-md-2 col-xs-4">
                        <div class="thumb">
                            <div class="overlay"></div>
                            <img class="img-responsive" src="<?= base_url(); ?>uploads/4.jpg"/>
                        </div>
                    </div>
                    <div class="col-md-2 col-xs-4">
                        <div class="thumb">
                            <div class="overlay"></div>
                            <img class="img-responsive" src="<?= base_url(); ?>uploads/2.jpg"/>
                        </div>
                    </div>
                    <div class="col-md-2 col-xs-4">
                        <div class="thumb">
                            <div class="overlay"></div>
                            <img class="img-responsive" src="<?= base_url(); ?>uploads/1.jpg"/>
                        </div>
                    </div>
                 </div>
            </div>

        </div>
        <div class="col-md-4 col-sm-12 col-xs-12">
            <div class="row">
                <div class="single-page-home-info">
                    <div class="col-md-12 col-sm-12 col-xs-12 info1" style="background:#071522"><p><i
                                    class="glyphicon glyphicon-euro"></i>
                            Qiyməti</p>
                        <span>223 AZN</span>
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12 info2" style="background:grey"><p><i
                                    class="glyphicon glyphicon-earphone"></i>Əlaqəli şəxs</p>
                        <span>051-778-80-40</span>
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12 info1" style="background:#071522"><p><i
                                    class="glyphicon glyphicon-map-marker"></i>
                            Ünvan</p>
                        <span>Nizami</span>
                    </div>

                </div>
            </div>



            <div class="row">
                <div class="single-page-home-more-info">

                    <div class="single-page-home-info">

                        <div class="col-md-12 col-sm-12 col-xs-12 info2" style="background:grey"><p><i
                                        class="glyphicon glyphicon-unchecked"></i>Otaq sayı</p>
                            <span>3</span>
                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-12 info1" style="background:#071522"><p><i
                                        class="glyphicon glyphicon-home"></i>
                                Əmlak növü</p>
                            <span>Mənzil</span>
                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-12 info2" style="background:grey"><p><i
                                        class="glyphicon glyphicon-home"></i>Vəziyyəti</p>
                            <span>Orta təmirli</span>
                        </div>

                    </div>

                </div>

            </div>
            <div style="height:10px">
                <p class="text-center moreshow">Ətraflı məlumat</p>
            </div>
        </div>


    </div>


</div>



<iframe width="100%" height="400px" style="margin-top:100px" frameborder="0" scrolling="no" marginheight="0"
        src="https://maps.google.com/maps?q=Baku, AZ, &t=&z=13&ie=UTF8&iwloc=&output=embed" marginwidth="0"><a
            class="addmaps" href="http://www.map-embed.com/wordpress-themes/" id="get-map-data"
            mce_href="http://maps.google.com/maps/api/js?sensor=false">Baku, AZ, </a>
    <style>#gmap_canvas img {
        }</style>
</iframe>



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

