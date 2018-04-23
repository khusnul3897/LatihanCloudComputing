
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Aplikasi Penjualan Toko Hijab</title>
        
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
    </head>
    <style>
        .tengah{
            position: absolute;
            margin-top: -200px;
            margin-left: -200px;
            left: 50%;
            top: 50%;
            width: 400px;
            height: 220px;
        }
    </style>
    <body>
        <div class="tengah">
        <div class="panel panel-primary">
        <div class="panel-heading">
        <h3 class="panel-title">Silahkan Login</h3>
        </div>
        <div class="container-fluid">
            <br />
            <form class="form" method="post" action="<?= site_url('login/validasi') ?>">
                <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1">
                        <i class="fa fa-user-circle" aria-hidden="true"></i>
                    </span>
                    <input type="text" class="form-control" name="username" placeholder="Username" aria-describedby="basic-addon1">
                </div>
                <br />
                <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1">
                        <i class="fa fa-key" aria-hidden="true"></i>
                    </span>
                    <input type="text" class="form-control" name="password" placeholder="Password" aria-describedby="basic-addon1">
                </div>
                <br />
                <div class="text-danger">
                    <?= $this->session->flashdata('error') ?>
                </div>
                <button type="submit" class="btn btn-primary">
                 Login   
                </button>
            </form>
        </div>
        </div>
        </div>
        </div>
        
    </body>
</html>
