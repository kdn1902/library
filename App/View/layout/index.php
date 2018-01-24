<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Библиотека</title>

    <!-- Bootstrap -->
    <link href="/bootstrap-3.3.2-dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  <nav class="navbar navbar-default">
   <div class="container-fluid">
       <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-main">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/">Библиотека</a>
    </div>
    <div class="collapse navbar-collapse" id="navbar-main">
      <ul class="nav navbar-nav">
        <li><a href="/">Книги</a></li>
        <li><a href="/admin/addbook">Добавление книг</a></li>
        <li><a href="/admin/customers">Клиенты библиотеки</a></li>
        <li><a href="/admin/genres">Жанры</a></li>
        <li><a href="/admin/authors">Авторы</a></li>
        <li><?php if(empty($_SESSION['user']))
        {
			echo "<a href='/login'>Войти/Зарегистрироваться</a>";
		}
		else
		{
			echo "<a href='/login/logout'>Вы:  " . $_SESSION['user'] . "  -  Выйти</a>";
		}
		?>
        </li>
      </ul>
    </div>
  </div>
</nav>

<?php
	echo $content;
?>    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="/bootstrap-3.3.2-dist/js/bootstrap.min.js"></script>
    <script src="/js/jqBootstrapValidation.js"></script>
    <script src="/js/bootstrap3-typeahead.min.js"></script>
    <script src="/js/script.js"></script>
  </body>
</html>