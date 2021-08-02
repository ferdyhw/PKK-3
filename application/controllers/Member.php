<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		ceklogin();
		$this->load->library('form_validation');
		$this->load->model('Edit_model');
	}

//Member Page
	public function edit_profile()
	{	
		$role_id = $this->session->userdata('role_id');
		if($role_id != 2) {
			redirect('auth/error');
		} else {
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$this->load->model('Edit_model');
		$this->form_validation->set_rules('username', 'Username', 'required|trim');

		if ( $this->form_validation->run() == FALSE ) 
		{
		$data['judul'] = 'KelasIOT v3 | Edit Profile';
		$this->load->view('templates/member/header', $data);
		$this->load->view('templates/dashboard/header');
		$this->load->view('user/member/edit_profile', $data);
		$this->load->view('templates/dashboard/footer');		
		} else {
			$this->Edit_model->editprofile();
			$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert"> Profil Berhasil Diubah :) </div>');
			redirect('member/edit_profile');
		}
		}
	}

//Member Page
	public function edit_password()
	{	$role_id = $this->session->userdata('role_id');
		if($role_id != 2) {
			redirect('auth/error');
		} else {
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();		
		$this->load->model('Edit_model');
		$this->form_validation->set_rules('passwordlama', 'Password Lama', 'required|trim');
		$this->form_validation->set_rules('password1', 'Password Baru', 'required|trim|min_length[3]|matches[password2]');
		$this->form_validation->set_rules('password2', 'Konfirmasi Password Baru', 'required|trim|min_length[3]|matches[password1]');

		if ( $this->form_validation->run() == FALSE ) 
		{
		$data['judul'] = 'KelasIOT v3 | Edit Password';
		$this->load->view('templates/member/header', $data);
		$this->load->view('templates/dashboard/header');
		$this->load->view('user/member/edit_password', $data);
		$this->load->view('templates/dashboard/footer');		
		} else {
			$this->Edit_model->editpassword($data);
			$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert"> Password Berhasil Diubah :) </div>');
			redirect('member/edit_password');
		}
		}
	}

}