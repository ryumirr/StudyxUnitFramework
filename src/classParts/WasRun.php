<?php

namespace src\classParts;
use src\classParts\AppTestCase;

final class WasRun extends AppTestCase
{
    public $wasRun;
    public $wasSetUp;

    public function setUp()
    {
        $this->wasRun = null;
        $this->wasSetUp = 1;
    }

}