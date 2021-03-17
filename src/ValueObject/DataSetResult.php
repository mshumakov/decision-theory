<?php

declare(strict_types=1);

namespace MSdev\Component\DecisionTheory\ValueObject;

class DataSetResult implements DataSetResultInterface
{
    /** @var bool */
    private $isSuccess = true;

    /**
     * @inheritDoc
     */
    public function isSuccess(): bool
    {
        return $this->isSuccess;
    }
}
