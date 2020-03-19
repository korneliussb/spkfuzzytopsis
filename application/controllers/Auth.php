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

        // $this->form_validation->set_rules('email', 'email', 'required|trim|valid_email');
        // $this->form_validation->set_rules('password', 'password', 'required|trim');
        // $this->form_validation->set_rules('username', 'username', 'required|trim');

        // if ($this->form_validation->run() == false) {
        //     $data['title'] = 'Halaman Login';
        //     $this->load->view('templates/auth_header', $data);
        //     $this->load->view('auth/login');
        //     $this->load->view('templates/auth_footer');
        // } else {
        //     $email = $this->input->post('email', true);
        //     $data = [
        //         'email' => htmlspecialchars($email),
        //         'username' => htmlspecialchars($this->input->post('username', true)),
        //         'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT)
        //     ];

        //     $this->User_model->doLogin($data);
        //     redirect('admin');
        // }

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
