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
        foreach ($analyzer->getHandsCounts() as $handName => $handsCount) {
            $partOfTheRandom = $handsCount / $count * 100;
            echo "==$handName==\n";
            echo "Randomized: $handsCount ($partOfTheRandom%)\t \n";
        }
    }
}