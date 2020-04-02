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
        $this->db->select('alternatif.id_alternatif, kriteria.id_kriteria, aspek_teknik.nilai_kriteria');
        $this->db->from('aspek_teknik');
        $this->db->join('alternatif', 'alternatif.id_alternatif = aspek_teknik.id_alternatif');
        $this->db->join('kriteria', 'kriteria.id_kriteria = aspek_teknik.id_kriteria');
        // $this->db->join('interval', 'interval.nilai_kriteria = aspek_teknik.nilai_kriteria');
        $query = $this->db->get();


        // $query = $this->db->query("SELECT a.id_alternatif, k.id_kriteria, asp.nilai_kriteria 
        // FROM aspek_teknik asp 
        //     INNER JOIN alternatif a 
        //         ON asp.id_alternatif=a.id_alternatif 
        //     INNER JOIN kriteria k 
        //         ON k.id_kriteria=asp.id_kriteria
        //     ORDER BY a.id_alternatif, k.id_kriteria");
        $rows = $query->result();

        $data = array();
        foreach ($rows as $row) {
            $data[$row->id_alternatif][$row->id_kriteria] = $row->nilai_kriteria;
        }

        return $data;
    }

    public function getListForm($id)
    {
        return $this->db->query(
            'SELECT aspek_teknik.id_aspek_teknik, aspek_teknik.id_kriteria, aspek_teknik.nilai_kriteria , intervals.nilai_interval,kriteria.nama_kriteria 
            FROM aspek_teknik 
            INNER JOIN intervals
            ON (aspek_teknik.id_kriteria = intervals.id_kriteria 
            AND aspek_teknik.nilai_kriteria= intervals.nilai_kriteria), kriteria
            WHERE id_alternatif= "' . $id . '" 
            and kriteria.id_kriteria = aspek_teknik.id_kriteria 
            ORDER BY id_kriteria'
        )->result();
    }

    public function updateNilai($id, $kriteria, $value)
    {
        $where = ['id_alternatif' => $id, 'id_kriteria' => $kriteria];
        $data = ['nilai_kriteria' => $value];

        $this->db->where($where);
        $this->db->update('aspek_teknik', $data);
    }

    public function getAlternatifById($id)
    {
        return $this->db->get_where('alternatif', ['id_alternatif' => $id])->row_array();
    }

    public function getKriteria()
    {
        $this->db->select('kriteria.*');
        $this->db->from('kriteria');
        $this->db->order_by('id_kriteria');
        $query = $this->db->get();
        return $query->result();

        // $query = $this->db->query("SELECT * FROM tbl_kriteria ORDER BY kode_kriteria");
        // return $query->result();
    }
    #....
    // public function getTable()
    // {
    //     $this->db->select('users.*', 'kriteria.nama_kriteria');
    //     $this->db->from('users');
    //     $this->db->join();
    // }
}
