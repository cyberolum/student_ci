<?php

if (isset($_SESSION['yalniw']) == FALSE) {
    redirect(base_url('adminController'));
} ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin Panel</title>

    <!-- BEGIN META -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="your,keywords">
    <meta name="description" content="Short explanation about this website">
    <!-- END META -->

    <!-- BEGIN STYLESHEETS -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:300italic,400italic,300,400,500,700,900' rel='stylesheet'
          type='text/css'/>
    <link type="text/css" rel="stylesheet" href="<?= base_url(); ?>public/css/theme-default/bootstrap.css?1422792965"/>
    <link type="text/css" rel="stylesheet"
          href="<?= base_url(); ?>public/css/theme-default/materialadmin.css?1425466319"/>
    <link type="text/css" rel="stylesheet"
          href="<?= base_url(); ?>public/css/theme-default/font-awesome.min.css?1422529194"/>
    <link type="text/css" rel="stylesheet"
          href="<?= base_url(); ?>public/css/theme-default/material-design-iconic-font.min.css?1421434286"/>
    <link type="text/css" rel="stylesheet"
          href="<?= base_url(); ?>public/css/theme-default/libs/rickshaw/rickshaw.css?1422792967"/>
    <link type="text/css" rel="stylesheet"
          href="<?= base_url(); ?>public/css/theme-default/libs/morris/morris.core.css?1420463396"/>
    <!-- END STYLESHEETS -->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script type="text/javascript" src="<?= base_url(); ?>public/js/libs/utils/html5shiv.js?1403934957"></script>
    <script type="text/javascript" src="<?= base_url(); ?>public/js/libs/utils/respond.min.js?1403934956"></script>
    <![endif]-->
</head>
<body class="menubar-hoverable header-fixed ">

