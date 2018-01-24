<?php
namespace App\Controller;
use \Core\Base\Controller;

class LoginController extends Controller
{
	
	public function index($params)
	{
		$message = "";
		$error_message ="";
		if ($_SERVER['REQUEST_METHOD'] === 'POST') {
			if (!empty($_POST['submit']) && $_POST['submit']=="login")
			{
    			if (empty($_POST['login']) || empty($_POST['password']) ){
					$error_message = "Пустой логин/пароль";
				}
				else {
				$password = $this->db->query("select password from users where login=?",[$_POST['login']])[0]['password'];
				if ( password_verify($_POST['password'], $password)){
						session_start();
						$_SESSION['user'] = $_POST['login'];
						header("Location: /");
						return;
						
					} else
					{
						$error_message = "Неправильный Логин/Пароль";
					}
				}
			}
			else 
			if (!empty($_POST['submit']) && $_POST['submit']=="register")
			{
    			if (empty($_POST['login']) || empty($_POST['password']) || empty($_POST['password2']) || $_POST['password'] != $_POST['password2']  )
    			{
					$error_message = "Неправильно введены поля";
				}
				else {
				if ($this->db->execute("insert into users(login, password) values (?,?)",[$_POST['login'],password_hash($_POST['password'], PASSWORD_DEFAULT)])){
						$_SESSION['user'] = $_POST['login'];
						header("Location: /");
						return;
					} else
					{
						$error_message = "Ошибка базы данных";
					}
				}
			}
		
		}
		$view['message'] = $message;
		$view['error_message'] = $error_message;
		return $this->view->render($view);
	}
	
	public function logout()
	{			
			unset($_SESSION['user']);
			header("Location: /");
	}
	
}