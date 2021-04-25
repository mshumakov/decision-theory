<?php

declare(strict_types=1);

namespace MSdev\Component\DecisionTheory\ValueObject;

class DataSetResult implements DataSetResultInterface
{
    /** @var Variant[] */
    private $list;

    public function __construct(array $list = [])
    {
        $this->list = $list;
    }

    public function getList(): array
    {
        return $this->list;
    }

    public function isSuccess(): bool
    {
        return !empty($this->list);
    }
}
