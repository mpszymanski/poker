<?php
/**
 * Created by PhpStorm.
 * User: szyman
 * Date: 20.11.18
 * Time: 19:06
 */

class FlushHand extends AbstractHand
{

    function check(Deal $deal)
    {
        $suits = $deal->getSuits();
        $faces = $deal->getFaces();

        // Same Suit
        if (!$this->hasOneSuit($suits))
            return false;

        // Well ordered
        if ($this->isWellOrdered($faces))
            return false;

        return true;
    }

    function getName()
    {
        return 'Flush';
    }
}