<?php
$ar_buah = ["p" => "Pepaya","a" => "Apel","m" => "Mangga","j" => "Jambu"];
echo '<ol>';
foreach($ar_buah as $k => $v){
    echo "<li>$k - $v";
}
echo '</ol>';

sort( array: $ar_buah);
echo '<ol>';
foreach($ar_buah as $k => $v){
    echo "<li>$k - $v";
}
echo '</ol>';