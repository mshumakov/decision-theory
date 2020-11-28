<?php

namespace Test\MSdev\Component\DecisionTheory;

use MSdev\Component\DecisionTheory\DecisionService;
use PHPUnit\Framework\TestCase;

class DecisionServiceTest extends TestCase
{
    public function testGetMethod(): void
    {
        $this->expectExceptionMessage('Not implemented');

        $decisionService = new DecisionService();
        $decisionService->getMethod();
    }
}
