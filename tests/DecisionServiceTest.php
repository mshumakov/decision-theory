<?php

namespace Test\MSdev\Component\DecisionTheory;

use MSdev\Component\DecisionTheory\DecisionService;
use PHPUnit\Framework\TestCase;
use TypeError;

class DecisionServiceTest extends TestCase
{
    public function testProcessingWithoutParametersHandle(): void
    {
        $this->expectException(TypeError::class);

        $decisionService = new DecisionService();
        $decisionService->handle();
    }
}
