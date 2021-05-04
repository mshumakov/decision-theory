<?php

declare(strict_types=1);

namespace MSdev\Component\DecisionTheory\Builder;

use MSdev\Component\DecisionTheory\ValueObject\FindSolutionInterface;

interface BuilderInterface
{
    public function find(): FindSolutionInterface;
}
