<?php
    echo "<h1>Hello it's me</h1>";

$nbre1 = 5; 
echo $nbre1;
echo "<br>";
echo gettype($nbre1)."<br>";

$prenom = "Laurie";
echo $prenom."<br>";

$boolean = false;
echo gettype($boolean)."<br>";

/*Exercice 2 Concaténation :
-Créer 1 variable $a qui a pour valeur « bon »,
-Créer 1 variable $b qui a pour valeur « jour »,
-Créer 1 variable $c qui a pour valeur 10,
-Concaténer $a, $b et $c +1,
-Afficher le résultat de la concaténation.*/
$a = "bon";
$b = "jour";
$c = 10;
echo $a.$b.($c+1);

/*Exercice 3 Concaténation :
-Créer une variable $a qui a pour valeur bonjour,
-Afficher un paragraphe (balise html) et à l’intérieur les mots suivants :l’adrar,
-Ajouter la variable $a avant la phase dans le paragraphe,
-Cela doit donner :
<p>bonjour l’Adrar</p> (modifié)
*/
$a = "bonjour";
echo "<p>$a l'Adrar</p>";
echo '<p>'.$a.'l/Adrar</p>';
echo "<p>".$a."l'Adrar</p>";

/*Exercice 4 Concaténation et opérateur :
-Créer une variable prix HT (d’un article),
-Créer une variable (le nombre d’articles),
-Créer une variable  (le taux de TVA), 
-Stocker dans une variable le calul du (total TTC),
-Afficher le prix HT, le nbr d’articles et le taux de TVA (utilisez la fonction echo),
-Afficher le total TTC (utilisez la fonction echo).*/

$prixHT = 2.49;
$quantite = 5;
$tva = 1.2;
$total = $prixHT*$quantite*$tva;
echo "le total est égal à : $total €";
echo "le total est égal à : ".$total."€";
echo 'le total est égal à : '.$total.'€';
echo 'le total est égal à '.($prixHT*$quantite*$tva).'€';
?>