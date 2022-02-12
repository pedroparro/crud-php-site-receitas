<?php
include_once("../models/ClassConexao.php");
include("../models/ClassCrud.php");

$Crud=new ClassCrud();
$id=filter_input(INPUT_GET,'id',FILTER_SANITIZE_SPECIAL_CHARS);

$Crud->deleteDB("receitas",
                "id=?",
                array(
                    $id
                ));

//echo "Dado deletado com sucesso!";
header("Location: ../pages/entradas.php");
die();

?>





