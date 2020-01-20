<?php 

	class Rental_model extends CI_Model{
		public function tampil_data($table)
		{
			return $this->db->get($table);
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

		/*public function cek_mobil($id, $fromdate, $todate)
		{
			$query = $this->db->query("SELECT kode_pemesanan FROM tb_cek_pemesanan WHERE tgl_pesan BETWEEN '$fromdate' AND '$todate' AND id_mobil = '$id' AND status != 'Cancel'");
                if ($query->num_rows() > 0) {
					return $query->result();
                    $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    Maaf Mobil tidak Tersedia di tanggal tersebut! Coba pilih tanggal lain.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				    </button>
                    </div>');
                } else {
					return $query->result();
                    $this->session->set_flashdata('pesan', '<div class="alert alert-info alert-dismissible fade show" role="alert">
                    Mobil Tersedia!
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				    </button>
                    </div>');
                }
		}*/

		public function check_status($id, $start_date, $end_date)
		{
			$query = $this->db->query("SELECT kode_pemesanan FROM tb_cek_pemesanan WHERE tgl_pesan between '$start_date' AND '$end_date' AND id_mobil='$id' AND status!='Cancel'");
			// "SELECT kode_booking FROM cek_booking WHERE tgl_booking between '$fromdate' AND '$todate' AND id_mobil='$vid' AND status!='Cancel'"
			// $this->db->select('kode_pemesanan');
			// $this->db->from('tb_cek_pemesanan');
			// $this->db->where('tgl_pesan >=', $start_date);
			// $this->db->where('tgl_pesan <=', $end_date);
			// $this->db->where('id_mobil == ', $id);
			// $this->db->where('status != "Cancel"');
			if ($query) {
				return true;
			}else {
				return false;
			}
		}
	}
 ?>