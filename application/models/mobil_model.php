<?php 

	class Mobil_model extends CI_Model{
		public function tampil_data($table, $limit, $start, $keyword = null)
		{
			if ($keyword) {
				$this->db->like('nama_mobil', $keyword);
				$this->db->or_like('harga', $keyword);
				$this->db->or_like('bbm', $keyword);
				$this->db->or_like('tahun', $keyword);
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

		public function update_data($table, $data, $where)
		{
			$this->db->update($table, $data, $where);
		}

		public function delete_data($where, $table)
		{
			$this->db->where($where);
			$this->db->delete($table);
		}

		public function ambil_id_mobil($id)
		{
			$hasil = $this->db->where('id_mobil', $id)->get('tb_mobil');
			if($hasil->num_rows() > 0){
				return $hasil->result();
			}else {
				return false;
			}
		}
	}
 ?>