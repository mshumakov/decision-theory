<?php

declare(strict_types=1);

namespace MSdev\Component\DecisionTheory;

use MSdev\Component\DecisionTheory\Handler\Handler;
use MSdev\Component\DecisionTheory\ValueObject\DataSetInterface;
use MSdev\Component\DecisionTheory\ValueObject\DataSetResultInterface;

interface DecisionServiceInterface
{
    public function setHandler(Handler $handler): DecisionService;

    public function getHandler(): Handler;

    public function process(DataSetInterface $dataSet): DataSetResultInterface;
}
