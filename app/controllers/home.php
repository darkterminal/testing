<?php

class Home extends Controller
{
	
	public function __construct()
	{
		# code...
	}

	public function index()
	{
		$this->view('welcome');
	}

	public function users($name = '')
	{
		$users = User::all();
		$this->view('home.index', ['users' => $users]);
	}

	public function get($id)
	{
		$user = User::find($id);
		$this->view('home.index', ['user' => $user]);
	}

	public function create($username='', $email = '', $password = '')
	{
		User::create([
			'username' => $username,
			'email' => $email,
			'password' => md5($password)
		]);
	}
}