<?php

namespace Jobadssist\WeightConverter;

class WeightConverter
{
    public function __construct(protected float $kilograms)
    {
    }

    public static function kilograms(float $kilograms): self
    {
        return new static($kilograms);
    }

    public function toPounds(): float
    {
        return $this->kilograms * 2.20462;
    }

    public function toStones(): float
    {
        return $this->kilograms * 0.157473;
    }
}
