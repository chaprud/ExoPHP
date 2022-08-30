<?php
function testNbr( $nb1,  $nb2) {
    if($nb1>$nb2 AND $nb1 !=0 AND $nb2 !=0){
        echo "le nombre 1 est le plus grand";
    }
    else if ($nb1 == $nb2){
        echo "les deux nombres sont identiques";
    }
    else {
        echo "le nombre 2 est le plus grand"; 
    }
}
?>