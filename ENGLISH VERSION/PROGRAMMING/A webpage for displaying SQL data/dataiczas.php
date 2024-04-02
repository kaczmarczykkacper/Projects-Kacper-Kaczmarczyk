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

echo("<h1>Data i czas:</h1>");
  
require("../connect.php");
   $sql = 'SELECT *, YEAR(curdate())-YEAR(data_urodzenia) as wiek from pracownicy, organizacja where dzial=id_org';
echo("<h2>Zadanie 1 - Wiek poszczególnych pracowników (w latach).</h2>");
echo("<li>".$sql);

$conn = new mysqli("remotemysql.com","17wQgisS2h","QCoNVtdlto","17wQgisS2h");
 $result = $conn->query($sql);
        echo("<table border>");
        echo("<th>ID</th>");
        echo("<th>Imie</th>");
        echo("<th>Dział</th>");
        echo("<th>Nazwa_Działu</th>");
        echo("<th>Zarobki</th>");
        echo("<th>Data_urodzenia</th>");
        echo("<th>Wiek</th>");
            while($row=$result->fetch_assoc()){ 
                 echo("<tr>");
                   echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["nazwa_dzial"]."</td><td>".$row["zarobki"]."</td><td>".$row["data_urodzenia"]."</td><td>".$row["wiek"]."</td>");                   
                 echo("</tr>");
            }
   
           echo("</table>");
  
 
  echo("<hr />");
   $sql = 'SELECT *, YEAR(curdate())-YEAR(data_urodzenia) as wiek FROM pracownicy, organizacja WHERE dzial=id_org AND nazwa_dzial="serwis"';
echo("<h2>Zadanie 2 - Wiek poszczególnych pracowników (w latach) z działu serwis.</h2>");
echo("<li>".$sql);

$conn = new mysqli("remotemysql.com","17wQgisS2h","QCoNVtdlto","17wQgisS2h");
 $result = $conn->query($sql);
        echo("<table border>");
        echo("<th>ID</th>");
        echo("<th>Imie</th>");
        echo("<th>Dział</th>");
        echo("<th>Nazwa_Działu</th>");
        echo("<th>Zarobki</th>");
        echo("<th>Data_urodzenia</th>");
        echo("<th>Wiek</th>");
            while($row=$result->fetch_assoc()){ 
                 echo("<tr>");
                   echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["nazwa_dzial"]."</td><td>".$row["zarobki"]."</td><td>".$row["data_urodzenia"]."</td><td>".$row["wiek"]."</td>");                  
                 echo("</tr>");
            }
   
           echo("</table>");
  

  echo("<hr />");
    $sql = 'SELECT sum(YEAR(CURDATE()) - YEAR(data_urodzenia)) as wiek FROM pracownicy, organizacja WHERE dzial=id_org';
echo("<h2>Zadanie 3 - Suma lat wszystkich.</h2>");
echo("<li>".$sql);

$conn = new mysqli("remotemysql.com","17wQgisS2h","QCoNVtdlto","17wQgisS2h");
 $result = $conn->query($sql);
        echo("<table border>");
        echo("<th>Wiek_wszystkich_pracownikow</th>");
            while($row=$result->fetch_assoc()){ 
                 echo("<tr>");
                   echo("<td>".$row["wiek"]."</td>");                    
                 echo("</tr>");
            }
   
           echo("</table>");
  
  
   
  echo("<hr />");
    echo("<h2>Zadanie 4 - Obecna, dokładna godzina (z dokładnością do milisekund) </h1>");
  $sql2 = ("SELECT curtime(4)");
echo("<li>".$sql2);
$result=$conn->query($sql2);
echo("<table border>");
echo("<th>curtime(4)</th>");
       while($row=$result->fetch_assoc()) {
            echo("<tr>");
             echo("<td>".$row["curtime(4)"]."</td>");
            echo("</tr>");
                            }
                        echo("</table>");
  
    
  echo("<hr />");
   $sql = 'SELECT sum(YEAR(CURDATE()) - YEAR(data_urodzenia)) as wiek FROM pracownicy where imie like "%a"';
echo("<h2>Zadanie 5 - Suma lat kobiet.</h2>");
echo("<li>".$sql);

