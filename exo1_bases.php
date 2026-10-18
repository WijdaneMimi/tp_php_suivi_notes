<?php
echo 'Hello PHP<br><br>'; // J'ai ajouté <br> pour faire un saut de ligne à l'écran

require __DIR__ . '/config.php';

/*  Exercice 1.1 : Noms de variables
$x        : valide (commence par une lettre)
$_x       : valide (commence par underscore)
$2x       : INVALIDE (ne peut pas commencer par un chiffre)
$x-y      : INVALIDE (tiret interdit)
$Prix_HT  : valide (lettres, underscore, chiffres)
$prix ht  : INVALIDE (espace interdit)
$état     : valide (PHP autorise les caractères Unicode ≥ 128)
*/
$x = 1;
$_x = 2;
$Prix_HT = 60;
$état = "actif";

$a = "minuscule";
$A = "majuscule";
echo "\$a = $a, \$A = $A <br>"; // deux variables distinctes

/*  Exercice 1.2  */
echo ETABLISSEMENT . "<br>";
echo NOTE_MIN . " - " . NOTE_MAX . " - SEUIL=" . SEUIL . "<br>";
var_dump(defined('SEUIL'));     // bool(true)
var_dump(defined('INCONNUE'));  // bool(false)

/*
Q1 : Afficher une constante non définie provoque une erreur fatale.
Q2 : const est résolu à la compilation, ne peut être déclaré que
     dans un contexte global/de classe, et ne peut pas contenir
     d'expression dynamique. define() est résolu à l'exécution,
     peut être appelé n'importe où (y compris dans un if) et accepte
     des noms dynamiques.
*/

/* Exercice 1.3 */
$prix_ht = 60;
$tva = 20;
$prix_ttc = $prix_ht * (1 + $tva / 100);
echo "Le prix TTC du produit est de {$prix_ttc} €.<br>";

/* Exercice 1.4 */
$test = 42;
$test = (string) $test;
var_dump($test); // string(2) "42"

foreach ([0, 0.0, "0", "", "abc", [], null] as $v) {
    var_dump((bool) $v);
}
// Faux : 0, 0.0, "0", "", [], null ; Vrai : "abc"

var_dump((int) 3.9);      // 3
var_dump((int) "12abc");  // 12
var_dump((float) "1.5e3");// 1500.0
var_dump((int) true);     // 1

$n = 255;
printf("décimal=%d, hexa=%X, octal=%o, binaire=%b<br>", $n, $n, $n, $n);

/*  Exercice 1.5  */
$traitees = "égales à";
$ici = 2;

echo 'Wijdane a dit : "J\'ai réussie"<br>';
echo 'Voulez-vous supprimer C:\*.*?<br>';
echo 'Ceci n\'affichera pas \n de nouvelle ligne<br>';
echo 'Les variables ne seront pas $traitees $ici<br>';
echo "Les variables seront $traitees $ici<br>";

$chaine = "*Bonjour les développeurs*";
echo trim($chaine, "*") . "<br>";

$chaine2 = "Bonjour";
for ($i = 0; $i < strlen($chaine2); $i++) {
    echo $chaine2[$i] . "<br>";
}