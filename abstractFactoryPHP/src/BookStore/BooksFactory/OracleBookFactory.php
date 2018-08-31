<?php
declare(strict_types=1);

namespace BookStore\BookStore\BooksFactory;


use BookStore\Books\AbstractDatabaseBook;
use BookStore\BooksFactory\AbstractBookFactory;
use BookStore\BookStore\Books\AbstractLanguageBook;
use BookStore\BookStore\Books\Concrete\JavaBook;
use BookStore\BookStore\Books\Concrete\OracleDatabaseBook;

/**
 * Class OracleBookFactory
 * @package BookStore\BookStore\BooksFactory
 */
class OracleBookFactory implements AbstractBookFactory
{

    /**
     * @var int
     */
    private $level;

    /**
     * OracleBookFactory constructor.
     * @param int $level
     */
    public function __construct(int $level = 0)
    {
        $this->level = $level;
    }

    /**
     * @inheritdoc
     */
    function createLanguageBook(): AbstractLanguageBook
    {
        switch ($this->level) {
            case 0 :
                return new JavaBook("OCA book");
            default :
                return new JavaBook("OCP book");
        }
    }

    /**
     * @inheritdoc
     */
    function createDatabaseBook(): AbstractDatabaseBook
    {
        return new OracleDatabaseBook("Oracle database book");
    }
}