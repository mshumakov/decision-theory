<?php

declare(strict_types=1);

namespace MSdev\Component\DecisionTheory\Builder;

use MSdev\Component\DecisionTheory\ValueObject\FindSolutionInterface;
use RuntimeException;

/**
 * @todo[mshumakov]: Add builder (objective function normalization).
 */
class Builder implements BuilderInterface
{
    public function find(): FindSolutionInterface
    {
        // @todo[mshumakov]: Add restrictions + change signature to abstraction.
        throw new RuntimeException('Not implemented!');
    }
}
