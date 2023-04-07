<?php
namespace App\Controllers;

use App\Models\UserModel;

class User extends BaseController {

	public function __construct() {

		$db = db_connect();
		$this->userModel = new UserModel($db);
	}

	public function add() {
		echo view('news/add');
	}

	public function save() {
		$first_name	= $this->request->getPost('txtLastName');
		$last_name	= $this->request->getPost('txtLastName');
		$email		= $this->request->getPost('txtEmail');
	
		$data = [
			'first_name'		=> $first_name,
			'last_name'		=> $last_name,
			'email'			=> $email,
		];

		$result = $this->userModel->add($data);
		if($result) {
			echo "New user is registered successfully.";
		} else {
			echo "Something went wrong";
		}
	}
}