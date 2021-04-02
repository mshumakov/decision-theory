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
     * @return Variant[]
     */
    public function getVariants(): array;

    /**
     * @return bool
     */
    public function isEmpty(): bool;
}
