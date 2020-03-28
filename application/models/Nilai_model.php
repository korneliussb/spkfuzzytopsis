<?php defined('BASEPATH') or exit('No direct script access allowed');

class Nilai_model extends CI_Model
{

    public function __construct()
    {
        $this->load->database();
    }

    // Data Nilai tiap Kriteria per Alternatif

    public function getNilai()
    {
        $query = $this->db->query("SELECT a.id_alternatif, k.id_kriteria, asp.nilai_kriteria 
        FROM aspek_teknik asp 
            INNER JOIN alternatif a 
                ON asp.id_alternatif=a.id_alternatif 
            INNER JOIN kriteria k 
                ON k.id_kriteria=asp.id_kriteria
            ORDER BY a.id_alternatif, k.id_kriteria");
        $rows = $query->result();

        $data = array();
        foreach ($rows as $row) {
            $data[$row->id_alternatif][$row->id_kriteria] = $row->nilai_kriteria;
        }

        return $data;
    }
    #....
    // public function getTable()
    // {
    //     $this->db->select('users.*', 'kriteria.nama_kriteria');
    //     $this->db->from('users');
    //     $this->db->join();
    // }
}
