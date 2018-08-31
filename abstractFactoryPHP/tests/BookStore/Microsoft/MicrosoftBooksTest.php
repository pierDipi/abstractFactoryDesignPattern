<?php

namespace Tests\BookStore\Microsoft;


use BookStore\BooksFactory\AbstractBookFactory;
use BookStore\BookStore\Books\Concrete\CSharpBook;
use BookStore\BookStore\Books\Concrete\MicrosoftSqlServerBook;
use BookStore\BookStore\BooksFactory\MicrosoftBookFactory;
use PHPUnit\Framework\TestCase;

class MicrosoftBooksTest extends TestCase
{
    /**
     * @var AbstractBookFactory
     */
    private $bookFactory;

    public function setUp()/* The :void return type declaration that should be here would cause a BC issue */
    {
        $this->bookFactory = new MicrosoftBookFactory();
    }

    public function test_should_receive_csharp_book()
    {
        $this->assertInstanceOf(CSharpBook::class, $this->bookFactory->createLanguageBook());
    }


    public function test_should_receive_sql_server_book()
    {
        $this->assertInstanceOf(MicrosoftSqlServerBook::class, $this->bookFactory->createDatabaseBook());
    }

}