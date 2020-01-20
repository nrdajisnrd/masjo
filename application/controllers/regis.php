<?php

    class Regis extends CI_Controller{

        public function index()
        {
            $this->form_validation->set_rules('nama_user', 'Nama', 'required|trim');
            $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[tb_user.email]', ['email' => 'Email sudah terdaftar!']);
            $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[4]|matches[password2]', ['matches' => 'Password tidak sama!', 'min_length' => 'Password terlalu pendek!']);
            $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');
            $this->form_validation->set_rules('telp', 'Telepon', 'required|trim');
            $this->form_validation->set_rules('alamat', 'Alamat', 'required');
            if (empty($_FILES['ktp']['name'])) {
                $this->form_validation->set_rules('ktp', 'Foto KTP', 'required');
            }
            
            if ($this->form_validation->run() == FALSE) {
                $this->load->view('templates_admin/header');
                $this->load->view('regis');
                $this->load->view('templates_admin/footer');
            }else{
                $nama       = $this->input->post('nama_user');
                $email      = $this->input->post('email');
                $pass       = $this->input->post('password1');
                $telp       = $this->input->post('telp');
                $alamat     = $this->input->post('alamat');
                $role_id    = 2;
                $ktp		= $_FILES['ktp']['name'];
                if($ktp=''){}else{
                    $config['upload_path'] = './assets/assets_cust/img/ktp_cust/';
                    $config['allowed_types'] = 'jpg|jpeg|png|gif';
                    $config['overwrite'] = true;

                    $this->load->library('upload', $config);
                    if(!$this->upload->do_upload('ktp')){
                        echo "Foto KTP Gagal di Upload!";
                    }else {
                        $ktp = $this->upload->data('file_name');
                    }
                }

                $data = array(
                    'nama_user' => $nama,
                    'email'     => $email,
                    'password'  => password_hash($pass, PASSWORD_DEFAULT),
                    'telp'      => $telp,
                    'alamat'    => $alamat,
                    'role_id'   => $role_id,
                    'ktp'		=> $ktp
                );

                $this->db->insert('tb_user', $data);
                redirect('auth/login');
            }
        }
    }
?>