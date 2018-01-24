<?php

namespace App\Controller;
use \Core\Base\Controller;

class GenreController extends Controller
{
	
	public function all()
	{
		$this->auth();
		$message = "";
		$error_message = "";

		if ($_SERVER['REQUEST_METHOD'] === 'POST') {
			if (!empty($_POST['submit']) && $_POST['submit']=="creategenre")
			{
    			if (empty($_POST['genrename'])){
					$error_message = "Ошибка добавления жанра";
				}
				else {
				if ($this->db->execute("insert into genres(name) values (?)",[htmlspecialchars($_POST['genrename'])])){
						$message = "Жанр успешно создан";
						
					} else
					{
						$error_message = "Ошибка добавления жанра";
					}
				}
			}
			else 
			if (!empty($_POST['submit']) && $_POST['submit']=="deletegenre")
			{
    			if (empty($_POST['genreid'])){
					$error_message = "Ошибка удаления жанра";
				}
				else {
				if ($this->db->execute("delete from genres where id=?",[$_POST['genreid']])){
						$message = "Жанр успешно удален";
						
					} else
					{
						$error_message = "Ошибка удаления жанра, возможно в библиотеке есть книги этого жанра";
					}
				}
			}
		}
		
		
		$genres = $this->db->query("select * from genres order by id desc");
		$view['genres'] = $genres;
	    $view['message'] = $message;
	    $view['error_message'] = $error_message;
		return $this->view->render($view);
	}

}
