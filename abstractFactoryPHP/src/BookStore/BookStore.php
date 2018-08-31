<?php
declare(strict_types=1);

namespace BookStore;

use BookStore\BookStore\BooksFactory\MicrosoftBookFactory;
use BookStore\BookStore\BooksFactory\OracleBookFactory;

class BookStore
{
    /**
     * @param string $bookTypes See the BookTypes interface
     * @param int $level book level
     * @return BooksCollection Database and Language books
     */
    public function getBooks(string $bookTypes, int $level = 0) : BooksCollection
    {
        $bookFactory = null;

        switch ($bookTypes) {
            case BookTypes::MICROSOFT_RELATED_BOOKS :
                $bookFactory = new MicrosoftBookFactory();
                break;
            case BookTypes::ORACLE_RELATED_BOOKS :
                $bookFactory = new OracleBookFactory($level);
                break;
            default :
                throw new \InvalidArgumentException(

                );
                break;
        }

        return new BooksCollection(
            $bookFactory->createLanguageBook(),
            $bookFactory->createDatabaseBook()
        );

    }

}