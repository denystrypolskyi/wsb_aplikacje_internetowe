<?php
    $firstName = "Denys";
    $lastName = "Trypolskyi";
    echo "Imie i Nazwisko: $firstName $lastName<br>";
    echo 'Imie i Nazwisko: $firstName $lastName<br>';

    //heredoc

    echo <<< DATA
        <hr>
        Imię: $firstName<br>
        Nazwisko: $lastName<br>
    DATA;


    $data = <<< DATA
        <hr>
        Imię: $firstName<br>
        Nazwisko: $lastName<br>
    DATA;
    echo $data;

    $bin = 0b1010;
    echo $bin; // 10

    $oct = 0101;
    echo $oct;
    
    $hex = 0x1A; 
    echo $hex;

    echo PHP_VERSION; //7.4.2

    $x=1;
    $y=1.0;
    
    echo gettype($x); // integer
    echo gettype($y); // double

    if ($x==$y) {
        echo "Równe";
    }else{
        echo "Różne";
    }
    if ($x===$y) {
        echo "Identyczne";
    }else{
        echo "Różne";
    }
?>
