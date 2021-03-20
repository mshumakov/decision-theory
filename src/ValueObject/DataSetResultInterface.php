<?php

declare(strict_types=1);

namespace MSdev\Component\DecisionTheory\ValueObject;

interface DataSetResultInterface
{
    /**
     * @return Variant[]
     */
    public function getList(): array;

    /**
     * @return bool
     */
    public function isSuccess(): bool;
}
