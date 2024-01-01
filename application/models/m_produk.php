<?php
defined('BASEPATH') or exit('No direct script access allowed');

class m_produk extends CI_Model
{
    function dataProduk($id)
    {
        $query = $this->db->query("select id_produk, nama_produk, deskripsi_produk, foto_produk, stok, id_penjual, CONCAT(FORMAT(harga, 0), '') AS harga from tb_produk where id_penjual = '$id' ");

        return $query->result_array();
    }

    function dataProdukONid($id)
    {
        $this->db->where('id_produk', $id);
        $result = $this->db->get('tb_produk')->result_array();
        return $result[0];

        // $query = $this->db->query("select id_produk, nama_produk, deskripsi_produk, foto_produk, stok, id_penjual, CONCAT(FORMAT(harga, 0), '') AS harga from tb_produk where id_produk = '$id' ");

        // return $query->result_array();
    }


    public function tambahProduk($data)
    {
        $this->db->insert('tb_produk', $data);
    }
    public function update($id, $data)
    {
        $this->db->where('id_produk', $id);
        $this->db->update('tb_produk', $data);

        // Return jumlah baris yang terpengaruh oleh operasi update
        return $this->db->affected_rows();
    }


    function hapus($id)
    {
        $this->db->where('id_produk', $id);
        $result = $this->db->delete('tb_produk');
        return $result;
    }
}

/* End of file m_pembayaran.php */
