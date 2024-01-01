<?php


defined('BASEPATH') or exit('No direct script access allowed');

class m_auth extends CI_Model
{

    public function tambahdata()
    {

        $pass = $this->input->post('password');
        // konversi supaya password selalu huruf kecil
        $pass1 = strtolower($pass);
        $password = md5($pass1);

        $tambah = array(
            'name' => $this->input->post('name'),
            'email' => $this->input->post('email'),
            'no_hp' => $this->input->post('no_hp'),
            'password' => $password,
        );
        $result = $this->db->insert('tb_pembeli', $tambah);
        return $result;
    }
}

/* End of file user.php */
