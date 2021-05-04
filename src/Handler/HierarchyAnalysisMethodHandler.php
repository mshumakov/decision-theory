<?php

declare(strict_types=1);

namespace MSdev\Component\DecisionTheory\Handler;

use MSdev\Component\DecisionTheory\Builder\HierarchyAnalysisMethodBuilder;
use MSdev\Component\DecisionTheory\ValueObject\FindSolutionInterface;
use MSdev\Component\DecisionTheory\ValueObject\Variant;

class HierarchyAnalysisMethodHandler extends Handler
{
    public function handle(Variant $variant, array $restrictions): FindSolutionInterface
    {
        $builder = new HierarchyAnalysisMethodBuilder();

        return $this->findSolution($builder);
    }
}
