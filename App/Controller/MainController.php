<?php

namespace App\Controller;
use \Core\Base\Controller;

class MainController extends Controller
{
	
	public function index($params)
	{
		if (empty($params))
		{
			$current_page = 1;
		} else
		{
			$current_page = $params[0];	
		}
		
		$num_recourse_per_page=10;
		$maxpage = $this->db->query("select count(*) as count from books")[0]['count']/ $num_recourse_per_page;
		if ($current_page > $maxpage){
			$current_page = $maxpage;
		}
		if ($current_page < 1){
			$current_page = 1;
		}
				
		$start = ($current_page - 1 ) * $num_recourse_per_page;
		$view['books'] = $this->db->query("SELECT books.id as book_id, books.name as book_name, authors.id as author_id, authors.name as author_name, genres.id as genre_id, genres.name as genre_name, customers.id as customer_id, customers.name as customer_name FROM books LEFT JOIN authors ON books.author_id=authors.id Left join genres on books.genre_id = genres.id left join customers on books.customer_id = customers.id order by book_id desc LIMIT ".$start.",".$num_recourse_per_page);
		$view['current_page'] = $current_page;
		$view['maxpage'] = $maxpage;
		return $this->view->render($view);
	}
}
