<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
$conn = new mysqli('localhost','root','','medalisci');

if ($conn->connect_error) {
    die("Nie działa".$conn->connect_error);
}

$rasa = $_GET['rasa'];
$wiek = $_GET['wiek'];
$plec = $_GET['plec'];
$medale = $_GET['medale'];
$wlasciciel = $_GET['wlasciciel'];

$sql = "INSERT INTO `psy` (`idPsa`, `rasa`, `wiek`, `plec`, `liczba_zdobytych_medali`, `idWlasciciela`) VALUES (NULL, $rasa, $wiek, $plec, $medale, $wlasciciel);";        
$result = $conn->query($sql);

header("Location:medalisci.php");
    ?>
</body>
</html>