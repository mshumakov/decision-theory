<?php

declare(strict_types=1);

namespace MSdev\Component\DecisionTheory\ValueObject;

interface DataSetInterface
{
    /**
     * @return bool
     */
    public function isEmpty(): bool;
}
