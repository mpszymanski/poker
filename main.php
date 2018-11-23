<?php
/**
 * Created by PhpStorm.
 * User: szyman
 * Date: 20.11.18
 * Time: 16:33
 */

include 'loader.php';

$start_time = microtime(TRUE);

$builder = new DealBuilder();
$analyzer = new PokerAnalyzer();

for ($i = 0; $i < 100000; $i++) {
    $deal = $builder->buildRandomDeal();
    $analyzer->AnalyzeDeal($deal);
}

$view = new AnalyzeView($analyzer);
$view->render();

$end_time = microtime(TRUE);

$time = round(($end_time - $start_time) * 1000);
echo "Calculate in {$time}ms\n";