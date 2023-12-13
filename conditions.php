<?php
/*Exercice 9 :
-Créer une fonction qui prend en entrée 3 valeurs et retourne le nombre le plus petit (echo dans la page web).*/
function petit ($a, $b, $c){
    if ($a < $b && $a <$c) {
   return $a;
}else if ($b < $c && $b < $a){
    return $b;
} else if ($c < $b && $c < $a){
}   return $c; 
}
echo "le nombre le plus petit est:" .petit(32, 72, 89);
/*correction 
function petit ($a, $b, $c) {
    if ($a < $b && $a <$c) {
        return $a;
    }
    else if ($b < $c ) {
        return $b;
    } 
    else {
        return $c; 
    }   
}*/
/*Exercice 10 :
-Créer une fonction qui prend en entrée 1 valeur (l’âge d’un enfant). Ensuite, elle informe de sa catégorie (echo dans la page web) : 
•    "Poussin" de 6 à 7 ans
•    "Pupille" de 8 à 9 ans
•    "Minime" de 10 à 11 ans
•    "Cadet" après 12 ans

function testage($age){
    if ($age >= 6 AND $age <=7) {
    return "Poussin";}
else if ($age >= 8 AND $age<= 9) {
    return "Pupille";}
else if (($age >= 10 AND $age<= 11)){
    return "Minime";}
else if ($age >= 12) {
    return "Cadet";
}
else {
    return "Trop jeune";
}
}
echo "le niveau est : ".testAge(10);*/
/*Bonus : Refaire l’exercice en utilisant le switch case*/ 
function testAgeSwitch(int $age){
switch(true){ 
    case $age >= 6 AND $age <=7:
        return "poussin";
        break;
    case $age >= 8 AND $age<= 9:
        return "pupille";
        break;
    case $age >= 10 AND $age <= 11:
        return "minime";
        break;
    case $age >= 12:
        return "cadet";
        break;
    default:
        return "trop jeune";
    }
}
echo "le niveau est : ".testAgeSwitch(10);
?>