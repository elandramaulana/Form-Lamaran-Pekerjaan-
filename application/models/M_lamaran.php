<?php 
 defined('BASEPATH') OR exit('No direct script access allowed');
class M_lamaran extends CI_Model{

    public function tambah_lamaran($data_file){

	    $data_form = [
	        "nama" => $this->input->post('nama', true),
	        "nik" => $this->input->post('nik', true),
	        "tempat_lahir" => $this->input->post('tempat_lahir', true),
	        "tanggal_lahir" => $this->input->post('tanggal_lahir', true),
	        "jenis_kelamin" => $this->input->post('jenis_kelamin', true),
	        "agama" => $this->input->post('agama', true),
	        "no_handphone" => $this->input->post('no_handphone', true),
	        "pendidikan_terakhir" => $this->input->post('pendidikan_terakhir', true),
	        "nilai" => $this->input->post('nilai', true),
	        "alamat" => $this->input->post('alamat', true),
	        "pengalaman_kerja" => $this->input->post('pengalaman_kerja', true),
            "lulus" => 'Belum Lulus',
            "jadwal" => '0000-00-00'
        ];

		$data = array_merge($data_file, $data_form);

        $this->db->insert('tb_pendaftaran',$data);
        redirect('lamaran/index');
    }

    public function get_lamaran(){
        $query = $this->db->get('tb_pendaftaran');
        return $query->result();
    }

    function set_wawancara(){

	    $data = [
	        "jadwal" => $this->input->post('jadwal', true),
	        "no_pendaftaran" => $this->input->post('no_pendaftaran', true),
        ];

		$this->db->where('no_pendaftaran', $this->input->post('no_pendaftaran'));
        $this->db->update('tb_pendaftaran',$data);
        redirect('admin/index');
    }
    function set_kelulusan(){

	    $data = [
	        "lulus" => $this->input->post('lulus', true),
	        "no_pendaftaran" => $this->input->post('no_pendaftaran', true),
        ];

		$this->db->where('no_pendaftaran', $this->input->post('no_pendaftaran'));
        $this->db->update('tb_pendaftaran',$data);
        redirect('admin/index');
    }

    function getIdlamaran($id){
		return $this->db->get_where('tb_pendaftaran', ['no_pendaftaran' => $id])-> row_array();
	}
    function get_pengumuman($pengumuman){
		return $this->db->get_where('tb_pendaftaran', ['lulus' => $pengumuman])-> row_array();
	}

    function tampil_data_lamaran(){
        return $this->db->get('tb_pendaftaran')->result_array();
	}
    function view_lamaran(){
        return $this->db->get('tb_pendaftaran')->result_array();
	}
}