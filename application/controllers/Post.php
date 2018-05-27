<?php
class Post extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
		$this->load->model('post_model');
        $this->load->helper('url');
	}
 
	function index(){
		$this->load->view('index');
		// redirect('crud/index');
	}

	function show($id){
		$where = array('id' => $id);
		$data['post_detail'] = $this->post_model->detail_data($where,'post')->result();
		$this->load->view('show',$data);
		// print_r($data);
	}
}
?>