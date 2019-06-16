<?php

// Retourne la moyenne de $elements[i][1]
function countAverage(Array $elements)
{
	$sum = 0;
	for ($i=0; $i < count($elements); $i++) { 
    	$sum += $elements[$i][1];
	}
	return $sum/count($elements);
}


// Génère un nom aléatoire de longueur comprise entre $minlength et $maxlength
function createRandomName(int $minlength, int $maxlength) {
	$randomName = "";
	$uppercases = "ABCDEFGHIJKLMNOPQRSUTVWXYZ";
	$lowercases = "abcdefghijklmnpqrstuvwxyz";
	
	// choix de la première lettre en majuscule
	$randomName .= $uppercases[rand(0, strlen($uppercases)-1) ];
	$maxlength--;
	
	// Choix du restant des lettres
	for ($i= 0; $i < rand($minlength, $maxlength); $i++ ) {
		$randomName .= $lowercases[rand(0, strlen($lowercases)-1)];
	}
    return $randomName;
}


// affiche la moyenne
function showAverage(int $total, int $average)
{
	echo "La moyenne de mes ${total} moutons est de ${average} <br>";
}

// Un tableau de moutons
$moutons = [['Danny', 75], ['Richard',60]];

// J'ajoute un mouton
array_push($moutons, ['Gérard',120]);


// Calcul de la moyenne
$moutonsNumber = count($moutons);
$avg = countAverage($moutons);
showAverage($moutonsNumber, $avg);


// Ajout de 100 moutons aléatoires
for ($j=0; $j < 100; $j++) { 
	
	$randomName = createRandomName(3, 15);
	$randomValue = rand(10,200);
	array_push($moutons, [$randomName, $randomValue]);
}



// Calcul de nuveau la moyenne
$moutonsNumber = count($moutons);
$avg = countAverage($moutons);
showAverage($moutonsNumber, $avg);