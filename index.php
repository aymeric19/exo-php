<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo php</title>
</head>

<body>
<h1>Les Variables</h1>


<h2> EXO 1</h2>
<p>Créer une variable : «nom» et l'initialiser avec la valeur de votre choix.
</p>
<?php
$nom = 'Chimera';
echo $nom;
?>

  <h2>Exo 2</h2>
  <p>Créer trois variables : «nom» , «prenom» et «age» et les initialiser avec les valeurs de votre choix.
Attention age est de type entier. </p>
<?php
$nom = 'SunBreaker';
$prenom = 'Chimera';
$age = '666';
echo $nom, $prenom, $age;
?>

<h2>Exo 3</h2>
<p>Créer une variable «km» . L'initialiser à 1. Acher son contenu. Changer sa valeur par 3.
Acher son contenu. Changer sa valeur par 125. Acher son contenu.</p>
<?php
$km = '1'
echo $km
$km = '3'
echo $km
$km = '125'
echo $km
?>

<h2>Exo 4</h2>
<p>Créer une variable de type string, une variable de type int, une variable de type oat,
une variable de type booléan et les initialiser avec une valeur de votre choix.
Les acher.</p>
<?php
$String = "memento mori";
$int = 666;
$float = 0.666;
$booleen = true;
echo $string , $int , $float , $booleen
?>

<h2>Exo 5</h2>
<p>Créer une variable de type int. L'initialiser avec rien. Acher sa valeur.
Donner une valeur à cette variable et l'acher.</p>
<?php
$int = NULL;
echo $int;
$int = 666;
echo $int;
?>

<h2>Exo 6</h2>
<p>Créer une variable «nom» et l'initialiser avec la valeur de votre choix.
Acher : "Bonjour" + nom + ", comment vas tu ?".</p>
<?php
$nom = chimera;
echo "bonjour $nom comment vas tu ?";
?>

<h2>Exo 7</h2>
<p>Créer trois variables «nom» , «prenom» et «age» et les initialiser avec les valeurs de votre choix.
Attention age est de type entier. Acher : "Bonjour" + nom + prenom + ",tu as" + age + "ans".</p>
<?php
$nom = chimera;
$prenom = SunBreaker;
$age = 666;
echo "bonjour $nom $prenom, tu as $age ans";
?>

<h2>Exo 8</h2>
<p>Créer 3 variables.
Dans la première mettre l'adition qui donne le résultat 7.
Dans la deuxième mettre la multiplication qui donne le résultat 100.
Dans la troisième mettre la division qui donne le résultat 5.
Acher le contenu des variables.</p>
<?php
$addition = 4+3;
echo $addition;
$multiplication = 10*10;
echo $multiplication;
$division = 25/5;
echo $division;
?>



<h1>Les boucles</h1>

<h2> EXO 1</h2>
<p>Créer une variable et l'initialiser à 0.
Tant que cette variable n'atteint pas 10 :
=> l'acher => incrémenter de 1</p>
<?php
$repetition = 0;
while ($repetition < 10);
{
echo "bouh";
$repetition++;
};
?>

<h2> EXO 2</h2>
<p>Créer deux variables. Initialiser la première à 0 et la deuxième avec un nombre compris en 1 et 100.
Tant que la première variable n'est pas supérieur à 20 :
=> multiplier la première variable avec la deuxième
=> acher le résultat
=> incrémenter la première variable</p>
<?php
$deuxieme = 50;
for ($premiere = 0;$premiere < 20; $premiere++)
{
$resultat = $premiere*$deuxieme;
echo $resultat;
};
?>

<h2> EXO 3</h2>
<p>Créer deux variables. Initialiser la première à 100 et la deuxième avec un nombre compris en 1 et 100.
Tant que la première variable n'est pas inférieur ou égale à 10 :
=> soustraire la première variable avec la deuxième
=> acher le résultat
=> décrémenter la première variable</p>
<?php
$deuxieme = 20;
for ($premiere = 100;$premiere>=10;($premiere-=$deuxieme))
{
$resultat = $premiere-$deuxieme;
echo $resultat;
};
?>

