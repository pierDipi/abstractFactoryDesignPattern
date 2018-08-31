<?php
declare(strict_types=1);

namespace BookStore\BookStore\Books;

/**
 * Class Book
 * @package BookStore\BookStore\Books
 */
abstract class Book
{

    /**
     * @var string
     */
    private $name;

    /**
     * Book constructor.
     * @param string $name
     */
    public function __construct(string $name)
    {
        $this->setName($name);
    }

    /**
     * @param string $name the name to set
     * @throws \InvalidArgumentException if $name is null
     */
    protected function setName(string $name) : void
    {
        if($name === null)
            throw new \InvalidArgumentException(
                "The name is required, [null] given"
            );

        $this->name = $name;
    }

    /**
     * @return string the name
     */
    protected function getName() : string
    {
        return $this->name;
    }

}