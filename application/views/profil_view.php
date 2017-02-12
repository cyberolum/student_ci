<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta charset="utf-8">
    <script src="https://code.jquery.com/jquery-3.1.1.js"
            integrity="sha256-16cdPddA6VdVInumRGo6IbivbERE8p7CQR3HzTBuELA=" crossorigin="anonymous"></script>
    <script
            src="https://code.jquery.com/jquery-3.1.1.js"
            integrity="sha256-16cdPddA6VdVInumRGo6IbivbERE8p7CQR3HzTBuELA="
            crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
            integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
            crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <!--    <link rel="stylesheet" href="--><? //= base_url(); ?><!--public/css/prof1Gk.css">-->
    <!--    <link rel="stylesheet" href="--><? //= base_url(); ?><!--public/css/responsivGk.css">-->
    <!--    <link rel="stylesheet" type="text/css" href="--><? //= base_url(); ?><!--public/css/stylemv.css">-->
    <!--    <link rel="stylesheet" type="text/css" href="--><? //= base_url(); ?><!--public/css/stylege.css">-->
    <link rel="stylesheet" href="<?= base_url(); ?>public/css/main.css">
    <script type="text/javascript" src="<?= base_url(); ?>public/js/file.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>


<section class="myNavbar col-md-12">
    <div class="container-fluid">
        <nav class="navbar navbar-default">
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
                    <ul class="nav navbar-nav navbar-right">
                        <li class="navbarli3">
                            <center>  <span class="navbarli3icon glyphicon glyphicon-user">
				         	<a href="<?= base_url(); ?>home/">Cıxış</a>
				        </span></center>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</section>


<div class="bowluqlar"></div>


<div class="container profil">
    <div class="row">
        <div class="col-md-12">
            <div class="col-md-4">
                <img src="<?= base_url(); ?>uploads/8.jpg" class="profiImg">
            </div>
            <div class="col-md-8">
                <div class="col-md-12 redakte">
                    <a href="<?= base_url(); ?>editprofil/" class="redakteIcon"> <i class="fa fa-pencil-square-o"
                                                                                    aria-hidden="true"></i>
                    </a>
                </div>
                <div class="col-md-12 profilinSahibi ">

                    <h2 class="agentName"><p>Həsənzadə Günel</p></h2>
                </div>
                <div class="col-md-12 adGunu">
                    <h4 class="agentDogumTarixi">Doğum tarixi:</h4>
                    <h4 class="agentBD">01.01.2001</h4>
                </div>

                <div class="col-md-12 unvan">

                    <h4 class="agentUnvan">Ünvan:</h4>

                    <p class="agentAdress">Bakı flan flan flan flan flan flan flan flan flan flan flan flan flan flan
                        flan flan flan </p>
                </div>
                <div class="col-md-12 agentTehsil">
                    <h4 class="tehsil">Təhsil:</h4>
                    <p class="agentUni">Bakı Dövlət Universiteti</p>
                </div>

                <div class="col-md-12 AgentContact">
                    <div class="agentNumber">
                        <a href="" class="number"><i class="fa fa-phone" aria-hidden="true"
                                                     style="padding:5px 10px;"></i>(123) 123-456</a>

                    </div>
                    <div class="agentMail">
                        <a href="" class="mail"><i class="fa fa-envelope-o" aria-hidden="true"
                                                   style="padding:5px 10px;"></i>jennie@example.com</a>
                    </div>
                </div>

                <div class="col-md-12 agentSocial">
                    <ul>
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                    </ul>
                </div>

                <div class="col-md-12">
                    <button class="addAnnouncement btn btn-secondary btn-lg btn-block"><a href="<?= base_url(); ?>addAds/">Elave et</a></button>
                </div>

            </div>
        </div>
    </div>
</div>


<div class="container">
    <div class="row">
        <div class="col-md-12 elanlarinSiyahisi">
            <h2 class="ButunElanlar" style="font-family:Helvetica">Bütün elanlar</h2>
        </div>
    </div>
</div>


<div class="container" style="margin-top:25px;">
    <div class="row">
        <?php foreach ($showAds as $allAds) {?>
        <div class="col-md-12 yerlesdirdiyiElanlar">
            <div class="col-md-4">
                <img class="ElanSekil" src="<?= base_url(); ?>uploads/ev1.jpg" alt="">
            </div>
            <div class="col-md-8">
                <div class="col-md-12 yerlesdiyiYer">
                    <h3><?= $allAds['ads_address'] ?></h3>
                </div>
                <div class="col-md-12 ">
                    <a><i class="fa fa-map-marker Unvan" aria-hidden="true"></i></a>
                    <h4 class="UnvaniHaqqindaMelumat"><?= $allAds['mark'] ?></h4>
                </div>
                <div class="col-md-12 sahe_OtaqSayi">
                    <div class="col-md-12 " style="top:20px;">
                        <h6 class="OtaqSayi" style="margin-left: 65px;">Otaq sayı</h6>
                    </div>
                    <div class="col-md-12 sahe_OtaqSayi_reqemIle">
                        <h6 class="OtaqSayi" style="margin-left: 95px; "><?= $allAds['room'] ?></h6>
                    </div>

                </div>

                <div class="col-md-12" style="top:40px; height:100px;">
                    <div class="col-md-12" style="margin-top:30px; margin-left:-30px">
                        <div class="col-md-8">
                            <a><i class="fa fa-user Sahibkar" aria-hidden="true"></i></a>
                            <h4 class="AdSoyad"><?= $allAds['ads_user_name'] ?></h4>
                        </div>
                        <div class="col-md-4">
                            <a href="<?= base_url('addAds/delete/'.$allAds['id']);?>">Sil</a>
                            <a href="<?= base_url('addAds/updatePage/'.$allAds['id']); ?>">Yenile</a>
                        </div>
                    </div>

                </div>


            </div>
        </div>
        <?php } ?>
    </div>

</div>


<div class="container">

</div>
<div class="container-fluid">
    <div class="row">
        <div class="copyright text-center">
            &copy; 2016 evyoldaşı.az All Rights Reserved.
        </div>
    </div>
</div>

<script src='<?= base_url(); ?>public/js/javascript.js'></script>

</body>
</html>
