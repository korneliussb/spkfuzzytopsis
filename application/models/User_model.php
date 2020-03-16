<?php defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{
    private $_table = "users";

    // public $user_id;
    // public $nama_user;
    // public $username;
    // public $password;
    // public $hak_akses;
    // public $email;
    // public $jenis_kelamin;
    // public $instansi;

    // public function __construct()
    // {
    //     parent::__construct();
    //     $this->load->library('form_validation');
    // }

    // public function tambahUser()
    // {
    //     $this->form_validation->set_rules('email', 'email', 'required|valid_email|is_unique[users.email]', [
    //         'is_unique' => 'Email tersebut sudah ada.', 'valid_email' => 'Masukkan email yang valid'
    //     ]);
    //     $this->form_validation->set_rules('nama_user', 'namauser', 'trim|required|min_length[3]');
    //     $this->form_validation->set_rules('username', 'username', 'trim|required|min_length[3]|is_unique[users.username]', [
    //         'is_unique' => 'Username tersebut sudah ada.', 'min_length' => 'Username terlalu pendek!'
    //     ]);
    //     $this->form_validation->set_rules('password', 'password', 'trim|required|min_length[5]', [
    //         'min_length' => 'Password terlalu pendek'
    //     ]);
    //     $this->form_validation->set_rules('instansi', 'instansi', 'trim|required');
    //     $this->form_validation->set_rules('password', 'password', 'trim|required|min_length[5]', [
    //         'min_length' => 'Password terlalu pendek'
    //     ]);
    // }

    public function doLogin()
    {
        $post = $this->input->post();

        // cari user berdasarkan email dan username
        $this->db->where('email', $post["email"])->or_where('username', $post["email"]);
        $user = $this->db->get($this->_table)->row();



        // jika user terdaftar
        if ($user) {
            // periksa password-nya
            $isPasswordTrue = password_verify($post["password"], $user->password);
            // periksa role-nya
            $isAdmin = $user->hak_akses == "1";

            // jika password benar dan dia telah terdaftar / admin
            if ($isPasswordTrue && $isAdmin) {
                // login sukses
                $this->session->set_userdata(['user_logged' => $user]);
                $this->_updateLastLogin($user->user_id);
                return true;
            }
        }

        // login gagal
        return false;
    }

    public function isNotLogin()
    {
        return $this->session->userdata('user_logged') === null;
    }

    private function _updateLastLogin($user_id)
    {
        $sql = "UPDATE {$this->_table} SET last_login=now() WHERE user_id={$user_id}";
        $this->db->query($sql);
    }

    public function getAllUser()
    {
        return $this->db->get($this->_table)->result_array();
    }

    public function tambahDataUser()
    {
        $data = [
            "email" => $this->input->post('email', true),
            "nama_user" => $this->input->post('nama_user', true),
            "username" => $this->input->post('username', true),
            "password" => $this->input->post('password', true),
            "hak_akses" => $this->input->post('hak_akses', true),
            "jenis_kelamin" => $this->input->post('jenis_kelamin', true),
            "instansi" => $this->input->post('instansi', true)
        ];
    }
}
