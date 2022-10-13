<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Web extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }
    public function index()
    {
        $data['judul'] = 'Halaman Depan';
        $this->load->view('v_header', $data);
        $this->load->view('v_index');
        $this->load->view('v_footer');
    }
    public function about()
    {
        $data['judul'] = "Halaman About";
        $this->load->view('v_header', $data);
        $this->load->view('v_about');
        $this->load->view('v_footer');
    }
}