<h2> EXO 4</h2>
<p>Créer une variable et l'initialiser à 1. Tant que cette variable n'atteint pas 10 :
=> l'acher
=> l'incrementer de la moitié de sa valeur</p>
<?php
$variable=1;
while ($variable < 10)
{
  echo ' '.$variable.' ';
  $variable+=($variable/2);
}
?>

<h2> EXO 5</h2>
<p>En allant de 1 à 15 avec un pas de 1, acher le message On y arrive presque...</p>
<?php
for ($repetition=1; $repetition<16; $repetition++)
{
  echo '<p>On y arrive presque '. $repetiont .'fois </p>'
};
?>

<h2> EXO 6</h2>
<p>En allant de 20 à 0 avec un pas de 1, acher le message C'est presque bon...</p>
<?php
for ($repetition=20; $repetition>=0; $repetition--)
{
  echo '<p>Cest presque bon'. $repetiont .'fois </p>';
};
?>
<h2> EXO 7</h2>
<p>En allant de 1 à 100 avec un pas de 15, acher le message On tient le bon bout...</p>
<?php
for ($repetition=1; $repetition<=100; $repetition+=15)
{
  echo '<p>On tient le bon bout'. $repetiont .'fois </p>';
};
?>
<h2> EXO 8</h2>
<p>En allant de 200 à 0 avec un pas de 12, acher le message Enn ! ! !</p>
<?php
for ($repetition=200; $repetition>=0; $repetition-=12)
{
  echo '<p>Enn'. $repetiont .'fois </p>';
};
?>



<h1>Les fonctions</h1>

<h2> EXO 1</h2>
<p>Faire une fonction qui retourne true.</p>
<?php
function age_limit($age)
{
    if ($age >= 18)
    {
        $majeur = true;
        var_dump($majeur);
    }
}

$age = 24;
age_limit(true);
?>

<h2> EXO 2</h2>
<p>Faire une fonction qui prend en paramètre une chaine de caractères et qui retourne cette même chaine.</p>
<?php
function a($name){
    echo $name. ' ';
}

a('Chimera');
?>

<h2> EXO 3</h2>
<p>Faire une fonction qui prend en paramètre deux chaines de caractères et qui renvoit
la concaténation de ces deux chaines.</p>
<?php
function b ($first_name, $last_name){
    echo $first_name. ' ' .$last_name. ' ';
}
b('Chimera','SunBreaker');
?>

<h2> EXO 4</h2>
<p>Faire une fonction qui prend en paramètre deux nombres. La fonction doit retourner :
=> Le premier nombre est plus grand si le premier nombre est plus grand que le deuxième
=> Le premier nombre est plus petit si le premier nombre est plus petit que le deuxième
=> Les deux nombres sont identiques si les deux nombres sont égaux</p>
<?php
function c($first_number, $second_number){
    if ($first_number > $second_number)
    {
        echo 'Le premier nombre est plus grand ';
    }
    elseif ($first_number<$second_number)
    {
        echo 'Le premier nombre est plus petit ';
    }
    else
    {
        echo 'Les deux nombres sont identiques ';
    }
}

c(19,5);

?>

<h2> EXO 5</h2>
<p>Faire une fonction qui prend en paramètre un nombre et une chaine de caractères et qui renvoit
la concaténation de ces deux paramètres.</p>
<?php
function d ($name, $number){
    echo $name. ' ' .$number. ' ';
}
d('Chimera', 666);

?>

<h2> EXO 6</h2>
<p>Faire une fonction qui prend trois paramètres : nom, prenom et age.
Elle doit renvoyer une chaine de la forme : "Bonjour" + nom + prenom + ", tu as " + age + "ans".</p>
<?php
function e ($first_name, $last_name, $age){
    echo 'Bonjour ' .$first_name. ' ' .$last_name. ' tu as ' .$age. ' ans';
}
e('Chimera','SunBreaker', 666);
?>

