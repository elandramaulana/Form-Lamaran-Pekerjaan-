<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lamaran extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_lamaran');
        $this->load->library('form_validation');
        $this->load->helper(array('url', 'form'));
    }

     public function index(){
        $config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'jpg|png|pdf';
        $config['max_size']             = 10000; 
        $config['max_width']             = 10000; 
        $config['max_height']             = 10000; 

        $this->load->library('upload', $config);

        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('nik', 'Nik', 'required');
        $this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir Number', 'required');
        $this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir Address', 'required');
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required');
        $this->form_validation->set_rules('agama', 'Agama', 'required');
        $this->form_validation->set_rules('no_handphone', 'No Handphone', 'required');
        $this->form_validation->set_rules('pendidikan_terakhir', 'Pendidikan Terakhir', 'required');
        $this->form_validation->set_rules('nilai', 'Nilai', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('pengalaman_kerja', 'Pengalaman Kerja', 'required');
 



        if($this->form_validation->run() == FALSE){
            $data['title'] = 'Lamaran';
            $data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('lamaran/index', $data);
            $this->load->view('templates/footer');
        }else{

             
        if (! $this->upload->do_upload('pasfhoto')) {
            $error = array('error' => $this->upload->display_errors());
            $this->load->view('lamaran/index', $error);
        } else {
            $pasfhoto = $this->upload->data('file_name');
        }
        
        // Lakukan upload ijazah
        if (! $this->upload->do_upload('ijazah')) {
            $error = array('error' => $this->upload->display_errors());
            $this->load->view('lamaran/index', $error);
        } else {
            $ijazah = $this->upload->data('file_name');
        }
        
        // Lakukan upload KTP
        if (! $this->upload->do_upload('ktp')) {
            $error = array('error' => $this->upload->display_errors());
            $this->load->view('lamaran/index', $error);
        } else {
            $ktp = $this->upload->data('file_name');
        }
        // Lakukan upload Sertifikat
        if (! $this->upload->do_upload('sertifikat')) {
            $error = array('error' => $this->upload->display_errors());
            $this->load->view('lamaran/index', $error);
        } else {
            $sertifikat = $this->upload->data('file_name');
        }

        $data_file = array(
            'pasfhoto' => $pasfhoto,
            'ijazah' => $ijazah,
            'ktp' => $ktp,
            'sertifikat' => $sertifikat
        );

       

        $this->M_lamaran->tambah_lamaran($data_file);
           
        }
    }

 

}