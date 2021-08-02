<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Basic extends CI_Controller {

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
		$data['basic'] = $this->db->get_where('basic', ['id' => 1])->row_array();
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['comment'] = $this->db->get_where('comment', ['status' => 1])->result_array();
		$data['judul'] = "KelasIOT v3 | Pengertian IOT";
		$this->load->view('templates/content/header', $data);
		$this->load->view('templates/dashboard/header');
		$this->load->view('content/basic/content_1/index', $data);		
		$this->load->view('templates/dashboard/footer');
		} else {
			$data = [

			'email'     => htmlspecialchars($this->input->post('email', true)),
			'username'    => htmlspecialchars($this->input->post('username', true)),
			'comment'    => htmlspecialchars($this->input->post('comment', true)),			
			'date'  => date('Y-m-d'),
			'picture'   => htmlspecialchars($this->input->post('picture', true)),
			'status' => 1

		];

		$this->db->insert('comment', $data);
		$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert"> Comment Berhasil Dikirim :) </div>');
		redirect('basic/page_1');
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
		$data['basic'] = $this->db->get_where('basic', ['id' => 1])->row_array();
		$data['role'] = $this->db->get_where('user_role', ['id' => $this->session->userdata('role_id')])->row_array();
		
		$this->form_validation->set_rules('title', 'Title', 'required|trim');
		$this->form_validation->set_rules('content', 'content', 'required|trim');
		$this->form_validation->set_rules('summary', 'summary', 'required|trim');
		$this->form_validation->set_rules('author', 'author', 'required|trim');

		if ( $this->form_validation->run() == FALSE ) 
		{
		$data['judul'] = 'KelasIOT v3 | Edit Content 1';
		$this->load->view('templates/admin/header', $data);
		$this->load->view('content/basic/content_1/edit', $data);
		$this->load->view('templates/admin/footer');
		} else {
			$id = $this->input->post('id_content');
			$this->Edit_model->Content($id);
			$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert"> Basic Page 1 Berhasil Diubah :) </div>');
			redirect('basic/edit_page_1');
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
		$data['basic'] = $this->db->get_where('basic', ['id' => 2])->row_array();
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['comment'] = $this->db->get_where('comment', ['status' => 2])->result_array();
		$data['judul'] = "KelasIOT v3 | Cara Kerja IOT";
		$this->load->view('templates/content/header', $data);
		$this->load->view('templates/dashboard/header');
		$this->load->view('content/basic/content_2/index', $data);		
		$this->load->view('templates/dashboard/footer');
		} else {
			$data = [

			'email'     => htmlspecialchars($this->input->post('email', true)),
			'username'    => htmlspecialchars($this->input->post('username', true)),
			'comment'    => htmlspecialchars($this->input->post('comment', true)),			
			'date'  => date('Y-m-d'),
			'picture'   => htmlspecialchars($this->input->post('picture', true)),
			'status' => 2

		];

		$this->db->insert('comment', $data);
		$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert"> Comment Berhasil Dikirim :) </div>');
		redirect('basic/page_2');
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
		$data['basic'] = $this->db->get_where('basic', ['id' => 2])->row_array();
		$data['role'] = $this->db->get_where('user_role', ['id' => $this->session->userdata('role_id')])->row_array();
		
		$this->form_validation->set_rules('title', 'Title', 'required|trim');
		$this->form_validation->set_rules('content', 'content', 'required|trim');
		$this->form_validation->set_rules('summary', 'summary', 'required|trim');
		$this->form_validation->set_rules('author', 'author', 'required|trim');

		if ( $this->form_validation->run() == FALSE ) 
		{
		$data['judul'] = 'KelasIOT v3 | Edit Content 2';
		$this->load->view('templates/admin/header', $data);
		$this->load->view('content/basic/content_2/edit', $data);
		$this->load->view('templates/admin/footer');
		} else {
			$id = $this->input->post('id_content');
			$this->Edit_model->Content($id);
			$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert"> Basic Page 2 Berhasil Diubah :) </div>');
			redirect('basic/edit_page_2');
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
		$data['basic'] = $this->db->get_where('basic', ['id' => 3])->row_array();
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['comment'] = $this->db->get_where('comment', ['status' => 3])->result_array();
		$data['judul'] = "KelasIOT v3 | Karakteristik IOT";
		$this->load->view('templates/content/header', $data);
		$this->load->view('templates/dashboard/header');
		$this->load->view('content/basic/content_3/index', $data);		
		$this->load->view('templates/dashboard/footer');
		} else {
			$data = [

			'email'     => htmlspecialchars($this->input->post('email', true)),
			'username'    => htmlspecialchars($this->input->post('username', true)),
			'comment'    => htmlspecialchars($this->input->post('comment', true)),			
			'date'  => date('Y-m-d'),
			'picture'   => htmlspecialchars($this->input->post('picture', true)),
			'status' => 3

		];

		$this->db->insert('comment', $data);
		$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert"> Comment Berhasil Dikirim :) </div>');
		redirect('basic/page_3');
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
		$data['basic'] = $this->db->get_where('basic', ['id' => 3])->row_array();
		$data['role'] = $this->db->get_where('user_role', ['id' => $this->session->userdata('role_id')])->row_array();
		
		$this->form_validation->set_rules('title', 'Title', 'required|trim');
		$this->form_validation->set_rules('content', 'content', 'required|trim');
		$this->form_validation->set_rules('summary', 'summary', 'required|trim');
		$this->form_validation->set_rules('author', 'author', 'required|trim');

		if ( $this->form_validation->run() == FALSE ) 
		{
		$data['judul'] = 'KelasIOT v3 | Edit Content 3';
		$this->load->view('templates/admin/header', $data);
		$this->load->view('content/basic/content_3/edit', $data);
		$this->load->view('templates/admin/footer');
		} else {
			$id = $this->input->post('id_content');
			$this->Edit_model->Content($id);
			$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert"> Basic Page 3 Berhasil Diubah :) </div>');
			redirect('basic/edit_page_3');
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
		$data['basic'] = $this->db->get_where('basic', ['id' => 4])->row_array();
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['comment'] = $this->db->get_where('comment', ['status' => 4])->result_array();
		$data['judul'] = "KelasIOT v3 | Unsur-Unsur IOT";
		$this->load->view('templates/content/header', $data);
		$this->load->view('templates/dashboard/header');
		$this->load->view('content/basic/content_4/index', $data);		
		$this->load->view('templates/dashboard/footer');
		} else {
			$data = [

			'email'     => htmlspecialchars($this->input->post('email', true)),
			'username'    => htmlspecialchars($this->input->post('username', true)),
			'comment'    => htmlspecialchars($this->input->post('comment', true)),			
			'date'  => date('Y-m-d'),
			'picture'   => htmlspecialchars($this->input->post('picture', true)),
			'status' => 4

		];

		$this->db->insert('comment', $data);
		$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert"> Comment Berhasil Dikirim :) </div>');
		redirect('basic/page_4');
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
		$data['basic'] = $this->db->get_where('basic', ['id' => 4])->row_array();
		$data['role'] = $this->db->get_where('user_role', ['id' => $this->session->userdata('role_id')])->row_array();
		
		$this->form_validation->set_rules('title', 'Title', 'required|trim');
		$this->form_validation->set_rules('content', 'content', 'required|trim');
		$this->form_validation->set_rules('summary', 'summary', 'required|trim');
		$this->form_validation->set_rules('author', 'author', 'required|trim');

		if ( $this->form_validation->run() == FALSE ) 
		{
		$data['judul'] = 'KelasIOT v3 | Edit Content 4';
		$this->load->view('templates/admin/header', $data);
		$this->load->view('content/basic/content_4/edit', $data);
		$this->load->view('templates/admin/footer');
		} else {
			$id = $this->input->post('id_content');
			$this->Edit_model->Content($id);
			$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert"> Basic Page 4 Berhasil Diubah :) </div>');
			redirect('basic/edit_page_4');
		}
		}
	}

	public function page_5()
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
		$data['basic'] = $this->db->get_where('basic', ['id' => 5])->row_array();
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['comment'] = $this->db->get_where('comment', ['status' => 5])->result_array();
		$data['judul'] = "KelasIOT v3 | Klasifikasi IOT";
		$this->load->view('templates/content/header', $data);
		$this->load->view('templates/dashboard/header');
		$this->load->view('content/basic/content_5/index', $data);		
		$this->load->view('templates/dashboard/footer');
		} else {
			$data = [

			'email'     => htmlspecialchars($this->input->post('email', true)),
			'username'    => htmlspecialchars($this->input->post('username', true)),
			'comment'    => htmlspecialchars($this->input->post('comment', true)),			
			'date'  => date('Y-m-d'),
			'picture'   => htmlspecialchars($this->input->post('picture', true)),
			'status' => 5

		];

		$this->db->insert('comment', $data);
		$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert"> Comment Berhasil Dikirim :) </div>');
		redirect('basic/page_5');
		}
		}
	}

	public function edit_page_5()
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
		$data['basic'] = $this->db->get_where('basic', ['id' => 5])->row_array();
		$data['role'] = $this->db->get_where('user_role', ['id' => $this->session->userdata('role_id')])->row_array();
		
		$this->form_validation->set_rules('title', 'Title', 'required|trim');
		$this->form_validation->set_rules('content', 'content', 'required|trim');
		$this->form_validation->set_rules('summary', 'summary', 'required|trim');
		$this->form_validation->set_rules('author', 'author', 'required|trim');

		if ( $this->form_validation->run() == FALSE ) 
		{
		$data['judul'] = 'KelasIOT v3 | Edit Content 5';
		$this->load->view('templates/admin/header', $data);
		$this->load->view('content/basic/content_5/edit', $data);
		$this->load->view('templates/admin/footer');
		} else {
			$id = $this->input->post('id_content');
			$this->Edit_model->Content($id);
			$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert"> Basic Page 5 Berhasil Diubah :) </div>');
			redirect('basic/edit_page_5');
		}
		}
	}

	public function page_6()
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
		$data['basic'] = $this->db->get_where('basic', ['id' => 6])->row_array();
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['comment'] = $this->db->get_where('comment', ['status' => 6])->result_array();
		$data['judul'] = "KelasIOT v3 | Implementasi IOT";
		$this->load->view('templates/content/header', $data);
		$this->load->view('templates/dashboard/header');
		$this->load->view('content/basic/content_6/index', $data);		
		$this->load->view('templates/dashboard/footer');
		} else {
			$data = [

			'email'     => htmlspecialchars($this->input->post('email', true)),
			'username'    => htmlspecialchars($this->input->post('username', true)),
			'comment'    => htmlspecialchars($this->input->post('comment', true)),			
			'date'  => date('Y-m-d'),
			'picture'   => htmlspecialchars($this->input->post('picture', true)),
			'status' => 6

		];

		$this->db->insert('comment', $data);
		$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert"> Comment Berhasil Dikirim :) </div>');
		redirect('basic/page_6');
		}
		}
	}

	public function edit_page_6()
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
		$data['basic'] = $this->db->get_where('basic', ['id' => 6])->row_array();
		$data['role'] = $this->db->get_where('user_role', ['id' => $this->session->userdata('role_id')])->row_array();
		
		$this->form_validation->set_rules('title', 'Title', 'required|trim');
		$this->form_validation->set_rules('content', 'content', 'required|trim');
		$this->form_validation->set_rules('summary', 'summary', 'required|trim');
		$this->form_validation->set_rules('author', 'author', 'required|trim');

		if ( $this->form_validation->run() == FALSE ) 
		{
		$data['judul'] = 'KelasIOT v3 | Edit Content 6';
		$this->load->view('templates/admin/header', $data);
		$this->load->view('content/basic/content_6/edit', $data);
		$this->load->view('templates/admin/footer');
		} else {
			$id = $this->input->post('id_content');
			$this->Edit_model->Content($id);
			$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert"> Basic Page 6 Berhasil Diubah :) </div>');
			redirect('basic/edit_page_6');
		}
		}
	}

	public function page_7()
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
		$data['basic'] = $this->db->get_where('basic', ['id' => 7])->row_array();
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['comment'] = $this->db->get_where('comment', ['status' => 7])->result_array();
		$data['judul'] = "KelasIOT v3 | Sejarah IOT";
		$this->load->view('templates/content/header', $data);
		$this->load->view('templates/dashboard/header');
		$this->load->view('content/basic/content_7/index', $data);		
		$this->load->view('templates/dashboard/footer');
		} else {
			$data = [

			'email'     => htmlspecialchars($this->input->post('email', true)),
			'username'    => htmlspecialchars($this->input->post('username', true)),
			'comment'    => htmlspecialchars($this->input->post('comment', true)),			
			'date'  => date('Y-m-d'),
			'picture'   => htmlspecialchars($this->input->post('picture', true)),
			'status' => 7

		];

		$this->db->insert('comment', $data);
		$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert"> Comment Berhasil Dikirim :) </div>');
		redirect('basic/page_7');
		}
		}
	}

	public function edit_page_7()
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
		$data['basic'] = $this->db->get_where('basic', ['id' => 7])->row_array();
		$data['role'] = $this->db->get_where('user_role', ['id' => $this->session->userdata('role_id')])->row_array();
		
		$this->form_validation->set_rules('title', 'Title', 'required|trim');
		$this->form_validation->set_rules('content', 'content', 'required|trim');
		$this->form_validation->set_rules('summary', 'summary', 'required|trim');
		$this->form_validation->set_rules('author', 'author', 'required|trim');

		if ( $this->form_validation->run() == FALSE ) 
		{
		$data['judul'] = 'KelasIOT v3 | Edit Content 7';
		$this->load->view('templates/admin/header', $data);
		$this->load->view('content/basic/content_7/edit', $data);
		$this->load->view('templates/admin/footer');
		} else {
			$id = $this->input->post('id_content');
			$this->Edit_model->Content($id);
			$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert"> Basic Page 7 Berhasil Diubah :) </div>');
			redirect('basic/edit_page_7');
		}
		}
	}

	public function page_8()
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
		$data['basic'] = $this->db->get_where('basic', ['id' => 8])->row_array();
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['comment'] = $this->db->get_where('comment', ['status' => 8])->result_array();
		$data['judul'] = "KelasIOT v3 | Manfaat IOT";
		$this->load->view('templates/content/header', $data);
		$this->load->view('templates/dashboard/header');
		$this->load->view('content/basic/content_8/index', $data);		
		$this->load->view('templates/dashboard/footer');
		} else {
			$data = [

			'email'     => htmlspecialchars($this->input->post('email', true)),
			'username'    => htmlspecialchars($this->input->post('username', true)),
			'comment'    => htmlspecialchars($this->input->post('comment', true)),			
			'date'  => date('Y-m-d'),
			'picture'   => htmlspecialchars($this->input->post('picture', true)),
			'status' => 8

		];

		$this->db->insert('comment', $data);
		$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert"> Comment Berhasil Dikirim :) </div>');
		redirect('basic/page_8');
		}
		}
	}

	public function edit_page_8()
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
		$data['basic'] = $this->db->get_where('basic', ['id' => 8])->row_array();
		$data['role'] = $this->db->get_where('user_role', ['id' => $this->session->userdata('role_id')])->row_array();
		
		$this->form_validation->set_rules('title', 'Title', 'required|trim');
		$this->form_validation->set_rules('content', 'content', 'required|trim');
		$this->form_validation->set_rules('summary', 'summary', 'required|trim');
		$this->form_validation->set_rules('author', 'author', 'required|trim');

		if ( $this->form_validation->run() == FALSE ) 
		{
		$data['judul'] = 'KelasIOT v3 | Edit Content 8';
		$this->load->view('templates/admin/header', $data);
		$this->load->view('content/basic/content_8/edit', $data);
		$this->load->view('templates/admin/footer');
		} else {
			$id = $this->input->post('id_content');
			$this->Edit_model->Content($id);
			$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert"> Basic Page 8 Berhasil Diubah :) </div>');
			redirect('basic/edit_page_8');
		}
		}
	}

}