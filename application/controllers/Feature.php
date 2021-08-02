<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Feature extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('Edit_model');
	}

// Member Page
	public function basic()
	{	
		if($this->session->userdata('role_id') == NULL)
		{
			redirect('auth');
		}
		$role_id = $this->session->userdata('role_id');
		if($role_id != 2) {
			redirect('auth/error');
		} else {

		$data['content1'] = $this->db->get_where('basic', ['id' => 1])->row_array();
		$data['content2'] = $this->db->get_where('basic', ['id' => 2])->row_array();
		$data['content3'] = $this->db->get_where('basic', ['id' => 3])->row_array();
		$data['content4'] = $this->db->get_where('basic', ['id' => 4])->row_array();	
		$data['content5'] = $this->db->get_where('basic', ['id' => 5])->row_array();
		$data['content6'] = $this->db->get_where('basic', ['id' => 6])->row_array();
		$data['content7'] = $this->db->get_where('basic', ['id' => 7])->row_array();
		$data['content8'] = $this->db->get_where('basic', ['id' => 8])->row_array();

		$data['judul'] = 'KelasIOT v3 | Basic';
		$this->load->view('templates/dashboard/header', $data);
		$this->load->view('feature/basic/index', $data);
		$this->load->view('templates/dashboard/footer');
		}
	}

// Admin Page
	public function edit_basic()
	{
		if($this->session->userdata('role_id') == NULL)
		{
			redirect('auth');
		}
		$role_id = $this->session->userdata('role_id');
		$data['role'] = $this->db->get_where('user_role', ['id' => $this->session->userdata('role_id')])->row_array();
		if($role_id != 1) {
			redirect('auth/error');
		} else {
		$data['judul'] = 'KelasIOT v3 | Edit Basic';
		$this->load->view('templates/admin/header', $data);
		$this->load->view('feature/basic/edit', $data);
		$this->load->view('templates/admin/footer');
		}
	}

// Member Page
	public function quiz()
	{
		if($this->session->userdata('role_id') == NULL)
		{
			redirect('auth');
		}
		$role_id = $this->session->userdata('role_id');
		if($role_id != 2) {
			redirect('auth/error');
		} else {
		$data['quiz1'] = $this->db->get_where('quiz', ['id' => 1])->row_array();
		$data['quiz2'] = $this->db->get_where('quiz', ['id' => 2])->row_array();

		$data['judul'] = 'KelasIOT v3 | Quiz';
		$this->load->view('templates/dashboard/header', $data);
		$this->load->view('feature/quiz/index', $data);
		$this->load->view('templates/dashboard/footer');
		}
	}

	// Admin Page
	public function edit_quiz()
	{
		if($this->session->userdata('role_id') == NULL)
		{
			redirect('auth');
		}
		$this->form_validation->set_rules('soal', 'Soal', 'required');
		$this->form_validation->set_rules('opsi_a', 'Opsi A', 'required');
		$this->form_validation->set_rules('opsi_b', 'Opsi B', 'required');
		$this->form_validation->set_rules('opsi_c', 'Opsi C', 'required');
		$this->form_validation->set_rules('opsi_d', 'Opsi D', 'required');
		$this->form_validation->set_rules('jawaban', 'Jawaban', 'required');
		$this->form_validation->set_rules('status', 'status', 'required');
		$this->form_validation->set_rules('id_quiz', 'ID Quiz', 'required');

		if($this->form_validation->run() == FALSE)
		{
		$role_id = $this->session->userdata('role_id');		
		$data['quiz'] = $this->db->get('soal')->result_array();	
		$data['role'] = $this->db->get_where('user_role', ['id' => $this->session->userdata('role_id')])->row_array();
		if($role_id != 1) {
			redirect('auth/error');
		} else {
		$data['judul'] = 'KelasIOT v3 | Edit Quiz 1';		
		$this->load->view('templates/admin/header', $data);
		$this->load->view('feature/quiz/edit', $data);
		$this->load->view('templates/admin/footer');
			}
		} else {
			$id = $this->input->post('id_soal');
			$this->Edit_model->editQuiz($id);
			$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert"> Quiz Berhasil Diubah :) </div>');
			redirect('quiz/soal_quiz_1');
		}
	}

	public function edit_quiz_2()
	{
		if($this->session->userdata('role_id') == NULL)
		{
			redirect('auth');
		}
		$this->form_validation->set_rules('soal', 'Soal', 'required');
		$this->form_validation->set_rules('opsi_a', 'Opsi A', 'required');
		$this->form_validation->set_rules('opsi_b', 'Opsi B', 'required');
		$this->form_validation->set_rules('opsi_c', 'Opsi C', 'required');
		$this->form_validation->set_rules('opsi_d', 'Opsi D', 'required');
		$this->form_validation->set_rules('jawaban', 'Jawaban', 'required');
		$this->form_validation->set_rules('status', 'status', 'required');
		$this->form_validation->set_rules('id_quiz', 'ID Quiz', 'required');

		if($this->form_validation->run() == FALSE)
		{
		$role_id = $this->session->userdata('role_id');		
		$data['quiz'] = $this->db->get('soal')->result_array();	
		$data['role'] = $this->db->get_where('user_role', ['id' => $this->session->userdata('role_id')])->row_array();
		if($role_id != 1) {
			redirect('auth/error');
		} else {
		$data['judul'] = 'KelasIOT v3 | Edit Quiz 2';		
		$this->load->view('templates/admin/header', $data);
		$this->load->view('feature/quiz/edit', $data);
		$this->load->view('templates/admin/footer');
			}
		} else {
			$id = $this->input->post('id_soal');
			$this->Edit_model->editQuiz($id);
			$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert"> Quiz Berhasil Diubah :) </div>');
			redirect('quiz/soal_quiz_2');
		}
	}

