<?php
declare(strict_types=1);

namespace BookStore;

use BookStore\BookStore\Books\Book;

class BooksCollection implements \IteratorAggregate
{
    /**
     * @var Book[]
     */
    private $books;

    public function __construct(Book ... $books)
    {
        $this->books = $books;
    }


    public function getIterator()
    {
        return new \ArrayIterator($this->books);
    }

    public function toArray() : array
    {
        return $this->books;
    }
}