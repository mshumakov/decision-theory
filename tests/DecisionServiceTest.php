<?php

namespace Test\MSdev\Component\DecisionTheory;

use MSdev\Component\DecisionTheory\DecisionService;
use MSdev\Component\DecisionTheory\Variant;
use PHPUnit\Framework\TestCase;
use RuntimeException;

class DecisionServiceTest extends TestCase
{
    public function testProcessingWithEmptyVariantList(): void
    {
        $this->expectException(RuntimeException::class);

        (new DecisionService())->handle(
            new Variant('some super id', [])
        );
    }
}
