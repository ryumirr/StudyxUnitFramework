<?php

namespace src\classParts;
use src\classParts\TestCase;

// require_once '/Users/ryumirr/Projects/xUnitFramework/classParts/TestCase.php';

final class WasRun extends TestCase
{
    public $wasRun;
    public $wasSetUp;

    public function setUp()
    {
        $this->wasRun = null;
        $this->wasSetUp = 1;
    }

}