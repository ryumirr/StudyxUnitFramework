<?php
namespace src\classParts;
// require 'core/config/bootstrap.php';
use tests\WasRunTest;

class TestCase
{
    public $name;
    public $testNumber;

    function __construct()
    {
    }
    
    public function setUp()
    {
        $this->name = 'setUp name Test';
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