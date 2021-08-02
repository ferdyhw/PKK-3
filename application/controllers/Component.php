<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Component extends CI_Controller {

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
		$data['component'] = $this->db->get_where('component', ['id' => 1])->row_array();
		$data['comp_1'] = $this->db->get_where('edit_comp', ['id' => 1])->row_array();
		$data['comp_2'] = $this->db->get_where('edit_comp', ['id' => 2])->row_array();
		$data['comp_3'] = $this->db->get_where('edit_comp', ['id' => 3])->row_array();
		$data['comp_4'] = $this->db->get_where('edit_comp', ['id' => 4])->row_array();
		$data['comp_5'] = $this->db->get_where('edit_comp', ['id' => 5])->row_array();
		$data['comp_6'] = $this->db->get_where('edit_comp', ['id' => 6])->row_array();
		$data['judul'] = 'KelasIOT v3 | Component Microcontroller';
		$this->load->view('templates/content/header', $data);
		$this->load->view('templates/dashboard/header');
		$this->load->view('content/component/content_1/index', $data);
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
		$data['component'] = $this->db->get_where('component', ['id' => 1])->row_array();
		$data['role'] = $this->db->get_where('user_role', ['id' => $this->session->userdata('role_id')])->row_array();
		
		$this->form_validation->set_rules('title', 'Title', 'required|trim');		
		$this->form_validation->set_rules('summary', 'summary', 'required|trim');
		$this->form_validation->set_rules('author', 'author', 'required|trim');

		if ( $this->form_validation->run() == FALSE ) 
		{
		$data['judul'] = 'KelasIOT v3 | Edit Component Page 1';
		$this->load->view('templates/admin/header', $data);
		$this->load->view('content/component/content_1/edit', $data);
		$this->load->view('templates/admin/footer');
		} else {
			$id = $this->input->post('id_content');
			$this->Edit_model->Component($id);
			$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert"> Component Page 1 Berhasil Diubah :) </div>');
			redirect('component/edit_page_1');
		}
		}
	}

	public function edit_component_1()
	{	
		if($this->session->userdata('role_id') == NULL)
		{
			redirect('auth');
		}
		$role_id = $this->session->userdata('role_id');
		if($role_id != 1) {
			redirect('auth/error');
		} else {		
		$data['role'] = $this->db->get_where('user_role', ['id' => $this->session->userdata('role_id')])->row_array();
		$data['component'] = $this->db->get_where('edit_comp', ['id_comp' => 1])->result_array();
		$data['judul'] = 'KelasIOT v3 | Edit Component 1';
		$this->load->view('templates/admin/header', $data);		
		$this->load->view('content/component/content_1/edit_comp_1', $data);
		$this->load->view('templates/admin/footer');		
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
		$data['component'] = $this->db->get_where('component', ['id' => 2])->row_array();
		$data['comp_1'] = $this->db->get_where('edit_comp', ['id' => 7])->row_array();
		$data['comp_2'] = $this->db->get_where('edit_comp', ['id' => 8])->row_array();
		$data['comp_3'] = $this->db->get_where('edit_comp', ['id' => 9])->row_array();
		$data['comp_4'] = $this->db->get_where('edit_comp', ['id' => 10])->row_array();
		$data['comp_5'] = $this->db->get_where('edit_comp', ['id' => 11])->row_array();
		$data['comp_6'] = $this->db->get_where('edit_comp', ['id' => 12])->row_array();
		$data['judul'] = 'KelasIOT v3 | Component Sensor';
		$this->load->view('templates/content/header', $data);
		$this->load->view('templates/dashboard/header');
		$this->load->view('content/component/content_2/index', $data);
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
		$data['component'] = $this->db->get_where('component', ['id' => 2])->row_array();
		$data['role'] = $this->db->get_where('user_role', ['id' => $this->session->userdata('role_id')])->row_array();
		
		$this->form_validation->set_rules('title', 'Title', 'required|trim');		
		$this->form_validation->set_rules('summary', 'summary', 'required|trim');
		$this->form_validation->set_rules('author', 'author', 'required|trim');

		if ( $this->form_validation->run() == FALSE ) 
		{
		$data['judul'] = 'KelasIOT v3 | Edit Component Page 2';
		$this->load->view('templates/admin/header', $data);
		$this->load->view('content/component/content_2/edit', $data);
		$this->load->view('templates/admin/footer');
		} else {
			$id = $this->input->post('id_content');
			$this->Edit_model->Component($id);
			$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert"> Component Page 2 Berhasil Diubah :) </div>');
			redirect('component/edit_page_2');
		}
		}
	}

	public function edit_component_2()
	{	
		if($this->session->userdata('role_id') == NULL)
		{
			redirect('auth');
		}
		$role_id = $this->session->userdata('role_id');
		if($role_id != 1) {
			redirect('auth/error');
		} else {		
		$data['role'] = $this->db->get_where('user_role', ['id' => $this->session->userdata('role_id')])->row_array();
		$data['component'] = $this->db->get_where('edit_comp', ['id_comp' => 2])->result_array();
		$data['judul'] = 'KelasIOT v3 | Edit Component 2';
		$this->load->view('templates/admin/header', $data);		
		$this->load->view('content/component/content_2/edit_comp_2', $data);
		$this->load->view('templates/admin/footer');		
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
		$data['component'] = $this->db->get_where('component', ['id' => 3])->row_array();
		$data['comp_1'] = $this->db->get_where('edit_comp', ['id' => 13])->row_array();
		$data['comp_2'] = $this->db->get_where('edit_comp', ['id' => 14])->row_array();
		$data['comp_3'] = $this->db->get_where('edit_comp', ['id' => 15])->row_array();
		$data['comp_4'] = $this->db->get_where('edit_comp', ['id' => 16])->row_array();
		$data['comp_5'] = $this->db->get_where('edit_comp', ['id' => 17])->row_array();
		$data['comp_6'] = $this->db->get_where('edit_comp', ['id' => 18])->row_array();		
		$data['judul'] = 'KelasIOT v3 | Component Lainnya';
		$this->load->view('templates/content/header', $data);
		$this->load->view('templates/dashboard/header');
		$this->load->view('content/component/content_3/index', $data);
		$this->load->view('templates/dashboard/footer');
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
		$data['component'] = $this->db->get_where('component', ['id' => 3])->row_array();
		$data['role'] = $this->db->get_where('user_role', ['id' => $this->session->userdata('role_id')])->row_array();
		
		$this->form_validation->set_rules('title', 'Title', 'required|trim');		
		$this->form_validation->set_rules('summary', 'summary', 'required|trim');
		$this->form_validation->set_rules('author', 'author', 'required|trim');

		if ( $this->form_validation->run() == FALSE ) 
		{
		$data['judul'] = 'KelasIOT v3 | Edit Component Page 3';
		$this->load->view('templates/admin/header', $data);
		$this->load->view('content/component/content_3/edit', $data);
		$this->load->view('templates/admin/footer');
		} else {
			$id = $this->input->post('id_content');
			$this->Edit_model->Component($id);
			$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert"> Component Page 3 Berhasil Diubah :) </div>');
			redirect('component/edit_page_3');
		}
		}
	}

	public function edit_component_3()
	{	
		if($this->session->userdata('role_id') == NULL)
		{
			redirect('auth');
		}
		$role_id = $this->session->userdata('role_id');
		if($role_id != 1) {
			redirect('auth/error');
		} else {		
		$data['role'] = $this->db->get_where('user_role', ['id' => $this->session->userdata('role_id')])->row_array();
		$data['component'] = $this->db->get_where('edit_comp', ['id_comp' => 3])->result_array();
		$data['judul'] = 'KelasIOT v3 | Edit Component 3';
		$this->load->view('templates/admin/header', $data);		
		$this->load->view('content/component/content_3/edit_comp_3', $data);
		$this->load->view('templates/admin/footer');
		}
	}
