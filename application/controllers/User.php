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
        $this->load->library('form_validation');
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
        $this->form_validation->set_rules('email', 'email', 'required|valid_email|is_unique[users.email]', [
            'is_unique' => 'Email tersebut sudah ada.', 'valid_email' => 'Masukkan email yang valid'
        ]);
        $this->form_validation->set_rules('nama_user', 'namauser', 'trim|required|min_length[3]');
        $this->form_validation->set_rules('username', 'username', 'trim|required|min_length[3]|is_unique[users.username]', [
            'is_unique' => 'Username tersebut sudah ada.', 'min_length' => 'Username terlalu pendek!'
        ]);
        $this->form_validation->set_rules('password', 'password', 'trim|required|min_length[5]', [
            'min_length' => 'Password terlalu pendek'
        ]);
        $this->form_validation->set_rules('instansi', 'instansi', 'trim|required');
        // $this->form_validation->set_rules('password', 'password', 'trim|required|min_length[5]', [
        //     'min_length' => 'Password terlalu pendek'
        // ]);
        // kurang Jenis kelamin dan hak akses
        if ($this->form_validation->run() == false) {
            $data['title'] = 'Tambah Pengguna';
            $this->load->view('templates/header.php', $data);
            $this->load->view('templates/sidebar.php');
            $this->load->view('templates/topbar.php');
            $this->load->view('admin/user_tambah.php', $data);
            $this->load->view('templates/footer.php');
        } else {
            $email = $this->input->post('email', true);
            $data = [
                'email' => htmlspecialchars($email),
                'nama_user' => htmlspecialchars($this->input->post('nama_user', true)),
                'username' => htmlspecialchars($this->input->post('username', true)),
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'instansi' => htmlspecialchars($this->input->post('instansi', true)),
                'hak_akses' => 1,
                'jenis_kelamin' => 1,
                'last_login' => time()
            ];
        }
    }

    // public function tambahUser()
    // {
    //     $data['title'] = 'Tambah Pengguna';

    //     $this->load->view('templates/header.php', $data);
    //     $this->load->view('templates/sidebar.php');
    //     $this->load->view('templates/topbar.php');
    //     $this->load->view('admin/user_tambah.php', $data);
    //     $this->load->view('templates/footer.php');
    // }

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
