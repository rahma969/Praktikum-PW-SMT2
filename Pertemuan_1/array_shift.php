<?php
$tims = ["erwin", "heru", "ali", "zaki"];

array_shift( array: $tims);
foreach ($tims as $person) {
    echo $person . '</br>';
}