//==========================================================================================================
	// Component 1
	public function component_1()
	{	
		if($this->session->userdata('role_id') == NULL)
		{
			redirect('auth');
		}
		$role_id = $this->session->userdata('role_id');
		if($role_id != 1) {
			redirect('auth/error');
		} else {
		$this->form_validation->set_rules('title_1', 'Nama', 'required|trim');
		$this->form_validation->set_rules('jenis', 'Jenis', 'required|trim');
		$this->form_validation->set_rules('link_1', 'Link', 'required|trim');
		$this->form_validation->set_rules('desc_1', 'Deskripsi', 'required|trim');
		if ( $this->form_validation->run() == FALSE ) 
		{
		$data['component'] = $this->db->get_where('edit_comp', ['id' => 1])->row_array();
		$data['role'] = $this->db->get_where('user_role', ['id' => $this->session->userdata('role_id')])->row_array();
		$data['judul'] = 'KelasIOT v3 | Edit Component';
		$this->load->view('templates/admin/header', $data);		
		$this->load->view('content/component/list_component/content_1/component_1', $data);
		$this->load->view('templates/admin/footer');
		} else {
			$id = $this->input->post('id');
			$this->Edit_model->editComponent1($id);
			$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert"> Component Berhasil Diubah :) </div>');
			redirect('component/edit_component_1');
		}
		}
	}

	public function component_2()
	{	
		if($this->session->userdata('role_id') == NULL)
		{
			redirect('auth');
		}
		$role_id = $this->session->userdata('role_id');
		if($role_id != 1) {
			redirect('auth/error');
		} else {
		$this->form_validation->set_rules('title_2', 'Nama', 'required|trim');
		$this->form_validation->set_rules('jenis', 'Jenis', 'required|trim');
		$this->form_validation->set_rules('link_2', 'Link', 'required|trim');
		$this->form_validation->set_rules('desc_2', 'Deskripsi', 'required|trim');
		if ( $this->form_validation->run() == FALSE ) 
		{
		$data['component'] = $this->db->get_where('edit_comp', ['id' => 2])->row_array();
		$data['role'] = $this->db->get_where('user_role', ['id' => $this->session->userdata('role_id')])->row_array();
		$data['judul'] = 'KelasIOT v3 | Edit Component';
		$this->load->view('templates/admin/header', $data);		
		$this->load->view('content/component/list_component/content_1/component_2', $data);
		$this->load->view('templates/admin/footer');
		} else {
			$id = $this->input->post('id');
			$this->Edit_model->editComponent2($id);
			$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert"> Component Berhasil Diubah :) </div>');
			redirect('component/edit_component_1');
		}
		}
	}

	public function component_3()
	{	
		if($this->session->userdata('role_id') == NULL)
		{
			redirect('auth');
		}
		$role_id = $this->session->userdata('role_id');
		if($role_id != 1) {
			redirect('auth/error');
		} else {
		$this->form_validation->set_rules('title_3', 'Nama', 'required|trim');
		$this->form_validation->set_rules('jenis', 'Jenis', 'required|trim');
		$this->form_validation->set_rules('link_3', 'Link', 'required|trim');
		$this->form_validation->set_rules('desc_3', 'Deskripsi', 'required|trim');
		if ( $this->form_validation->run() == FALSE ) 
		{
		$data['component'] = $this->db->get_where('edit_comp', ['id' => 3])->row_array();
		$data['role'] = $this->db->get_where('user_role', ['id' => $this->session->userdata('role_id')])->row_array();
		$data['judul'] = 'KelasIOT v3 | Edit Component';
		$this->load->view('templates/admin/header', $data);		
		$this->load->view('content/component/list_component/content_1/component_3', $data);
		$this->load->view('templates/admin/footer');
		} else {
			$id = $this->input->post('id');
			$this->Edit_model->editComponent3($id);
			$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert"> Component Berhasil Diubah :) </div>');
			redirect('component/edit_component_1');
		}
		}
	}

	public function component_4()
	{	
		if($this->session->userdata('role_id') == NULL)
		{
			redirect('auth');
		}
		$role_id = $this->session->userdata('role_id');
		if($role_id != 1) {
			redirect('auth/error');
		} else {
		$this->form_validation->set_rules('title_4', 'Nama', 'required|trim');
		$this->form_validation->set_rules('jenis', 'Jenis', 'required|trim');
		$this->form_validation->set_rules('link_4', 'Link', 'required|trim');
		$this->form_validation->set_rules('desc_4', 'Deskripsi', 'required|trim');
		if ( $this->form_validation->run() == FALSE ) 
		{
		$data['component'] = $this->db->get_where('edit_comp', ['id' => 4])->row_array();
		$data['role'] = $this->db->get_where('user_role', ['id' => $this->session->userdata('role_id')])->row_array();
		$data['judul'] = 'KelasIOT v3 | Edit Component';
		$this->load->view('templates/admin/header', $data);		
		$this->load->view('content/component/list_component/content_1/component_4', $data);
		$this->load->view('templates/admin/footer');
		} else {
			$id = $this->input->post('id');
			$this->Edit_model->editComponent4($id);
			$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert"> Component Berhasil Diubah :) </div>');
			redirect('component/edit_component_1');
		}
		}
	}

	public function component_5()
	{	
		if($this->session->userdata('role_id') == NULL)
		{
			redirect('auth');
		}
		$role_id = $this->session->userdata('role_id');
		if($role_id != 1) {
			redirect('auth/error');
		} else {
		$this->form_validation->set_rules('title_5', 'Nama', 'required|trim');
		$this->form_validation->set_rules('jenis', 'Jenis', 'required|trim');
		$this->form_validation->set_rules('link_5', 'Link', 'required|trim');
		$this->form_validation->set_rules('desc_5', 'Deskripsi', 'required|trim');
		if ( $this->form_validation->run() == FALSE ) 
		{
		$data['component'] = $this->db->get_where('edit_comp', ['id' => 5])->row_array();
		$data['role'] = $this->db->get_where('user_role', ['id' => $this->session->userdata('role_id')])->row_array();
		$data['judul'] = 'KelasIOT v3 | Edit Component';
		$this->load->view('templates/admin/header', $data);		
		$this->load->view('content/component/list_component/content_1/component_5', $data);
		$this->load->view('templates/admin/footer');
		} else {
			$id = $this->input->post('id');
			$this->Edit_model->editComponent5($id);
			$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert"> Component Berhasil Diubah :) </div>');
			redirect('component/edit_component_1');
		}
		}
	}

	public function component_6()
	{	
		if($this->session->userdata('role_id') == NULL)
		{
			redirect('auth');
		}
		$role_id = $this->session->userdata('role_id');
		if($role_id != 1) {
			redirect('auth/error');
		} else {
		$this->form_validation->set_rules('title_6', 'Nama', 'required|trim');
		$this->form_validation->set_rules('jenis', 'Jenis', 'required|trim');
		$this->form_validation->set_rules('link_6', 'Link', 'required|trim');
		$this->form_validation->set_rules('desc_6', 'Deskripsi', 'required|trim');
		if ( $this->form_validation->run() == FALSE ) 
		{
		$data['component'] = $this->db->get_where('edit_comp', ['id' => 6])->row_array();
		$data['role'] = $this->db->get_where('user_role', ['id' => $this->session->userdata('role_id')])->row_array();
		$data['judul'] = 'KelasIOT v3 | Edit Component';
		$this->load->view('templates/admin/header', $data);		
		$this->load->view('content/component/list_component/content_1/component_6', $data);
		$this->load->view('templates/admin/footer');
		} else {
			$id = $this->input->post('id');
			$this->Edit_model->editComponent6($id);
			$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert"> Component Berhasil Diubah :) </div>');
			redirect('component/edit_component_1');
		}
		}
	}
