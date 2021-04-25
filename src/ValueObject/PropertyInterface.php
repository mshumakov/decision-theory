<?php

declare(strict_types=1);

namespace MSdev\Component\DecisionTheory\ValueObject;

interface PropertyInterface
{
    public function getDescription(): string;

    public function getData(): array;

    public function getParameter(): ?ParameterInterface;
}
