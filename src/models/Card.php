<?php
/**
 * Created by PhpStorm.
 * User: szyman
 * Date: 20.11.18
 * Time: 16:34
 */

class Card
{
    /**
     * @var Integer
     */
    private $suit;

    /**
     * @var Integer
     */
    private $face;

    /**
     * @var String
     */
    private $name;

    /**
     * Card constructor.
     * @param $name
     * @param $face
     * @param $suit
     */
    public function __construct($face, $suit, $name = '')
    {
        $this->name = $name;
        $this->suit = $suit;
        $this->face = $face;
    }

    /**
     * @return int
     */
    public function getSuit()
    {
        return $this->suit;
    }

    /**
     * @return int
     */
    public function getFace()
    {
        return $this->face;
    }

    /**
     * @return String
     */
    public function getName()
    {
        return $this->name;
    }
}