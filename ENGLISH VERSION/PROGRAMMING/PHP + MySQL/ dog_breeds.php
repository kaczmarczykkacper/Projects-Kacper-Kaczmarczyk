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
            <h1 class="animacja">LICZBA PSÓW</h1>
        </div>
        <div class="b">
            <h2>MENU</h2>
            <a href="medalisci.php"><p>Strona Główna</p></a>
            <a href="dodajpsa.php"><p>Dodaj nowego psa</p></a>
            <a href="sumamedali.php">Sumaryczna liczba medali</a>
        </div>
        <div class="c">
            <?php
                $sql = "SELECT rasa, COUNT(idPsa) as ile_psow FROM psy GROUP by rasa;";        
                $result = $conn->query($sql);

                echo "<table>";
                echo "<th>rasa</th>";
                echo "<th>ile_psow</th>";
                if ($result -> num_rows > 0) {
                    while($row = $result->fetch_assoc()){
                        echo "<tr>";
                        echo "<td>".$row['rasa']."</td><td>".$row['ile_psow']."</td>";
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
