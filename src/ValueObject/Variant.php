<?php

declare(strict_types=1);

namespace MSdev\Component\DecisionTheory\ValueObject;

class Variant implements VariantInterface
{
    /** @var string */
    private $key;
    /** @var Property[] */
    private $properties;

    public function __construct(string $key, array $properties = [])
    {
        $this->key        = $key;
        $this->properties = $properties;
    }

    public function getKey(): string
    {
        return $this->key;
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
