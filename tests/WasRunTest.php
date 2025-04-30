<?php

namespace tests;
use src\classParts\WasRun;
use tests\AppTestCaseTest;

require 'core/config/bootstrap.php';

final class WasRunTest extends AppTestCaseTest
{
    static function executeTests()
    {
        $WasRun = new WasRun();
        print $WasRun->wasRun;
        $WasRun->setUp();
        $WasRun->testMethod(2222);
        print $WasRun->wasRun;
    }

    public function test()
    {
        print "asdasd";
    }
}

WasRunTest::executeTests();