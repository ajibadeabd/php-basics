<?php
function sayit($word1,$word2='hate'){
    return $word1.'|'.$word2.'<br/>'; 
}
echo sayit('i love you','a');

function sayit1($word1,$word2='hate'){
    return $word1.'|'.$word2.'<br/>';
}
echo sayit1('i love you','lie');
function add($num1 , $num2){
    return $num1 + $num2;
}
?>