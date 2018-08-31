<?php
declare(strict_types=1);

namespace BookStore\BookStore\Books\Concrete;

use BookStore\BookStore\Books\AbstractLanguageBook;

/**
 * Class CSharpBook
 * @package BookStore\BookStore\Books\Concrete
 */
class CSharpBook extends AbstractLanguageBook
{
    /**
     * @inheritdoc
     */
    function show(): void
    {
        echo $this->getName();
    }

}