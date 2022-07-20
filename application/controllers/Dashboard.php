<?php

class Dashboard extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        if ($this->session->userdata('role_id') != '2') {
            $this->session->set_flashdata('pesan', '
            <div class="alert  alert-danger fade show" role="alert">
            <strong>Access Denied!</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
          ');

            redirect('auth/login');
        }
    }


    public function tambah_ke_keranjang($id)
    {
        $barang = $this->model_barang->find($id);
        $data = array(
            'id'      => $barang->id_brg,
            'qty'     => 1,
            'price'   => $barang->harga,
            'name'    => $barang->nama_brg,
        );

        $this->cart->insert($data);

        redirect('welcome');
    }

    public function detail_keranjang()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('keranjang');
        $this->load->view('templates/footer');
    }

    public function delete($rowid)
    {
        $this->cart->remove($rowid);
        redirect('dashboard/detail_keranjang');
    }

    public function pembayaran()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('pembayaran');
        $this->load->view('templates/footer');
    }

    public function proses_pesanan()
    {

        $is_processed = $this->model_invoice->index();
        if ($is_processed) {
            $this->load->view('templates/header');
            $this->load->view('templates/navbar');
            $this->load->view('proses_pesanan');
            $this->load->view('templates/footer');
        } else {
            echo "Maaf pesanan Anda Gagal Diproses";
        }
    }

    public function hapus()
    {
        $this->cart->destroy();
        redirect('welcome');
    }

    public function detail($id_brg)
    {

        $data['barang'] = $this->model_barang->detail_brg($id_brg);

        $this->load->view('templates/headerSingle');
        $this->load->view('templates/navbarSingle');
        $this->load->view('detail_barang', $data);
        $this->load->view('templates/footerSingle');
    }
}
