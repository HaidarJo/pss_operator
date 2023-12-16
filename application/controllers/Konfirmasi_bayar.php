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
        $data['daftar'] = $this->m_pembayaran->getDataPembayaran();
        $this->load->view('Konfirmasi_bayar/v_konfirmasi_bayar', $data);
    }
}

/* End of file Konfirmasi_bayar.php */
