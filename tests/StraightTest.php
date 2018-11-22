<?php
/**
 * Created by PhpStorm.
 * User: szyman
 * Date: 20.11.18
 * Time: 20:16
 */

class StraightTest extends AnalyzerTest
{
    public function getHandName()
    {
        return 'Straight';
    }

    public function getData()
    {
        $tests = [];

        $tests[] = new Deal([
            new Card(CardFaces::$King, CardSuits::$Heart),
            new Card(CardFaces::$Queen, CardSuits::$Club),
            new Card(CardFaces::$Jack, CardSuits::$Diamond),
            new Card(CardFaces::$_10, CardSuits::$Club),
            new Card(CardFaces::$_9, CardSuits::$Club)
        ]);

        $tests[] = new Deal([
            new Card(CardFaces::$Ace, CardSuits::$Heart),
            new Card(CardFaces::$King, CardSuits::$Club),
            new Card(CardFaces::$Queen, CardSuits::$Diamond),
            new Card(CardFaces::$Jack, CardSuits::$Club),
            new Card(CardFaces::$_10, CardSuits::$Club)
        ]);

        $tests[] = new Deal([
            new Card(CardFaces::$Ace, CardSuits::$Heart),
            new Card(CardFaces::$_2, CardSuits::$Club),
            new Card(CardFaces::$_3, CardSuits::$Diamond),
            new Card(CardFaces::$_4, CardSuits::$Club),
            new Card(CardFaces::$_5, CardSuits::$Club)
        ]);


        return $tests;
    }
}