<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}

	public function login()
	{	
		if($this->session->userdata('role_id') == 1)
		{
			redirect('dashboard/admin');
		}
		if($this->session->userdata('role_id') == 2)
		{
			redirect('dashboard/member');
		}
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'required|trim');
		if ( $this->form_validation->run() == FALSE )
		{
		$data['judul'] = 'KelasIOT v3 | Login';
		$this->load->view('templates/auth/header', $data);		
		$this->load->view('auth/login');
		$this->load->view('templates/home/footer');
		} else {
			$this->_login();
		}
	}

	private function _login()
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$status = $this->input->post('status');

		$user = $this->db->get_where('user', ['email' => $email])->row_array();

		if ($user)
		{

			if ($status == $user['status'])
			{

			if (password_verify($password, $user['password']))
			{

			$data = [				
				'email' => $user['email'],
				'username' => $user['username'],
				'role_id' => $user['role_id'],				
			];
			$this->session->set_userdata($data);
				if($user['role_id'] == 1)
				{
					redirect('dashboard/admin');
				}  else {
					redirect('dashboard/member');
				}

			} else {
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert"> Password Salah :( </div>');
			redirect('auth/login');
			}

		} else {
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert"> Akun Tidak Aktif :( </div>');
			redirect('auth/login');
		}
			
		 } else {
		 	$this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert"> Email Belum Terdaftar :( </div>');
			redirect('auth/login');
		 }
	}

	public function signup()
	{
		if($this->session->userdata('role_id') == 1)
		{
			redirect('dashboard/admin');
		}
		if($this->session->userdata('role_id') == 2)
		{
			redirect('dashboard/member');
		}
		$this->form_validation->set_rules('username', 'Username', 'required|trim');
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]');
		$this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]');
		$this->form_validation->set_rules('password2', 'Password', 'required|trim|min_length[3]|matches[password1]');		

		if ( $this->form_validation->run() == FALSE ) 
		{
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['role'] = $this->db->get_where('user_role', ['id' => $this->session->userdata('role_id')])->row_array();
		$data['judul'] = 'KelasIOT v3 | SignUp';
		$this->load->view('templates/auth/header', $data);
		$this->load->view('auth/signup');
		$this->load->view('templates/home/footer');
		} else {

		$data = [
			
			'email'    => htmlspecialchars($this->input->post('email', true)),
			'password' => password_hash($this->input->post('password1', true), PASSWORD_DEFAULT),
			'username' => htmlspecialchars($this->input->post('username', true)),			
			"role_id"  => 2,
			'gambar'   => 'default.jpg',
			'status'   => 1,
			'tanggal'  => date('Y-m-d')

		];

		$this->db->insert('user', $data);
		$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert"> Akun Berhasil Dibuat :) </div>');
		redirect('auth/login');
			}
	}

	public function logout()
	{
		if($this->session->userdata('role_id') == NULL)
		{
			redirect('');
		}
		$this->session->unset_userdata('email');
		$this->session->unset_userdata('role_id');
		$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert"> Anda Berhasil Logout :D </div>');
		redirect('auth/login');
	}

	public function error()
	{
		$role_id = $this->session->userdata('role_id');

		if($role_id == 1) {
		$data['judul'] = 'Error 403 | Akses Ditolak';
		$this->load->view('templates/auth/header', $data);
		$this->load->view('user/block/admin-block');
		$this->load->view('templates/auth/footer');
		}

		if($role_id == 2) {
		$data['judul'] = 'Error 403 | Akses Ditolak';
		$this->load->view('templates/auth/header', $data);
		$this->load->view('user/block/member-block');
		$this->load->view('templates/auth/footer');
		}
	}

}