$conn = new mysqli("remotemysql.com","17wQgisS2h","QCoNVtdlto","17wQgisS2h");
 $result = $conn->query($sql);
        echo("<table border>");
        echo("<th>Wiek_kobiet</th>");
            while($row=$result->fetch_assoc()){ 
                 echo("<tr>");
                   echo("<td>".$row["wiek"]."</td>");                    
                 echo("</tr>");
            }
   
           echo("</table>");
  
  
  echo("<hr />");
    $sql = 'SELECT sum(YEAR(CURDATE()) - YEAR(data_urodzenia)) as wiek FROM pracownicy where imie not like "%a"';
echo("<h2>Zadanie 6 - Suma lat mężczyzn.</h2>");
echo("<li>".$sql);

$conn = new mysqli("remotemysql.com","17wQgisS2h","QCoNVtdlto","17wQgisS2h");
 $result = $conn->query($sql);
        echo("<table border>");
        echo("<th>Wiek_mężczyzn</th>");
            while($row=$result->fetch_assoc()){ 
                 echo("<tr>");
                   echo("<td>".$row["wiek"]."</td>");                    
                 echo("</tr>");
            }
   
           echo("</table>");

   
  echo("<hr />");
    $sql = 'SELECT dzial, avg(YEAR(CURDATE()) - YEAR(data_urodzenia)) as srednia, nazwa_dzial from pracownicy, organizacja where dzial=id_org group by dzial';
echo("<h2>Zadanie 7 - Średnia lat pracowników w poszczególnych działach.</h2>");
echo("<li>".$sql);

$conn = new mysqli("remotemysql.com","17wQgisS2h","QCoNVtdlto","17wQgisS2h");
 $result = $conn->query($sql);
        echo("<table border>");
        echo("<th>dzial</th>");
        echo("<th>Średnia_wieku</th>");
        echo("<th>Nazwa_Działu</th>");
            while($row=$result->fetch_assoc()){ 
                 echo("<tr>");
                   echo("<td>".$row["dzial"]."</td><td>".$row["srednia"]."</td><td>".$row["nazwa_dzial"]."</td>");                    
                 echo("</tr>");
            }
   
           echo("</table>");
  
 
  echo("<hr />");
    $sql = 'SELECT dzial, sum(YEAR(CURDATE()) - YEAR(data_urodzenia)) as suma, nazwa_dzial from pracownicy, organizacja where dzial=id_org group by dzial';
echo("<h2>Zadanie 8 - Suma lat pracowników w poszczególnych działach.</h2>");
echo("<li>".$sql);

$conn = new mysqli("remotemysql.com","17wQgisS2h","QCoNVtdlto","17wQgisS2h");
 $result = $conn->query($sql);
        echo("<table border>");
        echo("<th>dzial</th>");
        echo("<th>Suma_wieku</th>");
        echo("<th>Nazwa_Działu</th>");
            while($row=$result->fetch_assoc()){ 
                 echo("<tr>");
                   echo("<td>".$row["dzial"]."</td><td>".$row["suma"]."</td><td>".$row["nazwa_dzial"]."</td>");                    
                 echo("</tr>");
            }
   
           echo("</table>");
  
  
  echo("<hr />");
    $sql = 'SELECT dzial, max(YEAR(CURDATE()) - YEAR(data_urodzenia)) as max, nazwa_dzial from pracownicy, organizacja where dzial=id_org group by dzial';
echo("<h2>Zadanie 9 - Najstarsi pracownicy w każdym dziale.</h2>");
echo("<li>".$sql);

$conn = new mysqli("remotemysql.com","17wQgisS2h","QCoNVtdlto","17wQgisS2h");
 $result = $conn->query($sql);
        echo("<table border>");
        echo("<th>dzial</th>");
        echo("<th>Wiek - najstarsi</th>");
        echo("<th>Nazwa_Działu</th>");
            while($row=$result->fetch_assoc()){ 
                 echo("<tr>");
                   echo("<td>".$row["dzial"]."</td><td>".$row["max"]."</td><td>".$row["nazwa_dzial"]."</td>");                    
                 echo("</tr>");
            }
   
           echo("</table>");
  
  echo("<hr />");
    $sql = 'SELECT min(YEAR(CURDATE()) - YEAR(data_urodzenia)) as min, nazwa_dzial from pracownicy, organizacja where dzial=id_org and (nazwa_dzial="handel" OR nazwa_dzial="serwis") group by dzial';
echo("<h2>Zadanie 10 - Najmłodsi pracownicy z działu: handel i serwis (nazwa_dział, wiek).</h2>");
echo("<li>".$sql);

