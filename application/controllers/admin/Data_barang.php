<?php

class Data_barang extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        if ($this->session->userdata('role_id') != '1') {
            $this->session->set_flashdata('pesan', '
            <div class="alert  alert-danger fade show" role="alert">
            <strong>Access Denied!</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
          ');

            redirect('Auth/login');
        }
    }

    public function index()
    {

        $data['barang'] = $this->model_barang->tampil_data()->result();

        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/data_barang', $data);
        $this->load->view('templates_admin/footer');
    }

    public function tambah_aksi()
    {
        $nama_brg   = $this->input->POST('nama_brg');
        $keterangan = $this->input->POST('keterangan');
        $kategori   = $this->input->POST('kategori');
        $harga      = $this->input->POST('harga');
        $stok       = $this->input->POST('stok');
        $gambar     = $_FILES['gambar']['name'];
        if ($gambar = '') {
        } else {
            $config['upload_path'] = './uploads';
            $config['allowed_types'] = 'jpg|png|jpeg';

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('gambar')) {
                echo "Gambar gagal Diuploads";
            } else {
                $gambar = $this->upload->data('file_name');
            }
        }

        $data = array(
            'nama_brg'      => $nama_brg,
            'keterangan'    => $keterangan,
            'kategori'      => $kategori,
            'harga'         => $harga,
            'stok'          => $stok,
            'gambar'        => $gambar
        );

        $this->model_barang->tambah_barang($data, 'tb_barang');
        redirect('admin/Data_barang/index');
    }


    public function edit($id)
    {
        $where = array('id_brg' => $id);
        $data['barang'] = $this->model_barang->edit_barang($where, 'tb_barang')->result();

        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/edit_barang', $data);
        $this->load->view('templates_admin/footer');
    }


    public function update()
    {
        $id         = $this->input->POST('id_brg');
        $nama_brg   = $this->input->POST('nama_brg');
        $keterangan = $this->input->POST('keterangan');
        $kategori   = $this->input->POST('kategori');
        $harga      = $this->input->POST('harga');
        $stok       = $this->input->POST('stok');

        $data = array(
            'nama_brg'      => $nama_brg,
            'keterangan'    => $keterangan,
            'kategori'      => $kategori,
            'harga'         => $harga,
            'stok'          => $stok
        );

        $where = array(
            'id_brg' => $id
        );

        $this->model_barang->update_data($where, $data, 'tb_barang');

        redirect('admin/Data_barang/index');
    }


    public function hapus($id)
    {
        $where = array('id_brg' => $id);
        $this->model_barang->hapus_data($where, 'tb_barang');
        redirect('admin/Data_barang/index');
    }
}
