<?php

require 'vendor/autoload.php';

use BookStore\{
    BookStore, BookTypes
};


$bookStore = new BookStore();

echo "<h3> Oracle books </h3>";

$oracleBooks = $bookStore->getBooks(
    BookTypes::ORACLE_RELATED_BOOKS,
    1
);

foreach ($oracleBooks as $book) {
    $book->show();
    echo '<br/>';
}

echo "<h3> Microsoft books </h3>";

$microsoftBooks = $bookStore->getBooks(
    BookTypes::MICROSOFT_RELATED_BOOKS
);

foreach ($microsoftBooks as $book) {
    $book->show();
    echo '<br/>';
}