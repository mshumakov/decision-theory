<?php

declare(strict_types=1);

namespace MSdev\Component\DecisionTheory\Handler;

use MSdev\Component\DecisionTheory\ValueObject\DataSetInterface;
use MSdev\Component\DecisionTheory\ValueObject\DataSetResult;
use MSdev\Component\DecisionTheory\ValueObject\DataSetResultInterface;

abstract class Handler
{
    /**
     * @param DataSetInterface $dataSet
     *
     * @return DataSetResultInterface
     */
    public function process(DataSetInterface $dataSet): DataSetResultInterface
    {
        if ($dataSet->isEmpty()) {
            return new DataSetResult();
        }

        return $this->handle($dataSet);
    }

    /**
     * @param DataSetInterface $dataSet
     *
     * @return DataSetResultInterface
     */
    abstract public function handle(DataSetInterface $dataSet): DataSetResultInterface;
}
