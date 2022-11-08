<?php 
	class Task_model extends CI_Model{
		 
		public function saverecords($data)
		{
			$this->db->insert('task', $data);
			return true;
		}

		public function display_records()
		{
			$query = $this->db->get('task');
            // echo '<pre>';print_r($query->result());exit;
			return $query->result();
		}

		public function displayrecordsById($id)
		{
        
			$query = $this->db->query("select * from `task` where id='".$id."'");
			return $query->result();
		}

		public function update_records($user_id,$task_details,$task_assigned_to,$task_assigned_from,$task_status,$task_started_date,$task_completed_date,$time_for_the_hours,$spending_time_with_task,$id)
		{
			$this->db->query("update `task` SET user_id='$user_id',task_details='$task_details',task_assigned_to='$task_assigned_to',task_assigned_from='$task_assigned_from',task_status='$task_status',task_started_date='$task_started_date',task_completed_date='$task_completed_date',time_for_the_hours='$time_for_the_hours',spending_time_with_task='$spending_time_with_task' where id = '".$id."'");
            
            
		}

        public function deleteRecordsById($id)
        {
            $this->db->where('id', $id);
            $this->db->delete('task');
            return true; 
        }

	}
