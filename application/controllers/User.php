<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
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
        $data['title'] = 'Data Pengguna';
        //$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header.php', $data);
        $this->load->view('templates/sidebar.php');
        $this->load->view('templates/topbar.php');
        $this->load->view('admin/user.php', $data);
        $this->load->view('templates/footer.php');
    }

    public function tambahUser()
    {
        $data['title'] = 'Tambah Pengguna';

        $this->load->view('templates/header.php', $data);
        $this->load->view('templates/sidebar.php');
        $this->load->view('templates/topbar.php');
        $this->load->view('admin/user_tambah.php', $data);
        $this->load->view('templates/footer.php');
    }

    public function simpanUser()
    {
        $data['title'] = 'Tambah Pengguna';

        $this->load->view('templates/header.php', $data);
        $this->load->view('templates/sidebar.php');
        $this->load->view('templates/topbar.php');
        $this->load->view('admin/user.php', $data);
        $this->load->view('templates/footer.php');
    }

    public function detailUser()
    {
        $data['title'] = 'Detail Pengguna';

        $this->load->view('templates/header.php', $data);
        $this->load->view('templates/sidebar.php');
        $this->load->view('templates/topbar.php');
        $this->load->view('admin/user_detail.php', $data);
        $this->load->view('templates/footer.php');
    }

    public function ubahUser()
    {
        $data['title'] = 'Ubah Pengguna';

        $this->load->view('templates/header.php', $data);
        $this->load->view('templates/sidebar.php');
        $this->load->view('templates/topbar.php');
        $this->load->view('admin/user_ubah.php', $data);
        $this->load->view('templates/footer.php');
    }

    public function hapusUser()
    {
        $data['title'] = 'Hapus Pengguna';

        $this->load->view('templates/header.php', $data);
        $this->load->view('templates/sidebar.php');
        $this->load->view('templates/topbar.php');
        $this->load->view('admin/user_hapus.php', $data);
        $this->load->view('templates/footer.php');
    }
}
