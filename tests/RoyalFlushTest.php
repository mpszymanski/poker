<?php
/**
 * Created by PhpStorm.
 * User: szyman
 * Date: 20.11.18
 * Time: 20:16
 */

class RoyalFlushTest extends AnalyzerTest
{
    public function getHandName()
    {
        return 'Royal Flush';
    }

    public function getData()
    {
        $tests = [];

        foreach ([CardSuits::$Club, CardSuits::$Diamond, CardSuits::$Heart, CardSuits::$Spade] as $suit) {
            $tests[] = new Deal([
                new Card(CardFaces::$Ace, $suit),
                new Card(CardFaces::$King, $suit),
                new Card(CardFaces::$Queen, $suit),
                new Card(CardFaces::$Jack, $suit),
                new Card(CardFaces::$_10, $suit)
            ]);
        }

        return $tests;
    }
}