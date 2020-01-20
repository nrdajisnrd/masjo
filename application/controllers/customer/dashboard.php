<?php

    class Dashboard extends CI_Controller{

        public function index()
        {
            $config['total_rows'] 	= $this->db->count_all('tb_berita');
			$config['per_page']		= 4;

            $data['berita'] = $this->berita_model->tampil_data_limit('tb_berita', $config['per_page'])->result();
            $data['profil'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
            $this->load->view('templates_cust/header');
            $this->load->view('templates_cust/sidebar', $data);
            $this->load->view('customer/dashboard', $data);
            $this->load->view('templates_cust/footer');
        }
    }
?>