<?php

namespace Core\Base;

class Controller {
	protected $view;
	protected $db;
	
	public function __construct($controller, $action)
	{
		$this->view = new View($controller, $action);
		$this->db = DB::getInstance();
	}
	
	protected function auth()
	{
		if (empty($_SESSION['user']))
    	{
			header("Location: /login");
			return;
		}
	}
	
}