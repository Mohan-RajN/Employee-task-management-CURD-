<?php

class Task extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('task_model');
		$this->load->database();
		$this->load->library('session');
	}

	public function savedata()
	{
		$this->load->view('add_emp');
		if ($this->input->post('save')) {
			$data['name'] = $this->input->post('name');
			$data['email'] = $this->input->post('email');
			$data['number'] = $this->input->post('number');
			$data['address'] = $this->input->post('address');
			$data['role_id'] = $this->input->post('role_id');
			$data['is_active_status'] = $this->input->post('is_active_status');
			$response = $this->task_model->saverecords($data);

			if ($response == 0) {
				echo "User Successfully ";
			} else {
				echo "Failed to User";
			}
		}
	}
	public function displaydata()
	{
		$result['data'] = $this->task_model->display_records();
		$this->load->view('display_records', $result);
	}

	public function deletedata()
	{
		$id = $this->input->get('id');
		$response = $this->task_model->deleteRecordById($id);
		if ($response == true) {
			echo "Deleted Successfully";
		} else {
			echo "Failed to Delete";
		}
	}

	public function updatedata()
	{
		$id = $this->input->get('id');
		// print_r($id);exit();
		$result['data'] = $this->task_model->displayrecordsById($id);

		$this->load->view('update_records', $result);
		if ($this->input->post('update')) {

			$name = $this->input->post('name');
			$email = $this->input->post('email');
			$number = $this->input->post('number');
			$address = $this->input->post('address');
			$role_id = $this->input->post('role_id');
			$is_active_status = $this->input->post('is_active_status');

			$this->task_model->update_records($name, $email, $number, $address, $role_id, $is_active_status, $id);

			echo "Employee Details Updated Successfully";
		}
	}

	public function savetask()
	{
		$this->load->view('add_task');
		
		if ($this->input->post('save')) {
			$data['project_name'] = $this->input->post('project_name');
			$data['task_name'] = $this->input->post('task_name');
			$data['task_details'] = $this->input->post('task_details');
			$data['task_assigned_from'] = $this->input->post('task_assigned_from');
			$data['task_assigned_to'] = $this->input->post('task_assigned_to');
			$data['time_for_the_hours'] = $this->input->post('time_for_the_hours');
			$data['spending_time_with_task'] = $this->input->post('spending_time_with_task');
			$data['task_started_date'] = $this->input->post('task_started_date');
			$data['task_completed_date'] = $this->input->post('task_completed_date');
			$data['task_status'] = $this->input->post('task_status');


			$response = $this->task_model->savetaskrecord($data);

			if ($response == 0) {
				echo "Add Task Successfully ";
			} else {
				echo "Failed ?";
			}
		}
	}

	public function displaytask()
	{
		$result['data'] = $this->task_model->display_task();
		$this->load->view('display_task', $result);
	} 

	public function deletetask()
	{
		$id = $this->input->get('id');
		$response = $this->task_model->deleteRecordsById($id);
		if ($response == true) {
			echo "Deleted Successfully";
		} else {
			echo "Failed to Delete";
		}
	}
	
	public function updatetask()
	{
		$id = $this->input->get('id');
		///print_r($id);exit();
		$result['data'] = $this->task_model->displaytaskrecordsById($id);
		// print_r($result);exit();

		$this->load->view('update_task', $result);
		// print_r('hiii');exit();
		if ($this->input->post('task')) {
		 
			$project_name = $this->input->post('project_name');
			$task_name= $this->input->post('task_name');
			$task_details= $this->input->post('task_details');
			$task_assigned_from= $this->input->post('task_assigned_from');
			$task_assigned_to= $this->input->post('task_assigned_to');
			$time_for_the_hours= $this->input->post('time_for_the_hours');
			$spending_time_with_task= $this->input->post('spending_time_with_task');
			$task_started_date= $this->input->post('task_started_date');
			$task_completed_date= $this->input->post('task_completed_date');
			$task_status= $this->input->post('task_status');
			// $comment_status= $this->input->post('comment_status');

			$this->task_model->update_record($project_name, $task_name, $task_details, $task_assigned_from, $task_assigned_to, $time_for_the_hours,$spending_time_with_task,$task_started_date,$task_completed_date,$task_status, $id);

 		}
	}
	public function comment()
	{
		$id=$this->input->get('id');
		// print_r($id);exit;
		$result['data']=$this->task_model->displaycommentById($id);
		$this->load->view('comment_status',$result);
		// print_r('hoi');exit;
		if($this->input->post('comment'))
		{
 			$comment_status= $this->input->post('comment_status');

			$this->task_model->update_comment($comment_status, $id);
		}
	}

	//


}
