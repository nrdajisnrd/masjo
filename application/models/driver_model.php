<?php 

	class Driver_model extends CI_Model{
		public function tampil_data($table)
		{
			return $this->db->get($table);
		}

		public function update_data($where, $data, $table)
		{
			$this->db->where($where);
			$this->db->update($table, $data);
		}
	}
 ?>