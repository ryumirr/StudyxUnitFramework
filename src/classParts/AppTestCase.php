<?php
namespace src\classParts;
// require 'core/config/bootstrap.php';

use tests\WasRunTest;
// use PHPUnit\Framework\TestCase;

class AppTestCase
{
    public $name;
    public $testNumber;

    function __construct()
    {
        self::setUp();
    }

    function __destruct()
    {
        self::tearDown();
    }

    public function setUp()
    {
        $this->name = 'setUp name Test';
    }

    public function tearDown()
    {
        print_r('tearDown name Test' . "\n");
    }

    /**
     * Only TestMethod
     *
     * @param integer $testNumber
     * @return void
     */
    public function testMethod(int $testNumber = 123456789)
    {
        $this->testNumber = $testNumber;
    }
}