<!-- BEGIN HEADER-->
<header id="header">
    <div class="headerbar">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="headerbar-left">
            <ul class="header-nav header-nav-options">
                <li class="header-nav-brand">
                    <div class="brand-holder">
                        <a href="<?= base_url(); ?>getadmindashboard">
                            <span class="text-lg text-bold text-primary">Evyoldasi ADMIN</span>
                        </a>
                    </div>
                </li>
                <li>
                    <a class="btn btn-icon-toggle menubar-toggle" data-toggle="menubar" href="javascript:void(0);">
                        <i class="fa fa-bars"></i>
                    </a>
                </li>
            </ul>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="headerbar-right">
            <!--            <ul class="header-nav header-nav-options">-->
            <!--                <li>-->
            <!--                    <!-- Search form -->
            <!--                    <form class="navbar-search" role="search">-->
            <!--                        <div class="form-group">-->
            <!--                            <input type="text" class="form-control" name="headerSearch" placeholder="Enter your keyword">-->
            <!--                        </div>-->
            <!--                        <button type="submit" class="btn btn-icon-toggle ink-reaction"><i class="fa fa-search"></i></button>-->
            <!--                    </form>-->
            <!--                </li>-->
            <!--                <li class="dropdown hidden-xs">-->
            <!--                    <a href="javascript:void(0);" class="btn btn-icon-toggle btn-default" data-toggle="dropdown">-->
            <!--                        <i class="fa fa-bell"></i><sup class="badge style-danger">4</sup>-->
            <!--                    </a>-->
            <!--                    <ul class="dropdown-menu animation-expand">-->
            <!--                        <li class="dropdown-header">Günün ismaricları</li>-->
            <!--                        <li>-->
            <!--                            <a class="alert alert-callout alert-warning" href="javascript:void(0);">-->
            <!--                                <img class="pull-right img-circle dropdown-avatar" src="-->
            <? //= base_url(); ?><!--uploads/img/avatar2.jpg?1404026449" alt="" />-->
            <!--                                <strong>Alex Anistor</strong><br/>-->
            <!--                                <small>Testing functionality...</small>-->
            <!--                            </a>-->
            <!--                        </li>-->
            <!--                        <li>-->
            <!--                            <a class="alert alert-callout alert-info" href="javascript:void(0);">-->
            <!--                                <img class="pull-right img-circle dropdown-avatar" src="-->
            <? //= base_url(); ?><!--uploads/img/avatar3.jpg?1404026799" alt="" />-->
            <!--                                <strong>Alicia Adell</strong><br/>-->
            <!--                                <small>Reviewing last changes...</small>-->

            <!--                            </a>-->
            <!--                        </li>-->
            <!--                        <li class="dropdown-header">Options</li>-->
            <!--                        <li><a href="">View all messages <span class="pull-right"><i class="fa fa-arrow-right"></i></span></a></li>-->
            <!--                        <li><a href="">Mark as read <span class="pull-right"><i class="fa fa-arrow-right"></i></span></a></li>-->
            <!--                    </ul><!--end .dropdown-menu -->
            <!--                </li><!--end .dropdown -->
            <!--                <li class="dropdown hidden-xs">-->
            <!--                    <a href="javascript:void(0);" class="btn btn-icon-toggle btn-default" data-toggle="dropdown">-->
            <!--                        <i class="fa fa-area-chart"></i>-->
            <!--                    </a>-->
            <!--                    <ul class="dropdown-menu animation-expand">-->
            <!--                        <li class="dropdown-header">Server load</li>-->
            <!--                        <li class="dropdown-progress">-->
            <!--                            <a href="javascript:void(0);">-->
            <!--                                <div class="dropdown-label">-->
            <!--                                    <span class="text-light">Server load <strong>Today</strong></span>-->
            <!--                                    <strong class="pull-right">93%</strong>-->
            <!--                                </div>-->
            <!--                                <div class="progress"><div class="progress-bar progress-bar-danger" style="width: 93%"></div></div>-->
            <!--                            </a>-->
            <!--                        </li><!--end .dropdown-progress -->
            <!--                        <li class="dropdown-progress">-->
            <!--                            <a href="javascript:void(0);">-->
            <!--                                <div class="dropdown-label">-->
            <!--                                    <span class="text-light">Server load <strong>Yesterday</strong></span>-->
            <!--                                    <strong class="pull-right">30%</strong>-->
            <!--                                </div>-->
            <!--                                <div class="progress"><div class="progress-bar progress-bar-success" style="width: 30%"></div></div>-->
            <!--                            </a>-->
            <!--                        </li><!--end .dropdown-progress -->
            <!--                        <li class="dropdown-progress">-->
            <!--                            <a href="javascript:void(0);">-->
            <!--                                <div class="dropdown-label">-->
            <!--                                    <span class="text-light">Server load <strong>Lastweek</strong></span>-->
            <!--                                    <strong class="pull-right">74%</strong>-->
            <!--                                </div>-->
            <!--                                <div class="progress"><div class="progress-bar progress-bar-warning" style="width: 74%"></div></div>-->
            <!--                            </a>-->
            <!--                        </li><!--end .dropdown-progress -->
            <!--                    </ul><!--end .dropdown-menu -->
            <!--                </li><!--end .dropdown -->
            <!--            </ul><!--end .header-nav-options -->
            <ul class="header-nav header-nav-profile">
                <li class="dropdown">
                    <a href="javascript:void(0);" class="dropdown-toggle ink-reaction" data-toggle="dropdown">
                        <img src="<?= base_url(); ?>uploads/img/Admin2.ico?1403934956" alt=""/>
                        <span class="profile-info">
									<?= $_SESSION['email'] ?>
                            <small>Administrator</small>
								</span></a>

                    <ul class="dropdown-menu animation-dock">
                        <li class="dropdown-header">Config</li>


                    </ul><!--end .dropdown-menu -->
                    <ul class="dropdown-menu animation-dock">
                        <li><a href="<?= base_url(); ?>home/"><i class="fa fa-fw fa-power-off text-danger"></i> Ana
                                Sehife (sayt)</a></li>
                        <li>
                        <li><a href="<?= base_url('adminController/logOut'); ?>"><i
                                        class="fa fa-fw fa-power-off text-danger"></i>Çıxış</a></li>
                    </ul>
                </li><!--end .dropdown -->
            </ul><!--end .header-nav-profile -->
            <ul class="header-nav header-nav-toggle">

                <!--                    <a class="btn btn-icon-toggle btn-default" href="#offcanvas-search" data-toggle="offcanvas" data-backdrop="false">-->
                <!--<!--                        <i class="fa fa-ellipsis-v"></i>-->
                <!--                    </a>-->
                <!--                                                                                                                     //$this->session->userdata('mazgi')-->

                <!--                    sehifede "adi" cixiwi deyiwmek       if(isset($_SESSION['mazgi'])){  echo "cixiw";}else{echo "giriw";}



                <!--                <li><a href="">My profile</a></li>-->
                </li>
            </ul><!--end .header-nav-toggle -->
        </div><!--end #header-navbar-collapse -->
    </div>
