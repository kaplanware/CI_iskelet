<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('id')){
            redirect(base_url("login/login_form"));
        }
    }

	public function index()
	{

	}

	public function dashboard(){
        $data['title'] = "Dashboard";
        $data['view'] = "panel/dashboard/content";
        $this->load->view("panel/index",$data);
    }

}
