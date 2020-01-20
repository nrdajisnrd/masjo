<?php 

	class Merk_model extends CI_Model{
		public function tampil_data($table, $limit, $start, $keyword = null)
		{
			if ($keyword) {
				$this->db->like('nama_merk', $keyword);
			}
			return $this->db->get($table, $limit, $start);
		}

		public function get_data($table)
		{
			return $this->db->get($table);
		}

		public function insert_data($data, $table)
		{
			$this->db->insert($table, $data);
		}

		public function delete_data($where, $table)
		{
			$this->db->where($where);
			$this->db->delete($table);
		}

		public function edit_data($where, $table)
		{
			return $this->db->get_where($table, $where);
		}

		public function update_data($where, $data, $table)
		{
			$this->db->where($where);
			$this->db->update($table, $data);
		}
	}
 ?>