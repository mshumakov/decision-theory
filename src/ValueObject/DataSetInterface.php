<?php

declare(strict_types=1);

namespace MSdev\Component\DecisionTheory\ValueObject;

interface DataSetInterface
{
    public function getList(): array;

    public function getRestrictions(): array;

    public function isEmpty(): bool;
}
