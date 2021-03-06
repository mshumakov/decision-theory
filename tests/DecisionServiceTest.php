<?php

declare(strict_types=1);

namespace Test\MSdev\Component\DecisionTheory;

use MSdev\Component\DecisionTheory\DecisionService;
use MSdev\Component\DecisionTheory\Handler\NullHandler;
use MSdev\Component\DecisionTheory\ValueObject\DataSet;
use PHPUnit\Framework\TestCase;

class DecisionServiceTest extends TestCase
{
    /** @var DecisionService */
    private $decisionService;

    protected function setUp(): void
    {
        parent::setUp();

        $this->decisionService = new DecisionService();
        $this->decisionService->setHandler(new NullHandler());
    }

    public function testProcessingWithEmptyDataSet(): void
    {
        $condition = $this->decisionService->process(new DataSet());

        self::assertFalse($condition);
        self::assertEquals(
            new NullHandler(),
            $this->decisionService->getHandler()
        );
    }

    public function testProcessingWithDataSetNumber(): void
    {
        $condition = $this->decisionService->process(new DataSet([1, 2, 3]));

        self::assertTrue($condition);
    }
}
