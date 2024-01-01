<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        //Do your magic here
        $this->load->model('m_dashboard');
        if (!$this->session->userdata('id_penjual')) {
            redirect(base_url('Auth/'));
        }
    }


    public function index()
    {
        $id = $this->session->userdata('id_penjual');
        $data = array(
            'dp' => $this->m_dashboard->dataPenjual($id)
        );

        $this->load->view('Dashboard/v_dashboard', $data);
    }
}

/* End of file Dashboard.php */