$conn = new mysqli("remotemysql.com","17wQgisS2h","QCoNVtdlto","17wQgisS2h");
 $result = $conn->query($sql);
        echo("<table border>");
        echo("<th>Wiek_najmłodsi</th>");
        echo("<th>Nazwa_Działu</th>");
            while($row=$result->fetch_assoc()){ 
                 echo("<tr>");
                   echo("<td>".$row["min"]."</td><td>".$row["nazwa_dzial"]."</td>");                    
                 echo("</tr>");
            }
   
           echo("</table>");
 
 

//   echo("<hr />");
//   $sql = 'SELECT *, min(YEAR(curdate())-YEAR(data_urodzenia)) as wiek FROM pracownicy, organizacja where dzial = id_org and dzial in(1, 2) group by dzial';
// echo("<h2>Zadanie 11 - Najmłodsi pracownicy z działu: handel i serwis (imię, nazwa_dział, wiek).</h2>");
// echo("<li>".$sql);

// $conn = new mysqli("remotemysql.com","17wQgisS2h","QCoNVtdlto","17wQgisS2h");
//  $result = $conn->query($sql);
//         echo("<table border>");
//   echo("<th>Nazwa_Działu</th>");
//         echo("<th>Wiek</th>");
//         echo("<th>Imię</th>");
//             while($row=$result->fetch_assoc()){ 
//                  echo("<tr>");
//                    echo("<td>".$wiersz['nazwa_dzial']."</td><td>".$wiersz['imie']."</td><td>".$wiersz['wiek']."</td>");                    
//                  echo("</tr>");
//             }
   
//            echo("</table>");
  
 
  echo("<hr />");
   $sql = 'SELECT imie, DATEDIFF(CURDATE(),data_urodzenia) as dni_zycia from pracownicy';
echo("<h2>Zadanie 12 - Długość życia pracowników w dniach.</h2>");
echo("<li>".$sql);

$conn = new mysqli("remotemysql.com","17wQgisS2h","QCoNVtdlto","17wQgisS2h");
 $result = $conn->query($sql);
        echo("<table border>");
        echo("<th>Imie</th>");
        echo("<th>Dni_życia</th>");
            while($row=$result->fetch_assoc()){ 
                 echo("<tr>");
                   echo("<td>".$row["imie"]."</td><td>".$row["dni_zycia"]."</td>");                    
                 echo("</tr>");
            }
   
           echo("</table>");
  
  echo("<hr />");
      $sql = 'SELECT * from pracownicy where imie not like "%a" order by data_urodzenia asc limit 1';
echo("<h2>Zadanie 13 - Najstarszy mężczyzna.</h2>");
echo("<li>".$sql);

$conn = new mysqli("remotemysql.com","17wQgisS2h","QCoNVtdlto","17wQgisS2h");
 $result = $conn->query($sql);
        echo("<table border>");
         echo("<th>ID</th>");
        echo("<th>Imię</th>");
        echo("<th>Dział</th>");
        echo("<th>Zarobki</th>");
            while($row=$result->fetch_assoc()){ 
                 echo("<tr>");
                   echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["zarobki"]."</td>");                   
                 echo("</tr>");
            }
   
           echo("</table>");
  
 
  echo("<hr />");
   echo("<h1>Formatowanie dat:</h1>");
   $sql = 'SELECT *, DATE_FORMAT(data_urodzenia,"%W") from pracownicy';
echo("<h2>Zadanie 1 - Wyświetl nazwy dni w dacie urodzenia .</h2>");
echo("<li>".$sql);

$conn = new mysqli("remotemysql.com","17wQgisS2h","QCoNVtdlto","17wQgisS2h");
 $result = $conn->query($sql);
       echo("<table border>");
       echo("<th>ID</th>");
       echo("<th>Imie</th>");
       echo("<th>Dzial</th>");
       echo("<th>Zarobki</th>");
       echo("<th>Data urodzenia</th>");
    while($row=$result->fetch_assoc()){
        echo("<tr>");
        echo("<td>".$row['id_pracownicy']."</td><td>".$row['imie']."</td><td>".$row['dzial']."</td><td>".$row['zarobki']."</td><td>".$row['DATE_FORMAT(data_urodzenia,"%W")']."</td>");
        echo("</tr>");
    }
echo("</table>");
  
  echo("<hr />");
   $sql1 = 'SET lc_time_names = "pl_PL"';
   $sql2 = 'SELECT DATE_FORMAT(CURDATE(), "%W")';
