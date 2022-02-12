<!--header search-->
<?php include("../includes/header-search.php"); ?>

<?php
include_once("../models/ClassConexao.php");
include_once("../models/ClassCrud.php");

    $Crud = new ClassCrud();
    $titulo = filter_input(INPUT_POST,'titulo',FILTER_SANITIZE_SPECIAL_CHARS);

    $row = $Crud->selectDB(
        "*",
        "receitas",
        "where titulo=?",
        array($titulo)
    );
    $rows=$row->fetch(PDO::FETCH_ASSOC);
?>
<!--section form-->
<section id="section-form">
        <!--Formulario-->
        <div id="formulario-index">
                    <!--ID-->
                    <input type="hidden" name="id" value="<?php echo "{$rows['id']}"; ?>">
                <!--categoria-->
                <div class="forms">
                    <label for="categoria_id">Categorias</label>
                        <input readonly type="text" name="categoria_id" value="<?php echo "{$rows['categoria_id']}"; ?>" placeholder="Categorias" maxlength="30">
                </div>
                <!--titulo-->
                <div class="forms">
                    <label for="titulo">Título</label>
                        <input readonly type="text" name="titulo" value="<?php echo "{$rows['titulo']}"; ?>" placeholder="Título" maxlength="30">
                </div>
                <!--descricao-->
                <div class="forms">
                    <label for="descricao">Descrição</label>
                        <input readonly type="text" name="descricao" value="<?php echo "{$rows['descricao']}"; ?>" placeholder="Descrição" maxlength="60">
                </div>
                <!--tempo_preparo-->
                <div class="forms">
                    <label for="tempo_preparo">Tempo de Preparo</label>
                        <input readonly type="text" name="tempo_preparo" value="<?php echo "{$rows['tempo_preparo']}"; ?>" placeholder="Tempo de Preparo">
                </div>
                <!--ingredientes-->
                <div class="forms">
                    <label for="ingredientes">Ingredientes</label>
                    <textarea readonly name="ingredientes" cols="30" rows="10" placeholder="Ingredientes" maxlength="500"><?php echo "{$rows['ingredientes']}"; ?></textarea>
                        <!--input type="text" name="ingredientes" placeholder="Ingredientes"-->
                </div>
                <!--modo_preparo-->
                <div class="forms">
                    <label for="modo_preparo">Modo de Preparo</label>
                    <textarea readonly name="modo_preparo" cols="30" rows="10" placeholder="Modo de Preparo" maxlength="600"><?php echo "{$rows['modo_preparo']}"; ?></textarea>
                        <!--input type="text" name="modo_preparo" placeholder="Modo de Preparo"-->
                </div>
                <!--dificuldade-->
                <div class="forms">
                    <label for="dificuldade">Dificuldade</label> 
                        <input readonly type="text" name="dificuldade" value="<?php echo "{$rows['dificuldade']}"; ?>" placeholder="Dificuldade" maxlength="120">
                </div>
                
                <!--porcoes-->
                <div class="forms">
                    <label for="porcoes">Porções</label>
                        <input readonly type="text" name="porcoes" value="<?php echo "{$rows['porcoes']}"; ?>" placeholder="Porções">
                </div>
        </div>
</section>
<!--footer-->
<?php include("../includes/footer.php"); ?>