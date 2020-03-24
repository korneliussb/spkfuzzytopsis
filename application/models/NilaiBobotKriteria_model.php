<?php defined('BASEPATH') or exit('No direct script access allowed');

class NilaiBobotKriteria_model extends CI_Model
{
    #....
    public function getTable()
    {
        $this->db->select('users.*', 'kriteria.nama_kriteria');
    }
}
