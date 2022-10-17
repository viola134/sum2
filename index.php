<?php
function sum_row($a){
$sum = 0;
for ($i = 1; $i < $a; $i++) {
    echo $sum += $i * $i;}
}
print sum_row();