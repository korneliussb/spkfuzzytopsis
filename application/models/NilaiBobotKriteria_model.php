<?php defined('BASEPATH') or exit('No direct script access allowed');

class NilaiBobotKriteria_model extends CI_Model
{
    #....
    // public function getTable()
    // {
    //     $this->db->select('users.*', 'kriteria.nama_kriteria');
    //     $this->db->from('users');
    //     $this->db->join();
    // }
    public function getAllBobot()
    {
        return $this->db->get('kriteria')->result_array();
    }
    public function getBobotById($id_kriteria)
    {
        return $this->db->get_where('kriteria', ['id_kriteria' => $id_kriteria])->row_array();
    }
}
