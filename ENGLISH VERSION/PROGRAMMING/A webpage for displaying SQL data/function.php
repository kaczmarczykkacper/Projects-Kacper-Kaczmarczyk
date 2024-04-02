<?php

echo("asd");

function nazwaJakas($liczba){
echo("<li>teraz działa funkcja ");
echo("<li>test ".$liczba);
for($i=1;$i<$liczba;$i++){
echo("<li>to jest w petli: ".$i);
   }
}

nazwaJakas(150);

?>
