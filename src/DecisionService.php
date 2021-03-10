<?php

namespace MSdev\Component\DecisionTheory;

use RuntimeException;

/**
 * Service for making a decision based on the transmitted data and criteria for their assessment.
 */
final class DecisionService implements DecisionServiceInterface
{
    /**
     * @inheritDoc
     */
    public function handle(): bool
    {
        throw new RuntimeException('Not implemented.');
    }
}
