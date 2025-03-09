<?php

/**
 * 一気に全てのクラスをrequireさせてしまった・・・。
 * 必要なものだけrequireするように修正したい
 */
use core\ClassLoader;

require_once 'core/ClassLoader.php';

$classLoader = new ClassLoader();

$classes = glob(dirname(__FILE__, 3) . '/src/*/*.php');
$testClasses = glob(dirname(__FILE__, 3) . '/tests/*.php');
$allClasses = array_merge($testClasses, $classes);

$classLoader->loadClass($allClasses);
$classLoader->register();
