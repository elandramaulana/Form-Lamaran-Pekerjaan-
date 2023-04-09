<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
	}

	public function index()
	{
		$this->form_validation->set_rules('email', 'Email','required|trim|valid_email');
		$this->form_validation->set_rules('password', 'Password','required|trim');

		if($this->form_validation->run() == FALSE){
			$data['title'] = 'Login Page';
			$this->load->view('templates/auth_header', $data);
			$this->load->view('auth/login');
			$this->load->view('templates/auth_footer');

		}else{
			//login

			$this->_login();
		}
	
	}

	private function _login(){
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$lulus = 'tidak';
 
		$user = $this->db->get_where('tb_user', ['email' => $email])->row_array();
		

		if($user){
			if(password_verify($password, $user['password'])){
				$data1 = [
					'email' => $user['email'],
					'role_id' => $user['role_id'],
					// 'lulus' => $user['lulus']
				];

				// $data2 = [
				// 	'lulus' => $status['lulus']
				// ];

				$merged_session = array_merge($data1);
				// var_dump($merged_session);
				// die;

				$this->session->set_userdata($merged_session);
				if($user['role_id'] == 1){
					redirect('admin');
				}else{
				redirect('user');
				}
			}else{
				$this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">
				Wrong password!</div>');
				redirect('auth');
			}

		}else{
			$this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">
			Email is not registered!</div>');
			redirect('auth');
		}
	}

	public function registration()
	{

		$this->form_validation->set_rules('name', 'Name', 'required|trim');
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[tb_user.email]', [
			'is_unique' => 'This email has already registered!'
		]);
		$this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[8]|matches[password2]',[
			'matches' => 'Password dont match!',
			'min_length' => 'Password too short!'
		]);
		$this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

		if($this->form_validation->run() == false){
			$data['title'] = 'Registration';
			$this->load->view('templates/auth_header', $data);
			$this->load->view('auth/registration');
			$this->load->view('templates/auth_footer');
		}else{
			$data = [
				'username' => htmlspecialchars($this->input->post('name', true)) ,
				'email' => htmlspecialchars($this->input->post('email', true)) ,
				'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
				'role_id' => 2,
				'is_active' => 1,
				'date_created' => time(),
				// 'lulus' => 'Belum Lulu',
			];
			$this->db->insert('tb_user', $data);
			$this->session->set_flashdata('message','<div class="alert alert-success" role="alert">
			Account has been created, please login!</div>');
			redirect('auth');
		}
	
	
	}

	public function logout(){
		$this->session->unset_userdata('email');
		$this->session->unset_userdata('role_id');

		$this->session->set_flashdata('message','<div class="alert alert-success" role="alert">
		Logout success!</div>');
			redirect('auth');

	}
}
