<?php
$nbr1 = 10;
$nbr2 = 13;

// $nbr2 = 50;
// $nbr1 = 26;
// $nbr1 = $nbr2; 
// echo $nbr1;
// echo $nbr2; 
// echo "nombre 1 : $nbr1 , nombre 2 : $nbre2" ;

//test si nbr1 est le plus grand 

// if($nbr1>$nbr2 AND $nbr1 !=0 AND $nbr2 !=0){
//     echo "le nombre 1 est le plus grand";
// }
// else if ($nbr1 == $nbr2){
//     echo "les deux nombres sont identiques";
// }
// else {
//     echo "le nombre 2 est le plus grand"; 
// }

testNbr(10,50); 
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

// function somme ($n1, $n2, $n3) {
//     return ($n1 + $n2 + $n3);
// }

// echo somme(1,2,3); 

function moyenne ($n1, $n2, $n3) {
    $moyenne = ($n1 + $n2 + $n3)/3; 
    return $moyenne;
}

?>