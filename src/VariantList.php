<?php

namespace MSdev\Component\DecisionTheory;

class VariantList
{
    /** @var array */
    private $list;

    /**
     * @return array
     */
    public function getList(): array
    {
        return $this->list;
    }

    /**
     * @param VariantInterface $variant
     *
     * @return $this
     */
    public function append(VariantInterface $variant): self
    {
        $this->list[] = $variant;

        return $this;
    }
}
