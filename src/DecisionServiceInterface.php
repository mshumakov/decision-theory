<?php

namespace MSdev\Component\DecisionTheory;

interface DecisionServiceInterface
{
    /**
     * Process the options and return a sorted list based on key criteria.
     *
     * @return bool
     */
    public function handle(): bool;
}
