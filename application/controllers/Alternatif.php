<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Alternatif extends CI_Controller
{
    // public function __construct()
    // {
    //     parent::__construct();
    //     is_logged_in();
    // }

    public function __construct()
    {
        parent::__construct();
        // $this->load->model("product_model");
        // $this->load->library('form_validation');
        $this->load->model("user_model");
        if ($this->user_model->isNotLogin()) redirect(site_url('auth'));
    }

    public function index()
    {
        $data['title'] = 'Alternatif';
        //$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        // $this->load->view('admin/admin_dashboard', $data);

        $this->load->view('templates/header.php', $data);
        $this->load->view('templates/sidebar.php');
        $this->load->view('templates/topbar.php');
        $this->load->view('admin/alternatif.php');
        $this->load->view('templates/footer.php');
    }

    public function tambahAlternatif()
    {
        $data['title'] = 'Tambah Alternatif';

        $this->load->view('templates/header.php', $data);
        $this->load->view('templates/sidebar.php');
        $this->load->view('templates/topbar.php');
        $this->load->view('admin/alternatif_tambah.php');
        $this->load->view('templates/footer.php');
    }

    public function ubahAlternatif()
    {
        $data['title'] = 'Ubah Alternatif';

        $this->load->view('templates/header.php', $data);
        $this->load->view('templates/sidebar.php');
        $this->load->view('templates/topbar.php');
        $this->load->view('admin/alternatif_ubah.php');
        $this->load->view('templates/footer.php');
    }

    public function hapusAlternatif()
    {
        $data['title'] = 'Hapus Alternatif';

        $this->load->view('templates/header.php', $data);
        $this->load->view('templates/sidebar.php');
        $this->load->view('templates/topbar.php');
        $this->load->view('admin/alternatif_hapus.php');
        $this->load->view('templates/footer.php');
    }
}
