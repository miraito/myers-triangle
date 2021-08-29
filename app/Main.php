<?php
namespace App;

use App\MyersTriangle\Inspector;
use Exception;
use JetBrains\PhpStorm\Pure;

class Main
{
    private ?string $arg1;
    private ?string $arg2;
    private ?string $arg3;

    /**
     * @throws Exception
     */
    public function __construct(?string $arg1, ?string $arg2, ?string $arg3)
    {
        $this->argCheck($arg1, $arg2, $arg3);

        $this->arg1 = $arg1;
        $this->arg2 = $arg2;
        $this->arg3 = $arg3;
    }

    /**
     * @throws Exception
     */
    #[Pure] public function check(): string
    {
        $inspector = new Inspector((int) $this->arg1, (int) $this->arg2, (int) $this->arg3);

        return $inspector->inspect();
    }

    /**
     * @throws Exception
     */
    private function argCheck(?string $arg1, ?string $arg2, ?string $arg3): void
    {
        if ($arg1 === null || $arg2 === null || $arg3 === null) {
            throw new Exception('引数が不正です');
        }

        if (!is_numeric($arg1) || !is_numeric($arg2) || !is_numeric($arg3)) {
            throw new Exception('引数が不正です');
        }
    }
}