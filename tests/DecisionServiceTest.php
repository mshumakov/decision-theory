<?php

namespace Test\MSdev\Component\DecisionTheory;

use MSdev\Component\DecisionTheory\DecisionService;
use PHPUnit\Framework\TestCase;
use RuntimeException;

class DecisionServiceTest extends TestCase
{
    public function testProcessingWithoutParametersHandle(): void
    {
        $this->expectException(RuntimeException::class);
        (new DecisionService())->handle();
    }
}
