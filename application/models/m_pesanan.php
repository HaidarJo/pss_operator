<?php
defined('BASEPATH') or exit('No direct script access allowed');

class m_pesanan extends CI_Model
{
    function dataPesanan($id)
    {
        $query = $this->db->query("select * from tb_transaksi inner join tb_produk on tb_transaksi.id_produk = tb_produk.id_produk inner join tb_penjual on tb_produk.id_penjual = tb_penjual.id_penjual inner join tb_pembeli on tb_transaksi.id_pembeli = tb_pembeli.id_pembeli where tb_transaksi.id_penjual ='$id'
        ");

        return $query->result_array();
    }

    function updateSelesaiKemas($id_transaksi)
    {
        $query = $this->db->query("
        UPDATE tb_transaksi
        SET status = 'selesai'
        WHERE id_transaksi = $id_transaksi;
        ");
    }
}

/* End of file m_pembayaran.php */
