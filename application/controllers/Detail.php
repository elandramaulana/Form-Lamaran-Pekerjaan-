<?php
defined('BASEPATH') OR exit('No direct script access allowed');
// require_once __DIR__ . 'vendor/autoload.php';



class Detail extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_lamaran');
        $this->load->library('form_validation');
        $this->load->helper(array('url', 'form'));
        $this->load->database();
        // $this->load->library('pdf_generator');
        $this->load->library('pdf');
    }

    public function view($id){
       
        $data['lamaran'] = $this->M_lamaran->getIdlamaran($id);
        $data['title'] = 'Detail Lamaran';
        $this->load->view('templates/auth_header', $data);
		$this->load->view('detail/index');
		$this->load->view('templates/auth_footer');
        $this->M_lamaran->view_lamaran();
    }

    public function create_pdf($id){
        require_once APPPATH.'/libraries/tcpdf/tcpdf.php';
      

        $data['lamaran'] = $this->M_lamaran->getIdlamaran($id);

        $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

        $pdf->SetCreator(PDF_CREATOR);
        $pdf->SetAuthor('Your Name');
        $pdf->SetTitle('Surat Lamaran');
        $pdf->SetSubject('Surat Lamaran');
        $pdf->SetKeywords('TCPDF, PDF, example, test, guide');

        $pdf->setHeaderData('', 0, 'Surat Lamaran', '');

        $pdf->setFooterData(['0',64,0], ['0','0',0], '','');

        $pdf->setPrintHeader(true);
        $pdf->setPrintFooter(true);

        $pdf->SetFont('times', '', 12);

        $pdf->AddPage();

        $html = '';

            foreach($data as $lamaran){ 
        $html .= '  
            <h5>Nomor Pendaftaran : '.$lamaran['no_pendaftaran'].'</h5>
            <h5>Nama Lengkap : '.$lamaran['nama'].'</h5>
            <h5>NIK : '.$lamaran['nik'].'</h5>
            <h5>Tempat Lahir : '.$lamaran['tempat_lahir'].'</h5>
            <h5>Tanggal Lahir : '.$lamaran['tanggal_lahir'].'</h5>
            <h5>Jenis Kelamin : '.$lamaran['jenis_kelamin'].'</h5>
            <h5>Agama : '.$lamaran['agama'].'</h5>
            <h5>NO Handphone : '.$lamaran['no_handphone'].'</h5>
            <h5>Nilai : '.$lamaran['nilai'].'</h5>
            <h5>Alamat : '.$lamaran['alamat'].'</h5>
            <h5>Pengalaman Kerja : '.$lamaran['pengalaman_kerja'].'</h5>
            <h5>Jadwal : '.$lamaran['jadwal'].'</h5>
            <h5>Status : '.$lamaran['lulus'].'</h5>
   
        '; }

    

        $pdf->writeHTML($html, true, false, true, false, '');
        $pdf->Output('Surat Lamaran '.$lamaran['nama'].'_ '.$lamaran['nik'].'.pdf', 'I');

     
    }


}