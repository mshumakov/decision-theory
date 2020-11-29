<?php

namespace MSdev\Component\DecisionTheory;

class VariantDto implements VariantDtoInterface
{
    /** @var string */
    private $key;
    /** @var int */
    private $count;

    /**
     * @return string
     */
    public function getKey(): string
    {
        return $this->key;
    }

    /**
     * @param string $key
     *
     * @return VariantDto
     */
    public function setKey(string $key): self
    {
        $this->key = $key;

        return $this;
    }

    /**
     * @return int
     */
    public function getCount(): int
    {
        return $this->count;
    }

    /**
     * @param int $count
     *
     * @return VariantDto
     */
    public function setCount(int $count): self
    {
        $this->count = $count;

        return $this;
    }
}
