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
        $this->load->library('form_validation');
        $this->load->model("Alternatif_model");
        $this->load->model("User_model");
        if ($this->User_model->isNotLogin()) redirect(site_url('auth'));
    }

    public function index()
    {
        $data['title'] = 'Alternatif';
        $data['alternatif'] = $this->Alternatif_model->getAllAlternatif();
        // $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        // $this->load->view('admin/admin_dashboard', $data);

        $this->load->view('templates/header.php', $data);
        $this->load->view('templates/sidebar.php');
        $this->load->view('templates/topbar.php');
        $this->load->view('admin/alternatif.php', $data);
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

    public function ubahAlternatif($id_alternatif)
    {
        $data['title'] = 'Ubah Alternatif';
        $data['alternatif'] = $this->Alternatif_model->getAlternatifById($id_alternatif);

        $this->form_validation->set_rules('nama_alternatif', 'nama alternatif', 'trim|required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header.php', $data);
            $this->load->view('templates/sidebar.php');
            $this->load->view('templates/topbar.php');
            $this->load->view('admin/alternatif_ubah.php', $data);
            $this->load->view('templates/footer.php');
        } else {

            $data = [
                'nama_alternatif' => htmlspecialchars($this->input->post('nama_alternatif', true))
            ];
            //var_dump($data);
            $this->Alternatif_model->ubahDataAlternatif($data);
            $this->session->set_flashdata('flash', 'diubah');
            redirect('alternatif');
        }
    }

    public function hapusAlternatif($id_alternatif)
    {
        $this->Alternatif_model->hapusDataAlternatif($id_alternatif);
        $this->session->set_flashdata('flash', 'dihapus');
        redirect('alternatif');
    }
}
