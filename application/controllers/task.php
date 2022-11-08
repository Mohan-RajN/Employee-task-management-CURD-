<?php

	class Task extends CI_Controller{

			public function __construct(){
				parent::__construct();
				$this->load->helper('url');
 				$this->load->model('task_model');
				$this->load->database();
				$this->load->library('session');
			}
		
			public function savedata(){
		
				if($this->input->post('save'))
				{
					$data['user_id']=$this->input->post('user_id');
					$data['task_details']=$this->input->post('task_details');
					$data['task_assigned_to']=$this->input->post('task_assigned_to');
					$data['task_assigned_from']=$this->input->post('task_assigned_from');
					$data['task_status']=$this->input->post('task_status');
					$data['task_started_date']=$this->input->post('task_started_date');
					$data['task_completed_date']=$this->input->post('task_completed_date');
					$data['time_for_the_hours']=$this->input->post('time_for_the_hours');
					$data['spending_time_with_task']=$this->input->post('spending_time_with_task');

					$response = $this->task_model->saverecords($data);
					if($response==0)
					{
						echo "Insertred Successfully ";
					}else{
						echo "Failed to Inserted";
					}
                    

				}
				
			}
			public function displaydata()
			{
				$result['data']= $this->task_model->display_records();
				$this->load->view('display_records', $result);
			}
			
		public function updatedata()
		{
			$id = $this->input->get('id');
            // print_r($id);exit();
			$result['data'] = $this->task_model->displayrecordsById($id);
           
 			$this->load->view('update_records', $result);
			if($this->input->post('update'))    
			{
				$user_id = $this->input->post('user_id');
				$task_details=$this->input->post('task_details');
				$task_assigned_to=$this->input->post('task_assigned_to');
				$task_assigned_from=$this->input->post('task_assigned_from');
				$task_status=$this->input->post('task_status');
				$task_started_date=$this->input->post('task_started_date');
				$task_completed_date=$this->input->post('task_completed_date');
				$time_for_the_hours=$this->input->post('time_for_the_hours');
				$spending_time_with_task=$this->input->post('spending_time_with_task');
				  
                
				$this->task_model->update_records($user_id,$task_details,$task_assigned_to,$task_assigned_from,$task_status,$task_started_date,$task_completed_date,$time_for_the_hours,$spending_time_with_task,$id);
				echo "Employee Details Updated Successfully";
			}
		}

        public function deletedata()
        {
            $id=$this->input->get('$id');
            $response = $this->task_model->deleteRecordsById($id);
            if($response==true)
            {
                echo "Deleted Successfully";
            }
            else{
                echo "Failed to Delete";
            }
        }
	}
