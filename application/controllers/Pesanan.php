<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Pesanan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        //Do your magic here
        $this->load->model('m_produk');
        $this->load->model('m_pesanan');
        $this->load->model('m_dashboard');
        if (!$this->session->userdata('id_penjual')) {
            redirect(base_url('Auth/'));
        }
    }

    public function index()
    {
        $id = $this->session->userdata('id_penjual');
        $data = array(
            'dp' => $this->m_dashboard->dataPenjual($id),
            'dataPesanan' => $this->m_pesanan->dataPesanan($id)
        );
        $this->load->view('v_pesanan/v_pesanan', $data);
    }

    public function selesaiKemas()
    {
        $id_transaksi = $this->input->post('id_transaksi');
        // die($id_tagihan);
        $this->m_pesanan->updateSelesaiKemas($id_transaksi);
        redirect('pesanan');
    }
}

/* End of file Konfirmasi_bayar.php */
