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

    /**
     * @inheritDoc
     */
    public function getKey(): string
    {
        return $this->key;
    }

    /**
     * @inheritDoc
     */
    public function getVariants(): array
    {
        return $this->properties;
    }

    /**
     * @inheritDoc
     */
    public function isEmpty(): bool
    {
        return empty($this->properties);
    }
}
