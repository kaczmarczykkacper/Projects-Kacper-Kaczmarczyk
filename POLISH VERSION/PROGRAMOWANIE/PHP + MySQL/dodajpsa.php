<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="stylemedalisci.css">
</head>
<body>
    <?php

    $conn = new mysqli('localhost','root','','medalisci');

    if ($conn->connect_error) {
        die("Nie działa".$conn->connect_error);
    }
    ?>
<body>
    <div id="calosc">
        <div class="a">
            <h1 class="animacja">DODAJ PSA</h1>
        </div>
        
        <div class="b">
            <h2>MENU</h2>
            <a href="medalisci.php"><p>Strona Główna</p></a>
            <a href="ileras.php">Liczba psów, poszczególnych ras</a>
            <a href="sumamedali.php">Sumaryczna liczba medali</a>
        </div>


        <div class="c">
        <form method="get" action="dodajpsa2.php">
        <input type="text" name="rasa" placeholder="rasa">
        <input type="number" name="wiek" placeholder="wiek">
        <input type="text" name="plec" placeholder="płeć">
        <input type="text" name="medale" placeholder="ile medali">
        <select name="wlasciciel">
            <?php
            $sql = "SELECT * FROM `osoby`";        
            $result = $conn->query($sql);

            while($row = $result->fetch_assoc()){
                         echo "<option value=>".$row['imie']." ".$row['nazwisko']."</option>";
                    }

            ?>
        </select>
        <input type="submit" value="Dodaj">
        
        </div>
        <div class="d"></div>
    </div>
</body>
</html>
</body>
</html>