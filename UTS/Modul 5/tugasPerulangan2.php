<?php
$bil = 2;
$total = 0; 

while ($bil <= 50) {
    $sebelumnya = $total; 
    $total = $total + $bil; 
  
    echo "$sebelumnya + $bil = $total <br>";
    
    $bil++;
}
?>