</header>
<!-- END HEADER-->

<!-- BEGIN BASE-->
<div id="base">

    <!-- BEGIN OFFCANVAS LEFT -->
    <div class="offcanvas">
    </div><!--end .offcanvas-->
    <!-- END OFFCANVAS LEFT -->

    <!-- BEGIN CONTENT-->
    <div id="content">
        <section>
            <div class="row">
                <div class="container-fluid">

                    <!--                <h2>Bütün elanlar</h2>-->
                    <h2>Elan sayı - <?= COUNT($list) ?></h2>
                    <br>
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th style="text-align: center">Status</th>
                            <th style="text-align: center">ID</th>
                            <th style="text-align: center">Şəhər</th>
                            <!-- <th style="text-align: center">Ünvan</th> -->
                            <th style="text-align: center">Metro</th>
                            <th style="text-align: center">Qiymət</th>
                            <th style="text-align: center">Ad</th>
                            <th style="text-align: center">Telefon</th>
                            <th style="text-align: center">Email</th>
                            <th style="text-align: center">Status</th>
                            <!--                        <th style="text-align: center">Toplam = -->
                            <? //= COUNT($list) ?><!--</th>-->
                            <th style="text-align: center">Ətraflı</th>
                            <!--                        <td style="text-align: center">Action</td>-->
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <?php foreach ($list as $value) { ?>
                        <thead>
                        <tr>


                        </tr>
                        </thead>
                        <td style="text-align: center">
                            <?php if ($value['status'] == 0) { ?>
                                <a class="btn btn-warning"
                                   href="<?= base_url(); ?>adminController/active/<?= $value['id'] ?>">Aktivləşdir</a>
                            <?php } else { ?>
                                <a class="btn btn-success"
                                   href="<?= base_url(); ?>adminController/active/<?= $value['id'] ?>">Deaktivləşdir</a>
                            <?php } ?>

                        </td>

                        <td style="text-align: center"><?= $value['id'] ?></td>
                        <td style="text-align: center"><?= $value['city_name'] ?></td>
                        <!-- <td style="text-align: center"></td> -->
                        <td style="text-align: center"><?= $value['mark'] ?></td>
                        <td style="text-align: center"><?= $value['ads_price'] ?></td>
                        <td style="text-align: center"><?= $value['ads_user_name'] ?></td>
                        <td style="text-align: center"><?= $value['ads_user_phone'] ?></td>
                        <td style="text-align: center"><?= $value['ads_user_email'] ?></td>
                        <td style="text-align: center"><?= $value['status'] ?></td>


                        <td style="text-align: center; width:80px; height:80px";>

                                <a type=" button" data-toggle="modal" data-target="#myModal">
                        <img style="width: 100%; height: 100%;" src="<?= base_url(); ?>uploads/img/img3.jpg" alt=""/>
                        </a>
                        <!-- Modal -->
                        <div class="modal fade" id="myModal" role="dialog">
                            <div class="modal-dialog">

                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Ünvan - <?= $value['ads_address'] ?> </h4>

                                    </div>
                                    <div class="modal-body">


                                        <img style="width: 100%; height: 300px; margin: 2px"
                                             src="<?= base_url(); ?>uploads/img/img3.jpg" alt=""/>
                                        <img style="width: 106px; height: 106px; margin: 2px"
                                             src="<?= base_url(); ?>uploads/img/img2.jpg" alt=""/>
                                        <img style="width: 106px; height: 106px; margin: 2px"
                                             src="<?= base_url(); ?>uploads/img/img1.jpg" alt=""/>
                                        <img style="width: 106px; height: 106px; margin: 2px"
                                             src="<?= base_url(); ?>uploads/img/img1.jpg" alt=""/>
                                        <img style="width: 106px; height: 106px; margin: 2px"
                                             src="<?= base_url(); ?>uploads/img/img1.jpg" alt=""/>
                                        <img style="width: 106px; height: 106px; margin: 2px"
                                             src="<?= base_url(); ?>uploads/img/img1.jpg" alt=""/>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">BAĞLA</button>
                                    </div>
                                </div>

                            </div>
                        </div>

                        </td>
                        <!--                <td style="text-align: center"><a href="-->
                        <? //= base_url(); ?><!--getadmindashboard/dashboard2">keçid</a></td>-->


                        <!--                    <td style="text-align: center">-->
                        <? //= $value['ads_photo'] ?><!--</td>-->

                        <?php } ?>


                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
    </div>
    </section>
