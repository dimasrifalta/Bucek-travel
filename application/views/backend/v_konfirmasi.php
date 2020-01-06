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
    <title>Sumbawa-Travel | Konfirmasi Pembayaran</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="shorcut icon" type="text/css" href="<?php echo base_url() . 'assets/images/favicon.png' ?>">
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/bootstrap/css/bootstrap.min.css' ?>">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/font-awesome/css/font-awesome.min.css' ?>">
    <!-- DataTables -->
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/plugins/datatables/dataTables.bootstrap.css' ?>">
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/plugins/daterangepicker/daterangepicker.css' ?>">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/dist/css/AdminLTE.min.css' ?>">
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/plugins/daterangepicker/daterangepicker.css' ?>">
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/plugins/timepicker/bootstrap-timepicker.min.css' ?>">
    <!-- bootstrap datepicker -->
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/plugins/datepicker/datepicker3.css' ?>">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/dist/css/skins/_all-skins.min.css' ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/plugins/toast/jquery.toast.min.css' ?>" />

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
                    <li>
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
                            <li><a href="<?php echo base_url() . 'backend/paket_tour' ?>"><i class="fa fa-gift"></i>
                                    Paket Tour</a></li>
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
                            <li><a href="<?php echo base_url() . 'backend/album' ?>"><i class="fa fa-clone"></i>
                                    Album</a></li>
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

                    <li class="active">
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

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">



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
            <!-- Main content -->
            <section class="content">

                <div class="row">
                    <div class="col-xs-12">
                        <div class="tab" role="tabpanel">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active"><a href="#Section1" aria-controls="home" role="tab" data-toggle="tab"><i class="fa fa-user"></i>Konfirmasi Pembayaran</a></li>
                                <li role="presentation"><a href="#Section2" aria-controls="profile" role="tab" data-toggle="tab"><i class="fa fa-envelope"></i>Konfirmasi Pembatalan Tiket 2</a></li>

                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content tabs">
                                <div role="tabpanel" class="tab-pane fade in active" id="Section1">
                                    <h3>Konfirmasi Pembayaran</h3>
                                    <!-- /.box-header -->
                                    <div class="box-body">
                                        <table id="example1" class="table table-striped" style="font-size:12px;">
                                            <thead>
                                                <tr>
                                                    <th style="text-align:center;width: 120px;vertical-align:middle;">No
                                                        Invoice</th>
                                                    <th style="text-align:center;width: 160px;vertical-align:middle;">Tgl
                                                        Transfer</th>
                                                    <th style="text-align:center;width: 140px;vertical-align:middle;">Total
                                                        Bayar</th>
                                                    <th style="text-align:center;width: 140px;vertical-align:middle;">Jumlah
                                                        Transfer</th>
                                                    <th style="text-align:center;width: 200px;vertical-align:middle;">
                                                        Pengirim</th>
                                                    <th style="text-align:center;width:100px;">Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $no = 0;
                                                foreach ($data->result_array() as $a) :
                                                    $no++;
                                                    $id = $a['id_bayar'];
                                                    $tgl_bayar = $a['tgl_bayar'];
                                                    $metode = $a['metode'];
                                                    $bank = $a['bank'];
                                                    $invoice = $a['order_id'];
                                                    $jml = $a['jumlah'];
                                                    $bukti = $a['bukti_transfer'];
                                                    $status = $a['status'];
                                                    $pengirim = $a['pengirim'];
                                                    $total = $a['total'];

                                                ?>
                                                    <tr>
                                                        <td style="text-align: center;vertical-align:middle;">
                                                            <?php echo $invoice; ?></td>
                                                        <td style="text-align: center;vertical-align:middle;">
                                                            <?php echo $tgl_bayar; ?></td>
                                                        <td style="text-align: right;vertical-align:middle;">
                                                            <b><?php echo 'Rp. ' . number_format($total); ?></b></td>
                                                        <td style="text-align: right;vertical-align:middle;">
                                                            <b><?php echo 'Rp. ' . number_format($jml); ?></b></td>
                                                        <td style="text-align: center;vertical-align:middle;">
                                                            <?php echo $pengirim; ?></td>
                                                        <td style="text-align: center;vertical-align: middle;">
                                                            <a class="btn" href="#ModalCheckBukti<?php echo $id ?>" data-toggle="modal" title="Lihat Bukti Transfer"><span class="fa fa-eye"></span> </a>
                                                            <a class="btn" href="#ModalHapus<?php echo $id; ?>" data-toggle="modal" title="Hapus"><span class="fa fa-trash"></span> </a>
                                                        </td>
                                                    </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.box-body -->

                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="Section2">
                                    <h3>Data Pembatalan tiket</h3>
                                    <!-- /.box-header -->
                                    <div class="box-body">
                                        <table id="example2" class="table table-striped" style="font-size:12px;">
                                            <thead>
                                                <tr>
                                                    <th style="text-align:center;width: 120px;vertical-align:middle;">No
                                                        Invoice</th>
                                                    <th style="text-align:center;width: 120px;vertical-align:middle;">Nama Paket</th>
                                                    <th style="text-align:center;width: 120px;vertical-align:middle;">Tanggal Berangkat</th>
                                                    <th style="text-align:center;width: 160px;vertical-align:middle;">NO Telp</th>
                                                    <th style="text-align:center;width: 140px;vertical-align:middle;">NO Rekening</th>

                                                    <th style="text-align:center;width: 140px;vertical-align:middle;">Atas Nama</th>

                                                    <th style="text-align:center;width: 200px;vertical-align:middle;">
                                                        Pengirim</th>

                                                    <th style="text-align:center;width: 200px;vertical-align:middle;">
                                                        Alasan Pembatalan</th>
                                                    <th style="text-align:center;width:100px;">Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $no = 0;
                                                foreach ($pembatalan->result_array() as $a) :
                                                    $no++;
                                                    $id = $a['id_order'];
                                                    $nama_paket = $a['nama_paket'];
                                                    $berangkat = $a['berangkat'];
                                                    $notelp = $a['notelp'];
                                                    $no_rek = $a['no_rek'];
                                                    $nama_rekening = $a['nama_rekening'];
                                                    $pengirim = $this->session->userdata('email');
                                                    $alasan_pembatalan = $a['alasan_pembatalan'];
                                                    $status = $a['status'];


                                                ?>
                                                    <tr>
                                                        <td style="text-align: center;vertical-align:middle;">
                                                            <?php echo $id; ?></td>
                                                        <td style="text-align: center;vertical-align:middle;">
                                                            <?php echo $nama_paket; ?></td>
                                                        <td style="text-align: center;vertical-align:middle;">
                                                            <?php echo $berangkat; ?></td>
                                                        <td style="text-align: center;vertical-align:middle;">
                                                            <?php echo $nama_rekening; ?></td>

                                                        <td style="text-align: center;vertical-align:middle;">
                                                            <?php echo $no_rek; ?></td>

                                                        <td style="text-align: center;vertical-align:middle;">
                                                            <?php echo $nama_rekening; ?></td>
                                                        <td style="text-align: center;vertical-align:middle;">
                                                            <?php echo $pengirim; ?></td>
                                                        <td style="text-align: center;vertical-align:middle;">
                                                            <?php echo $alasan_pembatalan; ?></td>
                                                        <td style="text-align: center;vertical-align: middle;">
                                                            <?php
                                                            if ($status == 'BATAL') : ?>
                                                                <label class="label label-success">BATAL</label>

                                                            <?php else : ?>

                                                                <a class="btn" href="<?php echo base_url() . 'backend/konfirmasi/set_pembatalan/' . $a['id_order']; ?>" title="Konfirmasi Pembatalan"><span class="fa fa-check"></span> </a>
                                                                <a class="btn" href="#ModalHapus<?php echo $id; ?>" data-toggle="modal" title="Hapus"><span class="fa fa-trash"></span> </a>
                                                        </td>
                                                    <?php endif ?>

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


            </section>
            <!-- /.content -->
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


    <!-- ============ MODAL EDIT ORDER =============== -->
    <?php
    foreach ($data->result_array() as $a) :
        $no++;
        $id = $a['id_bayar'];
        $idpaket = $a['idpaket'];

        $tgl_bayar = $a['tgl_bayar'];
        $metode = $a['metode'];
        $bank = $a['bank'];
        $invoice = $a['order_id'];
        $jml = $a['jumlah'];
        $bukti = $a['bukti_transfer'];
        $status = $a['status'];
        $pengirim = $a['pengirim'];
        $total = $a['total'];
    ?>
        <div id="ModalCheckBukti<?php echo $id ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                        <h3 class="modal-title" id="myModalLabel">Bukti Transfer</h3>
                    </div>
                    <form class="form-horizontal" method="post" action="<?php echo base_url() . 'backend/konfirmasi/pembayaran_selesai' ?>">
                        <div class="modal-body">
                            <input name="kode" type="hidden" value="<?php echo $invoice; ?>">
                            <input name="idpaket" type="hidden" value="<?php echo $idpaket; ?>">
                            <img height="500" src="<?php echo base_url() . 'assets/bukti_transfer/' . $bukti; ?>">

                        </div>
                        <div class="modal-footer">
                            <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                            <button type="submit" class="btn btn-primary">Ok</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    <?php endforeach; ?>


    <?php foreach ($data->result_array() as $a) :
        $id = $a['id_bayar'];
        $tgl_bayar = $a['tgl_bayar'];
        $metode = $a['metode'];
        $bank = $a['bank'];
        $invoice = $a['order_id'];
        $jml = $a['jumlah'];
        $bukti = $a['bukti_transfer'];
        $status = $a['status'];
        $pengirim = $a['pengirim'];
        $total = $a['total'];
    ?>
        <!--Modal Hapus Order-->
        <div class="modal fade" id="ModalHapus<?php echo $id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
                        <h4 class="modal-title" id="myModalLabel">Hapus Konfirmasi</h4>
                    </div>
                    <form class="form-horizontal" action="<?php echo base_url() . 'backend/konfirmasi/hapus_konfirmasi' ?>" method="post" enctype="multipart/form-data">
                        <div class="modal-body">
                            <input type="hidden" name="kode" value="<?php echo $id; ?>" />
                            <p>Apakah Anda yakin mau menghapus konfirmasi dari <b><?php echo $pengirim; ?></b>?</p>

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




    <!-- jQuery 2.2.3 -->
    <script src="<?php echo base_url() . 'assets/plugins/jQuery/jquery-2.2.3.min.js' ?>"></script>
    <!-- Bootstrap 3.3.6 -->
    <script src="<?php echo base_url() . 'assets/bootstrap/js/bootstrap.min.js' ?>"></script>
    <!-- DataTables -->
    <script src="<?php echo base_url() . 'assets/plugins/datatables/jquery.dataTables.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'assets/plugins/datatables/dataTables.bootstrap.min.js' ?>"></script>
    <!-- SlimScroll -->
    <script src="<?php echo base_url() . 'assets/plugins/slimScroll/jquery.slimscroll.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'assets/plugins/datepicker/bootstrap-datepicker.js' ?>"></script>
    <script src="<?php echo base_url() . 'assets/plugins/timepicker/bootstrap-timepicker.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'assets/plugins/daterangepicker/daterangepicker.js' ?>"></script>
    <!-- FastClick -->
    <script src="<?php echo base_url() . 'assets/plugins/fastclick/fastclick.js' ?>"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url() . 'assets/dist/js/app.min.js' ?>"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?php echo base_url() . 'assets/dist/js/demo.js' ?>"></script>
    <script type="text/javascript" src="<?php echo base_url() . 'assets/plugins/toast/jquery.toast.min.js' ?>"></script>
    <!-- page script -->
    <script>
        $(function() {
            $("#example1").DataTable();
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false
            });

            $('#datepicker').datepicker({
                autoclose: true,
                format: 'yyyy-mm-dd'
            });
            $('#datepicker2').datepicker({
                autoclose: true,
                format: 'yyyy-mm-dd'
            });
            $('.datepicker3').datepicker({
                autoclose: true,
                format: 'yyyy-mm-dd'
            });
            $('.datepicker4').datepicker({
                autoclose: true,
                format: 'yyyy-mm-dd'
            });
            $(".timepicker").timepicker({
                showInputs: true
            });

        });
    </script>

    <?php if ($this->session->flashdata('msg') == 'info') : ?>
        <script type="text/javascript">
            $.toast({
                heading: 'Info',
                text: "Order berhasil di update",
                showHideTransition: 'slide',
                icon: 'info',
                hideAfter: false,
                position: 'bottom-right',
                bgColor: '#00C9E6'
            });
        </script>
    <?php elseif ($this->session->flashdata('msg') == 'success') : ?>
        <script type="text/javascript">
            $.toast({
                heading: 'Success',
                text: "Pembatalan tiket selesai",
                showHideTransition: 'slide',
                icon: 'success',
                hideAfter: false,
                position: 'bottom-right',
                bgColor: '#7EC857'
            });
        </script>
    <?php elseif ($this->session->flashdata('msg') == 'success-hapus') : ?>
        <script type="text/javascript">
            $.toast({
                heading: 'Success',
                text: "Order Berhasil dihapus.",
                showHideTransition: 'slide',
                icon: 'success',
                hideAfter: false,
                position: 'bottom-right',
                bgColor: '#7EC857'
            });
        </script>
    <?php else : ?>

    <?php endif; ?>
</body>

</html>