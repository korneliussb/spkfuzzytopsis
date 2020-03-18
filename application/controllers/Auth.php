<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("User_model");
        $this->load->library('form_validation');
        // is_logged_in();
    }

    public function index()
    {

        //$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        // $this->load->view('admin/admin_dashboard', $data);

        $data['title'] = 'Halaman Login';

        //jika form login sudah di submit
        if ($this->input->post()) {
            if ($this->User_model->doLogin()) redirect(site_url('admin'));
        }

        //tampilkan halaman login
        $this->load->view('templates/auth_header', $data);
        $this->load->view('auth/login');
        $this->load->view('templates/auth_footer');
    }

    public function logout()
    {
        // hancurkan semua sesi
        $this->session->sess_destroy();
        redirect(site_url('auth'));
    }
}
