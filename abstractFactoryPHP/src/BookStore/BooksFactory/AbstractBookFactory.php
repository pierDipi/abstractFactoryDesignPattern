<?php
declare(strict_types=1);

namespace BookStore\BooksFactory;


use BookStore\Books\AbstractDatabaseBook;
use BookStore\BookStore\Books\AbstractLanguageBook;

/**
 * Abstract Book Factory, allow to create database and language books.
 *
 * Interface AbstractBookFactory
 * @package BookStore\BooksFactory
 */
interface AbstractBookFactory
{
    /**
     * Create the language book.
     *
     * @param string $name
     * @return AbstractLanguageBook
     */
    function createLanguageBook() : AbstractLanguageBook;

    /**
     * Create the database book.
     *
     * @param string $name
     * @return AbstractDatabaseBook
     */
    function createDatabaseBook() : AbstractDatabaseBook;

}