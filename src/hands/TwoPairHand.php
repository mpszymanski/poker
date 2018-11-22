<?php
/**
 * Created by PhpStorm.
 * User: szyman
 * Date: 20.11.18
 * Time: 19:06
 */

class TwoPairHand extends AbstractHand
{

    function check(Deal $deal)
    {
        $faces = $deal->getFaces();

        $counts = $this->sameValuesCount($faces);

        $countsOfCounts = array_count_values($counts);


        if (!isset($countsOfCounts[2]))
            return false;

        return $countsOfCounts[2] === 2;
    }

    function getName()
    {
        return 'Two Pair';
    }
}