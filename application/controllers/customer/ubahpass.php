<?php

    class Ubahpass extends CI_Controller{

        public function index()
        {
            $data['profil'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();

            $this->form_validation->set_rules('passlama', 'Password Lama', 'required|trim');
            $this->form_validation->set_rules('passbaru1', 'Password Baru', 'required|trim|min_length[4]|matches[passbaru2]');
            $this->form_validation->set_rules('passbaru2', 'Konfirmasi Password', 'required|trim|min_length[4]|matches[passbaru1]');
            if ($this->form_validation->run() == FALSE) {
                $this->load->view('templates_cust/header');
                $this->load->view('templates_cust/sidebar', $data);
                $this->load->view('customer/ubahpass', $data);
                $this->load->view('templates_cust/footer');
            } else {
                $passlama = $this->input->post('passlama');
                $passbaru = $this->input->post('passbaru1');
                if (!password_verify($passlama, $data['profil']['password'])) {
                    $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">Password lama salah!<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				    </button>
                    </div>');
                    redirect('customer/ubahpass');
                } else {
                    if ($passlama == $passbaru) {
                        $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">Password baru tidak boleh sama dengan password lama!<button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                        </div>');
                        redirect('customer/ubahpass');
                    } else {
                        $hash = password_hash($passbaru, PASSWORD_DEFAULT);
                        $this->db->set('password', $hash);
                        $this->db->where('email', $this->session->userdata('email'));
                        $this->db->update('tb_user');
                        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">Password berhasil di Update!<button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                        </div>');
                        redirect('customer/ubahpass');
                    }
                }
            }
        }
    }
?>