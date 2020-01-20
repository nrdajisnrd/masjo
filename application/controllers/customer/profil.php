<?php

    class Profil extends CI_Controller{

        public function index()
        {
            $data['profil'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
            $this->form_validation->set_rules('nama_user', 'Nama Lengkap', 'required|trim');
            $this->form_validation->set_rules('telp', 'Nomor Telepon/WA', 'required|trim');
            $this->form_validation->set_rules('alamat', 'Alamat Lengkap', 'required');
            if ($this->form_validation->run() == FALSE) {
                $this->load->view('templates_cust/header');
                $this->load->view('templates_cust/sidebar', $data);
                $this->load->view('customer/profil', $data);
                $this->load->view('templates_cust/footer');
            } else {
                $nama       = $this->input->post('nama_user');
                $email      = $this->input->post('email');
                $telp       = $this->input->post('telp');
                $alamat     = $this->input->post('alamat');
                $image      = $_FILES['ktp']['name'];
                if ($image) {
                    $config['upload_path'] = './assets/assets_cust/img/ktp_cust/';
                    $config['allowed_types'] = 'jpg|jpeg|png|gif';
                    $config['max_size'] = '2048';
                    $config['overwrite'] = true;

                    $this->load->library('upload', $config);
                    if ($this->upload->do_upload('ktp')) {
                        $new_ktp = $this->upload->data('file_name');
                        $this->db->set('ktp', $new_ktp);
                    } else {
                        echo $this->upload->display_errors();
                    }
                }

                $this->db->set('nama_user', $nama);
                $this->db->set('telp', $telp);
                $this->db->set('alamat', $alamat);
                $this->db->where('email', $email);
                $this->db->update('tb_user');

                $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
				  Data Berhasil di Update!
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
                </div>');
                redirect('customer/profil');
            }
        }
    }
?>