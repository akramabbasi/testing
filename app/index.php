<?php

$a = 2;
$b = 1;
public function calculate($a,$b){

$count array();
$count['plus'] = $a + $b;
$count['minus'] = $a - $b;
$count['divide'] = $a / $b;
$count['multiply'] = $a * $b;

return $count;

}

?>