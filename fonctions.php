/*Exercice 5 fonction: 
-Créer une fonction qui soustrait à $a la variable $b (2 paramètres en entrée),
-la fonction doit renvoyer le résultat de la soustraction $a-$b (return)
<?php 
   /* $a = 15;
    $b = 10;
    echo $a;
    function souStraction (int $a, int $b){
    $result = $a-$b;
    return $result;
} 
/*correction
function soustraction (int $a,int $b){
    return $a-$b;
}
echo soustraction (15,22);
*/
/*Exercice 6 fonction: 
-Créer une fonction qui prend en entrée un nombre à virgule (float),
-la fonction doit renvoyer l’arrondi (return) du nombre en entrée 
   function aRrondi(float $a):float{
    return round ($a,2);
   }
   echo "la valeur arrondie est égale à : ".arrondi(10.897);
*/
/*Exercice 7 Fonction:
-Créer une fonction qui prend en entrée 3 valeurs et renvoie la somme des 3 valeurs.*/
   function somme($a, $b, $c){
    return $a+$b+$c;
   }
   echo somme(154, 203, 72);

/*Exercice 8 Fonction :
-Créer une fonction qui prend en entrée 3 valeurs et retourne la valeur moyenne des 3 valeurs (saisies en paramètre).*/
   function moyenne($a, $b, $c){
   return ($a+$b+$c)/3;
   }
   echo moyenne(15,13,20);

/*Bonus : 
passer plusieurs valeurs en entrées et retourner la somme de ces valeurs peut importe le nombre de valeur.
NB : utiliser le type intérable ... voir le cours page 20/21 */
    function somme2(...$liste){
        $somme = 0;
        foreach ($liste as $value) {
            $somme += $value;
        }
        return $somme;
    }
    echo somme2(10,25,10)."<br>";
    ?>