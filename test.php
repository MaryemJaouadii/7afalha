<?php 
/*
$_SESSION['panier']['flowers']['blanc']=1;
$_SESSION['panier']['flowers']['rouge']=2;
$_SESSION['panier']['drinks']['lemon']=3;

var_dump($_SESSION['panier']);
var_dump(md5('admin'));
die();
*/


//addCslaches:
// $chaîne_result = addCSlashes('abcdef', 'ab');
// echo $chaîne_result;


//addSlaches:
// $chaîne_result = addSlashes('achbika\taaa');
// echo 'nouha\\t';

// function change(&$var) {
//     $var++; // la fonction incrémente en local l’argument
//     }
//     $nbr = 1; // la variable $nbr est initialisée à 1
//     change($nbr); // passage de la variable par référence
//     echo $nbr; // sa valeur a donc été modifiée

// function dire_texte($qui, &$texte)
// { $texte = "Bienvenue $qui";}


// $chaine = "Bonjour ";
// dire_texte("cher phpeur",$chaine);
// echo $chaine; // affiche "Bienvenue cher phpeur"
// function cumul ($prix)



// { static $cumul = 0;
// static $i = 1;
// echo "Total des achats $i = ";
// $cumul += $prix; $i++;
// return $cumul; }
// echo cumul (175)."<br />";
// echo cumul (65)."<br />";
// echo cumul (69)."<br />"; 





// $tab = array('f','b','c','d','e');
// $i=0;
// while ($tab[$i]){
//     if ($tab[$i][0] =="a" ) {echo $tab[$i], "<br /> "; }}



// $jour = array("Dimanche", "Lundi", "Mardi", "Mercredi", "Jeudi", 
// "Vendredi", "Samedi"); 
// $i = 0; 
// foreach($jour as $JJ) { echo "La cellule n° ". $i . " : " . $JJ . 
// "<br>"; $i++; } 


$col="#FF0000";
$size=24;
$font="Arial";
$text="Je suis le ookie";
$name="le_cookie";
$arr=compact("col","size","font","text");
$val=implode("&", $arr);
Setcookie($name, $val, time()+600);
echo " <b> voici le contenu de la chaîne cookie : </b><br>";
//echo  $_COOKIE[$name];"<br> <br>";
$exp=explode("&", $name);
echo "<b> ces variables ont été établies à partir de la chaîne 
cookie : </b> <br> <br>";
foreach ($_COOKIE as $k=>$elem) {
echo "$k=>$elem.<br>";
}


?>