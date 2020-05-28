<?php
	class Users_model extends CI_Model {
		function __construct(){
			parent::__construct();
			$this->load->database();
		}

		public function getAllUsers(){
			$query = $this->db->get('tbl_useraccounts');
			return $query->result(); 
		}
		
		public function login($email, $password){
			$query = $this->db->get_where('tbl_useraccounts', array('email'=>$email, 'password'=>$password));
			return $query->row_array();
		}
		
		public function deleteuser($id){
			$this->db->where('tbl_useraccounts.accountID', $id);
			return $this->db->delete('tbl_useraccounts');
		}

		public function updateuser($user, $id){
			$this->db->where('tbl_useraccounts.accountID', $id);
			return $this->db->update('tbl_useraccounts', $user);
		}

		public function getUser($id){
			$query = $this->db->get_where('tbl_useraccounts',array('accountID'=>$id));
			return $query->row_array();
		}

	}
?>