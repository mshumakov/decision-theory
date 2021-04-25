<?php

declare(strict_types=1);

namespace MSdev\Component\DecisionTheory\ValueObject;

interface VariantInterface
{
    public function getKey(): string;

    public function getProperties(): array;

    public function isEmpty(): bool;
}
