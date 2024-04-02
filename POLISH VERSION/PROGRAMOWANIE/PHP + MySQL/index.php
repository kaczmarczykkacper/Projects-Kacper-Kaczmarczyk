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

    $conn = new mysqli('localhost','kacper','','medalisci');

    if ($conn->connect_error) {
        die("Nie działa".$conn->connect_error);
    }
    ?>
<body>
    <div id="calosc">
        <div class="a">
            <h1 class="animacja">MEDALIŚCI</h1>
        </div>
        <div class="b">
            <h2>MENU</h2>
            <a href="dodajpsa.php"><p>Dodaj nowego psa</p></a>
            <a href="ileras.php"><p>Liczba psów, poszczególnych ras</p></a>
            <a href="sumamedali.php"><p>Sumaryczna liczba medali</p></a>
            <h4>Najedź </h4>
            <h3>Najlepsze Psy</h3>
        </div>
        <div class="c">
            <?php
                $sql = "SELECT rasa, wiek, plec, liczba_zdobytych_medali, imie, nazwisko, nr_telefonu FROM psy JOIN osoby WHERE psy.idWlasciciela = osoby.idOsoby order by idPsa DESC;";        
                $result = $conn->query($sql);

                echo "<table>";
                echo "<th>rasa</th>";
                echo "<th>wiek</th>";
                echo "<th>plec</th>";
                echo "<th>liczba_zdobytych_medali</th>";
                echo "<th>imie</th>";
                echo "<th>nazwisko</th>";
                echo "<th>nr_telefonu</th>";
                if ($result -> num_rows > 0) {
                    while($row = $result->fetch_assoc()){
                        echo "<tr>";
                        echo "<td>".$row['rasa']."</td><td>".$row['wiek']."</td><td>".$row['plec']."</td><td>".$row['liczba_zdobytych_medali']."</td><td>".$row['imie']."</td><td>".$row['nazwisko']."</td><td>".$row['nr_telefonu']."</td>";
                        echo "</tr>";
                    }
                    echo "</table>";
                } else {
                    echo "Nie ma";
                }
            ?>
        </div>
        <div class="d"></div>
    </div>
</body>
</html>