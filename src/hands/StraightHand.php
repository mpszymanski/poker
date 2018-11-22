<?php
/**
 * Created by PhpStorm.
 * User: szyman
 * Date: 20.11.18
 * Time: 19:06
 */

class StraightHand extends AbstractHand
{

    function check(Deal $deal)
    {
        $suits = $deal->getSuits();
        $faces = $deal->getFaces();

        // Same Suit
        if ($this->hasOneSuit($suits))
            return false;

        // Well ordered
        if (!$this->isWellOrdered($faces)) {
            // If contain Ace
            $aceIndex = array_search(CardFaces::$Ace, $faces);
            if ($aceIndex !== false) {
                // Replace Ace with 1 and check again
                $faces[$aceIndex] = 1;
                rsort($faces);
                return $this->isWellOrdered($faces);
            }

            return false;
        }

        return true;
    }

    function getName()
    {
        return 'Straight';
    }
}