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
}