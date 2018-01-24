<?php
namespace App\Controller;

use Core\Base\Controller;

class TablesController extends Controller
{
	public function createtables()
	{
		echo "begin create table<br />";
		$add_author = "create table authors (id MEDIUMINT NOT NULL AUTO_INCREMENT, name CHAR(30) NOT NULL, PRIMARY KEY (id))";
		$add_genre = "create table genres (id MEDIUMINT NOT NULL AUTO_INCREMENT, name CHAR(30) NOT NULL, PRIMARY KEY (id))";
		$add_customers = "create table customers (id MEDIUMINT NOT NULL AUTO_INCREMENT, name CHAR(100) NOT NULL, PRIMARY KEY (id))";
		$add_book = "create table books (id MEDIUMINT NOT NULL AUTO_INCREMENT, name CHAR(30) NOT NULL, author_id MEDIUMINT not null, genre_id mediumint not null, customer_id mediumint, FOREIGN KEY (author_id) REFERENCES authors(id),FOREIGN KEY (genre_id) REFERENCES genres(id),FOREIGN KEY (customer_id)REFERENCES customers(id), PRIMARY KEY (id))";
		$add_history = "create table history (id MEDIUMINT NOT NULL AUTO_INCREMENT, date DATETIME NOT NULL, book_id MEDIUMINT not null, customer_id mediumint , action char(100) not null, FOREIGN KEY (book_id) REFERENCES books(id), FOREIGN KEY (customer_id) REFERENCES customers(id), PRIMARY KEY (id))";
		$add_user = "CREATE TABLE users (id MEDIUMINT NOT NULL AUTO_INCREMENT, login varchar(30) NOT NULL, password text NOT NULL, PRIMARY KEY (id))";
		
		echo "create tables users<br />";
		$this->db->execute($add_user);
		echo "create table authors<br />";
		$this->db->execute($add_author);
		echo "create table genres<br />";
		$this->db->execute($add_genre);
		echo "create table customers<br />";
		$this->db->execute($add_customers);
		echo "create table books<br />";
		$this->db->execute($add_book);
		echo "create table history<br />";
		$this->db->execute($add_history);
		
		echo "begin populate table <br />";
		$faker = \Faker\Factory::create();
		
		$this->db->execute("insert into users(login, password) values (?,?)",['admin',password_hash('admin', PASSWORD_DEFAULT)]);	
			
        for ($i = 0; $i < 10; $i++) {
        	$this->db->execute("insert into authors(name) values (?)", [$faker->name]);	
    	}
        
        $genres = ['детектив', 'комедия', 'триллер', 'ужасы', 'мистика', 'документальная'];
        foreach ($genres as $genre){
			    $this->db->execute("insert into genres(name) values (?)", [$genre]);	
		}
		
        for ($i = 0; $i < 100; $i++){
        	$this->db->execute("insert into customers(name) values (?)", [$faker->name]);	
    	}
        
        for ($i = 0; $i < 100; $i++){
        	$this->db->execute("insert into books(name, author_id, genre_id) values (?,?,?)", [
        						$faker->sentence(4), $faker->numberBetween(1,10), $faker->numberBetween(1,6)]);	
    	}
    	echo "end populate table";
	}

}