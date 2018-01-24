<?php
return [
  // 'url' => '����������/��������/��������1/��������2/��������3'
  '' => 'MainController/index', 
  '/:num' => 'MainController/index/$1',
  '/admin/book/:num' => 'BookController/getbook/$1',
  '/admin/book/:num/history' => 'BookController/gethistory/$1',
  '/admin/genres' => 'GenreController/all',
  '/admin/authors' => 'AuthorController/all',
  '/admin/customers' => 'CustomerController/all', 
  '/admin/customers/:num' => 'CustomerController/all/$1', 
  '/admin/addbook' => 'BookController/addbook',
  '/login' => 'LoginController/index',
  '/login/logout' => 'LoginController/logout',
  '/admin/createtables' => 'TablesController/createtables'
];

