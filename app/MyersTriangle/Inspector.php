<?php

namespace App\MyersTriangle;

class Inspector
{
    private int $hen1;
    private int $hen2;
    private int $hen3;

    public function __construct(int $hen1, int $hen2, int $hen3)
    {
        $this->hen1 = $hen1;
        $this->hen2 = $hen2;
        $this->hen3 = $hen3;
    }

    public function inspect(): string
    {
        if (! $this->isTriangleEdge()) {
            return '不成立';
        }

        if ($this->hen1 === $this->hen2 && $this->hen1 === $this->hen3) {
            return '正三角形';
        }

        if (($this->hen1 === $this->hen2 && $this->hen1 !== $this->hen3)
            || ($this->hen2 === $this->hen3 && $this->hen2 !== $this->hen1)
            || ($this->hen3 === $this->hen1 && $this->hen3 !== $this->hen2)
        ) {
            return '二等辺三角形';
        }

        return '不等辺三角形';
    }

    /**
     * @return bool
     */
    private function isTriangleEdge(): bool
    {
        $hens = [$this->hen1, $this->hen2, $this->hen3];
        $maxKey = array_keys($hens, max($hens))[0];

        $maxHen = null;
        $othersHen = [];
        foreach ($hens as $key => $hen) {
            if ($key === $maxKey) {
                $maxHen = $hen;
                continue;
            }
            $othersHen[] = $hen;
        }

            return $maxHen < array_sum($othersHen);
    }
}