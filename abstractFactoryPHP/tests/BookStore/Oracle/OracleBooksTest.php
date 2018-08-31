<?php

namespace Tests\BookStore\Oracle;


use BookStore\BooksFactory\AbstractBookFactory;
use BookStore\BookStore\Books\Concrete\JavaBook;
use BookStore\BookStore\Books\Concrete\OracleDatabaseBook;
use BookStore\BookStore\BooksFactory\OracleBookFactory;
use PHPUnit\Framework\TestCase;

class OracleBooksTest extends TestCase
{
    /**
     * @var AbstractBookFactory
     */
    private $oracleFactory;

    public function setUp()/* The :void return type declaration that should be here would cause a BC issue */
    {
        $this->oracleFactory = new OracleBookFactory();
    }

    public function test_should_receive_java_book()
    {
        $this->assertInstanceOf(JavaBook::class, $this->oracleFactory->createLanguageBook());
    }

    public function test_should_receive_oracle_database_book()
    {
        $this->assertInstanceOf(OracleDatabaseBook::class, $this->oracleFactory->createDatabaseBook());
    }


}