<?php

declare(strict_types=1);

namespace MSdev\Component\DecisionTheory\ValueObject;

interface DataSetResultInterface
{
    public function getList(): array;

    public function isSuccess(): bool;
}
