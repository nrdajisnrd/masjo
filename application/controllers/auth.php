<?php

    class Auth extends CI_Controller{

        public function login()
        {
            $this->form_validation->set_rules('email', 'Email', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required');
            if ($this->form_validation->run() == FALSE){
                $this->load->view('templates_admin/header');
                $this->load->view('formlogin');
                $this->load->view('templates_admin/footer');
            }else{
                $email      = $this->input->post('email');
                $password   = $this->input->post('password');
                $user       = $this->db->get_where('tb_user', ['email' => $email])->row_array();
                if (password_verify($password, $user['password'])) {
                    $data = [
                        'email'     => $user['email'],
                        'role_id'   => $user['role_id']
                    ];
                    $this->session->set_userdata('nama_user', $user['nama_user']);
                    $this->session->set_userdata('email', $user['email']);
                    $this->session->set_userdata('role_id', $user['role_id']);
                    if ($user['role_id'] == 1) {
                        redirect('admin/dashboard');
                    } else {
                        redirect('customer/dashboard');
                    }
                } else {
                    $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    Maaf Username atau Password Salah!
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>');
                  redirect('auth/login');
                }

                /*
                $auth = $this->auth_model->cek_login();
                if ($auth == FALSE){
                    $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    Maaf Username atau Password Salah!
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>');
                  redirect('auth/login');
                }else{
                    $this->session->set_userdata('nama_user', $auth->nama_user);
                    $this->session->set_userdata('email', $auth->email);
                    $this->session->set_userdata('role_id', $auth->role_id);

                    switch ($auth->role_id){
                        case 1 : redirect('admin/dashboard');
                            break;
                        case 2 : redirect('customer/dashboard');
                            break;
                        default: break;
                    }
                }*/
            }
        }

        public function logout()
        {
            $this->session->sess_destroy();
            redirect('customer/dashboard');
        }
    }
?>