// Member Page
	public function project()
	{
		if($this->session->userdata('role_id') == NULL)
		{
			redirect('auth');
		}
		$role_id = $this->session->userdata('role_id');
		if($role_id != 2) {
			redirect('auth/error');
		} else {
		$data['content1'] = $this->db->get_where('project', ['id' => 1])->row_array();
		$data['content2'] = $this->db->get_where('project', ['id' => 2])->row_array();
		$data['content3'] = $this->db->get_where('project', ['id' => 3])->row_array();
		$data['content4'] = $this->db->get_where('project', ['id' => 4])->row_array();

		$data['judul'] = 'KelasIOT v3 | Project';
		$this->load->view('templates/dashboard/header', $data);
		$this->load->view('feature/project/index');
		$this->load->view('templates/dashboard/footer');
		}
	}

// Admin Page
	public function edit_project()
	{
		if($this->session->userdata('role_id') == NULL)
		{
			redirect('auth');
		}
		$role_id = $this->session->userdata('role_id');
		$data['role'] = $this->db->get_where('user_role', ['id' => $this->session->userdata('role_id')])->row_array();
		if($role_id != 1) {
			redirect('auth/error');
		} else {
		$data['judul'] = 'KelasIOT v3 | Edit Project';
		$this->load->view('templates/admin/header', $data);
		$this->load->view('feature/project/edit', $data);
		$this->load->view('templates/admin/footer');
		}
	}

// Member Page
	public function component()
	{	
		if($this->session->userdata('role_id') == NULL)
		{
			redirect('auth');
		}
		$role_id = $this->session->userdata('role_id');
		if($role_id != 2) {
			redirect('auth/error');
		} else {

		$data['content1'] = $this->db->get_where('component', ['id' => 1])->row_array();
		$data['content2'] = $this->db->get_where('component', ['id' => 2])->row_array();
		$data['content3'] = $this->db->get_where('component', ['id' => 3])->row_array();
		$data['judul'] = 'KelasIOT v3 | Component';
		$this->load->view('templates/dashboard/header', $data);
		$this->load->view('feature/component/index', $data);
		$this->load->view('templates/dashboard/footer');
		}
	}

// Admin Page
	public function edit_component()
	{
		if($this->session->userdata('role_id') == NULL)
		{
			redirect('auth');
		}
		$role_id = $this->session->userdata('role_id');
		$data['role'] = $this->db->get_where('user_role', ['id' => $this->session->userdata('role_id')])->row_array();
		if($role_id != 1) {
			redirect('auth/error');
		} else {
		$data['judul'] = 'KelasIOT v3 | Edit Component';
		$this->load->view('templates/admin/header', $data);
		$this->load->view('feature/component/edit', $data);
		$this->load->view('templates/admin/footer');
		}
	}
// Admin Page
	public function list_users()
	{
		if($this->session->userdata('role_id') == NULL)
		{
			redirect('auth');
		}
		$role_id = $this->session->userdata('role_id');
		if($role_id != 1) {
			redirect('auth/error');
		} else {

		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('status', 'Status', 'required');
		if($this->form_validation->run() == FALSE)
		{
		$data['user'] = $this->db->get_where('user', ['status' => 1])->result_array();		
		$data['role'] = $this->db->get_where('user_role', ['id' => $this->session->userdata('role_id')])->row_array();
		$data['judul'] = 'KelasIOT v3 | List Users';
		$this->load->view('templates/admin/header', $data);		
		$this->load->view('user/admin/list-users', $data);
		$this->load->view('templates/admin/footer');
		}  else {
		$this->Edit_model->banned();
		$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert"> Akun Berhasil Di Banned >:) </div>');
				redirect('feature/list_users');
			}
		}
	}

	// Admin Page
	public function blacklist()
	{
		if($this->session->userdata('role_id') == NULL)
		{
			redirect('auth');
		}
		$role_id = $this->session->userdata('role_id');
		if($role_id != 1) {
			redirect('auth/error');
		} else {

		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('status', 'Status', 'required');
		if($this->form_validation->run() == FALSE)
		{
		$data['user'] = $this->db->get_where('user', ['status' => 0])->result_array();
		$data['role'] = $this->db->get_where('user_role', ['id' => $this->session->userdata('role_id')])->row_array();
		$data['judul'] = 'KelasIOT v3 | Blacklist User';
		$this->load->view('templates/admin/header', $data);		
		$this->load->view('user/admin/blacklist', $data);
		$this->load->view('templates/admin/footer');
		} else {
		$this->Edit_model->unbanned();
		$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert"> Akun Berhasil Di Unanned :) </div>');
				redirect('feature/blacklist');
			}
		}
	}

	// Admin Page
	public function comment()
	{
		if($this->session->userdata('role_id') == NULL)
		{
			redirect('auth');
		}
		$role_id = $this->session->userdata('role_id');
		if($role_id != 1) {
			redirect('auth/error');
		} else {

		if($this->form_validation->run() == FALSE)
		{
		$data['comment'] = $this->db->get('comment')->result_array();
		$data['role'] = $this->db->get_where('user_role', ['id' => $this->session->userdata('role_id')])->row_array();
		$data['judul'] = 'KelasIOT v3 | List Commnets';
		$this->load->view('templates/admin/header', $data);		
		$this->load->view('user/admin/comment', $data);
		$this->load->view('templates/admin/footer');
		}  
		}
	}

}