<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="get">
        <input type="text" name="1" id="opis1">
        <input type="text" name="2" id="opis2">
        <input type="text" name="3" id="opis3">
        <input type="text" name="4" id="opis4">
        <input type="text" name="5" id="opis5">
        <input type="text" name="6" id="opis6">
        <input type="text" name="7" id="opis7">
        <input type="text" name="8" id="opis8">
        <input type="text" name="9" id="opis9">
        <input type="text" name="10" id="opis10">
        <input type="submit" value="wyslij">
    </form>
    <?php

        for($i=1;$i<11;$i++){
        $tab[$i] = $_GET[$i];

        }
        
        sort($tab);
        foreach($tab as $k => $e)
        echo $k." => ".$e."<br>";
    ?>
</body>
</html>
