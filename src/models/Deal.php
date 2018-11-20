<?php
/**
 * Created by PhpStorm.
 * User: szyman
 * Date: 20.11.18
 * Time: 16:35
 */

class Deal
{
    /**
     * @var array
     */
    private $cards = [];

    /**
     * @var array
     */
    private $faces = [];

    /**
     * @var array
     */
    private $suits = [];

    /**
     * Deal constructor.
     * @param array $cards
     */
    public function __construct($cards = [])
    {
       $this->setCards($cards);
    }

    /**
     * @param $cards
     */
    public function setCards($cards)
    {
        $this->cards = $cards;

        $this->sortDeal();
        $this->generateFacesArray();
        $this->generateSuitsArray();
    }

    /**
     * @return string
     */
    public function getCards()
    {
        $cards = $this->cards;
        $cards = array_map(function(Card $card) {
            return $card->getName();
        }, $cards);

        return implode(', ', $cards);
    }

    /**
     * @return array
     */
    public function getFaces()
    {
        return $this->faces;
    }

    /**
     * @return array
     */
    public function getSuits()
    {
        return $this->suits;
    }

    /**
     *  Sort deal cards to make analise possible.
     */
    private function sortDeal()
    {
        usort($this->cards, function(Card $prev, Card $current) {
            return $prev->getSuit() < $current->getSuit();
        });

        usort($this->cards, function(Card $prev, Card $current) {
            return $prev->getFace() < $current->getFace();
        });
    }

    /**
     *  Generate Faces array to make analise possible.
     */
    private function generateFacesArray()
    {
        $cards = $this->cards;
        $this->faces = array_map(function(Card $card) {
            return $card->getFace();
        }, $cards);
    }

    /**
     *  Generate Suits array to make analise possible.
     */
    private function generateSuitsArray()
    {
        $cards = $this->cards;
        $this->suits = array_map(function(Card $card) {
            return $card->getSuit();
        }, $cards);
    }
}