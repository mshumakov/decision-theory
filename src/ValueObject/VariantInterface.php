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
     * @return Property[]
     */
    public function getProperties(): array;

    /**
     * @return bool
     */
    public function isEmpty(): bool;
}
