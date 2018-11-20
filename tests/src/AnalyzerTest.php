<?php
/**
 * Created by PhpStorm.
 * User: szyman
 * Date: 20.11.18
 * Time: 20:12
 */

abstract class AnalyzerTest
{
    abstract function getHandName();

    abstract function getData();

    public function run()
    {
        $data = $this->getData();
        $handName = $this->getHandName();
        $pokerAnalyzer = new PokerAnalyzer();

        foreach ($data as $deal) {
            if($pokerAnalyzer->analyzeDeal($deal) !== $handName) {
                echo "\e[0;31m [FAIL] Test for $handName\e[0m\n";
                return;
            }
        }

        echo "\033[0;32m [OK] Test for $handName\033[0m\n";
    }
}