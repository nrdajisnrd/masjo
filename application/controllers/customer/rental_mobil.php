<?php

    class Rental_mobil extends CI_Controller{

        public function index()
        {
            $data['mobil'] = $this->rental_model->tampil_data('tb_mobil')->result();
            $this->load->view('templates_cust/header');
            $this->load->view('templates_cust/sidebar');
            $this->load->view('customer/rental_mobil', $data);
            $this->load->view('templates_cust/footer');
        }

        public function detail_mobil($id)
        {
            $data['detail'] = $this->rental_model->ambil_id_mobil($id);
			$this->load->view('templates_cust/header');
			$this->load->view('templates_cust/sidebar');
			$this->load->view('customer/detail_mobil', $data);
			$this->load->view('templates_cust/footer');
        }

        public function sewa_mobil($id)
        {
            $where = array('id_mobil' => $id);
            $data['detail'] = $this->rental_model->ambil_id_mobil($id);
			$this->load->view('templates_cust/header');
			$this->load->view('templates_cust/sidebar');
			$this->load->view('customer/sewa_mobil', $data);
			$this->load->view('templates_cust/footer');
        }

        
        public function cek_mobil($id)
        {
            $where = array('id_mobil' => $id);
            $tglnow     = date('Y-m-d');
            $tglmulai   = strtotime($tglnow);
            $jmlhari    = 86400*1;
            $tglplus    = $tglmulai + $jmlhari;
            $now        = date('Y-m-d', $tglplus);

            if ($this->input->post('cek_mobil')) {
                $fromdate   = $this->input->post('fromdate');
                $todate     = $this->input->post('todate');
                $id         = $this->input->post('id_mobil');
                $pickup     = $this->input->post('pickup');
                $driver     = $this->input->post('driver');
                $data['pemesanan'] = $this->db->query("SELECT kode_pemesanan FROM tb_cek_pemesanan WHERE tgl_pesan BETWEEN '$fromdate' AND '$todate' AND id_mobil = '$id' AND status != 'Cancel'");
                if ($data['pemesanan']->num_rows() > 0) {
                    $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    Maaf Mobil tidak Tersedia di tanggal tersebut! Coba pilih tanggal lain.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				    </button>
                    </div>');
                    redirect('customer/rental_mobil/sewa_mobil/', $id);
                } else {
                    $this->session->set_flashdata('pesan', '<div class="alert alert-info alert-dismissible fade show" role="alert">
                    Mobil Tersedia!
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				    </button>
                    </div>');
                    redirect('customer/rental_mobil/sewa_mobil', $id);
                }
            }
        }
    }

?>