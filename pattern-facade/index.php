<?php
declare(strict_types=1);

include 'autoload.php';

$book = new Book();
$bookmark = new Bookmark(rand(0,50));
$light = new Light();
$read = new Read();

$readBook = new ReadBookFacade($book, $bookmark, $light, $read);

$readBook->startReadingBook();

$readBook->stopReadingBook();
