<?php

declare(strict_types=1);

namespace MSdev\Component\DecisionTheory\ValueObject;

class DataSet implements DataSetInterface
{
    /** @var array */
    private $list;
    /** @var array */
    private $restrictions;

    public function __construct(array $list = [], array $restrictions = [])
    {
        $this->list         = $list;
        $this->restrictions = $restrictions;
    }

    public function isEmpty(): bool
    {
        return empty($this->list);
    }

    public function getList(): array
    {
        return $this->list;
    }

    public function getRestrictions(): array
    {
        return $this->restrictions;
    }
}
