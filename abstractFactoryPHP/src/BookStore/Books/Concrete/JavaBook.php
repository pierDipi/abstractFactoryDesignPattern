<?php
declare(strict_types=1);

namespace BookStore\BookStore\Books\Concrete;

use BookStore\BookStore\Books\AbstractLanguageBook;

/**
 * Class JavaBook
 * @package BookStore\BookStore\Books\Concrete
 */
class JavaBook extends AbstractLanguageBook
{
    /**
     * @inheritdoc
     */
    function show(): void
    {
        echo $this->getName();
    }
}