//==========================================================================================================

//==========================================================================================================
	// Component 2
	public function component_7()
	{	
		if($this->session->userdata('role_id') == NULL)
		{
			redirect('auth');
		}
		$role_id = $this->session->userdata('role_id');
		if($role_id != 1) {
			redirect('auth/error');
		} else {
		$this->form_validation->set_rules('title_1', 'Nama', 'required|trim');
		$this->form_validation->set_rules('jenis', 'Jenis', 'required|trim');
		$this->form_validation->set_rules('link_1', 'Link', 'required|trim');
		$this->form_validation->set_rules('desc_1', 'Deskripsi', 'required|trim');
		if ( $this->form_validation->run() == FALSE ) 
		{
		$data['component'] = $this->db->get_where('edit_comp', ['id' => 7])->row_array();
		$data['role'] = $this->db->get_where('user_role', ['id' => $this->session->userdata('role_id')])->row_array();
		$data['judul'] = 'KelasIOT v3 | Edit Component';
		$this->load->view('templates/admin/header', $data);		
		$this->load->view('content/component/list_component/content_2/component_1', $data);
		$this->load->view('templates/admin/footer');
		} else {
			$id = $this->input->post('id');
			$this->Edit_model->editComponent7($id);
			$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert"> Component Berhasil Diubah :) </div>');
			redirect('component/edit_component_2');
		}
		}
	}

	public function component_8()
	{	
		if($this->session->userdata('role_id') == NULL)
		{
			redirect('auth');
		}
		$role_id = $this->session->userdata('role_id');
		if($role_id != 1) {
			redirect('auth/error');
		} else {
		$this->form_validation->set_rules('title_2', 'Nama', 'required|trim');
		$this->form_validation->set_rules('jenis', 'Jenis', 'required|trim');
		$this->form_validation->set_rules('link_2', 'Link', 'required|trim');
		$this->form_validation->set_rules('desc_2', 'Deskripsi', 'required|trim');
		if ( $this->form_validation->run() == FALSE ) 
		{
		$data['component'] = $this->db->get_where('edit_comp', ['id' => 8])->row_array();
		$data['role'] = $this->db->get_where('user_role', ['id' => $this->session->userdata('role_id')])->row_array();
		$data['judul'] = 'KelasIOT v3 | Edit Component';
		$this->load->view('templates/admin/header', $data);		
		$this->load->view('content/component/list_component/content_2/component_2', $data);
		$this->load->view('templates/admin/footer');
		} else {
			$id = $this->input->post('id');
			$this->Edit_model->editComponent8($id);
			$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert"> Component Berhasil Diubah :) </div>');
			redirect('component/edit_component_2');
		}
		}
	}

	public function component_9()
	{	
		if($this->session->userdata('role_id') == NULL)
		{
			redirect('auth');
		}
		$role_id = $this->session->userdata('role_id');
		if($role_id != 1) {
			redirect('auth/error');
		} else {
		$this->form_validation->set_rules('title_3', 'Nama', 'required|trim');
		$this->form_validation->set_rules('jenis', 'Jenis', 'required|trim');
		$this->form_validation->set_rules('link_3', 'Link', 'required|trim');
		$this->form_validation->set_rules('desc_3', 'Deskripsi', 'required|trim');
		if ( $this->form_validation->run() == FALSE ) 
		{
		$data['component'] = $this->db->get_where('edit_comp', ['id' => 9])->row_array();
		$data['role'] = $this->db->get_where('user_role', ['id' => $this->session->userdata('role_id')])->row_array();
		$data['judul'] = 'KelasIOT v3 | Edit Component';
		$this->load->view('templates/admin/header', $data);		
		$this->load->view('content/component/list_component/content_2/component_3', $data);
		$this->load->view('templates/admin/footer');
		} else {
			$id = $this->input->post('id');
			$this->Edit_model->editComponent9($id);
			$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert"> Component Berhasil Diubah :) </div>');
			redirect('component/edit_component_2');
		}
		}
	}

	public function component_10()
	{	
		if($this->session->userdata('role_id') == NULL)
		{
			redirect('auth');
		}
		$role_id = $this->session->userdata('role_id');
		if($role_id != 1) {
			redirect('auth/error');
		} else {
		$this->form_validation->set_rules('title_4', 'Nama', 'required|trim');
		$this->form_validation->set_rules('jenis', 'Jenis', 'required|trim');
		$this->form_validation->set_rules('link_4', 'Link', 'required|trim');
		$this->form_validation->set_rules('desc_4', 'Deskripsi', 'required|trim');
		if ( $this->form_validation->run() == FALSE ) 
		{
		$data['component'] = $this->db->get_where('edit_comp', ['id' => 10])->row_array();
		$data['role'] = $this->db->get_where('user_role', ['id' => $this->session->userdata('role_id')])->row_array();
		$data['judul'] = 'KelasIOT v3 | Edit Component';
		$this->load->view('templates/admin/header', $data);		
		$this->load->view('content/component/list_component/content_2/component_4', $data);
		$this->load->view('templates/admin/footer');
		} else {
			$id = $this->input->post('id');
			$this->Edit_model->editComponent10($id);
			$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert"> Component Berhasil Diubah :) </div>');
			redirect('component/edit_component_2');
		}
		}
	}

	public function component_11()
	{	
		if($this->session->userdata('role_id') == NULL)
		{
			redirect('auth');
		}
		$role_id = $this->session->userdata('role_id');
		if($role_id != 1) {
			redirect('auth/error');
		} else {
		$this->form_validation->set_rules('title_5', 'Nama', 'required|trim');
		$this->form_validation->set_rules('jenis', 'Jenis', 'required|trim');
		$this->form_validation->set_rules('link_5', 'Link', 'required|trim');
		$this->form_validation->set_rules('desc_5', 'Deskripsi', 'required|trim');
		if ( $this->form_validation->run() == FALSE ) 
		{
		$data['component'] = $this->db->get_where('edit_comp', ['id' => 11])->row_array();
		$data['role'] = $this->db->get_where('user_role', ['id' => $this->session->userdata('role_id')])->row_array();
		$data['judul'] = 'KelasIOT v3 | Edit Component';
		$this->load->view('templates/admin/header', $data);		
		$this->load->view('content/component/list_component/content_2/component_5', $data);
		$this->load->view('templates/admin/footer');
		} else {
			$id = $this->input->post('id');
			$this->Edit_model->editComponent11($id);
			$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert"> Component Berhasil Diubah :) </div>');
			redirect('component/edit_component_2');
		}
		}
	}

	public function component_12()
	{	
		if($this->session->userdata('role_id') == NULL)
		{
			redirect('auth');
		}
		$role_id = $this->session->userdata('role_id');
		if($role_id != 1) {
			redirect('auth/error');
		} else {
		$this->form_validation->set_rules('title_6', 'Nama', 'required|trim');
		$this->form_validation->set_rules('jenis', 'Jenis', 'required|trim');
		$this->form_validation->set_rules('link_6', 'Link', 'required|trim');
		$this->form_validation->set_rules('desc_6', 'Deskripsi', 'required|trim');
		if ( $this->form_validation->run() == FALSE ) 
		{
		$data['component'] = $this->db->get_where('edit_comp', ['id' => 12])->row_array();
		$data['role'] = $this->db->get_where('user_role', ['id' => $this->session->userdata('role_id')])->row_array();
		$data['judul'] = 'KelasIOT v3 | Edit Component';
		$this->load->view('templates/admin/header', $data);		
		$this->load->view('content/component/list_component/content_2/component_6', $data);
		$this->load->view('templates/admin/footer');
		} else {
			$id = $this->input->post('id');
			$this->Edit_model->editComponent6($id);
			$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert"> Component Berhasil Diubah :) </div>');
			redirect('component/edit_component_2');
		}
		}
	}
