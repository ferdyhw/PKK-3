<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Quiz extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		ceklogin();
		$this->load->library('form_validation');
		$this->load->model('Edit_model');
	}

	public function quiz_1()
	{	
		if($this->session->userdata('role_id') == NULL)
		{
			redirect('auth');
		}
		$role_id = $this->session->userdata('role_id');
		if($role_id != 2) {
			redirect('auth/error');
		} else {
		$data['judul'] = 'KelasIOT v3 | Quiz Page 1';
		$this->load->view('templates/content/header', $data);
		$this->load->view('templates/dashboard/header');
		$this->load->view('content/quiz/Quiz 1/index', $data);		
		$this->load->view('templates/dashboard/footer');
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
		$data['quiz'] = $this->db->get_where('quiz', ['id' => 1])->row_array();
		$data['role'] = $this->db->get_where('user_role', ['id' => $this->session->userdata('role_id')])->row_array();
		
		$this->form_validation->set_rules('title', 'Title', 'required|trim');		
		$this->form_validation->set_rules('summary', 'summary', 'required|trim');
		$this->form_validation->set_rules('author', 'author', 'required|trim');

		if ( $this->form_validation->run() == FALSE ) 
		{
		$data['judul'] = 'KelasIOT v3 | Edit Quiz 1';
		$this->load->view('templates/admin/header', $data);
		$this->load->view('content/quiz/Quiz 1/edit_quiz_1', $data);
		$this->load->view('templates/admin/footer');
		} else {
			$id = $this->input->post('id_quiz');
			$this->Edit_model->Quiz($id);
			$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert"> Quiz Page 1 Berhasil Diubah :) </div>');
			redirect('quiz/edit_page_1');
		}
		}
	}

	public function soal_quiz_1()
	{
		if($this->session->userdata('role_id') == NULL)
		{
			redirect('auth');
		}
		$role_id = $this->session->userdata('role_id');
		if($role_id != 1) {
			redirect('auth/error');
		} else {
		$data['judul'] = 'KelasIOT v3 | Edit Soal';
		$data['quiz'] = $this->db->get_where('soal', ['id_quiz' => 1])->result_array();
		$data['role'] = $this->db->get_where('user_role', ['id' => $this->session->userdata('role_id')])->row_array();
		$this->load->view('templates/admin/header', $data);
		$this->load->view('content/quiz/Quiz 1/edit_soal', $data);
		$this->load->view('templates/admin/footer');
		}
	}

//=======

	public function quiz_2()
	{	
		if($this->session->userdata('role_id') == NULL)
		{
			redirect('auth');
		}
		$role_id = $this->session->userdata('role_id');
		if($role_id != 2) {
			redirect('auth/error');
		} else {
		$data['judul'] = 'KelasIOT v3 | Quiz Page 2';
		$this->load->view('templates/content/header', $data);
		$this->load->view('templates/dashboard/header');
		$this->load->view('content/quiz/Quiz 2/index', $data);		
		$this->load->view('templates/dashboard/footer');
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
		$data['quiz'] = $this->db->get_where('quiz', ['id' => 2])->row_array();
		$data['role'] = $this->db->get_where('user_role', ['id' => $this->session->userdata('role_id')])->row_array();
		
		$this->form_validation->set_rules('title', 'Title', 'required|trim');		
		$this->form_validation->set_rules('summary', 'summary', 'required|trim');
		$this->form_validation->set_rules('author', 'author', 'required|trim');

		if ( $this->form_validation->run() == FALSE ) 
		{
		$data['judul'] = 'KelasIOT v3 | Edit Quiz 2';
		$this->load->view('templates/admin/header', $data);
		$this->load->view('content/quiz/Quiz 2/edit_quiz_2', $data);
		$this->load->view('templates/admin/footer');
		} else {
			$id = $this->input->post('id_quiz');
			$this->Edit_model->Quiz($id);
			$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert"> Quiz Page 2 Berhasil Diubah :) </div>');
			redirect('quiz/edit_page_2');
		}
		}
	}

	public function soal_quiz_2()
	{
		if($this->session->userdata('role_id') == NULL)
		{
			redirect('auth');
		}
		$role_id = $this->session->userdata('role_id');
		if($role_id != 1) {
			redirect('auth/error');
		} else {
		$data['judul'] = 'KelasIOT v3 | Edit Soal';
		$data['quiz'] = $this->db->get_where('soal', ['id_quiz' => 2])->result_array();
		$data['role'] = $this->db->get_where('user_role', ['id' => $this->session->userdata('role_id')])->row_array();
		$this->load->view('templates/admin/header', $data);
		$this->load->view('content/quiz/Quiz 2/edit_soal', $data);
		$this->load->view('templates/admin/footer');
		}
	}

	// Admin Page
	public function add_quiz_1()
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
			if($role_id != 1) {
			redirect('auth/error');
			} else {
			$data['judul'] = 'KelasIOT v3 | Edit Soal';
			$data['quiz'] = $this->db->get_where('soal', ['id_quiz' => 1])->result_array();
			$data['role'] = $this->db->get_where('user_role', ['id' => $this->session->userdata('role_id')])->row_array();		
			$this->load->view('templates/admin/header', $data);
			$this->load->view('content/quiz/Quiz 1/edit_soal', $data);
			$this->load->view('templates/admin/footer');
			}
		} else {
			$id = $this->input->post('id_soal');
			$this->Edit_model->addQuiz($id);
			$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert"> Soal Quiz Berhasil Ditambah :) </div>');
			redirect('quiz/soal_quiz_1');
		}
	}

	// Admin Page
	public function add_quiz_2()
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
			if($role_id != 1) {
			redirect('auth/error');
			} else {
			$data['judul'] = 'KelasIOT v3 | Edit Soal';
			$data['quiz'] = $this->db->get_where('soal', ['id_quiz' => 2])->result_array();
			$data['role'] = $this->db->get_where('user_role', ['id' => $this->session->userdata('role_id')])->row_array();		
			$this->load->view('templates/admin/header', $data);
			$this->load->view('content/quiz/Quiz 2/edit_soal', $data);
			$this->load->view('templates/admin/footer');
			}
		} else {
			$id = $this->input->post('id_soal');
			$this->Edit_model->addQuiz($id);
			$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert"> Soal Quiz Berhasil Ditambah :) </div>');
			redirect('quiz/soal_quiz_2');
		}
	}

