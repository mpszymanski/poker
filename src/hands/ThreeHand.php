<?php
/**
 * Created by PhpStorm.
 * User: szyman
 * Date: 20.11.18
 * Time: 19:06
 */

class ThreeHand extends AbstractHand
{

    function check(Deal $deal)
    {
        $faces = $deal->getFaces();

        $counts = $this->sameValuesCount($faces);

        return in_array(3, $counts);
    }

    function getName()
    {
        return 'Three of a kind';
    }
}