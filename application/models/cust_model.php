<?php

    class Cust_model extends CI_Model{

        public function tampil_data($table, $limit, $start, $keyword = null)
        {
            if ($keyword) {
                $this->db->like('nama_user', $keyword);
                $this->db->or_like('email', $keyword);
                $this->db->or_like('telp', $keyword);
                $this->db->or_like('alamat', $keyword);
            }
            return $this->db->get($table, $limit, $start);
        }
        
        public function get_data($table)
        {
            return $this->db->get($table);
        }
    }
?>