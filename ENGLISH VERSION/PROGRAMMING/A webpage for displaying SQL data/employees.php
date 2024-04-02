<!DOCTYPE html>
<html>
<head>
<title>Kacper Kaczmarczyk 2Ti</title>
 <link rel="stylesheet" href="/mystyles.css">
</head>
 
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
		       
        <li class="item_link"><a class="" href="/biblioteka/ksiazki.php">✧ Książki ✧ </a></li>
	
			 </div> 
	       </h6>
       </ul>
       
    </div>
      <div class="item colorGreen">
<?php

require_once('../connect.php');
echo("<h1>Pracownicy:</h1>");
$sql = 'SELECT * FROM pracownicy WHERE dzial = 2';
echo("<h2>Zadanie 1 - Pracownicy tylko z działu 2.</h2>");
echo("<li>".$sql);

$conn = new mysqli("remotemysql.com","17wQgisS2h","QCoNVtdlto","17wQgisS2h");
 $result = $conn->query($sql);
        echo("<table>");
        echo("<th>Imie</th>");
        echo("<th>Dzial</th>");
            while($row=$result->fetch_assoc()){ 
                echo("<tr>");
                    echo("<td>".$row["imie"]."</td><td>".$row["dzial"]."</td>"); 

                echo("</tr>");
            }

        echo("</table>");
	 
echo("<hr />");

	 $sql = 'SELECT * FROM pracownicy WHERE (dzial = 2 or dzial = 3)';
echo("<h2>Zadanie 2 - Pracownicy tylko z działu 2 i z działu 3.</h2>");
echo("<li>".$sql);

$conn = new mysqli("remotemysql.com","17wQgisS2h","QCoNVtdlto","17wQgisS2h");
 $result = $conn->query($sql);
        echo("<table>");
        echo("<th>Imie</th>");
        echo("<th>Dzial</th>");
            while($row=$result->fetch_assoc()){ 
                echo("<tr>");
                    echo("<td>".$row["imie"]."</td><td>".$row["dzial"]."</td>"); 

                echo("</tr>");
            }

        echo("</table>");
	 
echo("<hr />");

	 $sql = 'SELECT * FROM pracownicy WHERE zarobki<30';
echo("<h2>Zadanie 3 - Pracownicy tylko z zarobkami mniejszymi niż 30.</h2>");
echo("<li>".$sql);

$conn = new mysqli("remotemysql.com","17wQgisS2h","QCoNVtdlto","17wQgisS2h");
 $result = $conn->query($sql);
        echo("<table>");
        echo("<th>Imie</th>");
        echo("<th>Zarobki</th>");
            while($row=$result->fetch_assoc()){ 
                echo("<tr>");
                    echo("<td>".$row["imie"]."</td><td>".$row["zarobki"]."</td>"); 

                echo("</tr>");
            }

        echo("</table>");
	 
?>
 </div>
  </body>
