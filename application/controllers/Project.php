<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Project extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('Edit_model');
	}

	public function page_1()
	{	
		if($this->session->userdata('role_id') == NULL)
		{
			redirect('auth');
		}
		$role_id = $this->session->userdata('role_id');
		if($role_id != 2) {
			redirect('auth/error');
		} else {
		$this->form_validation->set_rules('comment', 'Comment', 'required');

		if ( $this->form_validation->run() == FALSE ) 
		{
		$data['project'] = $this->db->get_where('project', ['id' => 1])->row_array();
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['comment'] = $this->db->get_where('comment', ['status' => 9])->result_array();
		$data['judul'] = "KelasIOT v3 | Smart Door";
		$this->load->view('templates/content/header', $data);
		$this->load->view('templates/dashboard/header');
		$this->load->view('content/project/content_1/index', $data);
		$this->load->view('templates/dashboard/footer');
		} else {
			$data = [

			'email'     => htmlspecialchars($this->input->post('email', true)),
			'username'    => htmlspecialchars($this->input->post('username', true)),
			'comment'    => htmlspecialchars($this->input->post('comment', true)),			
			'date'  => date('Y-m-d'),
			'picture'   => htmlspecialchars($this->input->post('picture', true)),
			'status' => 9

		];

		$this->db->insert('comment', $data);
		$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert"> Comment Berhasil Dikirim :) </div>');
		redirect('project/page_1');
		}
		}
	}

	public function edit_page_1()
	{
		if($this->session->userdata('role_id') == NULL)
		{
			redirect('auth');
		}
		$role_id = $this->session->userdata('role_id');
		if($role_id != 1) {
			redirect('auth/error');
		} else {
		$this->load->model('Edit_model');
		$data['project'] = $this->db->get_where('project', ['id' => 1])->row_array();
		$data['role'] = $this->db->get_where('user_role', ['id' => $this->session->userdata('role_id')])->row_array();
		
		$this->form_validation->set_rules('title', 'Title', 'required|trim');
		$this->form_validation->set_rules('content', 'content', 'required|trim');
		$this->form_validation->set_rules('program', 'program', 'required|trim');
		$this->form_validation->set_rules('summary', 'summary', 'required|trim');
		$this->form_validation->set_rules('author', 'author', 'required|trim');

		if ( $this->form_validation->run() == FALSE ) 
		{
		$data['judul'] = 'KelasIOT v3 | Edit Content 1';
		$this->load->view('templates/admin/header', $data);
		$this->load->view('content/project/content_1/edit', $data);
		$this->load->view('templates/admin/footer');
		} else {
			$id = $this->input->post('id_content');
			$this->Edit_model->Project($id);
			$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert"> Project Page 1 Berhasil Diubah :) </div>');
			redirect('project/edit_page_1');
		}
		}
	}

	public function page_2()
	{
		if($this->session->userdata('role_id') == NULL)
		{
			redirect('auth');
		}
		$role_id = $this->session->userdata('role_id');
		if($role_id != 2) {
			redirect('auth/error');
		} else {
		$this->form_validation->set_rules('comment', 'Comment', 'required');

		if ( $this->form_validation->run() == FALSE ) 
		{
		$data['project'] = $this->db->get_where('project', ['id' => 2])->row_array();
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['comment'] = $this->db->get_where('comment', ['status' => 10])->result_array();
		$data['judul'] = "KelasIOT v3 | Smart Trash";
		$this->load->view('templates/content/header', $data);
		$this->load->view('templates/dashboard/header');
		$this->load->view('content/project/content_2/index', $data);
		$this->load->view('templates/dashboard/footer');
		} else {
			$data = [

			'email'     => htmlspecialchars($this->input->post('email', true)),
			'username'    => htmlspecialchars($this->input->post('username', true)),
			'comment'    => htmlspecialchars($this->input->post('comment', true)),			
			'date'  => date('Y-m-d'),
			'picture'   => htmlspecialchars($this->input->post('picture', true)),
			'status' => 10

		];

		$this->db->insert('comment', $data);
		$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert"> Comment Berhasil Dikirim :) </div>');
		redirect('project/page_2');
		}
		}
	}

	public function edit_page_2()
	{
		if($this->session->userdata('role_id') == NULL)
		{
			redirect('auth');
		}
		$role_id = $this->session->userdata('role_id');
		if($role_id != 1) {
			redirect('auth/error');
		} else {
		$this->load->model('Edit_model');
		$data['project'] = $this->db->get_where('project', ['id' => 2])->row_array();
		$data['role'] = $this->db->get_where('user_role', ['id' => $this->session->userdata('role_id')])->row_array();
		
		$this->form_validation->set_rules('title', 'Title', 'required|trim');
		$this->form_validation->set_rules('content', 'content', 'required|trim');
		$this->form_validation->set_rules('program', 'program', 'required|trim');
		$this->form_validation->set_rules('summary', 'summary', 'required|trim');
		$this->form_validation->set_rules('author', 'author', 'required|trim');

		if ( $this->form_validation->run() == FALSE ) 
		{
		$data['judul'] = 'KelasIOT v3 | Edit Content 2';
		$this->load->view('templates/admin/header', $data);
		$this->load->view('content/project/content_2/edit', $data);
		$this->load->view('templates/admin/footer');
		} else {
			$id = $this->input->post('id_content');
			$this->Edit_model->Project($id);
			$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert"> Project Page 2 Berhasil Diubah :) </div>');
			redirect('project/edit_page_2');
		}
		}
	}

	public function page_3()
	{
		if($this->session->userdata('role_id') == NULL)
		{
			redirect('auth');
		}
		$role_id = $this->session->userdata('role_id');
		if($role_id != 2) {
			redirect('auth/error');
		} else {
		$this->form_validation->set_rules('comment', 'Comment', 'required');

		if ( $this->form_validation->run() == FALSE ) 
		{
		$data['project'] = $this->db->get_where('project', ['id' => 3])->row_array();
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['comment'] = $this->db->get_where('comment', ['status' => 11])->result_array();
		$data['judul'] = "KelasIOT v3 | Smart Lamp";
		$this->load->view('templates/content/header', $data);
		$this->load->view('templates/dashboard/header');
		$this->load->view('content/project/content_3/index', $data);
		$this->load->view('templates/dashboard/footer');
		} else {
			$data = [

			'email'     => htmlspecialchars($this->input->post('email', true)),
			'username'    => htmlspecialchars($this->input->post('username', true)),
			'comment'    => htmlspecialchars($this->input->post('comment', true)),			
			'date'  => date('Y-m-d'),
			'picture'   => htmlspecialchars($this->input->post('picture', true)),
			'status' => 11

		];

		$this->db->insert('comment', $data);
		$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert"> Comment Berhasil Dikirim :) </div>');
		redirect('project/page_3');
		}
		}
	}

	public function edit_page_3()
	{
		if($this->session->userdata('role_id') == NULL)
		{
			redirect('auth');
		}
		$role_id = $this->session->userdata('role_id');
		if($role_id != 1) {
			redirect('auth/error');
		} else {
		$this->load->model('Edit_model');
		$data['project'] = $this->db->get_where('project', ['id' => 3])->row_array();
		$data['role'] = $this->db->get_where('user_role', ['id' => $this->session->userdata('role_id')])->row_array();
		
		$this->form_validation->set_rules('title', 'Title', 'required|trim');
		$this->form_validation->set_rules('content', 'content', 'required|trim');
		$this->form_validation->set_rules('program', 'program', 'required|trim');
		$this->form_validation->set_rules('summary', 'summary', 'required|trim');
		$this->form_validation->set_rules('author', 'author', 'required|trim');

		if ( $this->form_validation->run() == FALSE ) 
		{
		$data['judul'] = 'KelasIOT v3 | Edit Content 3';
		$this->load->view('templates/admin/header', $data);
		$this->load->view('content/project/content_3/edit', $data);
		$this->load->view('templates/admin/footer');
		} else {
			$id = $this->input->post('id_content');
			$this->Edit_model->Project($id);
			$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert"> Project Page 3 Berhasil Diubah :) </div>');
			redirect('project/edit_page_3');
		}
		}
	}

	public function page_4()
	{
		if($this->session->userdata('role_id') == NULL)
		{
			redirect('auth');
		}
		$role_id = $this->session->userdata('role_id');
		if($role_id != 2) {
			redirect('auth/error');
		} else {
		$this->form_validation->set_rules('comment', 'Comment', 'required');

		if ( $this->form_validation->run() == FALSE ) 
		{
		$data['project'] = $this->db->get_where('project', ['id' => 4])->row_array();
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['comment'] = $this->db->get_where('comment', ['status' => 12])->result_array();
		$data['judul'] = "KelasIOT v3 | Smart Window";
		$this->load->view('templates/content/header', $data);
		$this->load->view('templates/dashboard/header');
		$this->load->view('content/project/content_4/index', $data);
		$this->load->view('templates/dashboard/footer');
		} else {
			$data = [

			'email'     => htmlspecialchars($this->input->post('email', true)),
			'username'    => htmlspecialchars($this->input->post('username', true)),
			'comment'    => htmlspecialchars($this->input->post('comment', true)),			
			'date'  => date('Y-m-d'),
			'picture'   => htmlspecialchars($this->input->post('picture', true)),
			'status' => 11

		];

		$this->db->insert('comment', $data);
		$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert"> Comment Berhasil Dikirim :) </div>');
		redirect('project/page_4');
		}
		}
	}

	public function edit_page_4()
	{
		if($this->session->userdata('role_id') == NULL)
		{
			redirect('auth');
		}
		$role_id = $this->session->userdata('role_id');
		if($role_id != 1) {
			redirect('auth/error');
		} else {
		$this->load->model('Edit_model');
		$data['project'] = $this->db->get_where('project', ['id' => 4])->row_array();
		$data['role'] = $this->db->get_where('user_role', ['id' => $this->session->userdata('role_id')])->row_array();
		
		$this->form_validation->set_rules('title', 'Title', 'required|trim');
		$this->form_validation->set_rules('content', 'content', 'required|trim');
		$this->form_validation->set_rules('program', 'program', 'required|trim');
		$this->form_validation->set_rules('summary', 'summary', 'required|trim');
		$this->form_validation->set_rules('author', 'author', 'required|trim');

		if ( $this->form_validation->run() == FALSE ) 
		{
		$data['judul'] = 'KelasIOT v3 | Edit Content 4';
		$this->load->view('templates/admin/header', $data);
		$this->load->view('content/project/content_4/edit', $data);
		$this->load->view('templates/admin/footer');
		} else {
			$id = $this->input->post('id_content');
			$this->Edit_model->Project($id);
			$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert"> Project Page 4 Berhasil Diubah :) </div>');
			redirect('project/edit_page_4');
		}
		}
	}
}