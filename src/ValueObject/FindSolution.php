<?php

declare(strict_types=1);

namespace MSdev\Component\DecisionTheory\ValueObject;

class FindSolution implements FindSolutionInterface
{
    /** @var  */
    private $value;

    public function __construct(float $value = 1.0)
    {
        $this->value = $value;
    }

    public function getValue(): float
    {
        return $this->value;
    }
}
