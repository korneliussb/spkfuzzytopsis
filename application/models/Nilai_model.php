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
            AND aspek_teknik.nilai_kriteria= intervals.nilai_kriteria)
            , kriteria
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

    public function getNilaiFuzzy()
    {

        $this->db->select('alternatif.id_alternatif, kriteria.id_kriteria, aspek_teknik.nilai_kriteria, intervals.fuzzy_number1, intervals.fuzzy_number2, intervals.fuzzy_number3');
        $this->db->from('aspek_teknik');
        $this->db->join('alternatif', 'alternatif.id_alternatif = aspek_teknik.id_alternatif');
        $this->db->join('kriteria', 'kriteria.id_kriteria = aspek_teknik.id_kriteria');
        $this->db->join('intervals', 'intervals.id_kriteria = aspek_teknik.id_kriteria AND intervals.nilai_kriteria = aspek_teknik.nilai_kriteria');

        $query = $this->db->get();

        $rows = $query->result();

        $data = array();
        foreach ($rows as $row) {
            $data[$row->id_alternatif][$row->id_kriteria] = $row->fuzzy_number1;
        }

        return $data;
        // return $rows;
    }

    public function getNilaiFuzzy2()
    {

        $this->db->select('alternatif.id_alternatif, kriteria.id_kriteria, aspek_teknik.nilai_kriteria, intervals.fuzzy_number1, intervals.fuzzy_number2, intervals.fuzzy_number3');
        $this->db->from('aspek_teknik');
        $this->db->join('alternatif', 'alternatif.id_alternatif = aspek_teknik.id_alternatif');
        $this->db->join('kriteria', 'kriteria.id_kriteria = aspek_teknik.id_kriteria');
        $this->db->join('intervals', 'intervals.id_kriteria = aspek_teknik.id_kriteria AND intervals.nilai_kriteria = aspek_teknik.nilai_kriteria');

        $query = $this->db->get();

        $rows = $query->result();

        $data = array();
        foreach ($rows as $row) {
            $data[$row->id_alternatif][$row->id_kriteria] = $row->fuzzy_number2;
        }

        return $data;
    }

    public function getNilaiFuzzy3()
    {

        // $this->db->select('alternatif.id_alternatif, kriteria.id_kriteria, aspek_teknik.nilai_kriteria, intervals.fuzzy_number1, intervals.fuzzy_number2, intervals.fuzzy_number3');
        // $this->db->from('aspek_teknik');
        // $this->db->join('alternatif', 'alternatif.id_alternatif = aspek_teknik.id_alternatif');
        // $this->db->join('kriteria', 'kriteria.id_kriteria = aspek_teknik.id_kriteria');
        // $this->db->join('intervals', 'intervals.id_kriteria = aspek_teknik.id_kriteria AND intervals.nilai_kriteria = aspek_teknik.nilai_kriteria');

        $query = $this->db->get();

        $rows = $query->result();

        $data = array();
        foreach ($rows as $row) {
            $data[$row->id_alternatif][$row->id_kriteria] = $row->fuzzy_number3;
        }
        return $data;

        // $data = [
        //     $rows->id_alternatif, $rows->id_kriteria
        // ];

        // foreach ($data as $row) {
        //     $row->fuzzy_number3;
        // }
    }
    //     SELECT alternatif.id_alternatif, kriteria.id_kriteria, aspek_teknik.nilai_kriteria, 
    // intervals.fuzzy_number1, intervals.fuzzy_number2, intervals.fuzzy_number3 
    // FROM aspek_teknik 
    // JOIN alternatif ON alternatif.id_alternatif = aspek_teknik.id_alternatif 
    // JOIN kriteria ON kriteria.id_kriteria = aspek_teknik.id_kriteria 
    // JOIN intervals ON intervals.id_kriteria = aspek_teknik.id_kriteria 
    // AND intervals.nilai_kriteria = aspek_teknik.nilai_kriteria


    public function getTernormalisasi1()
    {
        $this->db->select('(intervals.fuzzy_number1 * kriteria.nilai_bobot1) as field_bobot1, alternatif.id_alternatif, kriteria.id_kriteria');
        $this->db->from('aspek_teknik');
        $this->db->join('alternatif', 'alternatif.id_alternatif = aspek_teknik.id_alternatif');
        $this->db->join('kriteria', 'kriteria.id_kriteria = aspek_teknik.id_kriteria');
        $this->db->join('intervals', 'intervals.id_kriteria = aspek_teknik.id_kriteria AND intervals.nilai_kriteria = aspek_teknik.nilai_kriteria');

        $query = $this->db->get();

        $rows = $query->result();

        $data = array();
        foreach ($rows as $row) {
            $data[$row->id_alternatif][$row->id_kriteria] = $row->field_bobot1;
        }

        return $data;

        // SELECT (intervals.fuzzy_number1 * kriteria.nilai_bobot1) as field_hasil, 
        // alternatif.id_alternatif, kriteria.id_kriteria 
        // FROM aspek_teknik 
        // JOIN alternatif ON alternatif.id_alternatif = aspek_teknik.id_alternatif 
        // JOIN kriteria ON kriteria.id_kriteria = aspek_teknik.id_kriteria 
        // JOIN intervals ON intervals.id_kriteria = aspek_teknik.id_kriteria 
        // AND intervals.nilai_kriteria = aspek_teknik.nilai_kriteria 
    }

    public function getTernormalisasi2()
    {
        $this->db->select('(intervals.fuzzy_number2 * kriteria.nilai_bobot2) as field_bobot2, alternatif.id_alternatif, kriteria.id_kriteria');
        $this->db->from('aspek_teknik');
        $this->db->join('alternatif', 'alternatif.id_alternatif = aspek_teknik.id_alternatif');
        $this->db->join('kriteria', 'kriteria.id_kriteria = aspek_teknik.id_kriteria');
        $this->db->join('intervals', 'intervals.id_kriteria = aspek_teknik.id_kriteria AND intervals.nilai_kriteria = aspek_teknik.nilai_kriteria');

        $query = $this->db->get();

        $rows = $query->result();

        $data = array();
        foreach ($rows as $row) {
            $data[$row->id_alternatif][$row->id_kriteria] = $row->field_bobot2;
        }

        return $data;
    }

    public function getTernormalisasi3()
    {
        // $data = $this->db->query("SELECT * from v_normalisasi, alternatif where v_normalisasi.id_alternatif = alternatif.id_alternatif");

        // return $data->result();

        $this->db->select('(intervals.fuzzy_number3 * kriteria.nilai_bobot3) as field_bobot3, alternatif.id_alternatif, kriteria.id_kriteria');
        $this->db->from('aspek_teknik');
        $this->db->join('alternatif', 'alternatif.id_alternatif = aspek_teknik.id_alternatif');
        $this->db->join('kriteria', 'kriteria.id_kriteria = aspek_teknik.id_kriteria');
        $this->db->join('intervals', 'intervals.id_kriteria = aspek_teknik.id_kriteria AND intervals.nilai_kriteria = aspek_teknik.nilai_kriteria');

        $query = $this->db->get();

        $rows = $query->result();

        $data = array();
        foreach ($rows as $row) {
            $data[$row->id_alternatif][$row->id_kriteria] = $row->field_bobot3;
        }

        return $data;
    }

    public function getFPISk1()
    {
        $this->db->select('MAX(intervals.fuzzy_number3 * kriteria.nilai_bobot3) as field_bobot3, alternatif.id_alternatif, kriteria.id_kriteria');
        $this->db->from('aspek_teknik');
        $this->db->join('alternatif', 'alternatif.id_alternatif = aspek_teknik.id_alternatif');
        $this->db->join('kriteria', 'kriteria.id_kriteria = aspek_teknik.id_kriteria');
        $this->db->join('intervals', 'intervals.id_kriteria = aspek_teknik.id_kriteria AND intervals.nilai_kriteria = aspek_teknik.nilai_kriteria');
        $this->db->where('kriteria.id_kriteria = "1"');

        $query = $this->db->get();

        $rows = $query->result();
        return $rows;

        // $data = array();
        // foreach ($rows as $row) {
        //     $data[$row->id_alternatif][$row->id_kriteria] = $row->field_bobot3;
        // }

        // return $data;
    }

    public function nyoba()
    {
    }


    #....
    // public function getTable()
    // {
    //     $this->db->select('users.*', 'kriteria.nama_kriteria');
    //     $this->db->from('users');
    //     $this->db->join();
    // }
}
