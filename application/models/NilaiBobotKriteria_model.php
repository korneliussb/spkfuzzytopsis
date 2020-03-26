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

    private $_table = "kriteria";

    public function getAllBobot()
    {
        return $this->db->get('kriteria')->result_array();
    }
    public function getBobotById($id_kriteria)
    {
        return $this->db->get_where('kriteria', ['id_kriteria' => $id_kriteria])->row_array();
    }

    public function ubahBobot($data1)
    {
        $data2 = [
            "nilai_bobot1" => $data1['nilai_bobot1'],
            "nilai_bobot2" => $data1['nilai_bobot2'],
            "nilai_bobot3" => $data1['nilai_bobot3']
        ];

        $this->db->where('id_kriteria', $this->input->post('id_kriteria'));
        $this->db->update($this->_table, $data2);
    }
}
