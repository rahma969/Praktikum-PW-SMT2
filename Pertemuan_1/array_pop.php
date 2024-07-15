<?php
$tims = ["erwin","heru","ali","zaki"];

array_pop(array:$tims); // Menghapus element terakhir di dalam array
foreach ($tims as $person) {
    echo $person . "</br>";
}