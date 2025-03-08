<?php
namespace tests;

use classParts\WasRun;

require_once '/Users/ryumirr/Projects/xUnitFramework/classParts/WasRun.php';
final class WasRunTest
{
    static function executeTests()
    {
        $WasRun = new WasRun();
        print $WasRun->wasRun;
        $WasRun->testMethod();
        print $WasRun->wasRun;

        $WasRun->run($WasRun);
    }

    public function test()
    {
        print "asdasd";
    }
}

WasRunTest::executeTests();