//==========================================================================================================

//==========================================================================================================
	// Component 3
	public function component_13()
	{	
		if($this->session->userdata('role_id') == NULL)
		{
			redirect('auth');
		}
		$role_id = $this->session->userdata('role_id');
		if($role_id != 1) {
			redirect('auth/error');
		} else {
		$this->form_validation->set_rules('title_1', 'Nama', 'required|trim');
		$this->form_validation->set_rules('jenis', 'Jenis', 'required|trim');
		$this->form_validation->set_rules('link_1', 'Link', 'required|trim');
		$this->form_validation->set_rules('desc_1', 'Deskripsi', 'required|trim');
		if ( $this->form_validation->run() == FALSE ) 
		{
		$data['component'] = $this->db->get_where('edit_comp', ['id' => 13])->row_array();
		$data['role'] = $this->db->get_where('user_role', ['id' => $this->session->userdata('role_id')])->row_array();
		$data['judul'] = 'KelasIOT v3 | Edit Component';
		$this->load->view('templates/admin/header', $data);		
		$this->load->view('content/component/list_component/content_3/component_1', $data);
		$this->load->view('templates/admin/footer');
		} else {
			$id = $this->input->post('id');
			$this->Edit_model->editComponent13($id);
			$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert"> Component Berhasil Diubah :) </div>');
			redirect('component/edit_component_3');
		}
		}
	}

	public function component_14()
	{	
		if($this->session->userdata('role_id') == NULL)
		{
			redirect('auth');
		}
		$role_id = $this->session->userdata('role_id');
		if($role_id != 1) {
			redirect('auth/error');
		} else {
		$this->form_validation->set_rules('title_2', 'Nama', 'required|trim');
		$this->form_validation->set_rules('jenis', 'Jenis', 'required|trim');
		$this->form_validation->set_rules('link_2', 'Link', 'required|trim');
		$this->form_validation->set_rules('desc_2', 'Deskripsi', 'required|trim');
		if ( $this->form_validation->run() == FALSE ) 
		{
		$data['component'] = $this->db->get_where('edit_comp', ['id' => 14])->row_array();
		$data['role'] = $this->db->get_where('user_role', ['id' => $this->session->userdata('role_id')])->row_array();
		$data['judul'] = 'KelasIOT v3 | Edit Component';
		$this->load->view('templates/admin/header', $data);		
		$this->load->view('content/component/list_component/content_3/component_2', $data);
		$this->load->view('templates/admin/footer');
		} else {
			$id = $this->input->post('id');
			$this->Edit_model->editComponent14($id);
			$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert"> Component Berhasil Diubah :) </div>');
			redirect('component/edit_component_3');
		}
		}
	}

	public function component_15()
	{	
		if($this->session->userdata('role_id') == NULL)
		{
			redirect('auth');
		}
		$role_id = $this->session->userdata('role_id');
		if($role_id != 1) {
			redirect('auth/error');
		} else {
		$this->form_validation->set_rules('title_3', 'Nama', 'required|trim');
		$this->form_validation->set_rules('jenis', 'Jenis', 'required|trim');
		$this->form_validation->set_rules('link_3', 'Link', 'required|trim');
		$this->form_validation->set_rules('desc_3', 'Deskripsi', 'required|trim');
		if ( $this->form_validation->run() == FALSE ) 
		{
		$data['component'] = $this->db->get_where('edit_comp', ['id' => 15])->row_array();
		$data['role'] = $this->db->get_where('user_role', ['id' => $this->session->userdata('role_id')])->row_array();
		$data['judul'] = 'KelasIOT v3 | Edit Component';
		$this->load->view('templates/admin/header', $data);		
		$this->load->view('content/component/list_component/content_3/component_3', $data);
		$this->load->view('templates/admin/footer');
		} else {
			$id = $this->input->post('id');
			$this->Edit_model->editComponent15($id);
			$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert"> Component Berhasil Diubah :) </div>');
			redirect('component/edit_component_3');
		}
		}
	}

	public function component_16()
	{	
		if($this->session->userdata('role_id') == NULL)
		{
			redirect('auth');
		}
		$role_id = $this->session->userdata('role_id');
		if($role_id != 1) {
			redirect('auth/error');
		} else {
		$this->form_validation->set_rules('title_4', 'Nama', 'required|trim');
		$this->form_validation->set_rules('jenis', 'Jenis', 'required|trim');
		$this->form_validation->set_rules('link_4', 'Link', 'required|trim');
		$this->form_validation->set_rules('desc_4', 'Deskripsi', 'required|trim');
		if ( $this->form_validation->run() == FALSE ) 
		{
		$data['component'] = $this->db->get_where('edit_comp', ['id' => 16])->row_array();
		$data['role'] = $this->db->get_where('user_role', ['id' => $this->session->userdata('role_id')])->row_array();
		$data['judul'] = 'KelasIOT v3 | Edit Component';
		$this->load->view('templates/admin/header', $data);		
		$this->load->view('content/component/list_component/content_3/component_4', $data);
		$this->load->view('templates/admin/footer');
		} else {
			$id = $this->input->post('id');
			$this->Edit_model->editComponent16($id);
			$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert"> Component Berhasil Diubah :) </div>');
			redirect('component/edit_component_3');
		}
		}
	}

	public function component_17()
	{	
		if($this->session->userdata('role_id') == NULL)
		{
			redirect('auth');
		}
		$role_id = $this->session->userdata('role_id');
		if($role_id != 1) {
			redirect('auth/error');
		} else {
		$this->form_validation->set_rules('title_5', 'Nama', 'required|trim');
		$this->form_validation->set_rules('jenis', 'Jenis', 'required|trim');
		$this->form_validation->set_rules('link_5', 'Link', 'required|trim');
		$this->form_validation->set_rules('desc_5', 'Deskripsi', 'required|trim');
		if ( $this->form_validation->run() == FALSE ) 
		{
		$data['component'] = $this->db->get_where('edit_comp', ['id' => 17])->row_array();
		$data['role'] = $this->db->get_where('user_role', ['id' => $this->session->userdata('role_id')])->row_array();
		$data['judul'] = 'KelasIOT v3 | Edit Component';
		$this->load->view('templates/admin/header', $data);		
		$this->load->view('content/component/list_component/content_3/component_5', $data);
		$this->load->view('templates/admin/footer');
		} else {
			$id = $this->input->post('id');
			$this->Edit_model->editComponent17($id);
			$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert"> Component Berhasil Diubah :) </div>');
			redirect('component/edit_component_3');
		}
		}
	}

	public function component_18()
	{	
		if($this->session->userdata('role_id') == NULL)
		{
			redirect('auth');
		}
		$role_id = $this->session->userdata('role_id');
		if($role_id != 1) {
			redirect('auth/error');
		} else {
		$this->form_validation->set_rules('title_6', 'Nama', 'required|trim');
		$this->form_validation->set_rules('jenis', 'Jenis', 'required|trim');
		$this->form_validation->set_rules('link_6', 'Link', 'required|trim');
		$this->form_validation->set_rules('desc_6', 'Deskripsi', 'required|trim');
		if ( $this->form_validation->run() == FALSE ) 
		{
		$data['component'] = $this->db->get_where('edit_comp', ['id' => 18])->row_array();
		$data['role'] = $this->db->get_where('user_role', ['id' => $this->session->userdata('role_id')])->row_array();
		$data['judul'] = 'KelasIOT v3 | Edit Component';
		$this->load->view('templates/admin/header', $data);		
		$this->load->view('content/component/list_component/content_3/component_6', $data);
		$this->load->view('templates/admin/footer');
		} else {
			$id = $this->input->post('id');
			$this->Edit_model->editComponent18($id);
			$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert"> Component Berhasil Diubah :) </div>');
			redirect('component/edit_component_3');
		}
		}
	}
//==========================================================================================================

}