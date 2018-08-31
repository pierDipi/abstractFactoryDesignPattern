<?php
declare(strict_types=1);

namespace BookStore\BookStore\BooksFactory;

use BookStore\Books\AbstractDatabaseBook;
use BookStore\BooksFactory\AbstractBookFactory;
use BookStore\BookStore\Books\AbstractLanguageBook;
use BookStore\BookStore\Books\Concrete\CSharpBook;
use BookStore\BookStore\Books\Concrete\MicrosoftSqlServerBook;

/**
 * Class MicrosoftBookFactory
 * @package BookStore\BookStore\BooksFactory
 */
class MicrosoftBookFactory implements AbstractBookFactory
{
    /**
     * @inheritdoc
     */
    function createLanguageBook() : AbstractLanguageBook
    {
        return new CSharpBook("Microsoft visual C# book");
    }

    /**
     * @inheritdoc
     */
    function createDatabaseBook() : AbstractDatabaseBook
    {
        return new MicrosoftSqlServerBook("Sql server 2014 book");
    }
}