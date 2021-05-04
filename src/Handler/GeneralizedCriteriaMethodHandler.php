<?php

declare(strict_types=1);

namespace MSdev\Component\DecisionTheory\Handler;

use MSdev\Component\DecisionTheory\Builder\GeneralizedCriteriaMethodBuilder;
use MSdev\Component\DecisionTheory\ValueObject\FindSolutionInterface;
use MSdev\Component\DecisionTheory\ValueObject\Variant;

class GeneralizedCriteriaMethodHandler extends Handler
{
    public function handle(Variant $variant, array $restrictions): FindSolutionInterface
    {
        $builder = new GeneralizedCriteriaMethodBuilder();

        return $this->findSolution($builder);
    }
}
