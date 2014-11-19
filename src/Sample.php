<?php

include_once('../vendor/autoload.php');

use DI\ContainerBuilder;
/**
 * Created by PhpStorm.
 * User: crocha
 * Date: 11/19/14
 * Time: 5:18 PM
 */

class Sample {
    private $test;
    public function Sample (Test $test) {
        return $this->test = $test;
    }

    public function sayhi() {
        $this->test->hola();
    }
};

$container = ContainerBuilder::buildDevContainer();
$foo = $container->get('Sample');
$foo->sayhi();