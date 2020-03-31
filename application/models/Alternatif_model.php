<?php defined('BASEPATH') or exit('No direct script access allowed');

class Alternatif_model extends CI_Model
{
    private $_alternatif = "alternatif";

    public function getAllAlternatif()
    {
        return $this->db->get($this->_alternatif)->result_array();
    }

    public function getAlternatifById($id_alternatif)
    {
        return $this->db->get_where($this->_alternatif, ['id_alternatif' => $id_alternatif])->row_array();
    }

    public function hapusDataAlternatif($id_alternatif)
    {
        $this->db->delete($this->_alternatif, ['id_alternatif' => $id_alternatif]);
    }

    public function ubahDataAlternatif($data)
    {
        $data2 = [
            "nama_alternatif" => $data['nama_alternatif']
        ];

        $this->db->where('id_alternatif', $this->input->post('id_alternatif'));
        $this->db->update($this->_alternatif, $data2);
    }

    public function getIntervals()
    {
        return $this->db->get('intervals')->result();
    }

    // belum, karena antar tabel
    // public function tambahDataAlternatif()
    // {
    //     # code
    // }
}
