<?php

namespace App\Controller;
use \Core\Base\Controller;

class BookController extends Controller
{
	
/*	public function all()
	{
	    $view['message'] = "Hello, AllBooks";
		return $this->view->render($view);
	}
*/	
	public function getbook($params)
	{
		$this->auth();
		$message = "";
		$error_message ="";
		if ($_SERVER['REQUEST_METHOD'] === 'POST') {
			if (!empty($_POST['submit']) && $_POST['submit']=="outbook")
			{
				if($this->db->Transaction([["update books set customer_id = ? where id=?",[$_POST['selclient'],$_POST['book_id']]],
				["insert into history(date, book_id, customer_id, action) values(now(),?,?,?)", [$_POST['book_id'],$_POST['selclient'],"Книга выдана"]]]))
				{
					
					$message="Книга выдана";
				}
				else
				{
					$error_message ="Ошибка при выдаче книги";
				}
			}
			else 
			if (!empty($_POST['submit']) && $_POST['submit']=="returnbook")
			{
				if($this->db->Transaction([["update books set customer_id = null where id=?",[$_POST['book_id']]],
				["insert into history(date, book_id, customer_id, action) values(now(),?,null,?)", [$_POST['book_id'],"Книга возвращена в библиотеку"]]]))
				{
					$message="Книга в библиотеке";
				}
				else
				{
					$error_message ="Ошибка при возвращении книги";
				}
			}
			else	
			if (!empty($_POST['submit']) && $_POST['submit']=="deletebook")
			{
				if($this->db->execute("delete from  books where id=?",[$_POST['book_id']]))
				{
					$message="Книга удалена, возможно у книги есть история выдач и возвращений";
				}
				else
				{
					$error_message ="Ошибка удаления книги";
				}
			}
		}
		$view['book'] = $this->db->query("SELECT books.id as book_id, books.name as book_name, authors.id as author_id, authors.name as author_name, genres.id as genre_id, genres.name as genre_name, customers.id as customer_id, customers.name as customer_name FROM books LEFT JOIN authors ON books.author_id=authors.id Left join genres on books.genre_id = genres.id left join customers on books.customer_id = customers.id where books.id=?",[$params[0]])[0];
		$view['customers'] = $this->db->query("select * from customers");
		$view['message'] = $message;
	    $view['error_message'] = $error_message;
		return $this->view->render($view);
	}	

	public function gethistory($params)
	{
		$this->auth();
		$view['history'] = $this->db->query("SELECT history.id as history_id, history.date as history_date, history.action as history_action, books.name as book_name, customers.name as customer_name FROM history LEFT JOIN books ON history.book_id = books.id left join customers on history.customer_id = customers.id where history.book_id=?",[$params[0]]);
		return $this->view->render($view);
	}

    public function addbook()
    {
    	$this->auth();
    	$message = "";
    	$error_messsage = "";
    	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   			if (!empty($_POST['submit']) && $_POST['submit']=="savebook")
			{
    			if (empty($_POST['name']) || empty($_POST['authorhidden'])|| empty($_POST['genre']))
    			{
					$error_message = "Не правильно введены данные";
				}
				else
				{
				if ($this->db->execute("insert into books(name, author_id, genre_id) values (?,?,?)",[htmlspecialchars($_POST['name']), $_POST['authorhidden'],$_POST['genre']]))
				{
					$message = "Книга успешно добавлена";
				} else
				{
					$error_message = "Ошибка базы данных";
				}
				}
			}
		}
		$view['genres'] = $this->db->query("select * from genres");
		$view['authors']  = json_encode($this->db->query("select id,name from authors"));
		$view['message'] = $message;
	    $view['error_message'] = $error_message;
		return $this->view->render($view);
	}
}
