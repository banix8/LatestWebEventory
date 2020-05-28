<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('users_model');
		// load form and url helpers
        $this->load->helper(array('form', 'url'));
        // load form_validation library
        $this->load->library('form_validation');
	}
	
	public function index(){
		//load session library
		$this->load->library('session');
		$this->load->view('login');		
	}

	public function login(){
		//load session library
		$this->load->library('session');

		$email = $_POST['email'];
		$password = $_POST['password'];

		$data = $this->users_model->login($email, $password);	

		if($data){
			$this->session->set_userdata('user', $data);
			$data['users'] = $this->users_model->getAllUsers();
			$this->load->view('supplier',$data);	
		}
		else{
			header('location:'.base_url().$this->index());
			$this->session->set_flashdata('error','Invalid login. User not found');
		} 
	}

	public function home(){
		//load session library
		$this->load->library('session');

		//restrict users to go to home if not logged in
		if($this->session->userdata('user')){
			$this->load->view('home');
		}
		else{
			redirect('/');
		}
		
	}

	public function update($id){

		$user['fullName'] = $this->input->post('fullName');
		$user['email'] = $this->input->post('email');
		$user['password'] = $this->input->post('password');
		$user['accountType	'] = $this->input->post('accountType');

		$query = $this->users_model->updateuser($user, $id);

		if($query){
			header('location:'.base_url().$this->index());
		}
	}

	public function edit($id){
		$data['user'] = $this->users_model->getUser($id);
		$this->load->view('editform', $data);
	}

	

	public function logout(){
		//load session library
		$this->load->library('session');
		$this->session->unset_userdata('user');
		redirect('/');
	}

	public function delete($id){
		$query = $this->users_model->deleteuser($id);

		if($query){
			header('location:'.base_url().$this->index());
		}	
	}
	

}
