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

// $tab = [];
// $tab2 = array(); 
// $tab[0] = "mathieu"; 
// $tab2[0] = "Adrar";
// echo $tab[0]; 
// $tab3 = ["nom" , "prenom" , "age" ,];
// $tab3["prenom"] = "Mathieu"; 
// echo $tab3["prenom"]; 

//tableau indéxé
$tab2 = [];
$tab2[0] = 'Adrar';
$tab2[1] = 'test';
//parcourir un tableau indéxé
foreach($tab2 as $value){
    echo $value.'<br>';
}
//tableau associatif
$tab3 = ['nom' => 'Mithridate','prenom' => '', 'age' => ''];
$tab3['prenom'] = 'Mathieu';
$tab3['age'] = 43;
$tab3['telephone'] = '0601020304';
//parcourir un tableau associatif (nom de colonne (key) et contenu (value))
foreach($tab3 as $key => $value){
    echo 'Le '.$key. ' : '.$value.'<br>';
}

$tab4 = [5, 11, 8, 22, 36, 42, 3, 78, 1, 29];

function maxValue($tableau){
    $max=0;
    foreach ($tableau as $value) {
        if ($value>$max) {
            $max = $value;
        }
        else {
        $max= $max;
    }
}
}

echo maxValue($tab4); 

?>