<?php

include("../models/ClassConexao.php");
include("../models/ClassCrud.php");

if(isset($_POST['update'])){
    $id = $_POST['id'];
    $idCategorias=$_POST['categoria_id'];
    $titulo=$_POST['titulo'];
    $descricao=$_POST['descricao'];
    $tempoPreparo=$_POST['tempo_preparo'];
    $dificuldade=$_POST['dificuldade'];
    $porcoes=$_POST['porcoes'];
    $ingredientes=$_POST['ingredientes'];
    $modoPreparo=$_POST['modo_preparo'];

    $Crud=new ClassCrud();
    $Crud->updateDB("receitas",
                    "categoria_id=?,titulo=?,descricao=?,tempo_preparo=?,
                    dificuldade=?,porcoes=?,ingredientes=?,modo_preparo=?","id=?",
                    array(
                        $idCategorias,$titulo,$descricao,$tempoPreparo,$dificuldade,
                        $porcoes,$ingredientes,$modoPreparo,$id
                    ));
   
    echo "Dado atualizado com sucesso!";
    header("Location: ../views/category.php");
    die();
}else{
    header("Location: ../index.php");
    die();
}
?>

