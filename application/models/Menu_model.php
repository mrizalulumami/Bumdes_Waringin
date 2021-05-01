<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu_model extends CI_Model
{
    public function getSubMenu()
    {
        $query = "SELECT `user_sub_menu`.*, `user_menu`.`menu`
                    FROM `user_sub_menu` JOIN `user_menu`
                      ON `user_sub_menu`.'menu_id` = `user_menu`.`id`
                      ";
        return $this->db->query($query)->result_array();
    }
    public function tambahData($table_name, $data)
    {
        $tambah = $this->db->insert($table_name, $data);
        return $tambah;
    }
    public  function tampil_data()
    {
        return $this->db->get('data_peminjam');
    }
    public  function get_keyword($keyword)
    {
        $this->db->select('*');
        $this->db->from('data_peminjam');
        $this->db->like('nama', $keyword);
        $this->db->or_like('nik', $keyword);
        $this->db->or_like('foto', $keyword);
        $this->db->or_like('foto_kk', $keyword);
        $this->db->or_like('alamat', $keyword);
        $this->db->or_like('ttl', $keyword);
        $this->db->or_like('ket', $keyword);
        return $this->db->get()->result();
    }
    public function hapusData($table_name, $id)
    {
        $this->db->where('id_peminjam', $id);
        $hapus = $this->db->delete($table_name);
        return $hapus;
    }
    public function hapusSambutan($table_name, $id)
    {
        $this->db->where('id_artsel', $id);
        $hapus = $this->db->delete($table_name);
        return $hapus;
    }
    public function hapusSubmenu($table_name, $id)
    {
        $this->db->where('id_peminjam', $id);
        $hapus = $this->db->delete($table_name);
        return $hapus;
    }
    public function hapusProfiles($table_name, $id)
    {
        $this->db->where('id_artprof', $id);
        $hapus = $this->db->delete($table_name);
        return $hapus;
    }
    public function hapusService($table_name, $id)
    {
        $this->db->where('id_artiservis', $id);
        $hapus = $this->db->delete($table_name);
        return $hapus;
    }
}