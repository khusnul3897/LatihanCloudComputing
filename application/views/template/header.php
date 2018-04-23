<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Aplikasi Penjualan Hijab</title>

        <link rel="stylesheet" type="text/css" href="<?= base_url('bootstrap/css/bootstrap.min.css') ?>" />
        <link rel="stylesheet" type="text/css" href="<?= base_url('font-awesome/css/font-awesome.min.css') ?>" />
        <link rel="stylesheet" type="text/css" href="<?= base_url('css/local.css') ?>" />
        <link rel="stylesheet" type="text/css" 
              href="<?= base_url('assets/datatables/datatables.min.css') ?>"/>
        <link rel="stylesheet" type="text/css" 
              href="<?= base_url('assets/sweetalert/sweetalert.css') ?>"/>

        <script type="text/javascript" src="<?= base_url() ?>js/jquery-1.10.2.min.js"></script>
        <script type="text/javascript" src="<?= base_url() ?>bootstrap/js/bootstrap.min.js"></script>
        <script type="text/javascript"
                src="<?= base_url('assets/datatables/datatables.min.js') ?>">
        </script> 
        <script type="text/javascript"
                src="<?= base_url('assets/sweetalert/sweetalert.min.js') ?>">
        </script>

        <!-- you need to include the shieldui css and js assets in order for the charts to work -->
        <link rel="stylesheet" type="text/css" href="<?= base_url() ?>http://www.shieldui.com/shared/components/latest/css/light-bootstrap/all.min.css" />
        <link id="gridcss" rel="stylesheet" type="text/css" href="<?= base_url() ?>http://www.shieldui.com/shared/components/latest/css/dark-bootstrap/all.min.css" />

        <script type="text/javascript" src="<?= base_url() ?>http://www.shieldui.com/shared/components/latest/js/shieldui-all.min.js"></script>
        <script type="text/javascript" src="<?= base_url() ?>http://www.prepbootstrap.com/Content/js/gridData.js"></script>
        <style type="text/css">
            #master{
                padding-left: 7%;
            }
        </style>
    </head>
    <body>
        <div id="wrapper">
            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html">REN HIJAB</a>
                </div>
                <div class="collapse navbar-collapse navbar-ex1-collapse">
                    <ul id="active" class="nav navbar-nav side-nav">
                        <li><a href="<?php echo site_url('Member'); ?>"><i class="fa fa-bullseye"></i> Dashboard</a></li>
                        <li><a href="<?php echo site_url('Member'); ?>"><i class="fa fa-user" aria-hidden="true"></i> Member</a></li>
                        <li><a href="<?php echo site_url('Hijab'); ?>"><i class="fa fa-ravelry" aria-hidden="true"></i></i> Hijab</a></li>
                        <li><a href="<?php echo site_url('Petugas'); ?>"><i class="fa fa-user-circle" aria-hidden="true"></i></i> Petugas</a></li>
                        <li><a href="<?php echo site_url('Transaksi'); ?>"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Transaksi</a></li>
                        <li><a href="forms.html"><i class="fa fa-list-ol"></i> Katalog</a></li>


                        <a id="master" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                            <i class="fa fa-list-alt" aria-hidden="true"></i>
                            Laporan</a>
                        <div id="collapseOne" class="panel-collapse collapse in">
                            <div class="panel-body">
                                <table class="table">
                                    <tr>
                                        <td>
                                            <span class="glyphicon glyphicon-book"></span> <a href="<?= site_url() ?>/hijab/laporan">Laporan Hijab</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="glyphicon glyphicon-book"></span> <a href="<?= site_url() ?>/member/laporan">Laporan Member</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="glyphicon glyphicon-book"></span> <a href="<?= site_url() ?>/transaksi/laporan">Laporan Transaksi</a>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </ul>

                    </li>
                    </li> 
                    </ul>
                    <ul class="nav navbar-nav navbar-right navbar-user">
                        <li class="dropdown user-dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Renita Admin<b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="#"><i class="fa fa-user"></i> Profile</a></li>
                                <li class="divider"></li>
                                <li><a href="<?php echo site_url('Login'); ?>"><i class="fa fa-power-off"></i> Log Out</a></li>

                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
