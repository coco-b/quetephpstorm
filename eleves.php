<?php
/**
 * Created by PhpStorm.
 * User: cecileberger
 * Date: 20/03/2017
 * Time: 09:32
 */


$students = array(
    "Emmanuel"  => 42,
    "Thierry"   => 51,
    "Pascal"    => 45,
    "Eric"      => 48,
    "Nicolas"   => 19
);

echo array_sum($students)/count($students);
?>