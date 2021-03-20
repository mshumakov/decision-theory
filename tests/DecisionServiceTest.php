<?php

declare(strict_types=1);

namespace Test\MSdev\Component\DecisionTheory;

use MSdev\Component\DecisionTheory\DecisionService;
use MSdev\Component\DecisionTheory\Handler\NullHandler;
use MSdev\Component\DecisionTheory\ValueObject\DataSet;
use MSdev\Component\DecisionTheory\ValueObject\Variant;
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
        $dataSetResult = $this->decisionService->process(new DataSet());

        self::assertFalse($dataSetResult->isSuccess());
        self::assertEquals(
            new NullHandler(),
            $this->decisionService->getHandler()
        );
    }

    public function testProcessingWithDataSet(): void
    {
        $dataSet = new DataSet([
            new Variant('UUID_01', 'Variant 01', [99.5, 10, 50, 132]),
            new Variant('UUID_02', 'Variant 02', [100.5, 20, 51, 143.2]),
            new Variant('UUID_03', 'Variant 03', [89.5, 15, 43.1, 122]),
        ]);

        $dataSetResult = $this->decisionService->process($dataSet);

        self::assertTrue($dataSetResult->isSuccess());
    }
}
