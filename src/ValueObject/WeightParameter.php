<?php

declare(strict_types=1);

namespace MSdev\Component\DecisionTheory\ValueObject;

class WeightParameter implements ParameterInterface
{
    /** @var float */
    private $value;

    public function __construct(float $value = 0.0)
    {
        $this->value = $value;
    }

    public function getValue(): float
    {
        return $this->value;
    }
}
