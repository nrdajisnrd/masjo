<?php 

	class Data_berita extends CI_Controller{
		public function index()
		{
			$data['berita'] = $this->berita_model->tampil_data('tb_berita')->result();
			$this->load->view('templates_admin/header');
			$this->load->view('templates_admin/sidebar');
			$this->load->view('admin/data_berita', $data);
			$this->load->view('templates_admin/footer');
		}

		public function tambah_berita()
		{
			$data['berita'] = $this->berita_model->tampil_data('tb_berita')->result();
			$this->load->view('templates_admin/header');
			$this->load->view('templates_admin/sidebar');
			$this->load->view('admin/tambah_berita_form', $data);
			$this->load->view('templates_admin/footer');
		}

		public function tambah_berita_aksi()
		{
			$judul_berita	= $this->input->post('judul_berita');
			$isi_berita1	= $this->input->post('isi_berita');
			$isi_berita2	= $this->input->post('isi_berita2');
			$gambar1		= $_FILES['foto']['name'];
			if($gambar1 = ''){}else{
				$config['upload_path']		= './assets/assets_cust/img/uploads';
				$config['allowed_types']	= 'jpg|jpeg|png|gif';
				$config['overwrite']		= true;

				$this->load->library('upload', $config);
				if(!$this->upload->do_upload('foto')){
					echo "Gambar Gagal di Upload!";
				}else{
					$gambar1 = $this->upload->data('file_name');
				}
			}
			$gambar2		= $_FILES['foto2']['name'];
			if($gambar2 = ''){}else{
				$config['upload_path']		= './assets/assets_cust/img/uploads';
				$config['allowed_types']	= 'jpg|jpeg|png|gif';
				$config['overwrite']		= true;

				$this->load->library('upload', $config);
				if(!$this->upload->do_upload('foto2')){
					echo "Gambar Gagal di Upload!";
				}else{
					$gambar2 = $this->upload->data('file_name');
				}
			}

			$data = array(
				'judul_berita'	=> $judul_berita,
				'foto'			=> $gambar1,
				'foto2'			=> $gambar2,
				'isi_berita'	=> $isi_berita1,
				'isi_berita2'	=> $isi_berita2
			);

			$this->berita_model->insert_data($data, 'tb_berita');
			$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
				  Data Berhasil di Tambahkan!
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>');
			redirect('admin/data_berita');
		}

		public function edit($id)
		{
			$where = array('id_berita' => $id);
			$data['berita'] = $this->berita_model->edit_data($where, 'tb_berita')->result();
			$this->load->view('templates_admin/header');
			$this->load->view('templates_admin/sidebar');
			$this->load->view('admin/edit_berita_form', $data);
			$this->load->view('templates_admin/footer');
		}

		public function edit_berita_aksi()
		{
			$id 			= $this->input->post('id_berita');
			$judul_berita 	= $this->input->post('judul_berita');
			$isi_berita1	= $this->input->post('isi_berita');
			$isi_berita2	= $this->input->post('isi_berita2');
			$gambar1		= $_FILES['foto']['name'];
			if($gambar1 = ''){}else{
				$config['upload_path']		= './assets/assets_cust/img/uploads';
				$config['allowed_types']	= 'jpg|jpeg|png|gif';
				$config['overwrite']		= true;

				$this->load->library('upload', $config);
				if(!$this->upload->do_upload('foto')){
					echo "Gambar Gagal di Upload!";
				}else{
					$gambar1 = $this->upload->data('file_name');
				}
			}
			$gambar2		= $_FILES['foto2']['name'];
			if($gambar2 = ''){}else{
				$config['upload_path']		= './assets/assets_cust/img/uploads';
				$config['allowed_types']	= 'jpg|jpeg|png|gif';
				$config['overwrite']		= true;

				$this->load->library('upload', $config);
				if(!$this->upload->do_upload('foto2')){
					echo "Gambar Gagal di Upload!";
				}else{
					$gambar2 = $this->upload->data('file_name');
				}
			}

			$data = array(
				'judul_berita'	=> $judul_berita,
				'foto'			=> $gambar1,
				'foto2'			=> $gambar2,
				'isi_berita'	=> $isi_berita1,
				'isi_berita2'	=> $isi_berita2
			);

			$where = array(
				'id_berita'		=> $id
			);

			$this->berita_model->update_data($where, $data, 'tb_berita');
			$this->session->set_flashdata('pesan', '<div class="alert alert-info alert-dismissible fade show" role="alert">
				  Data Berhasil di Edit!
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>');
			redirect('admin/data_berita');
		}

		public function detail($id)
		{
			$data['detail'] = $this->berita_model->ambil_id_berita($id);
			$this->load->view('templates_admin/header');
			$this->load->view('templates_admin/sidebar');
			$this->load->view('admin/detail_berita', $data);
			$this->load->view('templates_admin/footer');
		}

		public function delete($id)
		{
			$where = array('id_berita' => $id);
			$this->berita_model->delete_data($where, 'tb_berita');
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
				  Data Berhasil di Hapus!
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>');
			redirect('admin/data_berita');
		}
	}
 ?>