</div><!--end #content-->
<!-- END CONTENT -->


<!-- BEGIN MENUBAR-->
<div id="menubar" class="menubar-inverse ">
    <div class="menubar-fixed-panel">
        <div>
            <a class="btn btn-icon-toggle btn-default menubar-toggle" data-toggle="menubar"
               href="javascript:void(0);">
                <i class="fa fa-bars"></i>
            </a>
        </div>
        <div class="expanded">
            <a href="<?= base_url(); ?>admin/dashboard">
                <span class="text-lg text-bold text-primary ">ADMIN Panel</span>
            </a>
        </div>

    </div>
    <div class="menubar-scroll-panel">

        <!-- BEGIN MAIN MENU -->
        <ul id="main-menu" class="gui-controls">

            <!-- BEGIN DASHBOARD -->

            <li>
                <a href="<?= base_url(); ?>getadmindashboard/dashboard2" class="active">
                    <div class="gui-icon"><i class="md md-home"></i></div>
                    <span class="title">Şəkil (admin elanlar)</span>
                </a>
            </li><!--end /menu-li -->
            <!-- END DASHBOARD -->


        </ul><!--end .main-menu -->
        <!-- END MAIN MENU -->

        <div class="menubar-foot-panel">
            <small class="no-linebreak hidden-folded">
                <span class="opacity-75">Copyright &copy; 2017</span> <strong>Evyoldaşı.az</strong>
            </small>
        </div>
    </div><!--end .menubar-scroll-panel-->
</div><!--end #menubar-->
<!-- END MENUBAR -->

<!-- BEGIN OFFCANVAS RIGHT -->
<div class="offcanvas">

    <!-- BEGIN OFFCANVAS SEARCH -->
