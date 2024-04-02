<html>
<head>
       <title>Kacper Kaczmarczyk 2Ti</title>
     <meta charset="UTF-8">
    <link rel="stylesheet" href="/mystyles.css">
     <body>
    <div class="container">
      <div class="item colorRed">
        <h1> ☆ Kacper Kaczmarczyk 2Ti ☆</h1>

        <h1 class="tltle"></h1>
      </div>
      <div class="item colorBlue">
     <h1>  MENU:</h1>
       <ul>
        <h6>
	       <div>
        <li class="item_link"><a class="" href="https://github.com/SK-2019/php-sql-wprowadzenie-kacperkaczmarczyk838">☆ GITHUB ☆</a></li>
         
        <li class="item_link"><a class="" href="/index.php">★ STRONA GŁÓWNA ★</a></li>
		      
        <li class="item_link"><a class="" href="/danedobazy/danedobazy.php"> ✦ Dane Do Bazy ✦</a></li>
	      
        <li class="item_link"><a class="" href="/danedobazy/formularz.html"> ✧ Formularz ✧ </a></li>
		   
        <li class="item_link"><a class="" href="/zadania/pracownicy.php"> ✦ Pracownicy ✦</a></li>
		
        <li class="item_link"><a class="" href="/zadania/pracownicy_organizacja.php">✧ Pracownicy i Org. ✧</a></li>
			
        <li class="item_link"><a class="" href="/zadania/funkcAgregujace.php">✦ Funkcje Agregujace ✦</a></li>
			
        <li class="item_link"><a class="" href="/zadania/sortowanie.php">✧ Sorotwanie ✧</a></li>
			
        <li class="item_link"><a class="" href="/zadania/groupby.php"> ✦ Group By ✦ </a></li>
		
        <li class="item_link"><a class="" href="/zadania/having.php">✧ Having ✧</a></li>
		
        <li class="item_link"><a class="" href="/zadania/limit.php">✦ Limit ✦</a></li>
		
        <li class="item_link"><a class="" href="/zadania/dataiczas.php">✧ Data i Czas ✧</a></li>
		
        <li class="item_link"><a class="" href="/zadania/function.php">✦ Funkcja ✦</a></li>
	
			 </div> 
	       </h6>
       </ul>
   
       
    </div>
      <div class="item colorGreen">
         
    <h1>Dodawanie pracownika:</h1>

<body>
<form class="formularz" action="insert.php" method="POST">
    <input type="text" name="imie" placeholder="imie"></br>
    <input type="text" name="dzial" placeholder="dzial"></br>
    <input type="text" name="zarobki" placeholder="zarobki"></br>
    <input type="date" name="data_ur" ></br>
    <input type="submit" value="Dodaj">
</form>
       
      <hr/>
       
        <h1>Usuwanie pracownika:</h1>
       
<form action="delete.php" method="POST">
       <input type="text" name="id" placeholder="ID"></br>
   <input type="submit" value="Usuń">
</form>
</body>
</head>
</html>

<?php

echo("<hr />");
    echo("<h1>Tabela Wszystkich Pracowników (z możliwością usuwania):</h1>");
require_once('../connect.php');
$result = $conn->query('SELECT * FROM `pracownicy`, `organizacja` WHERE dzial = id_org');       
        echo("<table>");      
        echo("<th>ID</th>");
        echo("<th>Imie</th>");
        echo("<th>Dział</th>");
        echo("<th>Zarobki</th>");
        echo("<th>Data_Urodzenia</th>");
        echo("<th>Nazwa_Działu</th>");
        echo("<th>Usuwanie</th>");
            while($row=$result->fetch_assoc()){ 
                echo("<tr>");
                    echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["zarobki"]."</td><td>".$row["data_urodzenia"]."</td><td>".$row["nazwa_dzial"]."</td>"); 
                    echo("<td><form action='delete.php' method=POST>");
                     echo("<input type name='id' value='".$row['id_pracownicy']."'hidden>");
                     echo("<input type='submit' value='Usuń'>");
                    echo("</form></td>");
                echo("</tr>");
            }
        echo("</table>");
           
?>
 </div>
  </body>
