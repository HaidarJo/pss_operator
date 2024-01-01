<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Produk extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        //Do your magic here
        $this->load->model('m_produk');
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
            'dataProduk' => $this->m_produk->dataProduk($id)
        );
        $this->load->view('v_produk/v_produk', $data);
    }

    public function tambahProduk()
    {
        $id = $this->session->userdata('id_penjual');
        $data = array(
            'dp' => $this->m_dashboard->dataPenjual($id),
        );
        $this->load->view('v_produk/v_tambah_produk', $data);
    }
    public function simpanProduk()
    {
        $data = array(
            'nama_produk' => $this->input->post('nama_produk'),
            'deskripsi_produk' => $this->input->post('deskripsi'),
            'foto_produk' => $_FILES['foto_produk']['name'],
            'harga' => $this->input->post('harga'),
            'stok' => $this->input->post('stok'),
            'id_penjual' => $this->session->userdata('id_penjual'),
        );

        $config['upload_path'] = './assets/produk/';
        $config['allowed_types'] = 'gif|png|jpg|jpeg';
        $this->load->library('upload', $config);
        if ($this->upload->do_upload('foto_produk')) {
            $upload_data = $this->upload->data();
            $data['foto_produk'] = $upload_data['file_name'];
        }

        $this->m_produk->tambahProduk($data);


        redirect('produk');
    }

    public function update()
    {
        $id = $this->input->post('id_produk');
        $data = array(
            'dp' => $this->m_dashboard->dataPenjual($id),
            'dataProduk' => $this->m_produk->dataProdukONid($id)
        );

        $this->load->view('v_produk/v_update_produk', $data);
    }

    public function updateAksi()
    {
        // $data = array(
        //     'nama_produk' => $this->input->post('nama_produk'),
        //     'deskripsi_produk' => $this->input->post('deskripsi'),
        //     'foto_produk' => $_FILES['foto_produk']['name'],
        //     'harga' => $this->input->post('harga'),
        //     'stok' => $this->input->post('stok'),
        //     'id_penjual' => $this->session->userdata('id_penjual'),
        // );


        // $config['upload_path'] = './assets/produk/';
        // $config['allowed_types'] = 'gif|png|jpg|jpeg';
        // $this->load->library('upload', $config);
        // if ($this->upload->do_upload('foto_produk')) {
        //     $upload_data = $this->upload->data();
        //     $data['foto_produk'] = $upload_data['file_name'];
        // }

        // if (empty($data['foto_produk'])) {
        //     $data['foto_produk'] = $foto;
        // } else {
        //     $data['foto_produk'] = $_FILES['foto_produk']['name'];
        // }

        $nama     = $this->input->post('nama_produk');
        $desc = $this->input->post('deskripsi');
        $harga = $this->input->post('harga');
        $stok = $this->input->post('stok');
        $foto = $_FILES['foto_produk']['name'];


        $config['upload_path'] = './assets/produk';
        $config['allowed_types'] = 'jpg|jpeg|png|JPEG|PNG';
        $config['max_size'] = '2048';

        $this->load->library('upload', $config);

        if (!empty($foto)) {
            if (!$this->upload->do_upload('foto_produk')) {
                echo "Foto gagal diunggah!";
            } else {
                $foto = $this->upload->data('file_name');
                $this->db->set('foto_produk', $foto);
            }
        }


        $data = array(

            'nama_produk' => $nama,
            'deskripsi_produk' => $desc,
            'harga' => $harga,
            'stok' => $stok,


        );
        if (!empty($foto)) {
            $data['foto_produk'] = $foto;
        }




        $id = $this->input->post('id_produk');;
        $this->m_produk->update($id, $data);


        redirect('produk');
    }

    public function hapus()
    {
        $id = $this->input->post('id_produk');
        $this->m_produk->hapus($id);

        redirect('produk');
    }
}

/* End of file Konfirmasi_bayar.php */
