<?php
defined('BASEPATH') or exit('No direct script access allowed');

class m_pembayaran extends CI_Model
{
    function getDataPembayaran()
    {
        $query = $this->db->query("
        SELECT * FROM tb_tagihan INNER JOIN tb_pembayaran ON tb_tagihan.id_tagihan = tb_pembayaran.id_tagihan 
        INNER JOIN tb_pembeli ON tb_tagihan.id_pembeli = tb_pembeli.id_pembeli
        order by status desc;

        ");

        return $query->result_array();
    }

    function onProses()
    {

        $query = $this->db->query("
        SELECT COUNT(status) AS status FROM tb_pembayaran WHERE status='Sedang Diproses';
        ");
        return $query->result_array();
    }

    function updateStatusSukses($id_tagihan)
    {

        $query = $this->db->query("
        UPDATE tb_pembayaran
        SET status = 'Pembayaran Sukses'
        WHERE id_tagihan = $id_tagihan;
        ");
    }

    function updateStatusGagal($id_tagihan)
    {

        $query = $this->db->query("
        UPDATE tb_pembayaran
        SET status = 'Pembayaran Gagal'
        WHERE id_tagihan = $id_tagihan;
        ");
    }
}

/* End of file m_pembayaran.php */
