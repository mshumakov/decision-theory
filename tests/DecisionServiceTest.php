<?php

declare(strict_types=1);

namespace Test\MSdev\Component\DecisionTheory;

use MSdev\Component\DecisionTheory\DecisionService;
use MSdev\Component\DecisionTheory\Handler\NullHandler;
use MSdev\Component\DecisionTheory\ValueObject\DataSet;
use MSdev\Component\DecisionTheory\ValueObject\Property;
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
            new Variant('UUID_1', [
                new Property( 'x1', [10]),
                new Property( 'x2', [15]),
            ]),
            new Variant('UUID_2', [
                new Property( 'x1', [17]),
                new Property( 'x2', [8]),
            ])
        ]);

        $dataSetResult = $this->decisionService->process($dataSet);

        self::assertTrue($dataSetResult->isSuccess());
    }
}
