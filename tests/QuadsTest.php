<?php
/**
 * Created by PhpStorm.
 * User: szyman
 * Date: 20.11.18
 * Time: 20:16
 */

class QuadsTest extends AnalyzerTest
{
    public function getHandName()
    {
        return 'Quads';
    }

    public function getData()
    {
        $tests = [];

        $tests[] = new Deal([
            new Card(CardFaces::$King, CardSuits::$Diamond),
            new Card(CardFaces::$King, CardSuits::$Club),
            new Card(CardFaces::$King, CardSuits::$Diamond),
            new Card(CardFaces::$King, CardSuits::$Club),
            new Card(CardFaces::$_6, CardSuits::$Club)
        ]);

        $tests[] = new Deal([
            new Card(CardFaces::$Ace, CardSuits::$Club),
            new Card(CardFaces::$King, CardSuits::$Diamond),
            new Card(CardFaces::$King, CardSuits::$Club),
            new Card(CardFaces::$King, CardSuits::$Club),
            new Card(CardFaces::$King, CardSuits::$Diamond)
        ]);

        return $tests;
    }
}