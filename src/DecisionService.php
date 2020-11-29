<?php

namespace MSdev\Component\DecisionTheory;

class DecisionService
{
    /**
     * Process the options and return a sorted list based on key criteria.
     *
     * @param CriteriaInterface $criteria
     * @param VariantList       $variants
     *
     * @return array
     */
    public function handle(CriteriaInterface $criteria, VariantList $variants): array
    {
        // Temporary plug.
        if (!$criteria instanceof Criteria) {
            return [];
        }

        return $variants->getList();
    }
}
