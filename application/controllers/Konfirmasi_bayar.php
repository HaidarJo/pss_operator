<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Konfirmasi_bayar extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        //Do your magic here
        $this->load->model('m_pembayaran');
    }


    public function index()
    {
        $data['onProses'] = $this->m_pembayaran->onProses();
        $data['daftar'] = $this->m_pembayaran->getDataPembayaran();
        $this->load->view('Konfirmasi_bayar/v_konfirmasi_bayar', $data);
    }
    public function statusSukses()
    {
        $id_tagihan = $this->input->post('id_tagihan');
        // die($id_tagihan);
        $this->m_pembayaran->updateStatusSukses($id_tagihan);
        redirect('konfirmasi_bayar');
    }
    public function statusGagal()
    {
        $id_tagihan = $this->input->post('id_tagihan');
        $this->m_pembayaran->updateStatusGagal($id_tagihan);
        redirect('konfirmasi_bayar');
    }
}

/* End of file Konfirmasi_bayar.php */
