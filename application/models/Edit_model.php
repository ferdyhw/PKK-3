<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Edit_model extends CI_Model {

	public function Content($id)
	{
		$title = $this->input->post('title');
		$content = $this->input->post('content');
		$summary = $this->input->post('summary');
		$author = $this->input->post('author');
		$date = $this->input->post('date');		

		$this->db->set('title', $title);
		$this->db->set('content', $content);
		$this->db->set('summary', $summary);

		$upload_picture = $_FILES['picture']['name'];
			if($upload_picture)
			{
				$config['allowed_types'] = 'jpg|png';
				$config['max_size']      = '2048';
				$config['upload_path']   = './assets/img/content/';

				$this->load->library('upload', $config);

				if($this->upload->do_upload('picture'))
				{
					$old_picture = $data['user']['picture'];
					if($old_picture != 'default.png')
					{
						unlink(FCPATH . 'assets/img/content/' . $old_picture);
					}
					$new_picture = $this->upload->data('file_name');
					$this->db->set('picture', $new_picture);
				} else {
					echo $this->upload->display_errors();
				}
			}

		$this->db->set('author', $author);
		$this->db->set('date', $date);

		$this->db->where('id', $id);
		$this->db->update('basic');

	}

	public function Quiz($id)
	{
		$title = $this->input->post('title');		
		$summary = $this->input->post('summary');
		$author = $this->input->post('author');
		$date = $this->input->post('date');		

		$this->db->set('title', $title);		
		$this->db->set('summary', $summary);

		$upload_picture = $_FILES['picture']['name'];
			if($upload_picture)
			{
				$config['allowed_types'] = 'jpg|png';
				$config['max_size']      = '2048';
				$config['upload_path']   = './assets/img/quiz/';

				$this->load->library('upload', $config);

				if($this->upload->do_upload('picture'))
				{
					$old_picture = $data['user']['picture'];
					if($old_picture != 'default.png')
					{
						unlink(FCPATH . 'assets/img/quiz/' . $old_picture);
					}
					$new_picture = $this->upload->data('file_name');
					$this->db->set('picture', $new_picture);
				} else {
					echo $this->upload->display_errors();
				}
			}

		$this->db->set('author', $author);
		$this->db->set('date', $date);

		$this->db->where('id', $id);
		$this->db->update('quiz');

	}

	public function addQuiz($id)
	{
		$data = [
			
			"id" => $this->input->post('id_soal', true),
			"soal" => $this->input->post('soal', true),
			"opsi_a" => $this->input->post('opsi_a', true),
			"opsi_b" => $this->input->post('opsi_b', true),
			"opsi_c" => $this->input->post('opsi_c', true),
			"opsi_d" => $this->input->post('opsi_d', true),
			"jawaban" => $this->input->post('jawaban', true),
			"status" => $this->input->post('status', true),
			"id_quiz" => $this->input->post('id_quiz', true),

		];

		return $this->db->insert('soal',  $data);
	}

	public function editQuiz($id)
	{
		$soal    = $this->input->post('soal');
		$opsi_a  = $this->input->post('opsi_a');
		$opsi_b  = $this->input->post('opsi_b');
		$opsi_c  = $this->input->post('opsi_c');
		$opsi_d  = $this->input->post('opsi_d');
		$jawaban = $this->input->post('jawaban');
		$status   = $this->input->post('status');
		$id_quiz   = $this->input->post('id_quiz');

		$this->db->set('soal', $soal);

		$this->db->set('opsi_a', $opsi_a);
		$this->db->set('opsi_b', $opsi_b);
		$this->db->set('opsi_c', $opsi_c);
		$this->db->set('opsi_d', $opsi_d);

		$this->db->set('jawaban', $jawaban);
		$this->db->set('status', $status);
		$this->db->set('id_quiz', $id_quiz);

		$this->db->where('id', $id);
		$this->db->update('soal');

	}	

	public function deleteQuiz($id)
	{
		$this->db->where('id', $id);
		return $this->db->delete('soal');
	}

	public function Project($id)
	{
		$title = $this->input->post('title');
		$content = $this->input->post('content');
		$program = $this->input->post('program');
		$summary = $this->input->post('summary');
		$author = $this->input->post('author');
		$date = $this->input->post('date');		

		$this->db->set('title', $title);
		$this->db->set('content', $content);
		$this->db->set('program', $program);

		$upload_rangkaian = $_FILES['rangkaian']['name'];
			if($upload_rangkaian)
			{
				$config['allowed_types'] = 'jpg|png';
				$config['max_size']      = '2048';
				$config['upload_path']   = './assets/img/project/';

				$this->load->library('upload', $config);

				if($this->upload->do_upload('rangkaian'))
				{
					$old_rangkaian = $data['user']['rangkaian'];
					if($old_rangkaian != 'default.png')
					{
						unlink(FCPATH . 'assets/img/project/' . $old_rangkaian);
					}
					$new_rangkaian = $this->upload->data('file_name');
					$this->db->set('rangkaian', $new_rangkaian);
				} else {
					echo $this->upload->display_errors();
				}
			}

		$this->db->set('summary', $summary);

		$upload_picture = $_FILES['picture']['name'];
			if($upload_picture)
			{
				$config['allowed_types'] = 'jpg|png';
				$config['max_size']      = '2048';
				$config['upload_path']   = './assets/img/project/';

				$this->load->library('upload', $config);

				if($this->upload->do_upload('picture'))
				{
					$old_picture = $data['user']['picture'];
					if($old_picture != 'default.png')
					{
						unlink(FCPATH . 'assets/img/project/' . $old_picture);
					}
					$new_picture = $this->upload->data('file_name');
					$this->db->set('picture', $new_picture);
				} else {
					echo $this->upload->display_errors();
				}
			}

		$this->db->set('author', $author);
		$this->db->set('date', $date);

		$this->db->where('id', $id);
		$this->db->update('project');

	}

	public function Component($id)
	{
		$title = $this->input->post('title');		
		$summary = $this->input->post('summary');
		$author = $this->input->post('author');
		$date = $this->input->post('date');		

		$this->db->set('title', $title);		
		$this->db->set('summary', $summary);

		$upload_picture = $_FILES['thumbnail']['name'];
			if($upload_picture)
			{
				$config['allowed_types'] = 'jpg|png';
				$config['max_size']      = '2048';
				$config['upload_path']   = './assets/img/component/';

				$this->load->library('upload', $config);

				if($this->upload->do_upload('thumbnail'))
				{
					$old_picture = $data['user']['thumbnail'];
					if($old_picture != 'default.png')
					{
						unlink(FCPATH . 'assets/img/component/' . $old_picture);
					}
					$new_picture = $this->upload->data('file_name');
					$this->db->set('thumbnail', $new_picture);
				} else {
					echo $this->upload->display_errors();
				}
			}

		$this->db->set('author', $author);
		$this->db->set('date', $date);

		$this->db->where('id', $id);
		$this->db->update('component');

	}

//==========================================================================================================
	// Component 1
	public function editComponent1($id)
	{
		$title_1 = $this->input->post('title_1');		
		$link_1 = $this->input->post('link_1');

		$upload_picture = $_FILES['picture_1']['name'];
			if($upload_picture)
			{
				$config['allowed_types'] = 'jpg|png';
				$config['max_size']      = '2048';
				$config['upload_path']   = './assets/img/component/comp_1/';

				$this->load->library('upload', $config);

				if($this->upload->do_upload('picture_1'))
				{
					$old_picture = $data['user']['picture_1'];
					if($old_picture != 'default.png')
					{
						unlink(FCPATH . 'assets/img/component/comp_1/' . $old_picture);
					}
					$new_picture = $this->upload->data('file_name');
					$this->db->set('picture_1', $new_picture);
				} else {
					echo $this->upload->display_errors();
				}
			}

		$desc_1 = $this->input->post('desc_1');
		$jenis = $this->input->post('jenis');

		$this->db->set('title_1', $title_1);
		$this->db->set('link_1', $link_1);
		$this->db->set('desc_1', $desc_1);
		$this->db->set('jenis', $jenis);

		$this->db->where('id', $id);
		$this->db->update('edit_comp');

	}

	public function editComponent2($id)
	{
		$title_2 = $this->input->post('title_2');		
		$link_2 = $this->input->post('link_2');

		$upload_picture = $_FILES['picture_2']['name'];
			if($upload_picture)
			{
				$config['allowed_types'] = 'jpg|png';
				$config['max_size']      = '2048';
				$config['upload_path']   = './assets/img/component/comp_1/';

				$this->load->library('upload', $config);

				if($this->upload->do_upload('picture_2'))
				{
					$old_picture = $data['user']['picture_2'];
					if($old_picture != 'default.png')
					{
						unlink(FCPATH . 'assets/img/component/comp_1/' . $old_picture);
					}
					$new_picture = $this->upload->data('file_name');
					$this->db->set('picture_2', $new_picture);
				} else {
					echo $this->upload->display_errors();
				}
			}

		$desc_2 = $this->input->post('desc_2');
		$jenis = $this->input->post('jenis');

		$this->db->set('title_2', $title_2);
		$this->db->set('link_2', $link_2);
		$this->db->set('desc_2', $desc_2);
		$this->db->set('jenis', $jenis);

		$this->db->where('id', $id);
		$this->db->update('edit_comp');

	}

	public function editComponent3($id)
	{
		$title_3 = $this->input->post('title_3');		
		$link_3 = $this->input->post('link_3');

		$upload_picture = $_FILES['picture_3']['name'];
			if($upload_picture)
			{
				$config['allowed_types'] = 'jpg|png';
				$config['max_size']      = '2048';
				$config['upload_path']   = './assets/img/component/comp_1/';

				$this->load->library('upload', $config);

				if($this->upload->do_upload('picture_3'))
				{
					$old_picture = $data['user']['picture_3'];
					if($old_picture != 'default.png')
					{
						unlink(FCPATH . 'assets/img/component/comp_1/' . $old_picture);
					}
					$new_picture = $this->upload->data('file_name');
					$this->db->set('picture_3', $new_picture);
				} else {
					echo $this->upload->display_errors();
				}
			}

		$desc_3 = $this->input->post('desc_3');
		$jenis = $this->input->post('jenis');

		$this->db->set('title_3', $title_3);
		$this->db->set('link_3', $link_3);
		$this->db->set('desc_3', $desc_3);
		$this->db->set('jenis', $jenis);

		$this->db->where('id', $id);
		$this->db->update('edit_comp');

	}

	public function editComponent4($id)
	{
		$title_4 = $this->input->post('title_4');		
		$link_4 = $this->input->post('link_4');

		$upload_picture = $_FILES['picture_4']['name'];
			if($upload_picture)
			{
				$config['allowed_types'] = 'jpg|png';
				$config['max_size']      = '2048';
				$config['upload_path']   = './assets/img/component/comp_1/';

				$this->load->library('upload', $config);

				if($this->upload->do_upload('picture_4'))
				{
					$old_picture = $data['user']['picture_4'];
					if($old_picture != 'default.png')
					{
						unlink(FCPATH . 'assets/img/component/comp_1/' . $old_picture);
					}
					$new_picture = $this->upload->data('file_name');
					$this->db->set('picture_4', $new_picture);
				} else {
					echo $this->upload->display_errors();
				}
			}

		$desc_4 = $this->input->post('desc_4');
		$jenis = $this->input->post('jenis');

		$this->db->set('title_4', $title_4);
		$this->db->set('link_4', $link_4);
		$this->db->set('desc_4', $desc_4);
		$this->db->set('jenis', $jenis);

		$this->db->where('id', $id);
		$this->db->update('edit_comp');

	}

	public function editComponent5($id)
	{
		$title_5 = $this->input->post('title_5');		
		$link_5 = $this->input->post('link_5');

		$upload_picture = $_FILES['picture_5']['name'];
			if($upload_picture)
			{
				$config['allowed_types'] = 'jpg|png';
				$config['max_size']      = '2048';
				$config['upload_path']   = './assets/img/component/comp_1/';

				$this->load->library('upload', $config);

				if($this->upload->do_upload('picture_5'))
				{
					$old_picture = $data['user']['picture_5'];
					if($old_picture != 'default.png')
					{
						unlink(FCPATH . 'assets/img/component/comp_1/' . $old_picture);
					}
					$new_picture = $this->upload->data('file_name');
					$this->db->set('picture_5', $new_picture);
				} else {
					echo $this->upload->display_errors();
				}
			}

		$desc_5 = $this->input->post('desc_5');
		$jenis = $this->input->post('jenis');

		$this->db->set('title_5', $title_5);
		$this->db->set('link_5', $link_5);
		$this->db->set('desc_5', $desc_5);
		$this->db->set('jenis', $jenis);

		$this->db->where('id', $id);
		$this->db->update('edit_comp');

	}

	public function editComponent6($id)
	{
		$title_6 = $this->input->post('title_6');		
		$link_6 = $this->input->post('link_6');

		$upload_picture = $_FILES['picture_6']['name'];
			if($upload_picture)
			{
				$config['allowed_types'] = 'jpg|png';
				$config['max_size']      = '2048';
				$config['upload_path']   = './assets/img/component/comp_1/';

				$this->load->library('upload', $config);

				if($this->upload->do_upload('picture_6'))
				{
					$old_picture = $data['user']['picture_6'];
					if($old_picture != 'default.png')
					{
						unlink(FCPATH . 'assets/img/component/comp_1/' . $old_picture);
					}
					$new_picture = $this->upload->data('file_name');
					$this->db->set('picture_6', $new_picture);
				} else {
					echo $this->upload->display_errors();
				}
			}

		$desc_6 = $this->input->post('desc_6');
		$jenis = $this->input->post('jenis');

		$this->db->set('title_6', $title_6);
		$this->db->set('link_6', $link_6);
		$this->db->set('desc_6', $desc_6);
		$this->db->set('jenis', $jenis);

		$this->db->where('id', $id);
		$this->db->update('edit_comp');

	}
//==========================================================================================================

//==========================================================================================================
	// Component 2
	public function editComponent7($id)
	{
		$title_1 = $this->input->post('title_1');		
		$link_1 = $this->input->post('link_1');

		$upload_picture = $_FILES['picture_1']['name'];
			if($upload_picture)
			{
				$config['allowed_types'] = 'jpg|png';
				$config['max_size']      = '2048';
				$config['upload_path']   = './assets/img/component/comp_2/';

				$this->load->library('upload', $config);

				if($this->upload->do_upload('picture_1'))
				{
					$old_picture = $data['user']['picture_1'];
					if($old_picture != 'default.png')
					{
						unlink(FCPATH . 'assets/img/component/comp_2/' . $old_picture);
					}
					$new_picture = $this->upload->data('file_name');
					$this->db->set('picture_1', $new_picture);
				} else {
					echo $this->upload->display_errors();
				}
			}

		$desc_1 = $this->input->post('desc_1');
		$jenis = $this->input->post('jenis');

		$this->db->set('title_1', $title_1);
		$this->db->set('link_1', $link_1);
		$this->db->set('desc_1', $desc_1);
		$this->db->set('jenis', $jenis);

		$this->db->where('id', $id);
		$this->db->update('edit_comp');

	}

	public function editComponent8($id)
	{
		$title_2 = $this->input->post('title_2');		
		$link_2 = $this->input->post('link_2');

		$upload_picture = $_FILES['picture_2']['name'];
			if($upload_picture)
			{
				$config['allowed_types'] = 'jpg|png';
				$config['max_size']      = '2048';
				$config['upload_path']   = './assets/img/component/comp_2/';

				$this->load->library('upload', $config);

				if($this->upload->do_upload('picture_2'))
				{
					$old_picture = $data['user']['picture_2'];
					if($old_picture != 'default.png')
					{
						unlink(FCPATH . 'assets/img/component/comp_1/' . $old_picture);
					}
					$new_picture = $this->upload->data('file_name');
					$this->db->set('picture_2', $new_picture);
				} else {
					echo $this->upload->display_errors();
				}
			}

		$desc_2 = $this->input->post('desc_2');
		$jenis = $this->input->post('jenis');

		$this->db->set('title_2', $title_2);
		$this->db->set('link_2', $link_2);
		$this->db->set('desc_2', $desc_2);
		$this->db->set('jenis', $jenis);

		$this->db->where('id', $id);
		$this->db->update('edit_comp');

	}

	public function editComponent9($id)
	{
		$title_3 = $this->input->post('title_3');		
		$link_3 = $this->input->post('link_3');

		$upload_picture = $_FILES['picture_3']['name'];
			if($upload_picture)
			{
				$config['allowed_types'] = 'jpg|png';
				$config['max_size']      = '2048';
				$config['upload_path']   = './assets/img/component/comp_2/';

				$this->load->library('upload', $config);

				if($this->upload->do_upload('picture_3'))
				{
					$old_picture = $data['user']['picture_3'];
					if($old_picture != 'default.png')
					{
						unlink(FCPATH . 'assets/img/component/comp_2/' . $old_picture);
					}
					$new_picture = $this->upload->data('file_name');
					$this->db->set('picture_3', $new_picture);
				} else {
					echo $this->upload->display_errors();
				}
			}

		$desc_3 = $this->input->post('desc_3');
		$jenis = $this->input->post('jenis');

		$this->db->set('title_3', $title_3);
		$this->db->set('link_3', $link_3);
		$this->db->set('desc_3', $desc_3);
		$this->db->set('jenis', $jenis);

		$this->db->where('id', $id);
		$this->db->update('edit_comp');

	}

	public function editComponent10($id)
	{
		$title_4 = $this->input->post('title_4');		
		$link_4 = $this->input->post('link_4');

		$upload_picture = $_FILES['picture_4']['name'];
			if($upload_picture)
			{
				$config['allowed_types'] = 'jpg|png';
				$config['max_size']      = '2048';
				$config['upload_path']   = './assets/img/component/comp_2/';

				$this->load->library('upload', $config);

				if($this->upload->do_upload('picture_4'))
				{
					$old_picture = $data['user']['picture_4'];
					if($old_picture != 'default.png')
					{
						unlink(FCPATH . 'assets/img/component/comp_2/' . $old_picture);
					}
					$new_picture = $this->upload->data('file_name');
					$this->db->set('picture_4', $new_picture);
				} else {
					echo $this->upload->display_errors();
				}
			}

		$desc_4 = $this->input->post('desc_4');
		$jenis = $this->input->post('jenis');

		$this->db->set('title_4', $title_4);
		$this->db->set('link_4', $link_4);
		$this->db->set('desc_4', $desc_4);
		$this->db->set('jenis', $jenis);

		$this->db->where('id', $id);
		$this->db->update('edit_comp');

	}

	public function editComponent11($id)
	{
		$title_5 = $this->input->post('title_5');		
		$link_5 = $this->input->post('link_5');

		$upload_picture = $_FILES['picture_5']['name'];
			if($upload_picture)
			{
				$config['allowed_types'] = 'jpg|png';
				$config['max_size']      = '2048';
				$config['upload_path']   = './assets/img/component/comp_2/';

				$this->load->library('upload', $config);

				if($this->upload->do_upload('picture_5'))
				{
					$old_picture = $data['user']['picture_5'];
					if($old_picture != 'default.png')
					{
						unlink(FCPATH . 'assets/img/component/comp_2/' . $old_picture);
					}
					$new_picture = $this->upload->data('file_name');
					$this->db->set('picture_5', $new_picture);
				} else {
					echo $this->upload->display_errors();
				}
			}

		$desc_5 = $this->input->post('desc_5');
		$jenis = $this->input->post('jenis');

		$this->db->set('title_5', $title_5);
		$this->db->set('link_5', $link_5);
		$this->db->set('desc_5', $desc_5);
		$this->db->set('jenis', $jenis);

		$this->db->where('id', $id);
		$this->db->update('edit_comp');

	}

	public function editComponent12($id)
	{
		$title_6 = $this->input->post('title_6');		
		$link_6 = $this->input->post('link_6');

		$upload_picture = $_FILES['picture_6']['name'];
			if($upload_picture)
			{
				$config['allowed_types'] = 'jpg|png';
				$config['max_size']      = '2048';
				$config['upload_path']   = './assets/img/component/comp_2/';

				$this->load->library('upload', $config);

				if($this->upload->do_upload('picture_6'))
				{
					$old_picture = $data['user']['picture_6'];
					if($old_picture != 'default.png')
					{
						unlink(FCPATH . 'assets/img/component/comp_2/' . $old_picture);
					}
					$new_picture = $this->upload->data('file_name');
					$this->db->set('picture_6', $new_picture);
				} else {
					echo $this->upload->display_errors();
				}
			}

		$desc_6 = $this->input->post('desc_6');
		$jenis = $this->input->post('jenis');

		$this->db->set('title_6', $title_6);
		$this->db->set('link_6', $link_6);
		$this->db->set('desc_6', $desc_6);
		$this->db->set('jenis', $jenis);

		$this->db->where('id', $id);
		$this->db->update('edit_comp');

	}
//==========================================================================================================

//==========================================================================================================
	// Component 3
	public function editComponent13($id)
	{
		$title_1 = $this->input->post('title_1');		
		$link_1 = $this->input->post('link_1');

		$upload_picture = $_FILES['picture_1']['name'];
			if($upload_picture)
			{
				$config['allowed_types'] = 'jpg|png';
				$config['max_size']      = '2048';
				$config['upload_path']   = './assets/img/component/comp_3/';

				$this->load->library('upload', $config);

				if($this->upload->do_upload('picture_1'))
				{
					$old_picture = $data['user']['picture_1'];
					if($old_picture != 'default.png')
					{
						unlink(FCPATH . 'assets/img/component/comp_3/' . $old_picture);
					}
					$new_picture = $this->upload->data('file_name');
					$this->db->set('picture_1', $new_picture);
				} else {
					echo $this->upload->display_errors();
				}
			}

		$desc_1 = $this->input->post('desc_1');
		$jenis = $this->input->post('jenis');

		$this->db->set('title_1', $title_1);
		$this->db->set('link_1', $link_1);
		$this->db->set('desc_1', $desc_1);
		$this->db->set('jenis', $jenis);

		$this->db->where('id', $id);
		$this->db->update('edit_comp');

	}

	public function editComponent14($id)
	{
		$title_2 = $this->input->post('title_2');		
		$link_2 = $this->input->post('link_2');

		$upload_picture = $_FILES['picture_2']['name'];
			if($upload_picture)
			{
				$config['allowed_types'] = 'jpg|png';
				$config['max_size']      = '2048';
				$config['upload_path']   = './assets/img/component/comp_3/';

				$this->load->library('upload', $config);

				if($this->upload->do_upload('picture_2'))
				{
					$old_picture = $data['user']['picture_2'];
					if($old_picture != 'default.png')
					{
						unlink(FCPATH . 'assets/img/component/comp_3/' . $old_picture);
					}
					$new_picture = $this->upload->data('file_name');
					$this->db->set('picture_2', $new_picture);
				} else {
					echo $this->upload->display_errors();
				}
			}

		$desc_2 = $this->input->post('desc_2');
		$jenis = $this->input->post('jenis');

		$this->db->set('title_2', $title_2);
		$this->db->set('link_2', $link_2);
		$this->db->set('desc_2', $desc_2);
		$this->db->set('jenis', $jenis);

		$this->db->where('id', $id);
		$this->db->update('edit_comp');

	}

	public function editComponent15($id)
	{
		$title_3 = $this->input->post('title_3');		
		$link_3 = $this->input->post('link_3');

		$upload_picture = $_FILES['picture_3']['name'];
			if($upload_picture)
			{
				$config['allowed_types'] = 'jpg|png';
				$config['max_size']      = '2048';
				$config['upload_path']   = './assets/img/component/comp_3/';

				$this->load->library('upload', $config);

				if($this->upload->do_upload('picture_3'))
				{
					$old_picture = $data['user']['picture_3'];
					if($old_picture != 'default.png')
					{
						unlink(FCPATH . 'assets/img/component/comp_3/' . $old_picture);
					}
					$new_picture = $this->upload->data('file_name');
					$this->db->set('picture_3', $new_picture);
				} else {
					echo $this->upload->display_errors();
				}
			}

		$desc_3 = $this->input->post('desc_3');
		$jenis = $this->input->post('jenis');

		$this->db->set('title_3', $title_3);
		$this->db->set('link_3', $link_3);
		$this->db->set('desc_3', $desc_3);
		$this->db->set('jenis', $jenis);

		$this->db->where('id', $id);
		$this->db->update('edit_comp');

	}

	public function editComponent16($id)
	{
		$title_4 = $this->input->post('title_4');		
		$link_4 = $this->input->post('link_4');

		$upload_picture = $_FILES['picture_4']['name'];
			if($upload_picture)
			{
				$config['allowed_types'] = 'jpg|png';
				$config['max_size']      = '2048';
				$config['upload_path']   = './assets/img/component/comp_3/';

				$this->load->library('upload', $config);

				if($this->upload->do_upload('picture_4'))
				{
					$old_picture = $data['user']['picture_4'];
					if($old_picture != 'default.png')
					{
						unlink(FCPATH . 'assets/img/component/comp_3/' . $old_picture);
					}
					$new_picture = $this->upload->data('file_name');
					$this->db->set('picture_4', $new_picture);
				} else {
					echo $this->upload->display_errors();
				}
			}

		$desc_4 = $this->input->post('desc_4');
		$jenis = $this->input->post('jenis');

		$this->db->set('title_4', $title_4);
		$this->db->set('link_4', $link_4);
		$this->db->set('desc_4', $desc_4);
		$this->db->set('jenis', $jenis);

		$this->db->where('id', $id);
		$this->db->update('edit_comp');

	}

	public function editComponent17($id)
	{
		$title_5 = $this->input->post('title_5');		
		$link_5 = $this->input->post('link_5');

		$upload_picture = $_FILES['picture_5']['name'];
			if($upload_picture)
			{
				$config['allowed_types'] = 'jpg|png';
				$config['max_size']      = '2048';
				$config['upload_path']   = './assets/img/component/comp_3/';

				$this->load->library('upload', $config);

				if($this->upload->do_upload('picture_5'))
				{
					$old_picture = $data['user']['picture_5'];
					if($old_picture != 'default.png')
					{
						unlink(FCPATH . 'assets/img/component/comp_3/' . $old_picture);
					}
					$new_picture = $this->upload->data('file_name');
					$this->db->set('picture_5', $new_picture);
				} else {
					echo $this->upload->display_errors();
				}
			}

		$desc_5 = $this->input->post('desc_5');
		$jenis = $this->input->post('jenis');

		$this->db->set('title_5', $title_5);
		$this->db->set('link_5', $link_5);
		$this->db->set('desc_5', $desc_5);
		$this->db->set('jenis', $jenis);

		$this->db->where('id', $id);
		$this->db->update('edit_comp');

	}

	public function editComponent18($id)
	{
		$title_6 = $this->input->post('title_6');		
		$link_6 = $this->input->post('link_6');

		$upload_picture = $_FILES['picture_6']['name'];
			if($upload_picture)
			{
				$config['allowed_types'] = 'jpg|png';
				$config['max_size']      = '2048';
				$config['upload_path']   = './assets/img/component/comp_3/';

				$this->load->library('upload', $config);

				if($this->upload->do_upload('picture_6'))
				{
					$old_picture = $data['user']['picture_6'];
					if($old_picture != 'default.png')
					{
						unlink(FCPATH . 'assets/img/component/comp_3/' . $old_picture);
					}
					$new_picture = $this->upload->data('file_name');
					$this->db->set('picture_6', $new_picture);
				} else {
					echo $this->upload->display_errors();
				}
			}

		$desc_6 = $this->input->post('desc_6');
		$jenis = $this->input->post('jenis');

		$this->db->set('title_6', $title_6);
		$this->db->set('link_6', $link_6);
		$this->db->set('desc_6', $desc_6);
		$this->db->set('jenis', $jenis);

		$this->db->where('id', $id);
		$this->db->update('edit_comp');

	}
//==========================================================================================================

	public function editprofile()
	{
			$username = $this->input->post('username');
			$email = $this->input->post('email');			

			$this->db->set('username', $username);
			$this->db->where('email', $email);

			$upload_foto = $_FILES['photo']['name'];
			
			if($upload_foto)
			{
				$config['allowed_types'] = 'jpg|png';
				$config['max_size']      = '2048';
				$config['upload_path']   = './assets/img/profile/';

				$this->load->library('upload', $config);

				if($this->upload->do_upload('photo'))
				{
					$foto_lama = $data['user']['gambar'];
					if($foto_lama != 'default.jpg')
					{
						unlink(FCPATH . 'assets/img/profile/' . $foto_lama);
					}
					$foto_baru = $this->upload->data('file_name');
					$this->db->set('gambar', $foto_baru);
				} else {
					echo $this->upload->display_errors();
				}

			}

			$this->db->update('user');
	}

	public function editpassword($data)
	{
		$passwordlama = $this->input->post('passwordlama');
		$passwordbaru = $this->input->post('password1');
		if(!password_verify($passwordlama, $data['user']['password']))
		{
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert"> Password Lama Salah :( </div>');
			redirect('member/edit_password');
		} else {
			if($passwordlama == $passwordbaru)
			{
				$this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert"> Password Baru Tidak Boleh Sama Dengan Pasword Lama :( </div>');
				redirect('member/edit_password');
			} else {
				$password_hash = password_hash($passwordbaru, PASSWORD_DEFAULT);

				$this->db->set('password', $password_hash);
				$this->db->where('email', $data['user']['email']);
				$this->db->update('user');
			}
		}
	}

	public function banned()
	{
			$status = $this->input->post('status');
			$email = $this->input->post('email');			

			$this->db->set('status', $status);
			$this->db->where('email', $email);
				
		return $this->db->update('user');
	}

	public function unbanned()
	{
			$status = $this->input->post('status');
			$email = $this->input->post('email');			

			$this->db->set('status', $status);
			$this->db->where('email', $email);
				
		return $this->db->update('user');
	}
}