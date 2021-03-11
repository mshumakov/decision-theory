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

    /**
     * @link https://edu.susu.ru/mod/resource/view.php?id=3010310
     */
    public function testMultiCriteriaJob(): void
    {
        self::markTestSkipped('Not implemented.');
    }

    /**
     * @link https://edu.susu.ru/mod/resource/view.php?id=3010375
     */
    public function testCollectiveSolutions(): void
    {
        self::markTestSkipped('Not implemented.');
    }

    /**
     * @link https://edu.susu.ru/mod/resource/view.php?id=3010340
     */
    public function testDecisionMakingUnderUncertainty(): void
    {
        self::markTestSkipped('Not implemented.');
    }

    /**
     * @link https://edu.susu.ru/mod/resource/view.php?id=3010330
     */
    public function testDecisionMakingUnderRisk(): void
    {
        self::markTestSkipped('Not implemented.');
    }
}
