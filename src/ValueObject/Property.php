<?php

declare(strict_types=1);

namespace MSdev\Component\DecisionTheory\ValueObject;

class Property implements PropertyInterface
{
    /** @var string */
    private $description;
    /** @var array */
    private $data;

    public function __construct(string $description, array $data = [])
    {
        $this->description = $description;
        $this->data        = $data;
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
