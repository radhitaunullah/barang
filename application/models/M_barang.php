<?php
class M_barang extends CI_Model
{
  public function get_data()
  {
    return $this->db->get('benda')->result_array();
  }
  public function tambahDataBarang()
  {
    $data = [
      // nama table terus yang -> ngambil dari name
      "nama_barang" => $this->input->post('nama_barang', true),
      "merk" => $this->input->post('merk', true),
      "tgl_input" => $this->input->post('tgl_input', true),
      "tgl_update" => $this->input->post('tgl_update', true),

    ];
    $this->db->insert('benda', $data);
  }

  public function hapusDataBarang($id_barang)
  {
    $this->db->where('id_barang', $id_barang);
    $this->db->delete('benda');
  }

  public function getBarangById($id_barang)
  {
    return $this->db->get_where('benda', ['id_barang' => $id_barang])->row_array();
  }

  public function editDataBarang()
  {
    $data = [
      // nama table terus yang -> ngambil dari name
      "nama_barang" => $this->input->post('nama_barang', true),
      "merk" => $this->input->post('merk', true),
      "tgl_input" => $this->input->post('tgl_input', true),
      "tgl_update" => $this->input->post('tgl_update', true)

    ];
    $this->db->where('id_barang', $this->input->post('id_barang'));
    $this->db->update('benda', $data);
  }
 

}
