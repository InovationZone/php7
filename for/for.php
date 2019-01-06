<?php

//incrementando de 5 em 5
for ($i=0;$i <=1000;$i+=5){

    if($i > 200 && $i < 800)
        continue; //nao imprime do do 201 a 799
   // echo "</br>";

    if($i == 900) break; //para o for quando chega no 900

   // echo $i;
}

echo "<select>";
for ($i = date('Y');$i >= date('Y') - 100;$i--){
    echo "<option value='$i'>$i</option>";
}
echo "</select>";