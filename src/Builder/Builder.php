<?php

declare(strict_types=1);

namespace MSdev\Component\DecisionTheory\Builder;

class Builder implements BuilderInterface
{
    private const MAX_SIZE_GENERATION = 40;
    private const MAX_SIZE_MUTATION = 1000;

    /** @var int */
    protected $min;
    /** @var int */
    protected $max;

    public function __construct(int $min = 0, int $max = 1)
    {
        $this->setMin($min);
        $this->setMax($max);
    }

    public function getMin(): int
    {
        return $this->min;
    }

    public function setMin(int $min): Builder
    {
        $this->min = $min;

        return $this;
    }

    public function getMax(): int
    {
        return $this->max;
    }

    public function setMax(int $max): Builder
    {
        $this->max = $max;

        return $this;
    }

    public function isForMaxResult(): bool
    {
        return true;
    }

    public function getMaxSizeGeneration(): int
    {
        return self::MAX_SIZE_GENERATION;
    }

    public function getMaxSizeMutation(): int
    {
        return self::MAX_SIZE_MUTATION;
    }
}
