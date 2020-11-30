<?php

namespace Test\MSdev\Component\DecisionTheory;

use MSdev\Component\DecisionTheory\VariantDto;
use MSdev\Component\DecisionTheory\Criteria;
use MSdev\Component\DecisionTheory\DecisionService;
use MSdev\Component\DecisionTheory\VariantList;
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

    /**
     * @dataProvider getVariantsForTestHandle
     *
     * @param array $variants
     */
    public function testHandle(array $variants): void
    {
        $variantList = new VariantList();
        foreach ($variants as $variant) {
            $variantList->append($variant);
        }

        $decisionService = new DecisionService();
        $listIdsByCriteria = $decisionService->handle(new Criteria(), $variantList);

        self::assertIsArray($listIdsByCriteria);
        self::assertEquals($variants[0]->getKey(), $listIdsByCriteria[0]->getKey());
    }

    /**
     * @return array
     */
    public function getVariantsForTestHandle(): array
    {
        return [
            [
                [
                    (new VariantDto())
                        ->setKey('1')
                        ->setCount(100),
                    (new VariantDto())
                        ->setKey('2')
                        ->setCount(150),
                    (new VariantDto())
                        ->setKey('3')
                        ->setCount(200)
                ]
            ]
        ];
    }
}
