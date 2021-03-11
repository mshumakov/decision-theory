<?php

namespace MSdev\Component\DecisionTheory;

/**
 * ...
 */
class Variant
{
    /** @var string */
    private $id;
    /** @var array */
    private $list;

    public function __construct(string $id, array $list)
    {
        $this->id   = $id;
        $this->list = $list;
    }

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @param string $id
     */
    public function setId(string $id): void
    {
        $this->id = $id;
    }

    /**
     * @return array
     */
    public function getList(): array
    {
        return $this->list;
    }

    /**
     * @param array $list
     */
    public function setList(array $list): void
    {
        $this->list = $list;
    }
}
