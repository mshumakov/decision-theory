<?php

declare(strict_types=1);

namespace MSdev\Component\DecisionTheory;

use MSdev\Component\DecisionTheory\Handler\Handler;
use MSdev\Component\DecisionTheory\ValueObject\DataSetInterface;

interface DecisionServiceInterface
{
    /**
     * @param Handler $handler
     *
     * @return DecisionService
     */
    public function setHandler(Handler $handler): DecisionService;

    /**
     * @return Handler
     */
    public function getHandler(): Handler;

    /**
     * @param DataSetInterface $dataSet
     *
     * @return bool
     */
    public function process(DataSetInterface $dataSet): bool;
}
