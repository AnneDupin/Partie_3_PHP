<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo 6 - PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
  <h1>Exercices PHP / DESCODEUSES</h1>  

  <h2>Ex06</h2>
  <p><b>Créez une fonction qui retourne un booléen.</b></p>

  <?php
  function check($int) {
   if ($int == 6) {
      return true;
   } else {
      return false;
   }
}
if (check(6)) echo "Returned true!";
?>

<!--C'est le type le plus simple. Un bool représente une valeur de vérité. Il peut valoir true ou false.-->


<h2>Exo 7</h2>
<p>Créez une fonction qui retourne une chaîne de caractère</p>
<?php
function ex2(string $str) : string {
    return $str;
}
?>


<?php
function returnBooleen() {
    return true;
}
    echo returnBooleen();
    ?>

<?php
$text ='Hello Descodeuses';
function returnText($string = 'Coucou') {
    return $string;
}
echo returnText($text);
?>

<h2>Exo 8</h2>
<p>Créez deux variables contenant chacune une string. Créez une fonction qui retourne le contenu de ces deux variable.</p>

<?php
// Exemple 1
$spacecake  = "cake1 cake2 cake3 cake4 cake5 cake6";
$cakes = explode(" ", $spacecake);
echo $cakes[0]; // cake1
print_r("\n");
echo $cakes[1]; // cake2
?>

<?php 

$bnjr = 'Bnjour, ';
$monde = 'tout le monde!';
function ActlaDeCod($strng1, $strng2) {
    $message = $strng1. ' '. $strng2;
    return $message;
}
?>

<h2>Exo 9</h2>
<p><b>Créez une fonction qui retourne deux nombres aléatoire allant de 1 à 15. Si le premier nombre est plus grand que le deuxième affichez "le premier nombre est plus grand que le deuxième" sinon si le deuxième nombre est plus grand affichez "le premier nombre est plus petit que le deuxième". affichez "les deux nombres sont égaux" si les deux nombres sont identiques.</b></p>

<?php
$randomNumber1 = rand(1, 15);
$randomNumber2 = rand(1, 15);
print_r($randomNumber1);
print_r("\n");
print_r($randomNumber2);

function ex9(int $randomNumber1, int $randomNumber2) : string {
    if ($randomNumber1 < $randomNumber2) {
        return "$randomNumber1 plus petit que $randomNumber2";
    }
    if ($randomNumber1 > $randomNumber2) {
        return "$randomNumber1 plus grand que $randomNumber2";
    }
    return "$randomNumber1 égal à $randomNumber2";
}

function ex9bis(int $randomNumber1, int $randomNumber2): string
{
    if ($randomNumber1 === $randomNumber2) return "$randomNumber1 égal à $randomNumber2";
    return ($randomNumber1 < $randomNumber2) ? "$randomNumber1 plus petit que $randomNumber2" : "$randomNumber1 plus grand que $randomNumber2";
   }

var_dump(ex9(12, 23));
var_dump(ex9bis(12, 23));
var_dump(ex9(23, 12));
var_dump(ex9bis(23, 12));
var_dump(ex9(12, 12));
var_dump(ex9bis(12, 12));

?>

<h2>Exo 10</h2>
<p><b>Créez une fonction qui retourne une chaîne de caractère et un nombre aléatoire.</b></p>
 <?php
$numbr = rand(1,15);
$msg1 = ' à un chiffre';
$mg2 = ' à deux chiffres !';
?> 
<p><?= ' Le nombre est '. $numbr ?></p>

<?php
function randChfr($int, $stng, $strng1) {
if ($int < 10) {
    return $int. $stng;
}
if ($int >= 10) {
    return $int. $strng1;
}
}
?>


<h2>Exercice 11</h2>
<p><b>Créez une fonction qui retourne l'addition de trois nombres.</b></p>

<?php 

function ex11(int $number1 = 6,int $number2 = 9, int $number3 = 17) : int {
    return $number1 + $number2 + $number3;
}

?>





</body>
</html>