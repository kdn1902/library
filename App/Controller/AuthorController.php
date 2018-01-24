<?php

namespace App\Controller;
use \Core\Base\Controller;

class AuthorController extends Controller
{
	
	public function all()
	{
		$this->auth();
		$message = "";
		$error_message = "";

		if ($_SERVER['REQUEST_METHOD'] === 'POST') {
			if (!empty($_POST['submit']) && $_POST['submit']=="createauthor")
			{
    			if (empty($_POST['authorname'])){
					$error_message = "Ошибка добавления автора";
				}
				else {
				if ($this->db->execute("insert into authors(name) values (?)",[htmlspecialchars($_POST['authorname'])])){
						$message = "Автор успешно создан";
						
					} else
					{
						$error_message = "Ошибка добавления автора";
					}
				}
			}
			else 
			if (!empty($_POST['submit']) && $_POST['submit']=="deleteauthor")
			{
    			if (empty($_POST['authorid'])){
					$error_message = "Ошибка удаления автора";
				}
				else {
				if ($this->db->execute("delete from authors where id=?",[$_POST['authorid']])){
						$message = "Автор успешно удален";
						
					} else
					{
						$error_message = "Ошибка удаления автора, возможно в библиотеке есть книги этого автора";
					}
				}
			}
		}
		
		
		$authors = $this->db->query("select * from authors order by id desc");
		$view['authors'] = $authors;
	    $view['message'] = $message;
	    $view['error_message'] = $error_message;
		return $this->view->render($view);
	}

}
