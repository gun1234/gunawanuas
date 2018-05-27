<?php
class Daftar extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('post_model');
        // $this->load->helper('url');
        $this->load->helper(array('form', 'url'));
	}
 	function index(){
		$this->load->view('admin/daftar');
		// redirect('crud/index');
	}
 	function daftar(){
		$data = array(
			"email" => $this->input->post('email'),
			"password" => md5($this->input->post('password')),
			"nama_lengkap" => $this->input->post('nama'),
			"username" => $this->input->post('username')
		);
		$data = $this->post_model->daftar($data);
		echo "<script>alert('Berhasil Daftar. Silahkan login.');</script>";
		
		redirect('admin/post/login');
	}

}
?>
