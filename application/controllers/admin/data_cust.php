<?php

    class Data_cust extends CI_Controller{

        public function index()
        {
            if ($this->input->post('cari')) {
                $data['keyword'] = $this->input->post('keyword');
                $this->session->set_userdata('keyword', $data['keyword']);
            } else {
                $data['keyword'] = $this->session->userdata('keyword');
            }

            $config['base_url']     = site_url('admin/data_cust/index');
            $this->db->like('nama_user', $data['keyword']);
            $this->db->or_like('email', $data['keyword']);
            $this->db->or_like('telp', $data['keyword']);
            $this->db->or_like('alamat', $data['keyword']);
            $this->db->from('tb_user');
            $config['total_rows']   = $this->db->count_all_results();
            $data['total_rows']     = $config['total_rows'];
            $config['per_page']     = 5;
            $choice                 = $config['total_rows'] / $config['per_page'];
            $config['num_links']    = floor($choice);

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
            $data['start']          = $this->uri->segment(4);

            $data['cust'] = $this->cust_model->tampil_data('tb_user', $config['per_page'], $data['start'], $data['keyword'])->result();
            $data['pagination'] = $this->pagination->create_links();
            $this->load->view('templates_admin/header');
            $this->load->view('templates_admin/sidebar');
            $this->load->view('admin/data_cust', $data);
            $this->load->view('templates_admin/footer');
        }
    }
?>
