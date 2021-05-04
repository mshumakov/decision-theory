<?php

declare(strict_types=1);

namespace MSdev\Component\DecisionTheory\Handler;

use MSdev\Component\DecisionTheory\Builder\BuilderInterface;
use MSdev\Component\DecisionTheory\ValueObject\DataSetInterface;
use MSdev\Component\DecisionTheory\ValueObject\DataSetResult;
use MSdev\Component\DecisionTheory\ValueObject\DataSetResultInterface;
use MSdev\Component\DecisionTheory\ValueObject\FindSolutionInterface;
use MSdev\Component\DecisionTheory\ValueObject\Variant;
use MSdev\Component\DecisionTheory\ValueObject\VariantInterface;

abstract class Handler
{
    public function process(DataSetInterface $dataSet): DataSetResultInterface
    {
        if ($dataSet->isEmpty() || !$dataSet->getRestrictions()) {
            return new DataSetResult();
        }

        return $this->calculate($dataSet);
    }

    public function calculate(DataSetInterface $dataSet): DataSetResultInterface
    {
        $list         = [];
        $restrictions = $dataSet->getRestrictions();

        /** @var VariantInterface $variant */
        foreach ($dataSet->getList() as $variant) {
            if (!$variant->isObjectiveFunction()) {
                continue;
            }

            $solutionValue = $this->handle($variant, $restrictions);

            if ((null !== $solutionValue) && !$variant->isEmpty()) {
                $list[$variant->getKey()] = $solutionValue;
            }
        }

        asort($list, SORT_NUMERIC);
        $list = array_reverse($list);

        return new DataSetResult($list);
    }

    public function findSolution(BuilderInterface $builder): FindSolutionInterface
    {
        // @todo[mshumakov]: Add genetic algorithm.
        return $builder->find();
    }

    abstract public function handle(Variant $variant, array $restrictions): FindSolutionInterface;
}
