<?php

declare(strict_types=1);

namespace MSdev\Component\DecisionTheory\Handler;

use MSdev\Component\DecisionTheory\Builder\UtilityFunctionBuilder;
use MSdev\Component\DecisionTheory\ValueObject\FindSolutionInterface;
use MSdev\Component\DecisionTheory\ValueObject\Variant;

class UtilityFunctionHandler extends Handler
{
    public function handle(Variant $variant, array $restrictions): FindSolutionInterface
    {
        $builder = new UtilityFunctionBuilder();

        return $this->findSolution($builder);
    }
}
