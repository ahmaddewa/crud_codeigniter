<?php
class Users_model extends CI_Model {
	function __construct(){
		parent::__construct();
		$this->load->database();
	}

	public function getAllUsers(){
		$query = $this->db->get('users');
		return $query->result();
	}

	public function addUser($data){
		return $query = $this->db->insert('users',$data);
	}

	public function getUserId($id){
		$query = $this->db->get_where('users',array('id'=>$id));
		return $query->row_array();
	}

	public function updateuser($data, $id){
		$this->db->where('users.id',$id);
		return $this->db->update('users', $data);
	}

	public function deleteuser($id){
		$this->db->where('users.id',$id);
		return $this->db->delete('users');
	}
}

?>