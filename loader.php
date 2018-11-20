<?php
/**
 * Created by PhpStorm.
 * User: szyman
 * Date: 20.11.18
 * Time: 16:33
 */

const ROOT_DIR = 'src';

$classesDir = [
    ROOT_DIR,
    ROOT_DIR . '/enums',
    ROOT_DIR . '/models',
    ROOT_DIR . '/views',
    ROOT_DIR . '/hands'
];

foreach ($classesDir as $dir) {
    foreach (glob("$dir/*.php") as $filename) {
        include $filename;
    }
}
