<!DOCTYPE html>
<html lang="en">

<?php
error_reporting(0);
$b = $data->row_array();
//$c=$samp->row_array();
?>

<head>
    <meta charset="utf-8">
    <title>Example 2</title>

    <link rel="stylesheet" href="<?= base_url('assets'); ?>/plugins/invoice/style.css" media="all" />
    <link rel="stylesheet" href="<?= base_url('assets'); ?>/bootstrap/css/bootstrap.min.css">

</head>

<body>
    <header class="clearfix">
        <div id="logo">
            <img src=" <?php echo $_SERVER["DOCUMENT_ROOT"] . '/plugins/invoice/logo.png'; ?>">
        </div>
        <div id=" company">
            <h2 class="name">Sumbawa Tour Travel</h2>
            <div> 84454, Sumbawa<br>
                AZ 85004, ID</div>
            <div>(602) 519-0450</div>
            <div>
                <a href="mailto:company@example.com">sumawatour@gmail.com</<a>
            </div>
        </div>
        </div>
    </header>
    <main>
        <div id="details" class="clearfix">
            <div id="client">
                <div class="to">NO INVOICE : <?php echo $b['id_order'] ?></div>
                <h2 class="name"><?php echo $b['nama'] ?></h2>
                <div class="address"> ALAMAT :<?php echo $b['alamat']; ?>, ID</div>
                <div class="email"><a href="<?php echo $b['id'] ?>"><?php echo $b['id'] ?></a></div>
            </div>
            <div id="invoice">
                <div class="to">KODE BOOKING : <span style="color: #1E90FF; font-weight:bold;"><?php echo $b['kode_booking'] ?></span></div>
                <div class="date">Tanggal Invoice: <?php echo tanggal($b['tanggal']) ?></div>
                <div class="date">Batas Waktu: <?php echo tanggal($b['berangkat']); ?></div>
            </div>
        </div>
        <table border="0" cellspacing="0" cellpadding="0">
            <thead>
                <tr>
                    <th class="no">Paket Tour</th>
                    <th class="desc">Keberangkatan</th>
                    <th class="unit">Dewasa</th>
                    <th class="qty">Anak-Anak</th>
                    <th class="total">Total</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="no"><?php echo $b['nama_paket']; ?></td>
                    <td class="desc">
                        <?php echo tanggal($b['berangkat']); ?>
                    </td>
                    <td class="unit"><?php echo $b['adult'] . ' Orang'; ?></td>
                    <td class="qty"><?php echo $b['kids'] . ' Orang'; ?>
                    </td>
                    <td class="total"><?php echo $b['jml_berangkat'] .  ' Orang'; ?></td>
                </tr>

            </tbody>
            <tfoot>
                <tr>
                    <td colspan="2"></td>
                    <td colspan="2">Dewasa</td>

                    <td class="total"><?php echo 'Rp. ' . number_format($b['hrg_dewasa']); ?> X <?php echo $b['adult']; ?></td>

                </tr>
                <tr>
                    <td colspan="2"></td>
                    <td colspan="2">Anak-anak</td>
                    <td><?php echo 'Rp. ' . number_format($b['hrg_anak']) . ' X '; ?> <?php echo $b['kids']; ?></td>
                </tr>
                <tr>
                    <td colspan="2"></td>
                    <td colspan="2">GRAND TOTAL</td>
                    <td><?php echo 'Rp. ' . number_format($b['total']); ?></td>
                </tr>
            </tfoot>
        </table>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>

        <div id="thanks">Thank you!</div>


        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <div id="notices">
            <div>NOTICE:</div>
            <div class="notice">Kami telah membuat jadwal tour anda mohon untuk membaca nya.</div>
            <!-- <div class="to">Tour Gate Anda : <span style="color: #1E90FF; font-weight:bold;"><?php echo $b['kode_booking'] ?></span></div> -->
        </div>
        <br>
        <br>
        <br>
        <div class="container">
            <h1>TO DO LIST </h1>
            <ul class="list-group">
                <li class="list-group-item">
                    <h3 class="list-group-item-heading"><?php echo $b['deskripsi']; ?></h3>

                </li>

            </ul>
        </div>
    </main>
    <footer>
        Invoice was created on a computer and is valid without the signature and seal.
    </footer>
</body>

</html>