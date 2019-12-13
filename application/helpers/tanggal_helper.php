<?php

/**
 * Helpher untuk mencetak tanggal dalam format bahasa indonesia
 *
 * @package CodeIgniter
 * @category Helpers
 * @author Ardianta Pargo (ardianta_pargo@yhaoo.co.id)
 * @link https://gist.github.com/ardianta/ba0934a0ee88315359d30095c7e442de
 * @version 1.0
 */
/**
 * Fungsi untuk merubah bulan bahasa inggris menjadi bahasa indonesia
 * @param int nomer bulan, Date('m')
 * @return string nama bulan dalam bahasa indonesia
 */
function tanggal($day)
{
    $day = explode("-", $day);
    switch ($day[1]) {
        case 1:
            $day[1] = "Januari";
            break;
        case 2:
            $day[1] = "Februari";
            break;
        case 3:
            $day[1] = "Maret";
            break;
        case 4:
            $day[1] = "April";
            break;
        case 5:
            $day[1] = "Mei";
            break;
        case 6:
            $day[1] = "Juni";
            break;
        case 7:
            $day[1] = "Juli";
            break;
        case 8:
            $day[1] = "Agustus";
            break;
        case 9:
            $day[1] = "September";
            break;
        case 10:
            $day[1] = "Oktober";
            break;
        case 11:
            $day[1] = "November";
            break;
        case 12:
            $day[1] = "Desember";
            break;
    }
    $day_indo = $day[2] . " " . $day[1] . " " . $day[0];
    return $day_indo;
}
