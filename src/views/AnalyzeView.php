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
        foreach ($analyzer->getHandsCounts() as $handName => $handsCount) {
            echo "$handName: $handsCount\n";
        }
    }
}