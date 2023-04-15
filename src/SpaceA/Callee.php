<?php
declare(strict_types=1);
namespace Src\SpaceA;

use LFreeze\PackagePrivate\PackagePrivate;
use LFreeze\PackagePrivate\PackagePrivateAttribute;

final class Callee {
    use PackagePrivateAttribute;
    

    #[PackagePrivate]
    private int $packagePrivateInt = 9876543210;

    #[PackagePrivate]
    private string $packagePrivateString = "DefaultPrivateString";

    public function __construct(private $namedArguments1 = 'DefaultPropertyX', #[PackagePrivate] private $namedArguments2 = 'DefaultPropertyY') {
    }

    #[PackagePrivate]
    private function packagePrivateMethod(?string $param = null, ?string $param2 = null) {
        return __FUNCTION__ . ($param ?? '') . ($param2 ?? '');
    }
}