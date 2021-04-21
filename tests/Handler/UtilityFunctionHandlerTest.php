<?php

declare(strict_types=1);

namespace Test\MSdev\Component\DecisionTheory\Handler;

use MSdev\Component\DecisionTheory\Handler\Handler;
use MSdev\Component\DecisionTheory\Handler\UtilityFunctionHandler;
use MSdev\Component\DecisionTheory\ValueObject\DataSet;
use MSdev\Component\DecisionTheory\ValueObject\DataSetResult;
use PHPUnit\Framework\TestCase;

class UtilityFunctionHandlerTest extends TestCase
{
    /** @var Handler */
    private $handler;

    protected function setUp(): void
    {
        parent::setUp();

        $this->handler = new UtilityFunctionHandler();
    }

    public function testUtilityFunctionWithEmptyDataSet(): void
    {
        $condition = $this->handler->calculate(new DataSet());

        self::assertEquals(new DataSetResult(), $condition);
    }
}
