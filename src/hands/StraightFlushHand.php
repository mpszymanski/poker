<?php
/**
 * Created by PhpStorm.
 * User: szyman
 * Date: 20.11.18
 * Time: 19:06
 */

class StraightFlushHand extends Hand
{

    function check(Deal $deal)
    {
        $suits = $deal->getSuits();
        $faces = $deal->getFaces();

        // The same Suit
        if (!$this->hasOneSuit($suits))
            return false;

        // Is well ordered like: 10, 9, 8, 7, 6
        if (!$this->isWellOrdered($faces))
            return false;

        return true;
    }

    function getName()
    {
        return 'Straight Flush';
    }
}