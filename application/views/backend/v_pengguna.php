<!--Counter Inbox-->
<?php
$query = $this->db->query("SELECT * FROM tbl_inbox WHERE inbox_status='1'");
$query2 = $this->db->query("SELECT * FROM orders WHERE status <> 'LUNAS'");
$query3 = $this->db->query("SELECT * FROM testimoni WHERE status ='0'");
$query4 = $this->db->query("SELECT * FROM pembayaran");
$jum_pesan = $query->num_rows();
$jum_order = $query2->num_rows();
$jum_testimoni = $query3->num_rows();
$jum_konfirmasi = $query4->num_rows();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sumbawa-Travel | Pengguna</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="shorcut icon" type="text/css" href="<?php echo base_url() . 'assets/images/favicon.png' ?>">
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/bootstrap/css/bootstrap.min.css' ?>">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/font-awesome/css/font-awesome.min.css' ?>">
    <!-- DataTables -->
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/plugins/datatables/dataTables.bootstrap.css' ?>">
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/plugins/datatables/rowReorder.dataTables.min.css' ?>">
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/plugins/datatables/responsive.dataTables.min.css' ?>">
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/plugins/datatables/buttons.dataTables.min.css' ?>">

    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/dist/css/AdminLTE.min.css' ?>">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/dist/css/skins/_all-skins.min.css' ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/plugins/toast/jquery.toast.min.css' ?>" />

    <?php
    function limit_words($string, $word_limit)
    {
        $words = explode(" ", $string);
        return implode(" ", array_splice($words, 0, $word_limit));
    }

    ?>

</head>

