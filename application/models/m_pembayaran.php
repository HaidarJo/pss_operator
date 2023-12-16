<?php
defined('BASEPATH') or exit('No direct script access allowed');

class m_pembayaran extends CI_Model
{
    function getDataPembayaran()
    {
        $query = $this->db->query("
        SELECT * FROM tb_tagihan INNER JOIN tb_pembayaran ON tb_tagihan.id_tagihan = tb_pembayaran.id_tagihan 
        INNER JOIN tb_pembeli ON tb_tagihan.id_pembeli = tb_pembeli.id_pembeli;

        ");

        return $query->result_array();
    }
}

/* End of file m_pembayaran.php */
