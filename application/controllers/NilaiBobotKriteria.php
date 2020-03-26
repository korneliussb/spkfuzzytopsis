<?php
defined('BASEPATH') or exit('No direct script access allowed');

class NilaiBobotKriteria extends CI_Controller
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
        $this->load->model("NilaiBobotKriteria_model");
        if (!$this->session->userdata('email')) {
            redirect('auth');
        }
        $data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
        // if ($this->User_model->isNotLogin()) redirect(site_url('auth'));
    }

    public function index()
    {
        $data['title'] = 'Nilai Bobot Kriteria';
        $data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
        $data['AllBobot'] = $this->NilaiBobotKriteria_model->getAllBobot();

        $this->load->view('templates/header.php', $data);
        $this->load->view('templates/sidebar.php');
        $this->load->view('templates/topbar.php');
        $this->load->view('admin/nilaibobotkriteria.php');
        $this->load->view('templates/footer.php');
    }

    public function ubahBobot($id_kriteria)
    {
        $data['title'] = 'Nilai Bobot Kriteria';
        $data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
        // $data['bobot'] = $this->db->get_where();

        $data['bobot'] = $this->NilaiBobotKriteria_model->getBobotById($id_kriteria);

        $this->load->view('templates/header.php', $data);
        $this->load->view('templates/sidebar.php');
        $this->load->view('templates/topbar.php');
        $this->load->view('admin/nilaibobotkriteria_ubah.php'); // base nilaibobotkriteria/ubahBobot
        $this->load->view('templates/footer.php');
    }
}
