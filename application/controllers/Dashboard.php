<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		ceklogin();
		$this->load->library('form_validation');
	}

	public function admin()
	{
		$role_id = $this->session->userdata('role_id');
		if($role_id != 1) {
			redirect('auth/error');
		} else {
		$data['num_user'] = $this->db->get_where('user', ['status' => 1])->num_rows();
		$data['num_blacklist'] = $this->db->get_where('user', ['status' => 0])->num_rows();
		$data['num_basic'] = $this->db->get('basic')->num_rows();
		$data['num_quiz'] = $this->db->get('quiz')->num_rows();
		$data['num_project'] = $this->db->get('project')->num_rows();
		$data['num_component'] = $this->db->get('component')->num_rows();
		$data['users'] = $this->db->get('user')->result_array();		
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['role'] = $this->db->get_where('user_role', ['id' => $this->session->userdata('role_id')])->row_array();		
		$data['judul'] = 'KelasIOT v3 | Admin Page';
		$this->load->view('templates/admin/header', $data);	
		$this->load->view('dashboard/admin-page');
		$this->load->view('templates/admin/footer');	
	  }
	}

	public function member()
	{

		$role_id = $this->session->userdata('role_id');
		if($role_id != 2) {
			redirect('auth/error');
		} else {
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['role'] = $this->db->get_where('user_role', ['id' => $this->session->userdata('role_id')])->row_array();		
		$data['judul'] = 'KelasIOT v3 | Member Page';
		$this->load->view('templates/dashboard/header', $data);		
		$this->load->view('dashboard/member-page');
		$this->load->view('templates/dashboard/footer');	
		}
	  }
	
}