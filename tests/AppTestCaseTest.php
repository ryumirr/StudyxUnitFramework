<?php

namespace tests;

use src\classParts\WasRun;
use src\classParts\AppTestCase;
use exceptions\AppException;

require 'core/config/bootstrap.php';

class AppTestCaseTest
{
    protected AppTestCase $testCase;
    //private array $testCaseWl = [];

    function __construct()
    {
        $this->testCase = new AppTestCase();
    }

    public function test_setUp()
    {
        AppException::writeLog(get_class($this), 'test_setUp()', 'Start-------');
        AppException::writeLog(get_class($this), 'test_setUp()', 'Finished-------');
    }

    public function test_Run()
    {
        AppException::writeLog(get_class($this), 'test_Run()', 'Start-------');
        $testName =  $this->testCase->name;
        $this->testCase->setUp();
        
        var_dump('Test Result : ' . $this->testCase->name !== $testName);
        var_dump('Test Method Name : ' . $this->testCase->name);
        unset($this->testCase);
        AppException::writeLog(get_class($this), 'test_Run()', 'Finished-------');
    }
    
}

$testCase = new AppTestCaseTest();
$testCase->test_Run();
