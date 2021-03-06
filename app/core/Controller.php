<?php 

class Controller
{
	public function model($model)
	{
		require_once '../app/models/'. ucfirst($model) .'.php';
		return new $model();
	}

	public function view($view, $data = '')
	{
		$view = str_replace('.', '/', $view);
		require_once '../app/views/'. $view .'.php';

	}
}