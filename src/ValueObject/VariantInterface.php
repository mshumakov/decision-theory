<?php

declare(strict_types=1);

namespace MSdev\Component\DecisionTheory\ValueObject;

interface VariantInterface
{
    /**
     * @return string
     */
    public function getKey(): string;

    /**
     * @return string
     */
    public function getDescription(): string;

    /**
     * @return array
     */
    public function getData(): array;
}