<h2> EXO 7</h2>
<p>Faire une fonction qui prend deux paramètres : age et genre.
Le paramètre genre peut prendre comme valeur Homme ou Femme.
La fonction doit renvoyer en fonction des paramètres (gérer tous les cas) :
=> Vous êtes un homme et vous êtes majeur
=> Vous êtes un homme et vous êtes mineur
=> Vous êtes une femme et vous êtes majeur
=> Vous êtes une femme et vous êtes mineur</p>
<?php
function f($age, $genre)
{
    $majeur = 18;
    if ($age < $majeur && $genre == 'Homme')
    {
        echo 'Vous êtes un homme et vous êtes mineur';
    }
    elseif ($age >= $majeur && $genre == 'Homme')
    {
        echo 'Vous êtes un homme et vous êtes majeur';
    }
    elseif ($age < $majeur && $genre == 'Femme')
    {
        echo 'Vous êtes une femme et vous êtes mineur';
    }
    elseif ( $age >= $majeur && $genre == 'Femme')
    {
        echo 'Vous êtes une femme et vous êtes majeur';
    }
    else
    {
        echo 'Désolé, veuillez remplir les champs à nouveaux';
    }
}

f(19, 'Femme');
?>

<h2> EXO 8</h2>
<p>Faire une fonction qui prend en paramètre trois nombres et qui renvoit la somme de ces nombres.
Tous les paramètres doivent avoir une valeur par défaut.</p>
<?php
function g($first_number = 1, $second_number = 1, $third_number = 1){
    echo $first_number + $second_number + $third_number;
}

g(6,6,6);
?>


<h1>Les tableaux</h1>

<h2> EXO 1</h2>
<p>Créer un tableau $mois et l'initialiser avec le nom des douze mois de l'année.</p>
<?php
$mois = array('Janvier','Février','Mars','Avril','Mai','Juin','Juillet','Aout','Septembre','Octobre','Novembre','Décembre');
?>

<h2> EXO 2</h2>
<p>Avec le tableau de l'exercice 1, acher la valeur de la troisième ligne de ce tableau.</p>
<?php
echo $mois[2];
?>

<h2> EXO 3</h2>
<p>Avec le tableau de l'exercice , acher la valeur de l'index 5.</p>
<?php
echo $mois[5];
?>

<h2> EXO 4</h2>
<p>Avec le tableau de l'exercice 1, modier le mois de aout pour lui ajouter l'accent manquant.</p>
<?php
$mois[9] = 'Août';
?>

<h2> EXO 5</h2>
<p>Créer un tableau associatif avec comme index le numéro des départements
des Hauts de France et en valeur leur nom.</p>
<?php
    $Hauts_de_france[02] = 'Aisne';
    $Hauts_de_france[59] = 'Nord';
    $Hauts_de_france[60] = 'Oise';
    $Hauts_de_france[62] = 'Pas-de-calais';
    $Hauts_de_france[80] = 'Somme';
?>

<h2> EXO 6</h2>
<p>Avec le tableau de l'exercice 5, acher la valeur de l'index 59.</p>
<?php
echo $Hauts_de_france[59];
?>

<h2> EXO 7</h2>
<p>Avec le tableau de l'exercice 5, ajouter la ligne correspondant au département de la ville de Reims.</p>
<?php
$Hauts_de_france[51] = "Marne";
?>

<h2> EXO 8</h2>
<p>Avec le tableau de l'exercice 1 et une boucle, acher toutes les valeurs de ce tableau.</p>
<?php
for ($result = 0 ; $result < 12; $result++){
    echo $mois[$result]. '</br>';
}
?>

<h2> EXO 9</h2>
<p>Avec le tableau de l'exercice 5, acher toutes les valeurs de ce tableau.</p>
<?php
foreach ($Hauts_de_france as $departement){
    echo $departement. ' </br>';
}
?>

<h2> EXO 10</h2>
<p>Avec le tableau de l'exercice 5, acher toutes les valeurs de ce tableau ainsi que les clés associés.
Cela pourra être, par exemple, de la forme :
"Le département" + nom_departement + "a le numéro" + num_departement</p>
<?php
foreach ($Hauts_de_france as $cle => $departement){
    echo 'Le département ' . $departement. ' a le numéro ' .$cle. ' </br>' ;
}
?>
</body>
</html>
