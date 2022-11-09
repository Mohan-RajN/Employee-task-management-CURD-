<?php
class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if($this->session->userdata('logged_in') !== TRUE)
        {
            redirect('login');
        }
    }

    public function index()
    {
        if($this->session->userdata('role_id')=='1')
        {
            $this->load->view('home');
        }
        else
        {
            echo "Access Denied";
        }
    }

    public function manager()
    {
        if($this->session->userdata('role_id')=='2')
        {
 
            $this->load->view('home');
        }
        else
        {
            echo "Access Denied";
        }
    }

    public function employee()
    {
        if($this->session->userdata('role_id')=='3')
        {
            $this->load->view('home');
        }
        else
        {
            echo "Access Denied";
        }
    }
        

        
    
}
