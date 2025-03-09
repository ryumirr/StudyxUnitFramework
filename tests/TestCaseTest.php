<?php

namespace tests;

use src\classParts\WasRun;
use src\classParts\TestCase;

require 'core/config/bootstrap.php';

class TestCaseTest
{
    protected TestCase $testCase;
    //private array $testCaseWl = [];

    function __construct()
    {
        $this->testCase = new TestCase();
    }

    public function test_setUp()
    {
        $this->writeLog(get_class($this), 'test_setUp()', 'Start-------');
        $this->writeLog(get_class($this), 'test_setUp()', 'Finished-------');
    }

    public function test_Run()
    {
        $this->writeLog(get_class($this), 'test_Run()', 'Start-------');
        $testName =  $this->testCase->name;
        $this->testCase->setUp();
        var_dump('Test Result : ' . $this->testCase->name !== $testName);
        $this->writeLog(get_class($this), 'test_Run()', 'Finished-------');
    }

    /**
     * 로그 작성
     * 
     * @param string $className
     * @param string $methodName
     * @param string $texts
     * @return void
     */
    protected function writeLog(string $className, string $methodName, string $texts)
    {
        printf("Class Name: %s, Method Name: %s, Messages: %s\n", $className, $methodName, $texts);
    }
}

$testCase = new TestCaseTest();
$testCase->test_Run();
