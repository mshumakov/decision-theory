<?php

declare(strict_types=1);

namespace Test\MSdev\Component\DecisionTheory\Handler;

use MSdev\Component\DecisionTheory\Handler\Handler;
use MSdev\Component\DecisionTheory\Handler\HierarchyAnalysisMethodHandler;
use MSdev\Component\DecisionTheory\ValueObject\DataSet;
use MSdev\Component\DecisionTheory\ValueObject\DataSetResult;
use PHPUnit\Framework\TestCase;

class HierarchyAnalysisMethodHandlerTest extends TestCase
{
    /** @var Handler */
    private $handler;

    protected function setUp(): void
    {
        parent::setUp();

        $this->handler = new HierarchyAnalysisMethodHandler();
    }

    public function testHierarchyAnalysisMethodWithEmptyDataSet(): void
    {
        $condition = $this->handler->handle(new DataSet());

        self::assertEquals(new DataSetResult(), $condition);
    }
}
