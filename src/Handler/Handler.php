<?php

declare(strict_types=1);

namespace MSdev\Component\DecisionTheory\Handler;

use MSdev\Component\DecisionTheory\Builder\BuilderInterface;
use MSdev\Component\DecisionTheory\ValueObject\DataSetInterface;
use MSdev\Component\DecisionTheory\ValueObject\DataSetResult;
use MSdev\Component\DecisionTheory\ValueObject\DataSetResultInterface;
use MSdev\Component\DecisionTheory\ValueObject\FindSolution;
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

            $findSolution  = $this->handle($variant, $restrictions);
            $solutionValue = $findSolution->getValue();

            if ((null !== $solutionValue) && !$variant->isEmpty()) {
                $list[$variant->getKey()] = $solutionValue;
            }
        }

        asort($list, SORT_NUMERIC);
        $list = array_reverse($list);

        return new DataSetResult($list);
    }

    abstract public function handle(Variant $variant, array $restrictions): FindSolutionInterface;

    protected function findSolution(BuilderInterface $builder): FindSolutionInterface
    {
        $index      = 0;
        $resultList = [];

        while ($index < $builder->getMaxSizeGeneration()) {
            for ($index = 0; $index < $builder->getMaxSizeMutation(); $index++) {
                $resultList[$index] = $this->generationRandomValueInGivenRange(
                    $builder->getMin(),
                    $builder->getMax()
                );
            }

            // Sorting (choosing the best values).
            asort($resultList, SORT_NUMERIC);

            if ($builder->isForMaxResult()) {
                $resultList = array_reverse($resultList);
            }

            // Mutation (formation of offspring and destruction of "weak" results).
            $sizeSlice  = count($resultList) / 2;
            $resultList = array_slice($resultList, 0, $sizeSlice);

            ++$index;
        }

        $resultValue = $resultList[0];

        return new FindSolution($resultValue);
    }

    /**
     * @link https://www.php.net/manual/ru/function.mt-getrandmax.php
     */
    private function generationRandomValueInGivenRange(int $min = 0, int $max = 1)
    {
        return $min + mt_rand() / mt_getrandmax() * ($max - $min);
    }
}
