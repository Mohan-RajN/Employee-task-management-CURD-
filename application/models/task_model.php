<?php
class Task_model extends CI_Model
{

	public function saverecords($data)
	{
		$this->db->insert('user', $data);

		return true;
	}

	public function display_records()
	{
		$query = $this->db->get('user');
		// echo '<pre>';print_r($query->result());exit;
		return $query->result();

	}

	public function displayrecordsById($id)
	{

		$query = $this->db->query("select * from user where id='" . $id . "'");
		//  print_r($query->result());exit;
		return $query->result();
	}

	public function update_records($name, $email, $number, $address, $role_id, $is_active_status, $id)
	{
		$this->db->query("update `user` SET name='$name',email='$email',number='$number',address='$address',role_id='$role_id',is_active_status='$is_active_status' WHERE id='" . $id . "'");

		return true;
	}

	public function deleteRecordById($id)
	{
		// $this->db->where('id',$id);
		// $this->db->delete('task');
		$this->db->query("delete from `user` where id='" . $id . "'");
		return true;
	}


	///task

	public function savetaskrecord($data)
	{
		$this->db->insert('task', $data);

		return true;
	}

	public function display_task()
	{
		// $query = $this->db->get('task');
		// // echo '<pre>';print_r($query->result());exit;
		// return $query->result();
		$this->db->select('*');
		$this->db->from('user');
		$this->db->join('task', 'task.task_assigned_from = user.id', 'right');
   		$query = $this->db->get();
		
		if ($query->num_rows() != 0) {
			// echo '<pre>';print_r($query->result());exit;
			return $query->result();

 		} else {
			return false;
		}
	}

	public function displaytaskrecordsById($id)
	{

		$query = $this->db->query("SELECT * from task where id='".$id."'");
		// echo '<pre>';print_r($query);exit;
		return $query->result();

	}


	public function update_record($project_name, $task_name, $task_details, $task_assigned_from, $task_assigned_to, $time_for_the_hours, $spending_time_with_task, $task_started_date, $task_completed_date, $task_status, $id)
	{
		$this->db->query("UPDATE `task` SET project_name='$project_name',task_name='$task_name',task_details='$task_details',task_assigned_from='$task_assigned_from',task_assigned_to='$task_assigned_to',time_for_the_hours='$time_for_the_hours',spending_time_with_task='$spending_time_with_task',task_started_date='$task_started_date',task_completed_date='$task_completed_date',task_status='$task_status' WHERE id='" . $id . "'");

		return true;
	}
	public function deleteRecordsById($id)
	{
		// $this->db->where('id',$id);
		// $this->db->delete('task');
		$this->db->query("DELETE from `task` where id='" . $id . "'");
		return true;
	}

	public function displaycommentById($id)
	{
		$query=$this->db->query("SELECT * FROM `task` WHERE id='".$id."'");
		return $query;
	}

	public function update_comment($comment_status,$id)
	{
		$this->db->query("UPDATE `task` SET comment_status='$comment_status' WHERE id='" . $id . "'");
		return true;
	}
}
