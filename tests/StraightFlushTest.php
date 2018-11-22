<?php
/**
 * Created by PhpStorm.
 * User: szyman
 * Date: 20.11.18
 * Time: 20:16
 */

class StraightFlushTest extends AnalyzerTest
{
    public function getHandName()
    {
        return 'Straight Flush';
    }

    public function getData()
    {
        $tests = [];

        foreach ([CardSuits::$Club, CardSuits::$Diamond, CardSuits::$Heart, CardSuits::$Spade] as $suit) {
            $tests[] = new Deal([
                new Card(CardFaces::$_10, $suit),
                new Card(CardFaces::$_9, $suit),
                new Card(CardFaces::$_8, $suit),
                new Card(CardFaces::$_7, $suit),
                new Card(CardFaces::$_6, $suit)
            ]);
        }

        return $tests;
    }
}