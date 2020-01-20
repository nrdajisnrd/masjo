<?php 

	class Data_mobil extends CI_Controller{
		public function index()
		{
			if ($this->input->post('cari')) {
				$data['keyword'] = $this->input->post('keyword');
				$this->session->set_userdata('keyword', $data['keyword']);
			} else {
				$data['keyword'] = $this->session->userdata('keyword');
			}

			$config['base_url']		= site_url('admin/data_mobil/index');
			$this->db->like('nama_mobil', $data['keyword']);
			$this->db->or_like('harga', $data['keyword']);
			$this->db->or_like('bbm', $data['keyword']);
			$this->db->or_like('tahun', $data['keyword']);
			$this->db->from('tb_mobil');
			$config['total_rows']	= $this->db->count_all_results();
			$data['total_rows']		= $config['total_rows'];
			$config['per_page']		= 5;
			$choice					= $config['total_rows'] / $config['per_page'];
			$config['num_links']	= floor($choice);

			$config['full_tag_open']	= '<nav><ul class="pagination">';
			$config['full_tag_close']	= '</ul></nav>';

			$config['first_link']		= 'First';
			$config['first_tag_open']	= '<li class="page-item">';
			$config['first_tag_close']	= '</li>';

			$config['last_link']		= 'Last';
			$config['last_tag_open']	= '<li class="page-item">';
			$config['last_tag_close']	= '</li>';

			$config['next_link']		= '&raquo';
			$config['next_tag_open']	= '<li class="page-item">';
			$config['next_tag_close']	= '</li>';

			$config['prev_link']		= '&laquo';
			$config['prev_tag_open']	= '<li class="page-item">';
			$config['prev_tag_close']	= '</li>';

			$config['cur_tag_open']		= '<li class="page-item active"><a class="page-link" href="#">';
			$config['cur_tag_close']	= '</a></li>';

			$config['num_tag_open']		= '<li class="page-item">';
			$config['num_tag_close']	= '</li>';

			$config['attributes']		= array('class' => 'page-link');

			$this->pagination->initialize($config);
			$data['start']				= $this->uri->segment(4);

			$data['mobil'] = $this->mobil_model->tampil_data('tb_mobil', $config['per_page'], $data['start'], $data['keyword'])->result();
			$data['merk'] = $this->mobil_model->get_data('tb_merk')->result();
			$data['pagination'] = $this->pagination->create_links();
			$this->load->view('templates_admin/header');
			$this->load->view('templates_admin/sidebar');
			$this->load->view('admin/data_mobil', $data);
			$this->load->view('templates_admin/footer');
		}

		public function tambah_mobil()
		{
			$data['merk'] = $this->mobil_model->get_data('tb_merk')->result();
			$this->load->view('templates_admin/header');
			$this->load->view('templates_admin/sidebar');
			$this->load->view('admin/tambah_mobil_form', $data);
			$this->load->view('templates_admin/footer');
		}

		public function tambah_mobil_aksi()
		{
			$nama_mobil				= $this->input->post('nama_mobil');
			$nama_merk				= $this->input->post('nama_merk');
			$nopol					= $this->input->post('nopol');
			$deskripsi				= $this->input->post('deskripsi');
			$harga					= $this->input->post('harga');
			$bbm					= $this->input->post('bbm');
			$tahun					= $this->input->post('tahun');
			$seating				= $this->input->post('seating');
			$airconditioner			= $this->input->post('aksesoris[1]');
			$powerdoorlocks			= $this->input->post('aksesoris[2]');
			$antilockbrakingsystem	= $this->input->post('aksesoris[3]');
			$brakeassist			= $this->input->post('aksesoris[4]');
			$powersteering			= $this->input->post('aksesoris[5]');
			$driverairbag			= $this->input->post('aksesoris[6]');
			$passengerairbag		= $this->input->post('aksesoris[7]');
			$powerwindows			= $this->input->post('aksesoris[8]');
			$cdplayer				= $this->input->post('aksesoris[9]');
			$centrallocking			= $this->input->post('aksesoris[10]');
			$crashsensor			= $this->input->post('aksesoris[11]');
			$leatherseats			= $this->input->post('aksesoris[12]');
			$gambar1			= $_FILES['image1']['name'];
			if($gambar1 = ''){}else{
				$config['upload_path']		= './assets/uploads';
				$config['allowed_types']	= 'jpg|jpeg|png|gif';

				$this->load->library('upload', $config);
				if(!$this->upload->do_upload('image1')){
					echo "Gambar Gagal di Upload!";
				}else{
					$gambar1 = $this->upload->data('file_name');
				}
			}
			$gambar2			= $_FILES['image2']['name'];
			if($gambar2 = ''){}else{
				$config['upload_path']		= './assets/uploads';
				$config['allowed_types']	= 'jpg|jpeg|png|gif';

				$this->load->library('upload', $config);
				if(!$this->upload->do_upload('image2')){
					echo "Gambar Gagal di Upload!";
				}else{
					$gambar2 = $this->upload->data('file_name');
				}
			}
			$gambar3			= $_FILES['image3']['name'];
			if($gambar3 = ''){}else{
				$config['upload_path']		= './assets/uploads';
				$config['allowed_types']	= 'jpg|jpeg|png|gif';

				$this->load->library('upload', $config);
				if(!$this->upload->do_upload('image3')){
					echo "Gambar Gagal di Upload!";
				}else{
					$gambar3 = $this->upload->data('file_name');
				}
			}
			/*
			$config['upload_path'] 		= './assets/uploads';
			$config['allowed_types'] 	= 'jpg|jpeg|png|gif';
			$config['overwrite'] 		= FALSE;
			$this->load->library('upload');
			$datainfo 	= array();
			$files		= $_FILES;
			$cpt		= count($_FILES['image']['name']);
			for ($i = 0; $i < $cpt; $i++)
			{
				$_FILES['image']['name']	= $files['image']['name'][$i];
				$_FILES['image']['type']	= $files['image']['type'][$i];
				$_FILES['image']['tmp_name']	= $files['image']['tmp_name'][$i];
				$_FILES['image']['error']	= $files['image']['error'][$i];
				$_FILES['image']['size']	= $files['image']['size'][$i];

				$this->upload->initialize($config);
				$this->upload->do_upload();
				$datainfo[] = $this->upload->data();
			}*/


			$data = array(
				'nama_mobil'		=> $nama_mobil,
				'nama_merk'			=> $nama_merk,	
				'nopol'				=> $nopol,
				'deskripsi'			=> $deskripsi,
				'harga'				=> $harga,
				'bbm'				=> $bbm,
				'tahun'				=> $tahun,
				'seating'			=> $seating,
				'image1'			=> $gambar1,
				'image2'			=> $gambar2,
				'image3'			=> $gambar3,
				'airconditioner'	=> $airconditioner,
				'powerdoorlocks'	=> $powerdoorlocks,
				'antilockbrakingsystem'	=> $antilockbrakingsystem,
				'brakeassist'		=> $brakeassist,
				'powersteering'		=> $powersteering,
				'driverairbag'		=> $driverairbag,
				'passengerairbag'	=> $passengerairbag,
				'powerwindows'		=> $powerwindows,
				'cdplayer'			=> $cdplayer,
				'centrallocking'	=> $centrallocking,
				'crashsensor'		=> $crashsensor,
				'leatherseats'		=> $leatherseats
			);

			$this->mobil_model->insert_data($data, 'tb_mobil');
			$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
				  Data Berhasil di Tambahkan!
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>');
			redirect('admin/data_mobil');
		}

		public function detail_mobil($id)
		{
			$data['detail'] = $this->mobil_model->ambil_id_mobil($id);
			$this->load->view('templates_admin/header');
			$this->load->view('templates_admin/sidebar');
			$this->load->view('admin/detail_mobil', $data);
			$this->load->view('templates_admin/footer');
		}

		public function edit_mobil($id)
		{
			$where = array('id_mobil' => $id);
			$data['mobil'] = $this->db->query("SELECT * FROM tb_mobil mb, tb_merk mrk WHERE mb.nama_merk=mrk.nama_merk AND mb.id_mobil='$id'")->result();
			$data['merk'] = $this->mobil_model->get_data('tb_merk')->result();
			$this->load->view('templates_admin/header');
			$this->load->view('templates_admin/sidebar');
			$this->load->view('admin/edit_mobil_form', $data);
			$this->load->view('templates_admin/footer');
		}

		public function edit_mobil_aksi()
		{
			$id 					= $this->input->post('id_mobil');
			$nama_mobil				= $this->input->post('nama_mobil');
			$nama_merk				= $this->input->post('nama_merk');
			$nopol					= $this->input->post('nopol');
			$deskripsi				= $this->input->post('deskripsi');
			$harga					= $this->input->post('harga');
			$bbm					= $this->input->post('bbm');
			$tahun					= $this->input->post('tahun');
			$seating				= $this->input->post('seating');
			$airconditioner			= $this->input->post('aksesoris[1]');
			$powerdoorlocks			= $this->input->post('aksesoris[2]');
			$antilockbrakingsystem	= $this->input->post('aksesoris[3]');
			$brakeassist			= $this->input->post('aksesoris[4]');
			$powersteering			= $this->input->post('aksesoris[5]');
			$driverairbag			= $this->input->post('aksesoris[6]');
			$passengerairbag		= $this->input->post('aksesoris[7]');
			$powerwindows			= $this->input->post('aksesoris[8]');
			$cdplayer				= $this->input->post('aksesoris[9]');
			$centrallocking			= $this->input->post('aksesoris[10]');
			$crashsensor			= $this->input->post('aksesoris[11]');
			$leatherseats			= $this->input->post('aksesoris[12]');
			$gambar1			= $_FILES['image1']['name'];
			if($gambar1 = ''){}else{
				$config['upload_path']		= './assets/uploads';
				$config['allowed_types']	= 'jpg|jpeg|png|gif';

				$this->load->library('upload', $config);
				if(!$this->upload->do_upload('image1')){
					echo "Gambar Gagal di Upload!";
				}else{
					$gambar1 = $this->upload->data('file_name');
				}
			}
			$gambar2			= $_FILES['image2']['name'];
			if($gambar2 = ''){}else{
				$config['upload_path']		= './assets/uploads';
				$config['allowed_types']	= 'jpg|jpeg|png|gif';

				$this->load->library('upload', $config);
				if(!$this->upload->do_upload('image2')){
					echo "Gambar Gagal di Upload!";
				}else{
					$gambar2 = $this->upload->data('file_name');
				}
			}
			$gambar3			= $_FILES['image3']['name'];
			if($gambar3 = ''){}else{
				$config['upload_path']		= './assets/uploads';
				$config['allowed_types']	= 'jpg|jpeg|png|gif';

				$this->load->library('upload', $config);
				if(!$this->upload->do_upload('image3')){
					echo "Gambar Gagal di Upload!";
				}else{
					$gambar3 = $this->upload->data('file_name');
				}
			}

			$data = array(
				'nama_mobil'		=> $nama_mobil,
				'nama_merk'			=> $nama_merk,	
				'nopol'				=> $nopol,
				'deskripsi'			=> $deskripsi,
				'harga'				=> $harga,
				'bbm'				=> $bbm,
				'tahun'				=> $tahun,
				'seating'			=> $seating,
				'image1'			=> $gambar1,
				'image2'			=> $gambar2,
				'image3'			=> $gambar3,
				'airconditioner'	=> $airconditioner,
				'powerdoorlocks'	=> $powerdoorlocks,
				'antilockbrakingsystem'	=> $antilockbrakingsystem,
				'brakeassist'		=> $brakeassist,
				'powersteering'		=> $powersteering,
				'driverairbag'		=> $driverairbag,
				'passengerairbag'	=> $passengerairbag,
				'powerwindows'		=> $powerwindows,
				'cdplayer'			=> $cdplayer,
				'centrallocking'	=> $centrallocking,
				'crashsensor'		=> $crashsensor,
				'leatherseats'		=> $leatherseats
			);

			$where = array(
					'id_mobil'		=> $id
			);

			$this->mobil_model->update_data('tb_mobil', $data, $where);
			$this->session->set_flashdata('pesan', '<div class="alert alert-info alert-dismissible fade show" role="alert">
				  Data Berhasil di Ubah!
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>');
			redirect('admin/data_mobil');
		}

		public function delete($id)
		{
			$where = array('id_mobil' => $id);
			$this->mobil_model->delete_data($where, 'tb_mobil');
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
				  Data Berhasil di Hapus!
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>');
			redirect('admin/data_mobil');
		}
	}
 ?>