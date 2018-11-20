<?php
/**
 * Created by PhpStorm.
 * User: szyman
 * Date: 20.11.18
 * Time: 20:10
 */


foreach (glob("tests/src/*.php") as $filename) {
    include $filename;
}