<!--    <div id="offcanvas-search" class="offcanvas-pane width-8">-->
<!--        <div class="offcanvas-head">-->
<!--            <header class="text-primary">Search</header>-->
<!--            <div class="offcanvas-tools">-->
<!--                <a class="btn btn-icon-toggle btn-default-light pull-right" data-dismiss="offcanvas">-->
<!--                    <i class="md md-close"></i>-->
<!--                </a>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="offcanvas-body no-padding">-->
<!--            <ul class="list ">-->
<!--                <li class="tile divider-full-bleed">-->
<!--                    <div class="tile-content">-->
<!--                        <div class="tile-text"><strong>A</strong></div>-->
<!--                    </div>-->
<!--                </li>-->
<!--                <li class="tile">-->
<!--                    <a class="tile-content ink-reaction" href="#offcanvas-chat" data-toggle="offcanvas"-->
<!--                       data-backdrop="false">-->
<!--                        <div class="tile-icon">-->
<!--                            <img src="--><?//= base_url(); ?><!--uploads/img/avatar4.jpg?1404026791" alt=""/>-->
<!--                        </div>-->
<!--                        <div class="tile-text">-->
<!--                            Alex Nelson-->
<!--                            <small>123-123-3210</small>-->
<!--                        </div>-->
<!--                    </a>-->
<!--                </li>-->
<!--                <li class="tile">-->
<!--                    <a class="tile-content ink-reaction" href="#offcanvas-chat" data-toggle="offcanvas"-->
<!--                       data-backdrop="false">-->
<!--                        <div class="tile-icon">-->
<!--                            <img src="--><?//= base_url(); ?><!--uploads/img/avatar9.jpg?1404026744" alt=""/>-->
<!--                        </div>-->
<!--                        <div class="tile-text">-->
<!--                            Ann Laurens-->
<!--                            <small>123-123-3210</small>-->
<!--                        </div>-->
<!--                    </a>-->
<!--                </li>-->
<!--                <li class="tile divider-full-bleed">-->
<!--                    <div class="tile-content">-->
<!--                        <div class="tile-text"><strong>J</strong></div>-->
<!--                    </div>-->
<!--                </li>-->
<!--                <li class="tile">-->
<!--                    <a class="tile-content ink-reaction" href="#offcanvas-chat" data-toggle="offcanvas"-->
<!--                       data-backdrop="false">-->
<!--                        <div class="tile-icon">-->
<!--                            <img src="--><?//= base_url(); ?><!--uploads/img/avatar2.jpg?1404026449" alt=""/>-->
<!--                        </div>-->
<!--                        <div class="tile-text">-->
<!--                            Jessica Cruise-->
<!--                            <small>123-123-3210</small>-->
<!--                        </div>-->
<!--                    </a>-->
<!--                </li>-->
<!--                <li class="tile">-->
<!--                    <a class="tile-content ink-reaction" href="#offcanvas-chat" data-toggle="offcanvas"-->
<!--                       data-backdrop="false">-->
<!--                        <div class="tile-icon">-->
<!--                            <img src="--><?//= base_url(); ?><!--uploads/img/avatar8.jpg?1404026729" alt=""/>-->
<!--                        </div>-->
<!--                        <div class="tile-text">-->
<!--                            Jim Peters-->
<!--                            <small>123-123-3210</small>-->
<!--                        </div>-->
<!--                    </a>-->
<!--                </li>-->
<!--                <li class="tile divider-full-bleed">-->
<!--                    <div class="tile-content">-->
<!--                        <div class="tile-text"><strong>M</strong></div>-->
<!--                    </div>-->
<!--                </li>-->
<!--                <li class="tile">-->
<!--                    <a class="tile-content ink-reaction" href="#offcanvas-chat" data-toggle="offcanvas"-->
<!--                       data-backdrop="false">-->
<!--                        <div class="tile-icon">-->
<!--                            <img src="--><?//= base_url(); ?><!--uploads/img/avatar5.jpg?1404026513" alt=""/>-->
<!--                        </div>-->
<!--                        <div class="tile-text">-->
<!--                            Mabel Logan-->
<!--                            <small>123-123-3210</small>-->
<!--                        </div>-->
<!--                    </a>-->
<!--                </li>-->
<!--                <li class="tile">-->
<!--                    <a class="tile-content ink-reaction" href="#offcanvas-chat" data-toggle="offcanvas"-->
<!--                       data-backdrop="false">-->
<!--                        <div class="tile-icon">-->
<!--                            <img src="--><?//= base_url(); ?><!--uploads/img/avatar11.jpg?1404026774" alt=""/>-->
<!--                        </div>-->
<!--                        <div class="tile-text">-->
<!--                            Mary Peterson-->
<!--                            <small>123-123-3210</small>-->
<!--                        </div>-->
<!--                    </a>-->
<!--                </li>-->
<!--                <li class="tile">-->
<!--                    <a class="tile-content ink-reaction" href="#offcanvas-chat" data-toggle="offcanvas"-->
<!--                       data-backdrop="false">-->
<!--                        <div class="tile-icon">-->
<!--                            <img src="--><?//= base_url(); ?><!--uploads/img/avatar3.jpg?1404026799" alt=""/>-->
<!--                        </div>-->
<!--                        <div class="tile-text">-->
<!--                            Mike Alba-->
<!--                            <small>123-123-3210</small>-->
<!--                        </div>-->
<!--                    </a>-->
<!--                </li>-->
<!--                <li class="tile divider-full-bleed">-->
<!--                    <div class="tile-content">-->
<!--                        <div class="tile-text"><strong>N</strong></div>-->
<!--                    </div>-->
<!--                </li>-->
<!--                <li class="tile">-->
<!--                    <a class="tile-content ink-reaction" href="#offcanvas-chat" data-toggle="offcanvas"-->
<!--                       data-backdrop="false">-->
<!--                        <div class="tile-icon">-->
<!--                            <img src="--><?//= base_url(); ?><!--uploads/img/avatar6.jpg?1404026572" alt=""/>-->
<!--                        </div>-->
<!--                        <div class="tile-text">-->
<!--                            Nathan Peterson-->
<!--                            <small>123-123-3210</small>-->
<!--                        </div>-->
<!--                    </a>-->
<!--                </li>-->
<!--                <li class="tile divider-full-bleed">-->
<!--                    <div class="tile-content">-->
<!--                        <div class="tile-text"><strong>P</strong></div>-->
<!--                    </div>-->
<!--                </li>-->
<!--                <li class="tile">-->
<!--                    <a class="tile-content ink-reaction" href="#offcanvas-chat" data-toggle="offcanvas"-->
<!--                       data-backdrop="false">-->
<!--                        <div class="tile-icon">-->
<!--                            <img src="--><?//= base_url(); ?><!--uploads/img/avatar7.jpg?1404026721" alt=""/>-->
<!--                        </div>-->
<!--                        <div class="tile-text">-->
<!--                            Philip Ericsson-->
<!--                            <small>123-123-3210</small>-->
<!--                        </div>-->
<!--                    </a>-->
<!--                </li>-->
<!--                <li class="tile divider-full-bleed">-->
<!--                    <div class="tile-content">-->
<!--                        <div class="tile-text"><strong>S</strong></div>-->
<!--                    </div>-->
<!--                </li>-->
<!--                <li class="tile">-->
<!--                    <a class="tile-content ink-reaction" href="#offcanvas-chat" data-toggle="offcanvas"-->
<!--                       data-backdrop="false">-->
<!--                        <div class="tile-icon">-->
<!--                            <img src="--><?//= base_url(); ?><!--uploads/img/avatar10.jpg?1404026762" alt=""/>-->
<!--                        </div>-->
<!--                        <div class="tile-text">-->
<!--                            Samuel Parsons-->
<!--                            <small>123-123-3210</small>-->
<!--                        </div>-->
<!--                    </a>-->
<!--                </li>-->
<!--            </ul>-->
<!--        </div><!--end .offcanvas-body -->
<!--    </div><!--end .offcanvas-pane -->
    <!-- END OFFCANVAS SEARCH -->

    <!-- BEGIN OFFCANVAS CHAT -->
