<?php 
	class User_model extends CI_Model{
		public function store($data){
			$this->db->insert('user',$data);
			return true;
		}
		public function getUser($email){
			return $this->db->where('email',$email)->get('user')->row();
		}

		public function saverecord($data)
		{
			$this->db->insert('task_management');
			return true;
		}

		public function list_emp()
		{
			$query = $this->db->get('task_management');
			return $query->result();
		}

		public function updateempById($id)
		{
			$query = $this->db->query("select * from task_management where id='".$id."'");
			return $query->result();
		}

		public function update_emp($user_id,$task_details,$task_assigned_to,$task_assigned_from,$task_status,$task_started_date,$task_completed_date,$time_for_the_hours,$spending_time_with_task,$id)
		{
			$this->db->query("update user SET user_id='$user_id',task_details='$task_details',task_assigned_to='$task_assigned_to',task_assigned_from='$task_assigned_from',task_status='$task_status',task_started_date='$task_started_date',task_completed_date='$task_completed_date',time_for_the_hours='$time_for_the_hours',spending_time_with_task='$spending_time_with_task' WHERE id = '".$id."'");
		}

	}
