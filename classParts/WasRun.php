<?php

namespace classParts;
final class WasRun extends TestCase
{
    public $wasRun;
    function __construct($self, $name)
    {
        $this->wasRun = null;
        
    }

    public function testMethod()
    {
        $this->wasRun = 1;
    }

    /**
     * Undocumented function
     *
     * @param string $methodName
     * @return void
     */
    public function run($selfClass, string $methodName = "test"): void
    {
        $selfTestClassName = "\\tests\\" . substr(strrchr($selfClass::class, "\\"), 1) . 'Test';
     //   exit;
     //   $logPath = 'tests/run_log.txt';
        // $selfTestClassName->$methodName();
       //  exec("find ./tests -name " . $selfTestClassName . ".php", $result);
        //  var_dump($result[0]);exit;

        // PHP에서도 이런식으로 동적호출가능함,
        $class = new $selfTestClassName();
        $class->$methodName();

    //     call_user_func(array($result[0], $methodName));
    //     exit;
        // class의 확인
        // $class = new \ReflectionClass($selfTestClassName);
        // var_dump($class);
        // // var_dump($class->getShortName());exit;
        // $methods = $class->getMethods();
        // // var_dump($methods);
        // if (in_array($methodName, $methods)) {
        // }
    }
}
