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
echo("<h1>Sortowanie:</h1>");
   $sql = 'SELECT  * FROM pracownicy,organizacja WHERE dzial=id_org order by imie desc';
echo("<h2>Zadanie 1 - Pracownicy posortowani malejąco.</h2>");
echo("<li>".$sql);

$conn = new mysqli("remotemysql.com","17wQgisS2h","QCoNVtdlto","17wQgisS2h");
 $result = $conn->query($sql);
        echo("<table>");
        echo("<th>ID</th>");
        echo("<th>Imie</th>");
        echo("<th>Dział</th>");
        echo("<th>Zarobki</th>");
        echo("<th>Data_Urodzenia</th>");
        echo("<th>Nazwa_Działu</th>");
            while($row=$result->fetch_assoc()){ 
                echo("<tr>");
                    echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["zarobki"]."</td><td>".$row["data_urodzenia"]."</td><td>".$row["nazwa_dzial"]."</td>"); 

                echo("</tr>");
            }
        echo("</table>");
  

echo("<hr />");
   $sql = 'SELECT  * FROM pracownicy,organizacja WHERE dzial=id_org and dzial=3 order by imie asc';
echo("<h2>Zadanie 2 - Pracownicy z działu 3 posortowani rosnąco po imieniu.</h2>");
echo("<li>".$sql);

$conn = new mysqli("remotemysql.com","17wQgisS2h","QCoNVtdlto","17wQgisS2h");
 $result = $conn->query($sql);
        echo("<table>");
        echo("<th>ID</th>");
        echo("<th>Imie</th>");
        echo("<th>Dział</th>");
        echo("<th>Zarobki</th>");
        echo("<th>Data_Urodzenia</th>");
        echo("<th>Nazwa_Działu</th>");
            while($row=$result->fetch_assoc()){ 
                echo("<tr>");
                    echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["zarobki"]."</td><td>".$row["data_urodzenia"]."</td><td>".$row["nazwa_dzial"]."</td>"); 

                echo("</tr>");
            }
        echo("</table>");
  

echo("<hr />");  
     $sql = 'SELECT  * FROM pracownicy,organizacja WHERE dzial=id_org and imie like "%a" order by imie asc';
echo("<h2>Zadanie 3 - Kobiety posortowane rosnąco po imieniu.</h2>");
echo("<li>".$sql);

$conn = new mysqli("remotemysql.com","17wQgisS2h","QCoNVtdlto","17wQgisS2h");
 $result = $conn->query($sql);
        echo("<table>");
        echo("<th>ID</th>");
        echo("<th>Imie</th>");
        echo("<th>Dział</th>");
        echo("<th>Zarobki</th>");
        echo("<th>Data_Urodzenia</th>");
        echo("<th>Nazwa_Działu</th>");
            while($row=$result->fetch_assoc()){ 
                echo("<tr>");
                    echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["zarobki"]."</td><td>".$row["data_urodzenia"]."</td><td>".$row["nazwa_dzial"]."</td>"); 

                echo("</tr>");
            }
        echo("</table>");

 
echo("<hr />");  
       $sql = 'SELECT * FROM pracownicy,organizacja WHERE id_org=dzial and imie LIKE "%a" and (dzial = 1 OR dzial=3) order by zarobki asc';
echo("<h2>Zadanie 4 - Kobiety z działu 1 i 3 posortowane rosnąco po zarobkach.</h2>");
echo("<li>".$sql);

$conn = new mysqli("remotemysql.com","17wQgisS2h","QCoNVtdlto","17wQgisS2h");
 $result = $conn->query($sql);
        echo("<table>");
        echo("<th>ID</th>");
        echo("<th>Imie</th>");
        echo("<th>Dział</th>");
        echo("<th>Zarobki</th>");
        echo("<th>Data_Urodzenia</th>");
        echo("<th>Nazwa_Działu</th>");
            while($row=$result->fetch_assoc()){ 
                echo("<tr>");
                    echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["zarobki"]."</td><td>".$row["data_urodzenia"]."</td><td>".$row["nazwa_dzial"]."</td>"); 

                echo("</tr>");
            }
        echo("</table>");
  

echo("<hr />");  
    $sql = 'SELECT * FROM pracownicy,organizacja WHERE id_org=dzial and imie NOT LIKE "%a" order by  nazwa_dzial desc, zarobki asc';
echo("<h2>Zadanie 5 - Mężczyźni posortowani rosnąco: po nazwie działu a następnie po wysokości zarobków.</h2>");
echo("<li>".$sql);

$conn = new mysqli("remotemysql.com","17wQgisS2h","QCoNVtdlto","17wQgisS2h");
  $result = $conn->query($sql);
        echo("<table>");
        echo("<th>ID</th>");
        echo("<th>Imie</th>");
        echo("<th>Dział</th>");
        echo("<th>Zarobki</th>");
        echo("<th>Data_Urodzenia</th>");
        echo("<th>Nazwa_Działu</th>");
            while($row=$result->fetch_assoc()){ 
                echo("<tr>");
                    echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["zarobki"]."</td><td>".$row["data_urodzenia"]."</td><td>".$row["nazwa_dzial"]."</td>"); 

                echo("</tr>");
            }
        echo("</table>");


   ?>
</div>
  </body>
