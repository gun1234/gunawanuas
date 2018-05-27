<?php
class Post extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
		$this->load->model('post_model');
        // $this->load->helper('url');
        $this->load->helper(array('form', 'url'));
	}
 
	function index(){
		$this->load->view('admin/index');
		// redirect('crud/index');
	}
	
	function daftar(){
		$this->load->view('admin/daftar');
		// redirect('crud/index');
	}


	function aksi_delete($id){
		$where = array('id' => $id);
		$this->post_model->hapus_data($where,'post');
		redirect('admin/post');
	}
	function edit($id){
		$where = array('id' => $id);
		$data['post_article'] = $this->post_model->detail_data($where,'post')->result();
		$this->load->view('admin/edit',$data);
	}
	function aksi_update(){
		$id = $this->input->post('id');
		$full_name = $this->input->post('full_name');
		$title = $this->input->post('title');
		$html_content = $this->input->post('html_content');
		$markdown_content = $this->input->post('markdown_content');
		$image = "kosong";
		$datetime = $this->input->post('datetime');
		$author = $this->input->post('author');
		$status = $this->input->post('status');
		$slug = $this->input->post('slug');

		$data = array(
				'full_name' => $full_name,
				'title' => $title,
				'html_content' => $html_content,
				'markdown_content' => $markdown_content,
				// 'image' => $image,
				'datetime' => $datetime,
				'author' => $author,
				'status' => $status,
				'slug' => $slug
				);
		$where = array(
			'id' => $id
		);
		// print_r($data);
		$this->post_model->update_data($where,$data,'post');
	}

	
	function add(){
		$this->load->view('admin/add', array('error' => ' ' ));
	}

	function aksi_add(){
		// proses upload gambar ke folder images
		$config['upload_path']          = './images/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 10000;
		$this->load->library('upload', $config);
 		// proses upload gambar ke folder images
		if ( ! $this->upload->do_upload('image')){
			$error = array('error' => $this->upload->display_errors());
			// $this->load->view('v_upload', $error);
			$full_name = $this->input->post('full_name');
			$title = $this->input->post('title');
			$html_content = $this->input->post('html_content');
			$markdown_content = $this->input->post('markdown_content');
			$image = "kosong";
			$datetime = $this->input->post('datetime');
			$author = $this->input->post('author');
			$status = $this->input->post('status');
			$slug = $this->input->post('slug');

			$data = array(
				'full_name' => $full_name,
				'title' => $title,
				'html_content' => $html_content,
				'markdown_content' => $markdown_content,
				'image' => $image,
				'datetime' => $datetime,
				'author' => $author,
				'status' => $status,
				'slug' => $slug
				);
			$this->post_model->input_data($data,'post');
			redirect('admin/post');
		}else{
			// $data = array('upload_data' => $this->upload->data());
			// $this->load->view('v_upload_sukses', $data);
			$file = $this->upload->data();
			// echo $file['file_name'];
			$full_name = $this->input->post('full_name');
			$title = $this->input->post('title');
			$html_content = $this->input->post('html_content');
			$markdown_content = $this->input->post('markdown_content');
			$image = $file['file_name'];
			$datetime = $this->input->post('datetime');
			$author = $this->input->post('author');
			$status = $this->input->post('status');
			$slug = $this->input->post('slug');

			$data = array(
				'full_name' => $full_name,
				'title' => $title,
				'html_content' => $html_content,
				'markdown_content' => $markdown_content,
				'image' => $image,
				'datetime' => $datetime,
				'author' => $author,
				'status' => $status,
				'slug' => $slug
				);
			$this->post_model->input_data($data,'post');
			redirect('admin/post');
			// print_r($data);
		}

				
	}

	function login(){
		$this->load->view('admin/login');
	}

	function aksi_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => md5($password)
			);
		$cek = $this->post_model->detail_data($where,'user')->num_rows();
		if($cek > 0){
			$cek2 = $this->post_model->detail_data($where,'user')->result();
			foreach ($cek2 as $row){
				$id =  $row->id;
			}
			
			$data_session = array(
				'nama' => $username,
				'id' => $id,
				'status' => "login"
			);
 
			$this->session->set_userdata($data_session);
 			redirect(base_url("index.php/admin/post/index"));
			echo "Username dan password ada !";
 
		}else{
			redirect(base_url("index.php/admin/post/login"));
		}
	}

	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('index.php/welcome'));
	}

}
?>