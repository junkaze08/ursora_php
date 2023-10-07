<?php
//Junester Ursora II BSIT 4-A

// function to print GP
function printGP($a, $r, $n){
for ($i = 0; $i < $n; $i++){
    $curr_term = $a * pow($r, $i);
    echo $curr_term, " ";
    }
}

echo "Enter the number of terms in the geometric progression: ";
$n = (int) fgets(STDIN);

// validate the user input
if ($n <= 0) {
    echo "Please enter a positive integer.";
    exit;
}

// starting number
$a = 1;
// Common ratio
$r = 2;

// call the function to print the GP
printGP($a, $r, $n);
?>
