<form method="post">

    <input type="text" name="busca">
    <button type="submit">Enviar</button>

</form>


<?php
/**
 * Created by PhpStorm.
 * User: joaosilva
 * Date: 19/12/18
 * Time: 16:51
 */

// injetando javascript -
 $_POST['busca'] = "<script>alert('xss')</script>";
//exemplo de xss <strong>teste</strong> injetado junto com o post
if(isset($_POST['busca'])) {
    //echo $_POST['busca'];
    //resolvendo
    //neste caso, permite a tag strong, apenas
    echo strip_tags($_POST['busca'], "<strong>");

    //nao remove as tags e imprime na tela
    echo htmlentities($_POST['busca']);
}
?>



