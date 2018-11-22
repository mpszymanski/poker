<?php
/**
 * Created by PhpStorm.
 * User: szyman
 * Date: 20.11.18
 * Time: 19:06
 */

class QuadsHand extends AbstractHand
{

    function check(Deal $deal)
    {
        $faces = $deal->getFaces();

        $counts = $this->sameValuesCount($faces);

        return in_array(4, $counts);
    }

    function getName()
    {
        return 'Quads';
    }
}