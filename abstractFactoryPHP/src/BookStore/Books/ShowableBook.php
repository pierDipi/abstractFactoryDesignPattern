<?php
declare(strict_types=1);

namespace BookStore\BookStore\Books;

/**
 * Interface ShowableBook
 * @package BookStore\BookStore\Books
 */
interface ShowableBook
{
    /**
     * Show the name of the book
     */
    function show() : void;
}