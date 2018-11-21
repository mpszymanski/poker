<?php
/**
 * Created by PhpStorm.
 * User: szyman
 * Date: 20.11.18
 * Time: 19:02
 */

abstract class Hand
{
    abstract function check(Deal $deal);

    abstract function getName();

    public function hasOneSuit($suits)
    {
        return count(array_unique($suits)) === 1;
    }

    public function isWellOrdered($faces)
    {
        for ($i = 0; $i < count($faces) - 1; $i++) {
            if ($faces[$i] - $faces[$i+1] !== 1)
                return false;
        }

        return true;
    }
}