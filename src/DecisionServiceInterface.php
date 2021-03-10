<?php

namespace MSdev\Component\DecisionTheory;

interface DecisionServiceInterface
{
    /**
     * @param Variant $variant
     *
     * @return bool
     */
    public function handle(Variant $variant): bool;
}
