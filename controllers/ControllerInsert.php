<?php
include_once("../models/ClassConexao.php");
include_once("../models/ClassCrud.php");

if(isset($_POST['id']) && isset($_POST['categoria_id']) && isset($_POST['titulo']) 
&& isset($_POST['descricao']) && isset($_POST['tempo_preparo']) && isset($_POST['dificuldade']) 
&& isset($_POST['porcoes']) && isset($_POST['ingredientes']) && isset($_POST['modo_preparo'])){
   
    $id;
    $idCategorias=$_POST['categoria_id'];
    $titulo=$_POST['titulo'];
    $descricao=$_POST['descricao'];
    $tempoPreparo=$_POST['tempo_preparo'];
    $dificuldade=$_POST['dificuldade'];
    $porcoes=$_POST['porcoes'];
    $ingredientes=$_POST['ingredientes'];
    $modoPreparo=$_POST['modo_preparo'];
   
$crud = new ClassCrud();
$crud->insertDB(
        "receitas",
        "?,?,?,?,?,?,?,?,?",
        array(
            $id,
            $idCategorias,
            $titulo,
            $descricao,
            $tempoPreparo,
            $dificuldade,
            $porcoes,
            $ingredientes,
            $modoPreparo,
        )
);
    //IF Pages
    if($idCategorias === "1"){
        header("Location: ../pages/entradas.php");
        die();
    }elseif($idCategorias === "2"){
        header("Location: ../pages/bolos.php");
        die();
    }elseif($idCategorias === "3"){
        header("Location: ../pages/carnes.php");
        die();
    }elseif($idCategorias === "4"){
        header("Location: ../pages/massas.php");
        die();
    }elseif($idCategorias === "5"){
        header("Location: ../pages/peixes.php");
        die();
    }elseif($idCategorias === "6"){
        header("Location: ../pages/sobremesas.php");
        die();
    }

}else{
    header("Location: ../index.php");
    die();
}
?>
