<?php

declare(strict_types=1);

namespace MSdev\Component\DecisionTheory\Handler;

use MSdev\Component\DecisionTheory\ValueObject\DataSetInterface;
use MSdev\Component\DecisionTheory\ValueObject\DataSetResult;
use MSdev\Component\DecisionTheory\ValueObject\DataSetResultInterface;

class GeneralizedCriteriaMethodHandler extends Handler
{
    /**
     * @inheritDoc
     */
    public function handle(DataSetInterface $dataSet): DataSetResultInterface
    {
        // @todo[mshumakov]: Add logic.

        return new DataSetResult();
    }
}
