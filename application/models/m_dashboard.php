<?php
defined('BASEPATH') or exit('No direct script access allowed');

class m_dashboard extends CI_Model
{
    function dataPenjual($id)
    {
        $query = $this->db->query("select * from tb_penjual where id_penjual = $id ");

        return $query->result_array();
    }
}

/* End of file m_pembayaran.php */
