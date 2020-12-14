<?php

namespace MSdev\Component\DecisionTheory;

/**
 * Decision service based on passed options.
 */
class DecisionService
{
    /**
     * Process the options and return a sorted list based on key criteria.
     *
     * @param CriteriaInterface $criteria
     * @param VariantList       $variants
     *
     * @todo[mshumakov]: Return an instance of the class with variant data (access to the best and worst options).
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
