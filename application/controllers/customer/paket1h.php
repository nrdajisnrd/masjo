<?php

class Paket1h extends CI_Controller {

    public function index()
    {
        $this->load->view('templates_cust/header');
        $this->load->view('templates_cust/sidebar');
        $this->load->view('customer/paket1h');
        $this->load->view('templates_cust/footer');
    }
}
?>