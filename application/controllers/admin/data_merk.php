<?php 

	class Data_merk extends CI_Controller{
		
		public function index()
		{
			if ($this->input->post('cari')) {
				$data['keyword'] = $this->input->post('keyword');
				$this->session->set_userdata('keyword', $data['keyword']);
			} else {
				$data['keyword'] = $this->session->userdata('keyword');
			}

			$config['base_url']		= site_url('admin/data_merk/index');
			$this->db->like('nama_merk', $data['keyword']);
			$this->db->from('tb_merk');
			$config['total_rows'] 	= $this->db->count_all_results();
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
			$data['start']			= $this->uri->segment(4);

			$data['merk'] = $this->merk_model->tampil_data('tb_merk', $config['per_page'], $data['start'], $data['keyword'])->result();
			$data['pagination'] = $this->pagination->create_links();
			$this->load->view('templates_admin/header');
			$this->load->view('templates_admin/sidebar');
			$this->load->view('admin/data_merk', $data);
			$this->load->view('templates_admin/footer');
		}

		public function tambah_merk()
		{
			$data['merk'] = $this->merk_model->get_data('tb_merk')->result();
			$this->load->view('templates_admin/header');
			$this->load->view('templates_admin/sidebar');
			$this->load->view('admin/tambah_merk_form', $data);
			$this->load->view('templates_admin/footer');
		}

		public function tambah_merk_aksi()
		{
			$this->_rules();
			if($this->form_validation->run() == FALSE){
				$this->tambah_merk();
			}else{
				$nama_merk		= $this->input->post('nama_merk');

				$data = array(
					'nama_merk'		=> $nama_merk
				);

				$this->merk_model->insert_data($data, 'tb_merk');
				$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
					  Data Berhasil di Tambahkan!
					  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					    <span aria-hidden="true">&times;</span>
					  </button>
					</div>');
				redirect('admin/data_merk');
			}
		}

		public function edit($id)
		{
			$where = array('id_merk' => $id);
			$data['merk'] = $this->merk_model->edit_data($where, 'tb_merk')->result();
			$this->load->view('templates_admin/header');
			$this->load->view('templates_admin/sidebar');
			$this->load->view('admin/edit_merk_form', $data);
			$this->load->view('templates_admin/footer');
		}

		public function edit_merk_aksi()
		{
			$id 		= $this->input->post('id_merk');
			$nama_merk 	= $this->input->post('nama_merk');

			$data = array(
				'nama_merk'		=> $nama_merk
			);

			$where = array(
				'id_merk'		=> $id
			);

			$this->merk_model->update_data($where, $data, 'tb_merk');
			$this->session->set_flashdata('pesan', '<div class="alert alert-info alert-dismissible fade show" role="alert">
				  Data Berhasil di Edit!
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>');
			redirect('admin/data_merk');
		}

		public function delete($id)
		{
			$where = array('id_merk' => $id);
			$this->merk_model->delete_data($where, 'tb_merk');
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
				  Data Berhasil di Hapus!
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>');
			redirect('admin/data_merk');
		}

		public function _rules()
		{
			$this->form_validation->set_rules('nama_merk', 'Nama Merk', 'required', ['required' => 'Harus diisi!']);
		}
	}
 ?>