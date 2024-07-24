	<?php

	class UserModel extends CI_Model
	{
		
		function __construct()
		{
			//parent::__construct();
		}

		function retrieveProvnice(){
			$this->db->from('province');
			return $this->db->get()->result();
		}
		function insertUserForm($data){
			return $this->db->insert('users',$data);
		}
		function retrieveUsersById($id){
			$this->db->where('user_id',$id);
			$this->db->from('users');
			return $this->db->get()->result();
		}
		function removeUser($id){
			$this->db->where('user_id',$id);
			return $this->db->delete('users');
		}
		
		function updateUser($id,$data){
			$this->db->where('user_id',$id);
			return $this->db->update('users',$data);
		}
	}
	?>