<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Użytkownicy</title>
</head>
<body>
    <h4>Użytkownicy z db</h4>
    <?php
        require_once "../scripts/connect.php";
        $sql = "SELECT * FROM `users` WHERE 1";
        $result = $conn->query($sql);
        //$user = $result->fetch_assoc();
        //print_r($user);
        //echo "Imie i nazwisko: " . $user["firstName"] . " " . $user["lastName"] . "<br>";

        while($user = $result->fetch_assoc()){
            echo <<< USER
            Imie i nazwisko: $user[firstName] $user[lastName]<br>
            Data urodzenia: $user[birthday]
            <hr>
            USER;
        }
    ?>
</body>
</html>