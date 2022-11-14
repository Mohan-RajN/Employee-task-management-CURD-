<?php 
	class User_model extends CI_Model{ 
		public function store($data){
			$this->db->insert('user',$data);
			return true;
		}
		public function getUser($email){
			return $this->db->where('email',$email)->get('user')->row();
		} 
 
		public function validate($email,$password)
		{
			$this->db->where('email',$email);
			$this->db->where('password',$password);
			$result = $this->db->get('user',1);
			return $result;
		}

		 
	}
