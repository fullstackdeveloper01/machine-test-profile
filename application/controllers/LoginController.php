<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class LoginController extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('loginModel');
		$this->load->database();
    }

	public function loginPage()
	{
		$this->load->view('login');
	}


	public function login()
	{
		$userEmail = $this->input->post('userEmail');
		$userPassword = $this->input->post('userPassword');
		if($userEmail != "" && $userPassword !="") {

			$loginData = array(
				"userEmail" => $userEmail,
				"userPassword" => $userPassword,
			);
			$result = $this->loginModel->getDataWhere('tbl_users', '*', $loginData);
			if($result) {
				echo "User Login Successfully";
			} else {
				echo "Something went wrong";
			}
		}
	}


}
