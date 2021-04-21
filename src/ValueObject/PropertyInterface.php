<?php

declare(strict_types=1);

namespace MSdev\Component\DecisionTheory\ValueObject;

interface PropertyInterface
{
    /**
     * @return string
     */
    public function getDescription(): string;

    /**
     * @return array
     */
    public function getData(): array;
}
