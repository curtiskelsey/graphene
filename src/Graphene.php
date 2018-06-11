<?php

/*
 * This file is part of the Graphene package.
 *
 * (c) Curtis Kelsey <curtis.kelsey@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Graphene;


use Carbon\CarbonPeriod;

/**
 * Class Graphene
 * @package Graphene
 */
class Graphene extends CarbonPeriod
{
    /**
     * Determines if two date ranges overlap
     * @param Graphene $graphene
     * @return bool
     */
    public function overlaps(Graphene $graphene)
    {
        return $this->getStartDate() <= $graphene->getEndDate()
            && $this->getEndDate() >= $graphene->getStartDate();
    }

    /**
     * Determines if two date ranges are disjoint (do not overlap)
     * @param Graphene $graphene
     * @return bool
     */
    public function disjointFrom(Graphene $graphene)
    {
        return $this->getStartDate() > $graphene->getEndDate()
            || $this->getEndDate() < $graphene->getStartDate();
    }

    /**
     * Determines if the current range contains the provided range. Defaults
     * to not inclusive which means if the date ranges are equal it returns
     * false
     * @param Graphene $graphene
     * @param bool $inclusive
     * @return bool
     */
    public function contains(Graphene $graphene, $inclusive = false)
    {
        if ($inclusive) {
            return $this->getStartDate() <= $graphene->getStartDate()
                && $graphene->getEndDate() <= $this->getEndDate();
        }

        return $this->getStartDate() < $graphene->getStartDate()
            && $graphene->getEndDate() < $this->getEndDate();
    }

    /**
     * Determines if the current range is contained within the provided range.
     * Defaults to not inclusive which means if the date ranges are equal it
     * returns false
     * @param Graphene $graphene
     * @param bool $inclusive
     * @return bool
     */
    public function containedBy(Graphene $graphene, $inclusive = false)
    {
        if ($inclusive) {
            return $graphene->getStartDate() <= $this->getStartDate()
                && $this->getEndDate() <= $graphene->getEndDate();
        }

        return $graphene->getStartDate() < $this->getStartDate()
            && $this->getEndDate() < $graphene->getEndDate();
    }

    /**
     * Checks if the two date ranges are equal. Ignores the interval information
     * @param Graphene $graphene
     * @return bool
     */
    public function equalTo(Graphene $graphene)
    {
        return $this->getStartDate() == $graphene->getStartDate()
            && $this->getEndDate() == $graphene->getEndDate();
    }

    /**
     * Returns the intersection of two date ranges, returning false if there is
     * none
     * @param Graphene $graphene
     * @return Graphene
     */
    public function getOverlap(Graphene $graphene)
    {

    }

    /**
     * Returns the outer join of two date ranges, returning false if there is
     * none
     * @param Graphene $graphene
     * @return Graphene[]
     */
    public function getOuterJoin(Graphene $graphene)
    {

    }

    /**
     * Checks if the date range comes before the provided date range
     * @param Graphene $graphene
     * @return bool
     */
    public function isBefore(Graphene $graphene)
    {

    }

    /**
     * Checks if the date range comes after the provided date range
     * @param Graphene $graphene
     * @return bool
     */
    public function isAfter(Graphene $graphene)
    {

    }

    /**
     * Returns the date range between two disjoint date ranges. Returns false
     * if there are none
     * @param Graphene $graphene
     * @return bool|Graphene
     */
    public function getBetween(Graphene $graphene)
    {

    }
}