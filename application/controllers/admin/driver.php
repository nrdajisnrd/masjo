<?php 

	class Driver extends CI_Controller{
		public function index()
		{
			$data['driver'] = $this->driver_model->tampil_data('tb_harga_driver')->result();
			$this->load->view('templates_admin/header');
			$this->load->view('templates_admin/sidebar');
			$this->load->view('admin/driver', $data);
			$this->load->view('templates_admin/footer');
		}

		public function harga_aksi()
		{
			$id 			= $this->input->post('id_driver');
			$harga_driver 	= $this->input->post('harga_driver');

			$data = array(
				'harga_driver'		=> $harga_driver
			);

			$where = array(
				'id_driver'		=> $id
			);

			$this->driver_model->update_data($where, $data, 'tb_harga_driver');
			$this->session->set_flashdata('pesan', '<div class="alert alert-info alert-dismissible fade show" role="alert">
				  Data Berhasil di Edit!
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>');
			redirect('admin/driver');
		}
	}
 ?>