<?php

declare(strict_types=1);

namespace MSdev\Component\DecisionTheory\ValueObject;

class DataSet implements DataSetInterface
{
    /** @var array */
    private $list;

    public function __construct(array $list = [])
    {
        $this->list = $list;
    }

    /**
     * @inheritDoc
     */
    public function isEmpty(): bool
    {
        return empty($this->list);
    }
}