<!--    <div id="offcanvas-chat" class="offcanvas-pane style-default-light width-12">-->
<!--        <div class="offcanvas-head style-default-bright">-->
<!--            <header class="text-primary">Chat with Ann Laurens</header>-->
<!--            <div class="offcanvas-tools">-->
<!--                <a class="btn btn-icon-toggle btn-default-light pull-right" data-dismiss="offcanvas">-->
<!--                    <i class="md md-close"></i>-->
<!--                </a>-->
<!--                <a class="btn btn-icon-toggle btn-default-light pull-right" href="#offcanvas-search"-->
<!--                   data-toggle="offcanvas" data-backdrop="false">-->
<!--                    <i class="md md-arrow-back"></i>-->
<!--                </a>-->
<!--            </div>-->
<!--            <form class="form">-->
<!--                <div class="form-group floating-label">-->
<!--                        <textarea name="sidebarChatMessage" id="sidebarChatMessage" class="form-control autosize"-->
<!--                                  rows="1"></textarea>-->
<!--                    <label for="sidebarChatMessage">Leave a message</label>-->
<!--                </div>-->
<!--            </form>-->
<!--        </div>-->
<!--        <div class="offcanvas-body">-->
<!--            <ul class="list-chats">-->
<!--                <li>-->
<!--                    <div class="chat">-->
<!--                        <div class="chat-avatar"><img class="img-circle"-->
<!--                                                      src="--><?//= base_url(); ?><!--uploads/img/avatar1.jpg?1403934956"-->
<!--                                                      alt=""/></div>-->
<!--                        <div class="chat-body">-->
<!--                            Yes, it is indeed very beautiful.-->
<!--                            <small>10:03 pm</small>-->
<!--                        </div>-->
<!--                    </div><!--end .chat -->
<!--                </li>-->
<!--                <li class="chat-left">-->
<!--                    <div class="chat">-->
<!--                        <div class="chat-avatar"><img class="img-circle"-->
<!--                                                      src="--><?//= base_url(); ?><!--uploads/img/avatar9.jpg?1404026744"-->
<!--                                                      alt=""/></div>-->
<!--                        <div class="chat-body">-->
<!--                            Did you see the changes?-->
<!--                            <small>10:02 pm</small>-->
<!--                        </div>-->
<!--                    </div><!--end .chat -->
<!--                </li>-->
<!--                <li>-->
<!--                    <div class="chat">-->
<!--                        <div class="chat-avatar"><img class="img-circle"-->
<!--                                                      src="--><?//= base_url(); ?><!--uploads/img/avatar1.jpg?1403934956"-->
<!--                                                      alt=""/></div>-->
<!--                        <div class="chat-body">-->
<!--                            I just arrived at work, it was quite busy.-->
<!--                            <small>06:44pm</small>-->
<!--                        </div>-->
<!--                        <div class="chat-body">-->
<!--                            I will take look in a minute.-->
<!--                            <small>06:45pm</small>-->
<!--                        </div>-->
<!--                    </div><!--end .chat -->
<!--                </li>-->
<!--                <li class="chat-left">-->
<!--                    <div class="chat">-->
<!--                        <div class="chat-avatar"><img class="img-circle"-->
<!--                                                      src="--><?//= base_url(); ?><!--uploads/img/avatar9.jpg?1404026744"-->
<!--                                                      alt=""/></div>-->
<!--                        <div class="chat-body">-->
<!--                            The colors are much better now.-->
<!--                        </div>-->
<!--                        <div class="chat-body">-->
<!--                            The colors are brighter than before.-->
<!--                            I have already sent an example.-->
<!--                            This will make it look sharper.-->
<!--                            <small>Mon</small>-->
<!--                        </div>-->
<!--                    </div><!--end .chat -->
<!--                </li>-->
<!--                <li>-->
<!--                    <div class="chat">-->
<!--                        <div class="chat-avatar"><img class="img-circle"-->
<!--                                                      src="--><?//= base_url(); ?><!--uploads/img/avatar1.jpg?1403934956"-->
<!--                                                      alt=""/></div>-->
<!--                        <div class="chat-body">-->
<!--                            Are the colors of the logo already adapted?-->
<!--                            <small>Last week</small>-->
<!--                        </div>-->
<!--                    </div><!--end .chat -->
<!--                </li>-->
<!--            </ul>-->
<!--        </div><!--end .offcanvas-body -->
<!--    </div><!--end .offcanvas-pane -->
    <!-- END OFFCANVAS CHAT -->

