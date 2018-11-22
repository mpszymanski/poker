<?php
/**
 * Created by PhpStorm.
 * User: szyman
 * Date: 20.11.18
 * Time: 20:16
 */

class FlushTest extends AnalyzerTest
{
    public function getHandName()
    {
        return 'Flush';
    }

    public function getData()
    {
        $tests = [];

        foreach ([CardSuits::$Club, CardSuits::$Diamond, CardSuits::$Heart, CardSuits::$Spade] as $suit) {
            $tests[] = new Deal([
                new Card(CardFaces::$King, $suit),
                new Card(CardFaces::$_5, $suit),
                new Card(CardFaces::$Jack, $suit),
                new Card(CardFaces::$_7, $suit),
                new Card(CardFaces::$_3, $suit)
            ]);
        }

        return $tests;
    }
}