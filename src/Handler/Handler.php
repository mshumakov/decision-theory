<?php

declare(strict_types=1);

namespace MSdev\Component\DecisionTheory\Handler;

use MSdev\Component\DecisionTheory\ValueObject\DataSetInterface;
use MSdev\Component\DecisionTheory\ValueObject\DataSetResultInterface;

abstract class Handler
{
    /**
     * @param DataSetInterface $dataSet
     *
     * @return bool
     */
    public function process(DataSetInterface $dataSet): bool
    {
        if ($dataSet->isEmpty()) {
            return false;
        }

        return $this->handle($dataSet)->isSuccess();
    }

    /**
     * @param DataSetInterface $dataSet
     *
     * @return DataSetResultInterface
     */
    abstract public function handle(DataSetInterface $dataSet): DataSetResultInterface;
}
