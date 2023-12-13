<?php
/*Exercice 11 Tableau et boucle :
-Créer une fonction qui affiche la valeur la plus grande d'un tableau.*/
$tab =[10, 35, 67, 104];
functon valeurMax($tab);
    $max =  $tab[0];
    foreach ($tab as $value) {
if ($value > $max) {
    $max = $value;
}
return $max;
    }

/*Exercice 12 Tableau et boucle :
-Créer une fonction qui affiche la moyenne du tableau.*/
function moyTab($tab) {
    $tab = 0;
    foreach ($tab as $value) {
        $somme += $value;
        return $somme/count($tab);
    }
    echo"la moyenne est:".round(round);
/*Exercice 13 Tableau et boucle :
-Créer une fonction qui affiche la valeur la plus petite du tableau.*/

?>