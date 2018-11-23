<?php
/**
 * Created by PhpStorm.
 * User: szyman
 * Date: 20.11.18
 * Time: 18:49
 */

class AnalyzeView
{
    private $analyzer;

    private $expectedResults = [
        'High card' => 50.118,
        'Pair' => 42.257,
        'Two Pair' => 4.754,
        'Three of a kind' => 2.113,
        'Straight' => 0.392,
        'Flush' => 0.197,
        'Full House' => 0.144,
        'Quads' => 0.024,
        'Straight Flush' => 0.001385,
        'Royal Flush' => 0.000154,
    ];

    public function __construct($analyzer)
    {
        $this->setAnalyzer($analyzer);
    }

    public function setAnalyzer($analyzer)
    {
        $this->analyzer = $analyzer;
    }

    public function render()
    {
        $analyzer = $this->analyzer;
        $count = $analyzer->getDealsCount();
        $handsCount = $analyzer->getHandsCounts();

        echo "Hand\t\t\t|\tRandomized\t|\tExpected\t|\n";

        echo "-------------------------------------------------------------------------\n";

        foreach ($handsCount as $handName => $handCount) {
            $partOfTheRandom = $handCount / $count * 100;
            $expectedPartOfTheRandom = $this->expectedResults[$handName];
            $expected = round($count * $expectedPartOfTheRandom / 100);
            if (strlen($handName) < 6) $handName .= "\t";
            echo "$handName\t\t|\t$handCount ($partOfTheRandom%)\t|\t$expected ($expectedPartOfTheRandom%)\t|\n";
        }

        echo "\n";
    }
}