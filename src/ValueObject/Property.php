<?php

declare(strict_types=1);

namespace MSdev\Component\DecisionTheory\ValueObject;

class Property implements PropertyInterface
{
    /** @var string */
    private $description;
    /** @var array */
    private $data;
    /** @var ParameterInterface */
    private $parameter;

    public function __construct(string $description, array $data = [], ParameterInterface $parameter = null)
    {
        $this->description = $description;
        $this->data        = $data;
        $this->parameter   = $parameter;
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

    /**
     * @return ParameterInterface
     */
    public function getParameter(): ?ParameterInterface
    {
        return $this->parameter;
    }
}
