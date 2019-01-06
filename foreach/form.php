<form>
    nome: <input type="text" name="nome">
    idade: <input type="number" name="idade">
    <input type="submit" value="ok">
</form>
<?php
if(isset($_GET)){
    foreach($_GET as $key => $value) {
        echo "nome do campo: $value </br>";
        echo "valor do campo: $key </br> ";

        echo "</br>";
    }
}