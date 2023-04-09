<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Detail extends CI_Controller {
    public function save_pdf($filename, $content) {
        $filepath = FCPATH . 'pdf/' . $filename;
    
        // tulis konten file PDF ke dalam file di server
        write_file($filepath, $content);
    
        // set permission file menjadi 755
        chmod($filepath, 0755);
    
        // kirimkan response berupa URL file yang telah disimpan
        $response = array(
            'status' => true,
            'url' => base_url('pdf/' . $filename),
        );
        echo json_encode($response);
    }
}