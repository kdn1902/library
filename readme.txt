установка тестового задания
распаковать архив
задание релизовано для apache на платформе openserver, требуется php7
корень для web-сервера /public
база данных по умолчанию taskloc см. /config/config_db.php
базу данных можно создать с тестовыми данными /admin/createtables см. /config/routes.php
или залить из файла /install_db/taskloc.sql
логин и пароль по умолчению admin/admin
автозагрузка классов реализована через composer
для тестовой загрузки таблиц используется faker