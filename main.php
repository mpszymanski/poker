<?php
/**
 * Created by PhpStorm.
 * User: szyman
 * Date: 20.11.18
 * Time: 16:33
 */

include 'loader.php';

$builder = new DealBuilder();
$analyzer = new PokerAnalyzer();

for ($i = 0; $i < 1000; $i++) {
    $deal = $builder->buildRandomDeal();
    $analyzer->addDeal($deal);
}

$view = new AnalyzeView($analyzer);
$view->render();