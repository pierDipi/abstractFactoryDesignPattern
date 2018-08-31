<?php
declare(strict_types=1);

namespace BookStore\BookStore\Books\Concrete;

use BookStore\Books\AbstractDatabaseBook;

/**
 * Class MicrosoftSqlServerBook
 * @package BookStore\BookStore\Books\Concrete
 */
class MicrosoftSqlServerBook extends AbstractDatabaseBook
{

    /**
     * @inheritdoc
     */
    function show(): void
    {
        echo $this->getName();
    }
}