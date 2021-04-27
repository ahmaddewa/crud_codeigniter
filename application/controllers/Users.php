<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Users extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('Users_model');
	}
	public function index(){
		$data['users'] = $this->Users_model->getAllUsers();
		$this->load->view('user_list.php', $data);
		
	}

	public function addnew(){
		$this->load->view('addform');
	}

	public function insert(){
		$user['nama'] = $this->input->post('nama');
		$user['nim'] = $this->input->post('nim');
		$user['jurusan'] = $this->input->post('jurusan');
		$user['alamat'] = $this->input->post('alamat');

		$query = $this->Users_model->addUser($user);
		
		if($query){
			header('location:' .base_url().'index.php/users'.$this->index());
		}

	}

	public function edit($id){
		$data['users'] = $this->Users_model->getUserId($id);
		$this->load->view('editform', $data);
	}

	public function update($id){
		$user['nama'] = $this->input->post('nama');
		$user['nim'] = $this->input->post('nim');
		$user['jurusan'] = $this->input->post('jurusan');
		$user['alamat'] = $this->input->post('alamat');

		$query = $this->Users_model->updateuser($user, $id);

		if($query){
			header('location:' .base_url().'index.php/users'.$this->index());
		}
	}

	public function delete($id){
		$query=$this->Users_model->deleteuser($id);

		if($query){
			header('location:' .base_url().'index.php/users'.$this->index());
		}
	}

}


?>