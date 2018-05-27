<?php
class Post_model extends CI_Model{
	function tampil_data(){
		return $this->db->get('post');
	}

	function detail_data($where,$table){		
		return $this->db->get_where($table,$where);
	}

	function input_data($data,$table){
		$this->db->insert($table,$data);
	}

	function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
	function daftar($data){
		return $this->db->insert("user",$data);
	}
}
?>