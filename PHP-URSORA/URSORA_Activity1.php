<?php
    $name = "Junester Ursora II";
    echo $name;

    function vowelCount($name){
        countVowel('[aeiou]/i',$name,$vowelCounter);
        return $vowelCounter;
    }

    echo "There are " . $vowelCounter . "number of vowels.";
?>