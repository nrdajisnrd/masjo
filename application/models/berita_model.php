<?php 

	class Berita_model extends CI_Model{
		public function tampil_data($table)
		{
			return $this->db->get($table);
		}

		public function tampil_data_limit($table, $limit)
		{
			$this->db->order_by('id_berita','DESC');
			return $this->db->get($table, $limit);
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

		public function ambil_id_berita($id)
		{
			$hasil = $this->db->where('id_berita', $id)->get('tb_berita');
			if($hasil->num_rows() > 0){
				return $hasil->result();
			}else {
				return false;
			}
		}
	}
 ?>