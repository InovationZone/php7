<!--envia formulario com dados binários-->
<form method="post" enctype="multipart/form-data">

    <input type="file" name="fileUpload">

    <button type="submit">Send</button>
</form>

<?php
/**
 * Created by PhpStorm.
 * User: João Paulo
 * Date: 04/11/2018
 * Time: 19:58
 */


//Os arquivos são colocados em uma pasta temporária e são tranferidos só após o upload ter sido completado.
if($_SERVER["REQUEST_METHOD"] === "POST"){
    //array super global que pega o conteudo do arquivo pelo name do form
    $file = $_FILES["fileUpload"];

    //se deu algum erro, é lançada uma exception
    if($file["erros"]){
        throw new Exception("Error: ".$file["erros"]);
    }

    //cria o diretorio se nao existir
    $dirUploads = "uploads";
    if(!is_dir($dirUploads)){
        mkdir($dirUploads);
    }

    //movendo o arquivo upado
    //tmp_name - pasta onde foi feito o upload

    if(move_uploaded_file($file["tmp_name"],$dirUploads . DIRECTORY_SEPARATOR . $file["name"])){
        echo "Upload realizado com sucesso!";

    } else {
        throw new Exception("Não foi possível realizar o upload.");
    }

}