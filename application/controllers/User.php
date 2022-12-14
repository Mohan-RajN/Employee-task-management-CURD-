<?php

use LDAP\Result;

class User extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('form_validation');
		$this->load->model('user_model');
		$this->load->database();
		$this->load->library('session');
	}

	public function signup()
	{


		$this->load->view('signup_form');
	}

	public function submit()
	{

		$this->form_validation->set_rules('email', 'Email', 'required|is_unique[user.email]', array('is_unique' => 'Email already exists!'));
		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('signup_form');
		} else {
			$data['name'] = $this->input->post('name');
			$data['email'] = $this->input->post('email');
			$data['password'] = $this->input->post('password');


			$response = $this->user_model->store($data);
			if ($response == true) {
				echo 'Succesfully registered';
			} else {
				echo 'Failed to register';
			}
		}
	}

	public function login()
	{
		$this->load->view('login_form');
	}

	public function login_user()
	{
		$email = $this->input->post('email', TRUE);
		$password = $this->input->post('password', TRUE);
		$validate = $this->user_model->validate($email, $password);

		if ($validate->num_rows() > 0) {

			$data = $validate->row_array();
			$name = $data['name'];
			$email = $data['email'];
			$role_id = $data['role_id'];
			$sessdata = array('name' => $name, 'email' => $email, 'role_id' => $role_id, 'logged_in' => TRUE);

			$this->session->set_userdata($sessdata);
			if ($role_id === '1') {
				redirect('admin');
			} elseif ($role_id === '2') {
				redirect('admin/manager');
			} elseif ($role_id === '3') {
				redirect('admin/employee');
			}
		} else {
			echo $this->session->set_flashdata('msg', 'Username or Password is Wrong ?');
			redirect('user/login');
		}
	}

	public function home()
	{
		if ($this->input->is_ajax_request()) {
			$data = $this->load->view('home', null, true);
			echo $data;
		} else {

			$this->load->view('include/index');
		}
	}

	public function logout()
	{

		$this->session->sess_destroy();
		redirect('user/login');
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
			$data['department'] = $this->input->post('department');
			$data['is_active_status'] = $this->input->post('is_active_status');
			$response = $this->task_model->saverecords($data);

			if ($response == 0) {
				echo "User Successfully ";
			} else {
				echo "Failed to User";
			}
		}
	}
}
