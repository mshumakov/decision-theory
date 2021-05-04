<?php

declare(strict_types=1);

namespace MSdev\Component\DecisionTheory\Builder;

use MSdev\Component\DecisionTheory\ValueObject\FindSolution;
use MSdev\Component\DecisionTheory\ValueObject\FindSolutionInterface;

class Builder implements BuilderInterface
{
    public function find(): FindSolutionInterface
    {
        return new FindSolution();
    }
}
