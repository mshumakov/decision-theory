<?php

declare(strict_types=1);

namespace Test\MSdev\Component\DecisionTheory\Handler;

use MSdev\Component\DecisionTheory\Handler\Handler;
use MSdev\Component\DecisionTheory\Handler\MainCriterionMethodHandler;
use MSdev\Component\DecisionTheory\ValueObject\DataSet;
use MSdev\Component\DecisionTheory\ValueObject\DataSetResult;
use PHPUnit\Framework\TestCase;

class MainCriterionMethodHandlerTest extends TestCase
{
    /** @var Handler */
    private $handler;

    protected function setUp(): void
    {
        parent::setUp();

        $this->handler = new MainCriterionMethodHandler();
    }

    public function testMainCriterionMethodWithEmptyDataSet(): void
    {
        $condition = $this->handler->handle(new DataSet());

        self::assertEquals(new DataSetResult(), $condition);
    }
}
