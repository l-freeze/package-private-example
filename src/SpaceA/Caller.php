<?php
declare(strict_types=1);
namespace Src\SpaceA;

readonly final class Caller {

    public function __construct() {
    }

    public function do() {
        Callee::assignCallerNamespaceName(__NAMESPACE__);

        $example = (new Callee(namedArguments2: "partialarguments"))->__create();
        $example->packagePrivateInt = 13;
        echo '$example->packagePrivateInt:'. $example->packagePrivateInt.PHP_EOL;
        echo $example->packagePrivateMethod(param:" AssignParam1 ", param2: " AssignParam2 ").PHP_EOL;
        echo $example->packagePrivateMethod(param2: " AssignParam2 ", param:" AssignParam1 ").PHP_EOL;
    }
}

