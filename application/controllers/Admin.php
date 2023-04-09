<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_lamaran');
        $this->load->library('form_validation');
        $this->load->helper(array('url', 'form'));
    }

    public function index(){

        $data['title'] = 'Dashboard';
        $data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();

        // $data['nama'] = $this->db->select('nama')->get('tb_pendaftaran')->result_array();
        // $data['lamaran'] = $this->m_lamaran-->getIdPrinter($id);
        $data['list_lamaran'] = $this->M_lamaran->tampil_data_lamaran();	

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('templates/footer');
    }


}