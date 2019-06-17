<!DOCTYPE html>
<html lang="en" style="min-height:100%;background-color:#f8f8f8">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>AdminS</title>
        <link rel="stylesheet" href="assets/css/bootstrap/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/fontawesome/css/all.css">
        <link rel="stylesheet" href="assets/css/dataTables.min.css">
        <link href="https://fonts.googleapis.com/css?family=Cabin" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/admin.css">
    </head>
    <body style="background-color:#f8f8f8">
        <div class="top-bar">
            <div class="navbar-right navbar-img" style="margin-right:15px">
                <div class="drop-bar">
                    <div class="i-user"><i class="fas fa-user fa-fw"></i></div>
                </div>
                <ul class="dropmenu">
                    <li><a href="">Profil</a></li>
                    <li><a href="">Pengaturan</a></li>
                    <li><a href="" class="keluar">Keluar</a></li>
                </ul>
            </div>
            <div class="clear"></div>
        </div>
        <div class="admin-menu">
            <ul class="list-unstyled">
                <li class="title-admin">
                    <div class="btn-burger burger dib pointer"><i class="fas fa-bars"></i></div>
                    <div class="brands dib"><strong>Admin KAKA</strong></div>
                    <div class="side-hr"></div>
                </li>
                <li id="home">
                    <a href="<?=site_url()?>" class="admin-menu-first" data-id="#home">
                        <i class="fa fa-tachometer-alt fa-fw"></i>
                        <span>Dashbord</span>
                    </a>
                </li>
                <li id="jurnal-umum">
                    <a href="#" class="admin-menu-first" data-id="#jurnal-umum">
                        <i class="fas fa-edit fa-fw"></i>
                        <span>Jurnal Umum</span>
                    </a>
                    <ul class="submenu">
                        <div>
                            <li><a href="">page</a></li>
                            <li><a href="">page</a></li>
                            <li><a href="">page</a></li>
                        </div>
                    </ul>
                </li>
                <li id="pos-akun">
                    <a href="pos-akun" class="admin-menu-first" data-id="#pos-akun">
                        <i class="fas fa-tasks fa-fw"></i>
                        <span>Pos Akun</span>
                    </a>
                </li>
                <li id="laporan-keuangan">
                    <a href="laporan-keuangan" class="admin-menu-first" data-id="#laporan-keuangan">
                        <i class="fas fa-file-alt fa-fw"></i>
                        <span>Laporan Keuangan</span>
                    </a>
                </li>
                <li id="user">
                    <a href="pengguna" class="admin-menu-first" data-id="#user">
                        <i class="fas fa-user fa-fw"></i>
                        <span>Pengguna</span>
                    </a>
                </li>
                <li>
                    <a href="logout" class="admin-menu-first">
                        <i class="fas fa-sign-out-alt fa-fw"></i>
                        <span>Keluar</span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="contents"><?=$content?></div>
        <script type="text/javascript" src="assets/js/jquery.min.js"></script>
        <script type="text/javascript" src="assets/js/bootstrap/bootstrap.min.js"></script>
        <script type="text/javascript" src="assets/js/dataTables.min.js"></script>
        <script type="text/javascript" src="assets/js/main.js"></script>
    </body>
</html>