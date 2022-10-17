<?php
function sum_row(){
    $sum = 0;
    for ($i = 1; $i < 5; $i++) {
        echo $sum += $i * $i;
    } 
}
sum_row();