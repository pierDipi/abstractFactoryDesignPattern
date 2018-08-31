<?php
declare(strict_types=1);

namespace BookStore\BookStore\Books\Concrete;

use BookStore\Books\AbstractDatabaseBook;

/**
 * Class OracleDatabaseBook
 * @package BookStore\BookStore\Books\Concrete
 */
class OracleDatabaseBook extends AbstractDatabaseBook
{

    /**
     * @inheritdoc
     */
    function show(): void
    {
        echo $this->getName();
    }
}