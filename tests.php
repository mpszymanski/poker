<?php
/**
 * Created by PhpStorm.
 * User: szyman
 * Date: 20.11.18
 * Time: 20:09
 */

include 'loader.php';
include 'tests_loader.php';

foreach (glob("tests/*.php") as $filename) {
    preg_match("/.*\/(.*)\.php/", $filename, $class);
    (new $class[1])->run();
}