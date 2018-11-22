<?php
/**
 * Created by PhpStorm.
 * User: szyman
 * Date: 20.11.18
 * Time: 19:06
 */

class PairHand extends AbstractHand
{

    function check(Deal $deal)
    {
        $faces = $deal->getFaces();

        $counts = $this->sameValuesCount($faces);

        return in_array(2, $counts);
    }

    function getName()
    {
        return 'Pair';
    }
}