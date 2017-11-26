<?php
	include 'Book.php';

	//$book1 = new Book('My Book', 9.99);
	//$book1->setTitle('My Book');
	//echo $book1->getTitle();
	//echo $book1->getPrice();

	//Using constructor
	//echo $book1;

	//Using static properties and static functions
	//echo Book::$store;
	//echo Book::getStore();

	//Using protected variable and extended Class
	$mag1 = new Magazine('Pc World', 9.99, 'October', '1969');
	echo $mag1->getTitle();
	echo $mag1->getYear();
?>