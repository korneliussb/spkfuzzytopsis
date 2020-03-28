<?php
defined('BASEPATH') or exit('No direct script access allowed');

class FuzzyMember extends CI_Controller
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
        $this->load->model("User_model");
        if (!$this->session->userdata('email')) {
            redirect('auth');
        }
        // if ($this->User_model->isNotLogin()) redirect(site_url('auth'));
    }

    public function index()
    {
        $data['title'] = 'Data Nilai Keanggotaan Fuzzy';
        $data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
        //$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        // $data['bobot'] = $this->NilaiBobotKriteria_model->getBobotById(1);
        // $this->load->view('admin/admin_dashboard', $data);

        $this->load->view('templates/header.php', $data);
        $this->load->view('templates/sidebar.php');
        $this->load->view('templates/topbar.php');
        $this->load->view('kriteria/fuzzymember.php');
        $this->load->view('templates/footer.php');
    }
}
