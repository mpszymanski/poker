<?php
/**
 * Created by PhpStorm.
 * User: szyman
 * Date: 20.11.18
 * Time: 19:06
 */

class RoyalFlushHand extends Hand
{

    function check(Deal $deal)
    {
        $suits = $deal->getSuits();
        $faces = $deal->getFaces();

        // Same Suit
        if (count(array_unique($suits)) > 1)
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