</div><!--end .offcanvas-->
<!-- END OFFCANVAS RIGHT -->

</div><!--end #base-->
<!-- END BASE -->

<!-- BEGIN JAVASCRIPT -->
<script src="<?= base_url(); ?>public/js/libs/jquery/jquery-1.11.2.min.js"></script>
<script src="<?= base_url(); ?>public/js/libs/jquery/jquery-migrate-1.2.1.min.js"></script>
<script src="<?= base_url(); ?>public/js/libs/bootstrap/bootstrap.min.js"></script>
<script src="<?= base_url(); ?>public/js/libs/spin.js/spin.min.js"></script>
<script src="<?= base_url(); ?>public/js/libs/autosize/jquery.autosize.min.js"></script>
<script src="<?= base_url(); ?>public/js/libs/moment/moment.min.js"></script>
<script src="<?= base_url(); ?>publics/js/libs/flot/jquery.flot.min.js"></script>
<script src="<?= base_url(); ?>public/js/libs/flot/jquery.flot.time.min.js"></script>
<script src="<?= base_url(); ?>public/js/libs/flot/jquery.flot.resize.min.js"></script>
<script src="<?= base_url(); ?>public/js/libs/flot/jquery.flot.orderBars.js"></script>
<script src="<?= base_url(); ?>public/js/libs/flot/jquery.flot.pie.js"></script>
<script src="<?= base_url(); ?>public/js/libs/flot/curvedLines.js"></script>
<script src="<?= base_url(); ?>public/js/libs/jquery-knob/jquery.knob.min.js"></script>
<script src="<?= base_url(); ?>public/js/libs/sparkline/jquery.sparkline.min.js"></script>
<script src="<?= base_url(); ?>public/js/libs/nanoscroller/jquery.nanoscroller.min.js"></script>
<script src="<?= base_url(); ?>public/js/libs/d3/d3.min.js"></script>
<script src="<?= base_url(); ?>public/js/libs/d3/d3.v3.js"></script>
<script src="<?= base_url(); ?>public/js/libs/rickshaw/rickshaw.min.js"></script>
<script src="<?= base_url(); ?>public/js/core/source/App.js"></script>
<script src="<?= base_url(); ?>public/js/core/source/AppNavigation.js"></script>
<script src="<?= base_url(); ?>public/js/core/source/AppOffcanvas.js"></script>
<script src="<?= base_url(); ?>public/js/core/source/AppCard.js"></script>
<script src="<?= base_url(); ?>public/js/core/source/AppForm.js"></script>
<script src="<?= base_url(); ?>public/js/core/source/AppNavSearch.js"></script>
<script src="<?= base_url(); ?>public/js/core/source/AppVendor.js"></script>
<script src="<?= base_url(); ?>public/js/core/demo/Demo.js"></script>
<script src="<?= base_url(); ?>public/js/core/demo/DemoDashboard.js"></script>
<!-- END JAVASCRIPT -->

</body>
</html>
