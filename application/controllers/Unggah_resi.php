<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Unggah_resi extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        //Do your magic here
        $this->load->model('m_resi');
    }


    public function index()
    {
        $data['daftar'] = $this->m_resi->getDataPembayaran();
        $this->load->view('Unggah_resi/v_unggah_resi', $data);
    }

    public function TambahResi()
    {
        $data = array(
            'tgl_resi' => $this->input->post('tgl_resi'),
            'nomor_resi' => $this->input->post('nomor_resi'),
            'jasa_pengiriman' => $this->input->post('jasa'),
            'id_tagihan' => $this->input->post('id_tagihan'),

        );
        // die($id_tagihan);
        $this->m_resi->tambahResi($data);
        redirect('unggah_resi');
    }
}

/* End of file Konfirmasi_bayar.php */