echo("<h2>Zadanie 2 - Wypisz dzisiejszą nazwę dnia po polsku (np. poniedziałek).</h2>");
echo("<li>".$sql1);
echo("<li>".$sql2);

$conn = new mysqli("remotemysql.com","17wQgisS2h","QCoNVtdlto","17wQgisS2h");
$result = $conn->query($sql1);
$result = $conn->query($sql2);
       echo("<table border>");
       echo("<th>Dzień</th>");
    while($row=$result->fetch_assoc()){
        echo("<tr>");
        echo("<td>".$row['DATE_FORMAT(CURDATE(), "%W")']."</td>");
        echo("</tr>");
    }
echo("</table>");
  
    
  echo("<hr />");
   $sql = 'SELECT *, DATE_FORMAT(data_urodzenia,"%M") from pracownicy';
echo("<h2>Zadanie 3 - Wyświetl nazwy miesięcy w dacie urodzenia.</h2>");
echo("<li>".$sql);

$conn = new mysqli("remotemysql.com","17wQgisS2h","QCoNVtdlto","17wQgisS2h");
 $result = $conn->query($sql);
       echo("<table border>");
       echo("<th>ID</th>");
       echo("<th>Imie</th>");
       echo("<th>Dzial</th>");
       echo("<th>Zarobki</th>");
       echo("<th>Data urodzenia</th>");
    while($row=$result->fetch_assoc()){
        echo("<tr>");
        echo("<td>".$row['id_pracownicy']."</td><td>".$row['imie']."</td><td>".$row['dzial']."</td><td>".$row['zarobki']."</td><td>".$row['DATE_FORMAT(data_urodzenia,"%M")']."</td>");
        echo("</tr>");
    }
echo("</table>");
  
 
  echo("<hr />");
   $sql2 = 'SELECT curtime(4) as godzina';
echo("<h2>Zadanie 4 - Obecna, dokładna godzina (z dokładnością do milisekund).</h2>");
echo("<li>".$sql2);

$conn = new mysqli("remotemysql.com","17wQgisS2h","QCoNVtdlto","17wQgisS2h");
$result = $conn->query($sql2);
       echo("<table border>");
       echo("<th>Godzina</th>");
    while($row=$result->fetch_assoc()){
        echo("<tr>");
        echo("<td>".$row['godzina']."</td>");
        echo("</tr>");
    }
echo("</table>");
  
    
  echo("<hr />");
   $sql = 'SELECT *, DATE_FORMAT(data_urodzenia,"%Y-%M-%W") from pracownicy';
echo("<h2>Zadanie 5 - Wyświetl datę urodzenia w formie: ROK-MIESIĄC-DZIEŃ.</h2>");
echo("<li>".$sql);

$conn = new mysqli("remotemysql.com","17wQgisS2h","QCoNVtdlto","17wQgisS2h");
 $result = $conn->query($sql);
       echo("<table border>");
       echo("<th>ID</th>");
       echo("<th>Imie</th>");
       echo("<th>Dzial</th>");
       echo("<th>Zarobki</th>");
       echo("<th>Data urodzenia</th>");
    while($row=$result->fetch_assoc()){
        echo("<tr>");
        echo("<td>".$row['id_pracownicy']."</td><td>".$row['imie']."</td><td>".$row['dzial']."</td><td>".$row['zarobki']."</td><td>".$row['DATE_FORMAT(data_urodzenia,"%Y-%M-%W")']."</td>");
        echo("</tr>");
    }
echo("</table>");
  
   
  echo("<hr />");
   $sql = 'SELECT imie, DATEDIFF(CURDATE(),data_urodzenia) as dni, DATEDIFF(CURDATE(),data_urodzenia)*24 as godziny, DATEDIFF(CURDATE(),data_urodzenia)*24*60 as minuty FROM pracownicy';
echo("<h2>Zadanie 6 - Ile dni, godzin, minut żyje poszczególny pracownik?</h2>");
echo("<li>".$sql);

$conn = new mysqli("remotemysql.com","17wQgisS2h","QCoNVtdlto","17wQgisS2h");
 $result = $conn->query($sql);
       echo("<table border>");
       echo("<th>Imie</th>");
       echo("<th>Dni</th>");
       echo("<th>Godziny</th>");
       echo("<th>Minuty</th>");
    while($row=$result->fetch_assoc()){
        echo("<tr>");
        echo("<td>".$row['imie']."</td><td>".$row['dni']."</td><td>".$row['godziny']."</td><td>".$row['minuty']."</td>");
        echo("</tr>");
    }
