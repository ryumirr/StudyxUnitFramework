<?php

namespace exceptions;
final class AppException
{
    /**
     * 로그 작성
     * 
     * @param string $className
     * @param string $methodName
     * @param string $texts
     * @return void
     */
    public static function writeLog(string $className, string $methodName, string $texts)
    {
        $tests = sprintf("Class Name: %s, Method Name: %s, Messages: %s\n", $className, $methodName, $texts);
        file_put_contents('src/logs/run_log.txt', $tests, FILE_APPEND | LOCK_EX);
    }
}