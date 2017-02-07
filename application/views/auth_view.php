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


<div class="container-fluid">
    <div class="row">
        <div class="head1">

            <div class="container">
                <div class="row">


                    <div class="col-md-9 col-sm-12 col-xs-12">
                        <div class="row">

                            <div class="sol">
                                <span class="texsol">Giriş / Qeydiyyat</span>
                            </div>

                        </div>
                    </div>


                    <div class="col-md-3 col-sm-12 col-xs-12">
                        <div class="row">

                            <div class="sag">
                                <ul class="all1">
                                    <li><a href="../home/"><span class="home1">Ana səhifə</span></a></li>
                                    <li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
                                    <li>Giriş / Qeydiyyat</li>
                                </ul>
                            </div>

                        </div>
                    </div>


                </div>
            </div>

        </div>
    </div>
</div>


<div class="container">
    <div class="row">

        <div class="s500">
            <div class="col-md-4 col-md-offset-4">

                <div class="loginandregister">
                    <input class="loginler" type="button" value="Giriş">
                    <input class="registerler" type="button" value="Qeydiyyat">
                </div>

                <div class="xett"></div>

                <div class="logino">
                    <form class="form-group">
                        <div class="input-group araMesafesi">
                            <div class="input-group-addon ">
                                <span class="glyphicon glyphicon-envelope"></span>
                            </div>
                            <input class="form-control" id="email" name="email" type="email"
                                   placeholder="E-poçt ünvanı">
                        </div>
                        <div class="input-group araMesafesi">
                            <div class="input-group-addon">
                                <span class="glyphicon glyphicon-lock"></span>
                            </div>
                            <input class="form-control" id="password" name="password" type="password"
                                   placeholder="Şifrə">
                        </div>

                        <button type="button" class="btn btn-secondary btn1">Daxil ol</button>

                        <br><br>

                        <input type="checkbox"><span class="rem">Məni yadda saxla!</span>


                        <br><br>
                        <a href=""><span class="rem1">Şifrəni unutmusuz?</span></a>
                        <br><br>
                        <br><br>
                    </form>
                </div>


                <div class="rege">
                    <form class="form-group">


                        <div class="input-group araMesafesi">
                            <div class="input-group-addon">
                                <span class="glyphicon glyphicon-user"></span>
                            </div>
                            <input class="form-control" id="username" name="username" type="text" placeholder="Ad">
                        </div>


                        <div class="input-group araMesafesi">
                            <div class="input-group-addon">
                                <span class="glyphicon glyphicon-user"></span>
                            </div>
                            <input class="form-control" id="surname" name="surname" type="text" placeholder="Soyad">
                        </div>


                        <div class="input-group araMesafesi">
                            <div class="input-group-addon">
                                <span class="glyphicon glyphicon-lock"></span>
                            </div>
                            <input class="form-control" id="password" name="password" type="password"
                                   placeholder="Şifrə">
                        </div>


                        <div class="input-group araMesafesi">
                            <div class="input-group-addon">
                                <span class="glyphicon glyphicon-earphone "><span
                                            class="black">&nbsp;&nbsp;+</span><span class="helli">994</span> </span>
                                <select id="operator-numbers" name="operator-numbers">
                                    <option>55</option>
                                    <option>51</option>
                                    <option>50</option>
                                    <option>70</option>
                                    <option>77</option>
                                </select>
                            </div>
                            <input class="form-control" id="phone_number" name="phone_number" type="number"
                                   placeholder="Mobil nömrə" maxlength="7">


                        </div>


                        <div class="input-group araMesafesi">
                            <div class="input-group-addon">
                                <span class="glyphicon glyphicon-envelope"></span>
                            </div>
                            <input class="form-control" id="email" name="email" type="email"
                                   placeholder="E-poçt ünvanı">
                        </div>


                        <div class="input-group araMesafesi">
                            <div class="input-group-addon">
                                <span class="glyphicon glyphicon-lock"></span>
                            </div>
                            <input class="form-control" id="birthday" name="birthday" type="date"
                                   placeholder="Doğum tarixi">
                        </div>
                        <button type="button" class="btn btn-secondary btn1">Yadda saxla</button>

                    </form>

                </div>


            </div>
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


<script>
    $(document).ready(function () {
        $('.loginler').click(function () {
            $('.loginler').css({
                'border-bottom': '2px solid #008F95',
                'color': '#008F95',
                'transition': 'all 0.5s',

            });
            $('.registerler').css({
                'border-bottom': '2px solid #E7DFDD',
                'color': 'grey',
                'transition': 'all 0.5s',
            });
            $('.footer1').css({
                'margin-top': '0px',

            });
            $('.s500').css({
                'height': '400px'
            });
            $('.logino').show();
            $('.rege').hide();
            $('.rege').css({
                'width': '92.5%',
            })
        })

        $('.registerler').click(function () {
            $('.registerler').css({
                'border-bottom': '2px solid #008F95',
                'color': '#008F95',
                'transition': 'all 0.5s',

            });
            $('.loginler').css({
                'border-bottom': '2px solid #E7DFDD',
                'color': 'grey',
                'transition': 'all 0.5s',

            });
            $('.s500').css({
                'height': '650px'
            });
            $('.footer1').css({
                'margin-top': '280px',

            });
            $('.logino').hide();
            $('.rege').show();
            $('.rege').css({
                'width': '92.5%'
            })
        })

    })


</script>