echo("</table>");
   
  
  echo("<hr />");
   $sql = 'SELECT DATE_FORMAT("2003-07-09", "%Y-%M-%D") as DataUrodzenia';
echo("<h2>Zadanie 7 - W którym dniu roku urodziłeś się/urodziłaś się?</h2>");
echo("<li>".$sql);

$conn = new mysqli("remotemysql.com","17wQgisS2h","QCoNVtdlto","17wQgisS2h");
 $result = $conn->query($sql);
       echo("<table border>");
       echo("<th>Data_Urodzenia</th>");
    while($row=$result->fetch_assoc()){
        echo("<tr>");
        echo("<td>".$row['DataUrodzenia']."</td>");
        echo("</tr>");
    }
echo("</table>");
  
  
  echo("<hr />");
   $sql = 'SELECT DATE_FORMAT(data_urodzenia,"%W") as dzien, imie, data_urodzenia FROM pracownicy 
   ORDER BY CASE 
   WHEN dzien = "Monday" THEN 1 
   WHEN dzien = "Tuesday" THEN 2 
   WHEN dzien = "Wednesday" THEN 3 
   WHEN dzien= "Thursday" THEN 4 
   WHEN dzien = "Friday" THEN 5 
   WHEN dzien = "Saturday" THEN 6 
   WHEN dzien = "Sunday" THEN 7 
   END ASC';
echo("<h2>Zadanie 8 - Pracownicy z nazwami dni tygodnia, w których się urodzili od poniedziałku do niedzieli</h2>");
echo("<li>".$sql);

$conn = new mysqli("remotemysql.com","17wQgisS2h","QCoNVtdlto","17wQgisS2h");
 $result = $conn->query($sql);
       echo("<table border>");
       echo("<th>Imie</th>");
       echo("<th>Dzień</th>");
  echo("<th>Data_urodzenia</th>");
    while($row=$result->fetch_assoc()){
        echo("<tr>");
        echo("<td>".$row['imie']."</td><td>".$row['dzien']."</td><td>".$row['data_urodzenia']."</td>");
        echo("</tr>");
    }
echo("</table>");
  
 
  echo("<hr />");
   $sql = 'SELECT Count(DATE_FORMAT(data_urodzenia, "%W")) as ilosc FROM pracownicy where DATE_FORMAT(data_urodzenia, "%W")="Monday"';
echo("<h2>Zadanie 9 - Ilu pracowników urodziło się w poniedziałek?</h2>");
echo("<li>".$sql);

$conn = new mysqli("remotemysql.com","17wQgisS2h","QCoNVtdlto","17wQgisS2h");
 $result = $conn->query($sql);
       echo("<table border>");
       echo("<th>Ilość</th>");
    while($row=$result->fetch_assoc()){
        echo("<tr>");
        echo("<td>".$row['ilosc']."</td>");
        echo("</tr>");
    }
echo("</table>");
  
echo("<h2>Zadanie 10 - Ilu pracowników urodziło się w poszczególne dni tygodnia </h1>");
                $sql1 = ("SET lc_time_names = 'pl_PL'");
                $sql2 = ("SELECT DATE_FORMAT(data_urodzenia,'%W') as dzien, Count(DATE_FORMAT(data_urodzenia,'%W')) as ilosc FROM pracownicy group by dzien ORDER BY 
                             CASE
                                  WHEN dzien = 'Poniedziałek' THEN 1
                                  WHEN dzien = 'Wtorek' THEN 2
                                  WHEN dzien = 'Środa' THEN 3
                                  WHEN dzien= 'Czwartek' THEN 4
                                  WHEN dzien = 'Piątek' THEN 5
                                  WHEN dzien = 'Sobota' THEN 6
                                  WHEN dzien = 'Niedziela' THEN 7
                             END ASC");
                echo("<li>".$sql2);
                $conn = new mysqli("remotemysql.com","gQvQ0qIoDC","4HAPys5ynL","gQvQ0qIoDC");
                $result=$conn->query($sql1);
                $result=$conn->query($sql2);
                include("connect.php");
                        echo("<table border>");
                        echo("<th>dzien</th>");
                        echo("<th>ilosc</th>");


while($row=$result->fetch_assoc()) {
echo("<tr>");
    echo("<td>".$row["dzien"]."</td><td>".$row["ilosc"]."</td>");
echo("</tr>");
                 }
      echo("</table>");
  
?>
        </div>
  </body>
