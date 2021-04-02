<?php

declare(strict_types=1);

namespace Test\MSdev\Component\DecisionTheory\Handler;

use MSdev\Component\DecisionTheory\Handler\Handler;
use MSdev\Component\DecisionTheory\Handler\MainCriterionMethodHandler;
use MSdev\Component\DecisionTheory\ValueObject\DataSet;
use MSdev\Component\DecisionTheory\ValueObject\DataSetResult;
use MSdev\Component\DecisionTheory\ValueObject\Property;
use MSdev\Component\DecisionTheory\ValueObject\Variant;
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

    public function testMainCriterionMethod(): void
    {
        $dataSet = new DataSet([
            new Variant('UUID_1', [
                new Property('x1', [21]),
                new Property('x2', [15]),
            ]),
            new Variant('UUID_2', [
                new Property('x1', [22]),
                new Property('x2', [8]),
            ])
        ]);

        $condition = $this->handler->process($dataSet);

        self::assertEquals(22, current($condition->getList()));
    }
}
