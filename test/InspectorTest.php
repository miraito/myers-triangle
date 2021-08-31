<?php

use App\MyersTriangle\Inspector;
use PHPUnit\Framework\TestCase;

class InspectorTest extends TestCase
{
    /**
     * @dataProvider additionProvider
     * @param int $hen1
     * @param int $hen2
     * @param int $hen3
     * @param string $message
     */
    public function testInspect(int $hen1, int $hen2, int $hen3, string $message): void
    {
        $inspector = new Inspector($hen1, $hen2, $hen3);
        self::assertSame($message, $inspector->inspect());

    }

    public function additionProvider(): array
    {
        return [
            [1, 1, 8, '不成立'],
            [3, 4, 5, '不等辺三角形'],
            [5, 5, 5, '正三角形'],
            [4, 4, 3, '二等辺三角形']
        ];
    }

}
