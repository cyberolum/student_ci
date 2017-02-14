<!DOCTYPE html>
<html>
<head>
    <title></title>
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
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>public/style/style.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>public/css/stylemv.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>public/css/stylege.css">

    <script type="text/javascript" src="<?= base_url(); ?>public/js/file.js"></script>
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>public/css/redakt.css">
</head>
<body>


<section class="myNavbar col-md-12">
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
				         	<a href="<?= base_url(); ?>auth/logout">Cixis</a>
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
        <div class="col-md-6 col-md-offset-3 redakteUmumiDivi">

            <form id="redakteEtmek">
                <div class="form-group">

                    <input class="form-control" type="text" name="name" placeholder="Ad"><br>
                </div>
                <div class="form-group">
                    <input class="form-control" type="text" name="surname" placeholder="Soyad"><br>
                </div>
                <div class="form-group">
                    <input class="form-control" type="text" name="unvan" placeholder="Ünvan"><br>
                </div>
                <div class="form-group">
                    <select class="form-control" style="color: #909090">
                        <option value=""> Təhsil</option>
                        <option placeholder="Inistitut" value="Inistitut">BDU</option>
                    </select>
                </div>
                <div class="form-group" style="margin-top:21px">
                    <input class="form-control" type="email" name="email" placeholder="Email"><br>
                </div>
                <div class="form-group">
                    <input class="form-control" type="text" name="phone" placeholder="Əlaqə nömrəsi"><br>
                </div>
                <div class="form-group">

                    <input type="file" accept="png" class="form-control" name="profil_sekli">
                </div>
                <div>
                    <button class="btn btn-info btn-lg btn-block elaveEt"><a href="" style="color:white"> Yenilə</a>
                    </button>
                </div>


            </form>


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

</body>
</html>
