<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengumuman extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_lamaran');
        $this->load->library('form_validation');
        $this->load->helper(array('url', 'form'));
    }

     public function index(){
        $this->load->database();
        $data['title'] = 'Pengumuman';
        $data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
        $data['list_lamaran'] = $this->M_lamaran->tampil_data_lamaran();	
    
       
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('pengumuman/index', $data);
        $this->load->view('templates/footer');
    }

}