// Admin Page
	public function delete_quiz()
	{
		if($this->session->userdata('role_id') == NULL)
		{
			redirect('auth');
		}
		$this->form_validation->set_rules('id_soal', 'Id Soal', 'required');

		if($this->form_validation->run() == FALSE)
		{
		$role_id = $this->session->userdata('role_id');		
		$data['quiz'] = $this->db->get('soal')->result_array();	
		$data['role'] = $this->db->get_where('user_role', ['id' => $this->session->userdata('role_id')])->row_array();
		if($role_id != 1) {
			redirect('auth/error');
		} else {
		$data['judul'] = 'KelasIOT v3 | Edit Soal';		
		$this->load->view('templates/admin/header', $data);
		$this->load->view('feature/quiz/edit', $data);
		$this->load->view('templates/admin/footer');
			}
		} else {
			$id = $this->input->post('id_soal');
			$this->Edit_model->deleteQuiz($id);
			$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert"> Quiz Berhasil Dihapus :) </div>');
			redirect('quiz/soal_quiz_1');
		}

	}

// Admin Page
	public function delete_quiz_2()
	{
		if($this->session->userdata('role_id') == NULL)
		{
			redirect('auth');
		}
		$this->form_validation->set_rules('id_soal', 'Id Soal', 'required');

		if($this->form_validation->run() == FALSE)
		{
		$role_id = $this->session->userdata('role_id');		
		$data['quiz'] = $this->db->get('soal')->result_array();	
		$data['role'] = $this->db->get_where('user_role', ['id' => $this->session->userdata('role_id')])->row_array();
		if($role_id != 1) {
			redirect('auth/error');
		} else {
		$data['judul'] = 'KelasIOT v3 | Edit Soal';		
		$this->load->view('templates/admin/header', $data);
		$this->load->view('feature/quiz/edit', $data);
		$this->load->view('templates/admin/footer');
			}
		} else {
			$id = $this->input->post('id_soal');
			$this->Edit_model->deleteQuiz($id);
			$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert"> Quiz Berhasil Dihapus :) </div>');
			redirect('quiz/soal_quiz_2');
		}

	}

	public function result_quiz_1()
	{
		if($this->session->userdata('role_id') == NULL)
		{
			redirect('auth');
		}
		$role_id = $this->session->userdata('role_id');
		if($role_id != 2) {
			redirect('auth/error');
		} else {					
		$data['judul'] = 'KelasIOT v3 | Result Quiz';
		$this->load->view('templates/content/header', $data);
		$this->load->view('templates/dashboard/header');
		$this->load->view('content/quiz/Quiz 1/result', $data);
		$this->load->view('templates/dashboard/footer');
		}
	}


	public function result_quiz_2()
	{
		if($this->session->userdata('role_id') == NULL)
		{
			redirect('auth');
		}
		$role_id = $this->session->userdata('role_id');
		if($role_id != 2) {
			redirect('auth/error');
		} else {					
		$data['judul'] = 'KelasIOT v3 | Result Quiz';
		$this->load->view('templates/content/header', $data);
		$this->load->view('templates/dashboard/header');
		$this->load->view('content/quiz/Quiz 2/result', $data);
		$this->load->view('templates/dashboard/footer');
		}
	}

}