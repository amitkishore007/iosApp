<?php
defined('BASEPATH') OR exit('No direct script access allowed');


/**
* 
*/
class User extends CI_Controller
{
	

	public function index() {

		$data['main_content'] = 'admin/login';
		$this->load->view('includes/template',$data);

	}

	public function login() {

		
	}

	public function register() {


	}




}
