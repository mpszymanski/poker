<?php
/**
 * Created by PhpStorm.
 * User: szyman
 * Date: 20.11.18
 * Time: 16:35
 */

class DealBuilder
{
    /**
     * @var array
     */
    private $availableCards = [];

    /**
     * DealBuilder constructor.
     */
    public function __construct()
    {
        $this->renderAvailableCards();
    }

    /**
     * Build Deal object
     * @return Deal
     */
    public function buildRandomDeal()
    {
        $availableCards = $this->availableCards;
        $cards = [];

        for ($i = 0; $i < 5; $i++) {
            $index = array_rand($availableCards);
            $cards[] = $availableCards[$index];
            unset($availableCards[$index]);
        }

        return new Deal($cards);
    }

    /**
     *  Render available cards array.
     *  Required to build Deals.
     */
    private function renderAvailableCards()
    {
        $faces = $this->getFaces();
        $suits = $this->getSuits();

        foreach ($faces as $faceName => $face) {
            foreach ($suits as $suitName => $suit) {
                $name = str_replace('_', '', "$faceName $suitName");
                $this->availableCards[] = new Card($face, $suit, $name);
            }
        }
    }

    /**
     * @return array
     */
    private function getFaces()
    {
        return get_class_vars(CardFaces::class);
    }

    /**
     * @return array
     */
    private function getSuits()
    {
        return get_class_vars(CardSuits::class);
    }
}