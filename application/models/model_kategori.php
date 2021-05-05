<?php

class Model_kategori extends CI_Model
{
      public function data_mouse()
      {
            return $this->db->get_where("tb_barang", array('kategori' => 'mouse'));
      }

      public function data_keyboard()
      {
            return $this->db->get_where("tb_barang", array('kategori' => 'keyboard'));
      }

      public function data_headphone()
      {
            return $this->db->get_where("tb_barang", array('kategori' => 'headphone'));
      }
}
