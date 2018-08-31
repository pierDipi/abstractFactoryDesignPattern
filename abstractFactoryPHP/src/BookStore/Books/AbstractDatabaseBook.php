<?php
declare(strict_types=1);

namespace BookStore\Books;

use BookStore\BookStore\Books\Book;
use BookStore\BookStore\Books\ShowableBook;

/**
 * Class AbstractDatabaseBook
 * @package BookStore\Books
 */
abstract class AbstractDatabaseBook extends Book implements ShowableBook
{

}