<?php

ob_start();
?>
<page>
    <html>
    <!-- Bagian halaman HTML yang akan konvert -->

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <title>LAPORAN PENJUALAN TIKET BOOKING PAKET TOUR</title>
        <link rel="stylesheet" type="text/css" href="<?= base_url('assets/vendors'); ?>css/laporan.css" />
    </head>

    <body>

        <div id="title">
            SUMBAWA ISLAND TOUR
        </div>
        <div id="title">
            LAPORAN PENJUALAN TIKET BOOKING PAKET TOUR

        </div>

        <div id="title-tanggal">
            <br>
            Tanggal <?php
                    $hari_ini = date("Y-m-d");
                    echo tanggal($hari_ini); ?>
        </div>

        <div id="title-tanggal"></div>


        <hr>

        <br>

        <div id="isi">
            <table width="100%" border="0.3" cellpadding="0" cellspacing="0">
                <thead style="background:#e8ecee">
                    <tr class="tr-title">
                        <th height="20" align="center" valign="middle">NO.</th>
                        <th height="20" align="center" valign="middle">nama_paket</th>
                        <th height="20" align="center" valign="middle">Total Harga</th>
                        <th height="20" align="center" valign="middle">Jumlah Orang</th>
                        <th height="20" align="center" valign="middle">Email</th>
                        <th height="20" align="center" valign="middle">Tanggal Booking </th>


                    </tr>
                </thead>
                <tbody>
                    <?php
                    if (!empty($keluar)) {
                        $no = 1;
                        foreach ($keluar as $data) {

                            $tanggal1 = tanggal($data['tanggal']);
                            $hasil_rupiah = "Rp." . number_format($data['total']);
                            // menampilkan isi tabel dari database ke tabel di aplikasi
                            echo "  <tr>
                    <td width='40' height='13' align='center' valign='middle'>$no</td>
                    <td width='150' height='13' align='center' valign='middle'>$data[nama_paket]</td>
                    <td width='90' height='13' align='left' valign='middle'>$hasil_rupiah</td>
                    <td width='80' height='13' align='left' valign='middle'>$data[jml_berangkat]</td>
                    <td width='150' height='13' align='left' valign='middle'>$data[email]</td>
                    <td width='140' height='13' align='left' valign='middle'>$tanggal1</td>
                    
                    
                    </tr>";
                            $no++;
                        }
                    }
                    ?>


                </tbody>
            </table>
            <br>
            <br>
            <br>

            <div id="footer-tanggal">
                Bandung, <?php echo "$hari_ini"; ?>
            </div>
            <div id="footer-jabatan">
                Pimpinan
            </div>

            <div id="footer-nama">
                Dimas rifalta Phd
            </div>
        </div>

    </body>

    </html><!-- Akhir halaman HTML yang akan di konvert -->
</page>

<?php
$filename = "LAPORAN PENJUALAN TIKET BOOKING PAKET TOUR.pdf"; //ubah untuk menentukan nama file pdf yang dihasilkan nantinya
//==========================================================================================================
$content = ob_get_clean();
$content = '<page style="font-family: freeserif">' . ($content) . '</page>';
// panggil library html2pdf
require_once '././assets/plugins/html2pdf_v4.03/html2pdf.class.php';
try {
    $html2pdf = new HTML2PDF('P', 'F4', 'en', false, 'ISO-8859-15', array(10, 10, 10, 10));
    $html2pdf->pdf->SetDisplayMode('fullpage');

    $html2pdf->setDefaultFont('Arial');
    $html2pdf->writeHTML($content, isset($_GET['vuehtml']));
    $html2pdf->Output($filename);

    header("Content-type:application/pdf");
} catch (HTML2PDF_exception $e) {
    echo $e;
}

?>