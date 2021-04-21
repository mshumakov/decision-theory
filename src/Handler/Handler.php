<?php

declare(strict_types=1);

namespace MSdev\Component\DecisionTheory\Handler;

use MSdev\Component\DecisionTheory\ValueObject\DataSetInterface;
use MSdev\Component\DecisionTheory\ValueObject\DataSetResult;
use MSdev\Component\DecisionTheory\ValueObject\DataSetResultInterface;
use MSdev\Component\DecisionTheory\ValueObject\Variant;

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

        return $this->calculate($dataSet);
    }

    /**
     * @param DataSetInterface $dataSet
     *
     * @return DataSetResultInterface
     */
    public function calculate(DataSetInterface $dataSet)
    {
        $list = [];

        foreach ($dataSet->getList() as $variant) {
            $solutionValue = $this->handle($variant);

            if ((null !== $solutionValue) && !$variant->isEmpty()) {
                $list[$variant->getKey()] = $solutionValue;
            }
        }

        asort($list, SORT_NUMERIC);
        $list = array_reverse($list);

        return new DataSetResult($list);
    }

    /**
     * @param Variant $variant
     *
     * @return float|null
     */
    abstract public function handle(Variant $variant): ?float;
}
