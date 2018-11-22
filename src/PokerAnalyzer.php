<?php
/**
 * Created by PhpStorm.
 * User: szyman
 * Date: 20.11.18
 * Time: 16:38
 */

class PokerAnalyzer
{
    private $deals = [];

    private $availableHands = [];

    private $handsCounts = [];

    public function __construct()
    {
        $this->renderAvailableHands();
    }

    public function AnalyzeDeal(Deal $deal)
    {
        $this->deals[] = $deal;

        $handName = $this->findHand($deal);

        if (isset($this->handsCounts[$handName])) {
            $this->handsCounts[$handName]++;
        } else {
            $this->handsCounts[$handName] = 1;
        }

        return $handName;
    }

    public function getDealsCount()
    {
        return count($this->deals);
    }

    public function getHandsCounts()
    {
        return $this->handsCounts;
    }

    private function renderAvailableHands()
    {
        foreach ($this->getHands() as $handClass) {
            $this->availableHands[] = new $handClass;
        }
    }

    private function getHands()
    {
        return get_class_vars(PokerHands::class);
    }

    private function findHand(Deal $deal)
    {
        $availableHands = $this->availableHands;

        foreach ($availableHands as $availableHand) {
            if ($availableHand->check($deal)) {
                return $availableHand->getName();
            }
        }

        return "High card";
    }
}