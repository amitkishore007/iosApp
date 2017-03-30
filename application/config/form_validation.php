<?php 


$config = [
		
		'login_validation'=>[
								[
								 'field' => 'email',
			                     'label' => 'email_address',
			                     'rules' => 'required|valid_email'
								],
								[
								 'field' => 'password'
			                     'label' => 'password',
			                     'rules' => 'required'
								],
								
		],


		'register_validation'=>[


		],
		'edit_user_validation'=>[


		],

];
