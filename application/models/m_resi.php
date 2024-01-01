<?php
defined('BASEPATH') or exit('No direct script access allowed');

class m_resi extends CI_Model
{
    function getDataPembayaran()
    {
        $query = $this->db->query("
        SELECT *, tb_tagihan.id_tagihan as id FROM tb_tagihan INNER JOIN tb_pembayaran ON tb_tagihan.id_tagihan = tb_pembayaran.id_tagihan 
        INNER JOIN tb_pembeli ON tb_tagihan.id_pembeli = tb_pembeli.id_pembeli LEFT JOIN tb_resi on tb_tagihan.id_tagihan = tb_resi.id_tagihan
        where status = 'pembayaran sukses'
        group by id
        order by status desc;

        ");

        return $query->result_array();
    }
    function tambahResi($data)
    {
        $this->db->insert('tb_resi', $data);
    }
}

/* End of file m_pembayaran.php */
