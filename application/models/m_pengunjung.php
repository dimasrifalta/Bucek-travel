<?php
class M_pengunjung extends CI_Controller
{

    function set_pengunjung($user_ip)
    {
        $hsl = $this->db->query("INSERT INTO tbl_pengunjung (pengunjung_ip) VALUES ('$user_ip')");
        return $hsl;
    }

    function statistik_pengujung()
    {
        $query = $this->db->query("SELECT DATE_FORMAT(pengunjung_tanggal,'%d') AS tgl,COUNT(pengunjung_ip) AS jumlah FROM tbl_pengunjung WHERE MONTH(pengunjung_tanggal)=MONTH(CURDATE()) GROUP BY DATE(pengunjung_tanggal)");

        if ($query->num_rows() > 0) {
            foreach ($query->result() as $data) {
                $hasil[] = $data;
            }
            return $hasil;
        }
    }


    function statistik_penjualan()
    {
        $query = $this->db->query("SELECT DATE_FORMAT(date_created,'%d') AS tgl,COUNT(id_order) AS jumlah FROM transaksi WHERE MONTH(date_created)=MONTH(CURDATE()) GROUP BY DATE(date_created)");

        if ($query->num_rows() > 0) {
            foreach ($query->result() as $data) {
                $hasil[] = $data;
            }
            return $hasil;
        }
    }

    function simpan_user_agent($user_ip, $agent)
    {
        $hsl = $this->db->query("INSERT INTO tbl_pengunjung (pengunjung_ip,pengunjung_perangkat) VALUES('$user_ip','$agent')");
        return $hsl;
    }

    function  cek_ip($user_ip)
    {
        $hsl = $this->db->query("SELECT * FROM tbl_pengunjung WHERE pengunjung_ip='$user_ip' AND DATE(pengunjung_tanggal)=CURDATE()");
        return $hsl;
    }

    function  send_email()
    {
        $hsl = $this->db->query("SELECT * FROM user");
        return $hsl;
    }

    function paket_populer()
    {
        $hasil = $this->db->query("SELECT * FROM paket ORDER BY views DESC limit 3");
        return $hasil;
    }

    function user_subscribe($name, $email, $is_active, $date_created)
    {
        $hsl = $this->db->query("INSERT INTO user(name,email,is_active,date_created) VALUES ('$name','$email','$is_active','$date_created')");
        return $hsl;
    }
}
