<?php

declare(strict_types=1);

namespace MSdev\Component\DecisionTheory\Builder;

use MSdev\Component\DecisionTheory\ValueObject\FindSolution;
use MSdev\Component\DecisionTheory\ValueObject\FindSolutionInterface;

class Builder implements BuilderInterface
{
    public function find(): FindSolutionInterface
    {
        // Take from the builder's restrictions.
        $min            = 0;
        $max            = 5;
        $isForMaxResult = true;

        $maxSizeGeneration = 40;
        $maxSizeMutation   = 1000;

        $resultList = [];

        while ($maxSizeGeneration > 0) {
            for ($index = 0; $index < $maxSizeMutation; $index++) {
                $resultList[$index] = $this->generationRandomValueInGivenRange($min, $max);
            }

            // Sorting (choosing the best values).
            asort($resultList, SORT_NUMERIC);

            if ($isForMaxResult) {
                $resultList = array_reverse($resultList);
            }

            // Mutation (formation of offspring and destruction of "weak" results).
            $sizeSlice  = count($resultList) / 2;
            $resultList = array_slice($resultList, 0, $sizeSlice);

            --$maxSizeGeneration;
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
