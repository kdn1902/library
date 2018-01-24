<?php

namespace App\Controller;
use \Core\Base\Controller;

class CustomerController extends Controller
{
	
	public function all($params)
	{
		$this->auth();
		if (empty($params))
		{
			$current_page = 1;
		} else
		{
			$current_page = $params[0];	
		}
		
		$num_recourse_per_page=10;
		$maxpage = $this->db->query("select count(*) as count from customers")[0]['count']/ $num_recourse_per_page;
		if ($current_page > $maxpage){
			$current_page = $maxpage;
		}
		if ($current_page < 1){
			$current_page = 1;
		}
				
		$start = ($current_page - 1 ) * $num_recourse_per_page;
		$message = "";
		$error_message = "";

		if ($_SERVER['REQUEST_METHOD'] === 'POST') {
			if (!empty($_POST['submit']) && $_POST['submit']=="createcustomer")
			{
    			if (empty($_POST['customername'])){
					$error_message = "Ошибка добавления клиента";
				}
				else {
				if ($this->db->execute("insert into customers(name) values (?)",[htmlspecialchars($_POST['customername'])])){
						$message = "Клиент успешно создан";
						
					} else
					{
						$error_message = "Ошибка добавления клиента";
					}
				}
			}
			else 
			if (!empty($_POST['submit']) && $_POST['submit']=="deletecustomer")
			{
    			if (empty($_POST['customerid'])){
					$error_message = "Ошибка удаления клиента";
				}
				else {
				if ($this->db->execute("delete from customers where id=?",[$_POST['customerid']])){
						$message = "Клиент успешно удален";
						
					} else
					{
						$error_message = "Ошибка удаления клиента, возможно у клиента есть история выдач и возвращений книги";
					}
				}
			}
		}
		
		
		$customers = $this->db->query("select * from customers order by id desc LIMIT ".$start.",".$num_recourse_per_page);
		$view['customers'] = $customers;
		$view['current_page'] = $current_page;
		$view['maxpage'] = $maxpage;
	    $view['message'] = $message;
	    $view['error_message'] = $error_message;
		return $this->view->render($view);
	}

}
