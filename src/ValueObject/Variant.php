<?php

declare(strict_types=1);

namespace MSdev\Component\DecisionTheory\ValueObject;

class Variant implements VariantInterface
{
    /** @var string */
    private $key;
    /** @var string */
    private $description;
    /** @var array */
    private $data;

    public function __construct(string $key, string $description, array $data = [])
    {
        $this->key         = $key;
        $this->description = $description;
        $this->data        = $data;
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
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @inheritDoc
     */
    public function getData(): array
    {
        return $this->data;
    }
}