<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

        <?php
        $this->load->view('backend/v_header');
        ?>
        <!-- Left side column. contains the logo and sidebar -->
        <aside class="main-sidebar">
            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">

                <!-- /.search form -->
                <!-- sidebar menu: : style can be found in sidebar.less -->
                <ul class="sidebar-menu">
                    <li class="header">Menu Utama</li>
                    <li>
                        <a href="<?php echo base_url() . 'backend/dashboard' ?>">
                            <i class="fa fa-home"></i> <span>Dashboard</span>
                            <span class="pull-right-container">
                                <small class="label pull-right"></small>
                            </span>
                        </a>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-pencil"></i>
                            <span>Post</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="<?php echo base_url() . 'backend/post/add_post' ?>"><i class="fa fa-thumb-tack"></i> Add New</a></li>
                            <li><a href="<?php echo base_url() . 'backend/post' ?>"><i class="fa fa-list"></i> Post
                                    List</a></li>
                        </ul>
                    </li>
                    <li class="active">
                        <a href="<?php echo base_url() . 'backend/pengguna' ?>">
                            <i class="fa fa-users"></i> <span>Pengguna</span>
                            <span class="pull-right-container">
                                <small class="label pull-right"></small>
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url() . 'backend/bank' ?>">
                            <i class="fa fa-bank"></i> <span>Bank</span>
                            <span class="pull-right-container">
                                <small class="label pull-right"></small>
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url() . 'backend/wisata' ?>">
                            <i class="fa fa-map-signs"></i> <span>Wisata</span>
                            <span class="pull-right-container">
                                <small class="label pull-right"></small>
                            </span>
                        </a>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-bus"></i>
                            <span>Tour</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="<?php echo base_url() . 'backend/paket_tour' ?>"><i class="fa fa-gift"></i> Paket
                                    Tour</a></li>
                            <li><a href="<?php echo base_url() . 'backend/kategori' ?>"><i class="fa fa-hashtag"></i>
                                    Kategori</a></li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-camera"></i>
                            <span>Gallery</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="<?php echo base_url() . 'backend/album' ?>"><i class="fa fa-clone"></i> Album</a>
                            </li>
                            <li><a href="<?php echo base_url() . 'backend/galeri' ?>"><i class="fa fa-picture-o"></i>
                                    Photos</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="<?php echo base_url() . 'backend/orders' ?>">
                            <i class="fa fa-bell"></i> <span>Orders</span>
                            <span class="pull-right-container">
                                <small class="label pull-right bg-red"><?php echo $jum_order; ?></small>
                            </span>
                        </a>
                    </li>

                    <li>
                        <a href="<?php echo base_url() . 'backend/konfirmasi' ?>">
                            <i class="fa fa-money"></i> <span>Konfirmasi</span>
                            <span class="pull-right-container">
                                <small class="label pull-right bg-red"><?php echo $jum_konfirmasi; ?></small>
                            </span>
                        </a>
                    </li>

                    <li>
                        <a href="<?php echo base_url() . 'backend/inbox' ?>">
                            <i class="fa fa-envelope"></i> <span>Inbox</span>
                            <span class="pull-right-container">
                                <small class="label pull-right bg-green"><?php echo $jum_pesan; ?></small>
                            </span>
                        </a>
                    </li>

                    <li>
                        <a href="<?php echo base_url() . 'backend/testimonial' ?>">
                            <i class="fa fa-comment"></i> <span>Testimonial</span>
                            <span class="pull-right-container">
                                <small class="label pull-right bg-yellow"><?php echo $jum_testimoni; ?></small>
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url() . 'administrator/logout' ?>">
                            <i class="fa fa-sign-out"></i> <span>Sign Out</span>
                            <span class="pull-right-container">
                                <small class="label pull-right"></small>
                            </span>
                        </a>
                    </li>

                </ul>
            </section>
            <!-- /.sidebar -->
        </aside>
        <style>
            .tab {
                margin-top: 30px;
            }

            .tab .nav-tabs {
                border: none;
                border-bottom: 1px solid #e4e4e4;
            }

            .nav-tabs li a {
                padding: 15px 40px;
                border: 1px solid #ededed;
                border-top: 2px solid #ededed;
                border-right: 0px none;
                background: #7a81f4;
                color: #fff;
                border-radius: 0px;
                margin-right: 0px;
                font-weight: bold;
                transition: all 0.3s ease-in 0s;
            }

            .nav-tabs li a:hover {
                border-bottom-color: #ededed;
                border-right: 0px none;
                background: #00b0ad;
                color: #fff;
            }

            .nav-tabs li a i {
                display: inline-block;
                text-align: center;
                margin-right: 10px;
            }

            .nav-tabs li:last-child {
                border-right: 1px solid #ededed;
            }

            .nav-tabs li.active a,
            .nav-tabs li.active a:focus,
            .nav-tabs li.active a:hover {
                border-top: 3px solid #00b0ad;
                border-right: 1px solid #d3d3d3;
                margin-top: -15px;
                color: #444;
                padding: 22px 40px;
            }

            .tab .tab-content {
                padding: 20px;
                line-height: 22px;
                box-shadow: 0px 1px 0px #808080;
            }

            .tab .tab-content h3 {
                margin-top: 0;
            }

            @media only screen and (max-width: 767px) {
                .nav-tabs li {
                    width: 100%;
                    margin-bottom: 10px;
                }

                .nav-tabs li a {
                    padding: 15px;
                }

                .nav-tabs li.active a,
                .nav-tabs li.active a:focus,
                .nav-tabs li.active a:hover {
                    padding: 15px;
                    margin-top: 0;
                }
            }
        </style>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->



            <!-- Main content -->
            <section class="content">
                <div class="box box-primary">
                    <div class="box-header with-border">

                        <div class="row">
                            <div class="col-xs-12">
                                <div class="tab" role="tabpanel">
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li role="presentation" class="active"><a href="#Section1" aria-controls="home" role="tab" data-toggle="tab"><i class="fa fa-user"></i>Data Customer</a></li>
                                        <li role="presentation"><a href="#Section2" aria-controls="profile" role="tab" data-toggle="tab"><i class="fa fa-envelope"></i>Data Admin</a></li>

                                        <li role="presentation"><a href="#Section3" aria-controls="profile" role="tab" data-toggle="tab"><i class="fa fa-envelope"></i>Data Tour Gate</a></li>


                                    </ul>
                                    <!-- Tab panes -->
                                    <div class="tab-content tabs">
                                        <div role="tabpanel" class="tab-pane fade in active" id="Section1">
                                            <div class="box-header">
                                            </div>
                                            <!-- /.box-header -->
                                            <div class="box-body">
                                                <table id="example" class="table table-bordered table-striped table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th>Nama</th>
                                                            <th>Email</th>
                                                            <th>Status</th>
                                                            <th style="text-align:right;">Aksi</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                        $no = 0;
                                                        foreach ($customer->result_array() as $a) :
                                                            $no++;
                                                            $id = $a['id'];
                                                            $nama = $a['name'];
                                                            $email = $a['email'];
                                                            $is_active = $a['is_active'];

                                                        ?>
                                                            <tr>
                                                                <td><?php echo $nama; ?></td>
                                                                <td><?php echo $email; ?></td>
                                                                <td>
                                                                    <?php if ($is_active == 1) {
                                                                        echo "Active";
                                                                    } else {
                                                                        echo "NonAktive";
                                                                    } ?></td>

                                                                <td style="text-align:right;">

                                                                    <a class="btn" href="<?php echo base_url() . 'backend/pengguna/nonaktifkan/' . $id; ?>"><span class="fa fa-refresh" title="Nonaktifkan"></span></a>

                                                                </td>
                                                            </tr>
                                                        <?php endforeach; ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <!-- /.box-body -->
                                        </div>
                                        <div role="tabpanel" class="tab-pane fade" id="Section2">

                                            <!-- /.box-header -->
                                            <div class="box-header">
                                                <a class="btn btn-success btn-flat" data-toggle="modal" data-target="#largeModal"><span class="fa fa-plus"></span> Add New</a>
                                            </div>
                                            <div class="box-body">
                                                <table id="example2" class="table table-striped" style="font-size:13px;">
                                                    <thead>
                                                        <tr>
                                                            <!-- <th>Photo</th> -->
                                                            <th>Nama</th>
                                                            <th>Username</th>
                                                            <th>Password</th>
                                                            <th>Level</th>
                                                            <th style="text-align:right;">Aksi</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                        $no = 0;
                                                        foreach ($data->result_array() as $a) :
                                                            $no++;
                                                            $id = $a['idadmin'];
                                                            $nama = $a['nama'];
                                                            $username = $a['username'];
                                                            $password = $a['password'];
                                                            $level = $a['level'];
                                                            $photo = $a['photo'];
                                                        ?>
                                                            <tr>
                                                                <!-- <td><img src="<?php echo base_url() . 'assets/images/' . $photo; ?>" class="img-circle" style="width:60px;"></td> -->
                                                                <td><?php echo $nama; ?></td>
                                                                <td><?php echo $username; ?></td>
                                                                <td><?php echo $password; ?></td>
                                                                <td><?php echo $level; ?></td>
                                                                <td style="text-align:right;">
                                                                    <a class="btn" data-toggle="modal" data-target="#ModalUpdate<?php echo $id; ?>"><span class="fa fa-pencil"></span></a>
                                                                    <a class="btn" href="<?php echo base_url() . 'backend/pengguna/reset_password/' . $id; ?>"><span class="fa fa-refresh"></span></a>
                                                                    <a class="btn" data-toggle="modal" data-target="#ModalHapus<?php echo $id; ?>"><span class="fa fa-trash"></span></a>
                                                                </td>
                                                            </tr>
                                                        <?php endforeach; ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <!-- /.box-body -->
                                        </div>
                                        <div role="tabpanel" class="tab-pane fade" id="Section3">

                                            <!-- /.box-header -->
                                            <div class="box-header">
                                                <a class="btn btn-success btn-flat" data-toggle="modal" data-target="#tourgate"><span class="fa fa-plus"></span> Add New</a>
                                            </div>
                                            <div class="box-body">
                                                <table id="example2" class="table table-striped" style="font-size:13px;">
                                                    <thead>
                                                        <tr>
                                                            <th>Photo</th>
                                                            <th>Nama</th>
                                                            <th>No Hp</th>

                                                            <th style="text-align:right;">Aksi</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                        $no = 0;
                                                        foreach ($tourgate->result_array() as $a) :
                                                            $no++;
                                                            $id = $a['id'];
                                                            $nama = $a['nama'];
                                                            $no_hp = $a['no_hp'];
                                                            $gambar = $a['gambar'];

                                                        ?>
                                                            <tr>
                                                                <td><img src="<?php echo base_url() . 'assets/images/' . $gambar; ?>" class="img-circle" style="width:60px;"></td>
                                                                <td><?php echo $nama; ?></td>
                                                                <td><?php echo $no_hp; ?></td>
                                                                <td style="text-align:right;">
                                                                    <a class="btn" data-toggle="modal" data-target="#ModalUpdate2<?php echo $id; ?>"><span class="fa fa-pencil"></span></a>
                                                                    <a class="btn" data-toggle="modal" data-target="#ModalHapus2<?php echo $id; ?>"><span class="fa fa-trash"></span></a>
                                                                </td>
                                                            </tr>
                                                        <?php endforeach; ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <!-- /.box-body -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </section>
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <div class="pull-right hidden-xs">
                <b>Version</b> 1.0
            </div>
            <strong>Copyright &copy; <?php echo date("Y"); ?> <a href="">Sumbawa Tour</a>.</strong> All rights reserved.
        </footer>


        <div class="control-sidebar-bg"></div>
    </div>
    <!-- ./wrapper -->


    <!-- ============ MODAL ADD PENGGUNA =============== -->
    <div class="modal fade" id="largeModal" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                    <h3 class="modal-title" id="myModalLabel">Add Pengguna</h3>
                </div>
                <form class="form-horizontal" method="post" action="<?php echo base_url() . 'backend/pengguna/simpan_pengguna' ?>" enctype="multipart/form-data">
                    <div class="modal-body">

                        <div class="form-group">
                            <label class="control-label col-xs-3">Nama</label>
                            <div class="col-xs-8">
                                <input name="nama" class="form-control" type="text" placeholder="Nama" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-xs-3">Username</label>
                            <div class="col-xs-8">
                                <input name="user" class="form-control" type="text" placeholder="username" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-xs-3">Password</label>
                            <div class="col-xs-8">
                                <input name="pass" class="form-control" type="password" placeholder="Password" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-xs-3">Ulangi Password</label>
                            <div class="col-xs-8">
                                <input name="pass2" class="form-control" type="password" placeholder="Ulangi Password" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-xs-3">Level</label>
                            <div class="col-xs-8">
                                <select name="level" class="form-control" required>
                                    <option value="">-Pilih-</option>
                                    <option value="1">Administrator</option>
                                    <option value="2">Operator</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-xs-3">Photo</label>
                            <div class="col-xs-8">
                                <input type="file" name="filefoto" required>
                            </div>
                        </div>

                    </div>

                    <div class="modal-footer">
                        <button class="btn btn-flat" data-dismiss="modal" aria-hidden="true">Tutup</button>
                        <button class="btn btn-primary btn-flat">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <!-- ============ MODAL ADD TOUR GATE =============== -->
    <div class="modal fade" id="tourgate" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                    <h3 class="modal-title" id="myModalLabel">Add Tour Gate</h3>
                </div>
                <form class="form-horizontal" method="post" action="<?php echo base_url() . 'backend/pengguna/simpan_tourgate' ?>" enctype="multipart/form-data">
                    <div class="modal-body">

                        <div class="form-group">
                            <label class="control-label col-xs-3">Nama</label>
                            <div class="col-xs-8">
                                <input name="nama" class="form-control" type="text" placeholder="Nama" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-xs-3">No HP</label>
                            <div class="col-xs-8">
                                <input name="no_hp" maxlength="12" class="form-control" type="number" placeholder="NO HP" required>
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="control-label col-xs-3">Photo</label>
                            <div class="col-xs-8">
                                <input type="file" name="filefoto" required>
                            </div>
                        </div>

                    </div>

                    <div class="modal-footer">
                        <button class="btn btn-flat" data-dismiss="modal" aria-hidden="true">Tutup</button>
                        <button class="btn btn-primary btn-flat">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <?php
    $no = 0;
    foreach ($data->result_array() as $a) :
        $no++;
        $id = $a['idadmin'];
        $nama = $a['nama'];
        $username = $a['username'];
        $password = $a['password'];
        $level = $a['level'];
        $photo = $a['photo'];
    ?>
        <!-- ============ MODAL EDIT PENGGUNA =============== -->
        <div class="modal fade" id="ModalUpdate<?php echo $id; ?>" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                        <h3 class="modal-title" id="myModalLabel">Update Pengguna</h3>
                    </div>
                    <form class="form-horizontal" method="post" action="<?php echo base_url() . 'backend/pengguna/update_pengguna' ?>" enctype="multipart/form-data">
                        <div class="modal-body">

                            <div class="form-group">
                                <label class="control-label col-xs-3">Nama</label>
                                <div class="col-xs-8">
                                    <input name="nama" value="<?php echo $nama; ?>" class="form-control" type="text" placeholder="Nama" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-xs-3">Username</label>
                                <div class="col-xs-8">
                                    <input name="user" value="<?php echo $username; ?>" class="form-control" type="text" placeholder="username" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-xs-3">Password</label>
                                <div class="col-xs-8">
                                    <input name="pass" class="form-control" type="password" placeholder="Password" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-xs-3">Ulangi Password</label>
                                <div class="col-xs-8">
                                    <input name="pass2" class="form-control" type="password" placeholder="Ulangi Password" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-xs-3">Level</label>
                                <div class="col-xs-8">
                                    <select name="level" class="form-control" required>
                                        <option value="">-Pilih-</option>
                                        <?php if ($level == 'Admin') : ?>
                                            <option value="1" selected>Administrator</option>
                                            <option value="2">Operator</option>
                                        <?php else : ?>
                                            <option value="1">Administrator</option>
                                            <option value="2" selected>Operator</option>
                                        <?php endif; ?>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-xs-3">Photo</label>
                                <div class="col-xs-8">
                                    <input type="file" name="filefoto">
                                </div>
                            </div>

                        </div>

                        <div class="modal-footer">
                            <input type="hidden" name="kode" value="<?php echo $id; ?>">
                            <button class="btn btn-flat" data-dismiss="modal" aria-hidden="true">Tutup</button>
                            <button class="btn btn-primary btn-flat">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    <?php endforeach; ?>

    <?php
    $no = 0;
    foreach ($tourgate->result_array() as $a) :
        $no++;
        $id = $a['id'];
        $nama = $a['nama'];
        $no_hp = $a['no_hp'];
        $gambar = $a['gambar'];

    ?>
        <!-- ============ MODAL EDIT TOUR GATE =============== -->
        <div class="modal fade" id="ModalUpdate2<?php echo $id; ?>" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                        <h3 class="modal-title" id="myModalLabel">Update Tour Gate</h3>
                    </div>
                    <form class="form-horizontal" method="post" action="<?php echo base_url() . 'backend/pengguna/update_tourgate' ?>" enctype="multipart/form-data">
                        <div class="modal-body">

                            <div class="form-group">
                                <label class="control-label col-xs-3">Nama</label>
                                <div class="col-xs-8">
                                    <input name="nama" value="<?php echo $nama; ?>" class="form-control" type="text" placeholder="Nama" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-xs-3">NO HP</label>
                                <div class="col-xs-8">
                                    <input name="no_hp" value="<?php echo $no_hp; ?>" class="form-control" type="number" maxlength="12" placeholder="no_hp" required>
                                </div>
                            </div>


                            <div class="form-group">
                                <label class="control-label col-xs-3">Photo</label>
                                <div class="col-xs-8">
                                    <input type="file" name="filefoto">
                                </div>
                            </div>

                        </div>

                        <div class="modal-footer">
                            <input type="hidden" name="kode" value="<?php echo $id; ?>">
                            <button class="btn btn-flat" data-dismiss="modal" aria-hidden="true">Tutup</button>
                            <button class="btn btn-primary btn-flat">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    <?php endforeach; ?>

    <?php
    $no = 0;
    foreach ($data->result_array() as $a) :
        $no++;
        $id = $a['idadmin'];
        $nama = $a['nama'];
        $username = $a['username'];
        $password = $a['password'];
        $level = $a['level'];
        $photo = $a['photo'];
    ?>
        <!--Modal Hapus Post-->
        <div class="modal fade" id="ModalHapus<?php echo $id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
                        <h4 class="modal-title" id="myModalLabel">Hapus Pengguna</h4>
                    </div>
                    <form class="form-horizontal" action="<?php echo base_url() . 'backend/pengguna/hapus_user' ?>" method="post" enctype="multipart/form-data">
                        <div class="modal-body">
                            <input type="hidden" name="kode" value="<?php echo $id; ?>" />
                            <p>Apakah Anda yakin mau menghapus Pengguna <b><?php echo $nama; ?></b> ?</p>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary btn-flat" id="simpan">Hapus</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    <?php endforeach; ?>


    <!--Modal Reset Password-->
    <div class="modal fade" id="ModalResetPassword" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
                    <h4 class="modal-title" id="myModalLabel">Reset Password</h4>
                </div>

                <div class="modal-body">

                    <table>
                        <tr>
                            <th style="width:120px;">Username</th>
                            <th>:</th>
                            <th><?php echo $this->session->flashdata('uname'); ?></th>
                        </tr>
                        <tr>
                            <th style="width:120px;">Password Baru</th>
                            <th>:</th>
                            <th><?php echo $this->session->flashdata('upass'); ?></th>
                        </tr>
                    </table>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>


    <!-- jQuery 2.2.3 -->
    <script src="<?php echo base_url() . 'assets/plugins/jQuery/jquery-2.2.3.min.js' ?>"></script>
    <!-- Bootstrap 3.3.6 -->
    <script src="<?php echo base_url() . 'assets/bootstrap/js/bootstrap.min.js' ?>"></script>
    <!-- DataTables -->
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>

    <script src="<?php echo base_url() . 'assets/plugins/datatables/dataTables.bootstrap.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'assets/plugins/datatables/dataTables.rowReorder.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'assets/plugins/datatables/dataTables.responsive.min.js' ?>"></script>
    <!-- SlimScroll -->
    <script src="<?php echo base_url() . 'assets/plugins/slimScroll/jquery.slimscroll.min.js' ?>"></script>
    <!-- FastClick -->
    <script src="<?php echo base_url() . 'assets/plugins/fastclick/fastclick.js' ?>"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url() . 'assets/dist/js/app.min.js' ?>"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?php echo base_url() . 'assets/dist/js/demo.js' ?>"></script>
    <script src="<?php echo base_url() . 'assets/ckeditor/ckeditor.js' ?>"></script>
    <script type="text/javascript" src="<?php echo base_url() . 'assets/plugins/toast/jquery.toast.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'assets/plugins/datatables/dataTables.buttons.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'assets/plugins/datatables/jszip.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'assets/plugins/datatables/pdfmake.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'assets/plugins/datatables/vfs_fonts.js' ?>"></script>
    <script src="<?php echo base_url() . 'assets/plugins/datatables/buttons.html5.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'assets/plugins/datatables/buttons.html5.min.js' ?>"></script>

    <!-- page script -->


    <script>
        $(document).ready(function() {
            var table = $('#example,#aaa').DataTable({
                rowReorder: {
                    selector: 'td:nth-child(2)'
                },
                responsive: true,
                dom: 'Bfrtip',
                buttons: [
                    'copyHtml5',
                    'excelHtml5',
                    'csvHtml5',
                    'pdfHtml5'
                ]
            });



        });
    </script>


    <!-- page script -->




    <?php if ($this->session->flashdata('msg') == 'error') : ?>
        <script type="text/javascript">
            $.toast({
                heading: 'Error',
                text: "Password dan Ulangi Password yang Anda masukan tidak sama.",
                showHideTransition: 'slide',
                icon: 'error',
                hideAfter: false,
                position: 'bottom-right',
                bgColor: '#FF4859'
            });
        </script>
    <?php elseif ($this->session->flashdata('msg') == 'success') : ?>
        <script type="text/javascript">
            $.toast({
                heading: 'Success',
                text: "Pengguna Berhasil disimpan ke database.",
                showHideTransition: 'slide',
                icon: 'success',
                hideAfter: false,
                position: 'bottom-right',
                bgColor: '#7EC857'
            });
        </script>
    <?php elseif ($this->session->flashdata('msg') == 'warning') : ?>
        <script type="text/javascript">
            $.toast({
                heading: 'Warning',
                text: "Gambar yang Anda masukan terlalu besar.",
                showHideTransition: 'slide',
                icon: 'warning',
                hideAfter: false,
                position: 'bottom-right',
                bgColor: '#FFC017'
            });
        </script>
    <?php elseif ($this->session->flashdata('msg') == 'info') : ?>
        <script type="text/javascript">
            $.toast({
                heading: 'Info',
                text: "Pengguna berhasil di update",
                showHideTransition: 'slide',
                icon: 'info',
                hideAfter: false,
                position: 'bottom-right',
                bgColor: '#00C9E6'
            });
        </script>
    <?php elseif ($this->session->flashdata('msg') == 'success-hapus') : ?>
        <script type="text/javascript">
            $.toast({
                heading: 'Success',
                text: "Pengguna Berhasil dihapus.",
                showHideTransition: 'slide',
                icon: 'success',
                hideAfter: false,
                position: 'bottom-right',
                bgColor: '#7EC857'
            });
        </script>
    <?php elseif ($this->session->flashdata('msg') == 'show-modal') : ?>
        <script type="text/javascript">
            $('#ModalResetPassword').modal('show');
        </script>
    <?php else : ?>

    <?php endif; ?>
</body>

</html>