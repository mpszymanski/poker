<?php
/**
 * Created by PhpStorm.
 * User: szyman
 * Date: 20.11.18
 * Time: 19:06
 */

class RoyalFlushHand extends AbstractHand
{

    function check(Deal $deal)
    {
        $suits = $deal->getSuits();
        $faces = $deal->getFaces();

        // Same Suit
        if (!$this->hasOneSuit($suits))
            return false;

        // Cards from Ace to 10
        if ($faces !== [CardFaces::$Ace, CardFaces::$King, CardFaces::$Queen, CardFaces::$Jack, CardFaces::$_10])
            return false;

        return true;
    }

    function getName()
    {
        return 'Royal Flush';
    }
}