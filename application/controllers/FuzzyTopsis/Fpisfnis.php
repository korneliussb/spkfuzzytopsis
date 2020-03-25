<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Fpisfnis extends CI_Controller
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
        if (!$this->session->userdata('email')) {
            redirect('auth');
        }
        //if ($this->user_model->isNotLogin()) redirect(site_url('auth'));
    }

    public function index()
    {
        $data['title'] = 'FPIS dan FNIS';
        $data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();

        // $this->load->view('admin/admin_dashboard', $data);

        $this->load->view('templates/header.php', $data);
        $this->load->view('templates/sidebar.php');
        $this->load->view('templates/topbar.php');
        $this->load->view('fuzzytopsis/fpisfnis.php', $data);
        $this->load->view('templates/footer.php');
    }
}
