<?php require_once("_connect/conexao.php"); ?>


<?php

    if(isset($_POST["nome"])) {
        $nome        = $_POST["nome"];
        $telefone    = $_POST["telefone"];
        $email       = $_POST["email"];
        $date        = $_POST["date"];
        $persone     = $_POST["persone"];
       
        
        $insert    = "INSERT INTO reserv ";
        $insert   .= "(nome,telefone,email,date,persone)";
        $insert   .= "VALUES ";
        $insert   .= "('$nome','$telefone','$email', $date, '$persone')";
        
        $insert_operation = mysqli_query($connect,$insert);
        if(!$insert_operation) {
            die("Erro no banco");
        }  
    }

?>  

<?php
    mysqli_close($connect);
?>

