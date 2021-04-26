<?php

declare(strict_types=1);

namespace MSdev\Component\DecisionTheory\ValueObject;

class Variant implements VariantInterface
{
    /** @var string */
    private $key;
    /** @var bool */
    private $isObjectiveFunction;
    /** @var Property[] */
    private $properties;

    public function __construct(string $key, bool $isObjectiveFunction, array $properties = [])
    {
        $this->key                 = $key;
        $this->isObjectiveFunction = $isObjectiveFunction;
        $this->properties          = $properties;
    }

    public function getKey(): string
    {
        return $this->key;
    }

    public function isObjectiveFunction(): bool
    {
        return $this->isObjectiveFunction;
    }

    public function getProperties(): array
    {
        return $this->properties;
    }

    public function isEmpty(): bool
    {
        return empty($this->properties);
    }
}
