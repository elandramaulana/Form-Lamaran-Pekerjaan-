<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Jadwal extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_lamaran');
        $this->load->library('form_validation');
        $this->load->helper(array('url', 'form'));
    }
    public function setjadwal($id){
        
        $this->load->database();
        $data['lamaran'] = $this->M_lamaran->getIdlamaran($id);
        

        $this->form_validation->set_rules('jadwal', 'Jadwal', 'required');

        if($this->form_validation->run() == FALSE){
            $data['title'] = 'Set Jadwal Wawancara';
			$this->load->view('templates/auth_header', $data);
			$this->load->view('jadwal/index');
			$this->load->view('templates/auth_footer');
        }else{
           $this->M_lamaran->set_wawancara();
        }
    }
}