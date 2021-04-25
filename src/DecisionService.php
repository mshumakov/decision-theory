<?php

declare(strict_types=1);

namespace MSdev\Component\DecisionTheory;

use MSdev\Component\DecisionTheory\Handler\Handler;
use MSdev\Component\DecisionTheory\ValueObject\DataSetInterface;
use MSdev\Component\DecisionTheory\ValueObject\DataSetResultInterface;

/**
 * Service for making a decision based on the transmitted data and criteria for their assessment.
 */
final class DecisionService implements DecisionServiceInterface
{
    /** @var Handler */
    private $handler;

    public function setHandler(Handler $handler): DecisionService
    {
        $this->handler = $handler;

        return $this;
    }

    public function getHandler(): Handler
    {
        return $this->handler;
    }

    public function process(DataSetInterface $dataSet): DataSetResultInterface
    {
        return $this->handler->process($dataSet);
    }
}
