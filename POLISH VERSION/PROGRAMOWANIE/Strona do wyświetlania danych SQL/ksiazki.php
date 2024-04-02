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
	
			 </div> 
	       </h6>
       </ul>
       
    </div>
      <div class="item colorGreen">
<?php
  
 require_once('../connect.php');
echo("<h1>Książki i autorzy:</h1>");
$sql = 'SELECT * FROM biblAutor, biblTytul, biblAutor_biblTytul WHERE biblAutor_id=biblAutor.id and biblTytul_id=biblTytul.id';
echo("<h2>Cała tabelka:</h2>");
echo("<li>".$sql);

$result=$conn->query($sql);
    echo("<table border=1>");
    echo("<th>id</th>");
    echo("<th>autor</th>");
    echo("<th>tytul</th>");
        while($row=$result->fetch_assoc()){
            echo("<tr>");
                   echo("<td>".$row["id"]."</td><td>".$row["autor"]."</td><td>".$row["tytul"]."</td>"); 
            echo("</tr>");
        }
    echo("</table>");
  

  echo("<hr />");
$sql = 'SELECT * FROM biblAutor';
echo("<h2>Autorzy:</h2>");
echo("<li>".$sql);

$result = $conn->query($sql);
echo("<select name='title' id='title'>");
while($row=$result->fetch_assoc()){
echo("<option value=".$row['id'].">".$row['autor']."</option>");
        }
    echo("</select>");

  
echo("<hr />");
$sql = 'SELECT * FROM biblTytul';
echo("<h2>Tytuły:</h2>");
echo("<li>".$sql);

$result=$conn->query($sql);
echo("<select name='title' id='title'>");
while($row=$result->fetch_assoc()){ 
echo("<option value=".$row['id'].">".$row['tytul']."</option>");
        }
    echo("</select>");
echo("<h2>Wyświetalnie książek danego autora:</h2>");        
?>
	      
<form id="mForm">
<select id="mSelect">

    <option value='1'>Henryk Sienkiewicz</option>
    <option value='2'>Adam Mickiewicz</option>
    <option value='3'>Tolkien</option>
    <option value='4'>William Shakespeare</option>
    <option value='5'>Rafał Kosik</option>
    <option value='6'>Alexander Fredro</option>
    <option value='7'>Jan Brzechwa</option>
    <option value='8'>Kacper Korczak</option>
    
</select>
</form>
<div id="tytul">
</div>

<script type="text/javascript">
var mS = document.getElementById('mSelect');
var mYesNo = document.getElementById('tytul');
mS.onchange=function() {
    if(mS.value==='1') {
        mYesNo.innerHTML='<table><tr><td>Krzyżacy</td><td>Ogniem i mieczem</td></tr></table>';
    }
    else if(mS.value==='2') {
        mYesNo.innerHTML='<table><tr><td>Pan Tadeusz</td></tr></table>';
    }
    else if(mS.value==='3') {
        mYesNo.innerHTML='<table><tr><td>Hobbit</td><td>Władca Pierścieni</td></tr></table>';
    }
    else if(mS.value==='4') {
        mYesNo.innerHTML='<table><tr><td>Romeo i Julia</td></tr></table>';
    }
    else if(mS.value==='5') {
        mYesNo.innerHTML='<table><tr><td>Felix, Net i Nika</td></tr></table>';
    }
    else if(mS.value==='6') {
        mYesNo.innerHTML='<table><tr><td>Zemsta</td></tr></table>';
    }
    else if(mS.value==='7') {
        mYesNo.innerHTML='<table><tr><td>Akademia Pana Kleksa</td></tr></table>';
    }
    else if(mS.value==='8') {
        mYesNo.innerHTML='<table><tr><td>Jak zmienić szkołę</td><td>Jak zmienić nauczyciela z zawodowych</td></tr></table>';
    }
    else {
        mYesNo.innerHTML='';    
    }
}
</script>
 </div>
  </body>
