<?php

declare(strict_types=1);

namespace MSdev\Component\DecisionTheory\Handler;

use MSdev\Component\DecisionTheory\Builder\NullBuilder;
use MSdev\Component\DecisionTheory\ValueObject\FindSolutionInterface;
use MSdev\Component\DecisionTheory\ValueObject\Variant;

class NullHandler extends Handler
{
    public function handle(Variant $variant, array $restrictions): FindSolutionInterface
    {
        return $this->findSolution(new NullBuilder());
    }
}
