<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{	
		if($this->session->userdata('role_id') == 1)
		{
			redirect('dashboard/admin');
		}
		if($this->session->userdata('role_id') == 2)
		{
			redirect('dashboard/member');
		}
		$data['judul'] = 'KelasIOT v3 | IOT for Beginner';
		$this->load->view('templates/home/header', $data);		
		$this->load->view('index/index');
		$this->load->view('templates/home/footer');
	}

}