<?php include("../includes/header-category.php"); ?>

<section class="pages">
    <div><h2>EDITAR RECEITA</h2></div>

<?php
include("../models/ClassConexao.php");
include("../models/ClassCrud.php");

if(isset($_GET['id'])){
    $id = $_GET['id'];
  
    $Crud = new ClassCrud();
    $row = $Crud->selectDB("*","receitas", "where id=?", array($_GET['id']));
    $rows = $row->fetch(PDO::FETCH_ASSOC);

    $id=$rows['id'];
    $idCategorias=$rows['categoria_id'];
    $titulo=$rows['titulo'];
    $descricao=$rows['descricao'];
    $tempoPreparo=$rows['tempo_preparo'];
    $dificuldade=$rows['dificuldade'];
    $porcoes=$rows['porcoes'];
    $ingredientes=$rows['ingredientes'];
    $modoPreparo=$rows['modo_preparo'];
} 
?>
        <div id="formulario-index">
            <form method="POST" action="<?php echo "../controllers/ControllerUpdate.php?id=$id"; ?>">
                    <!--ID-->
                    <input type="hidden" name="id" value="<?php echo $id; ?>" />
                <!--categoria-->
                <div class="forms">
                    <label>Categorias</label>
                    <select name="categoria_id">
                        <option value="<?php echo $idCategorias; ?>">Selecione</option>
                        <option value="1">Entradas</option>
                        <option value="2">Bolos</option>
                        <option value="3">Carnes</option>
                        <option value="4">Massas</option>
                        <option value="5">Peixes</option>
                        <option value="6">Sobremesas</option>
                    </select>   
                </div>
                <!--titulo-->
                <div class="forms">
                    <label for="titulo">Título</label>
                        <input type="text" name="titulo" value="<?php echo $titulo; ?>" placeholder="Título" maxlength="30">
                </div>
                <!--descricao-->
                <div class="forms">
                    <label for="descricao">Descrição</label>
                        <input type="text" name="descricao" value="<?php echo $descricao; ?>" placeholder="Descrição" maxlength="40">
                </div>
                <!--tempo_preparo-->
                <div class="forms">
                    <label for="tempo_preparo">Tempo de Preparo</label>
                        <input type="text" name="tempo_preparo" value="<?php echo $tempoPreparo; ?>" placeholder="Tempo de Preparo" maxlength="5">
                </div>
                <!--ingredientes-->
                <div class="forms">
                    <label for="ingredientes">Ingredientes</label>
                    <textarea name="ingredientes" cols="30" rows="10" placeholder="Ingredientes" maxlength="400"><?php echo $ingredientes; ?></textarea>
                        <!--input type="text" name="ingredientes" placeholder="Ingredientes"-->
                </div>
                <!--modo_preparo-->
                <div class="forms">
                    <label for="modo_preparo">Modo de Preparo</label>
                    <textarea name="modo_preparo" cols="30" rows="10" placeholder="Modo de Preparo" maxlength="400"><?php echo $modoPreparo; ?></textarea>
                        <!--input type="text" name="modo_preparo" placeholder="Modo de Preparo"-->
                </div>
                <!--dificuldade-->
                <div class="forms">
                    <label for="dificuldade">Dificuldade</label>
                    <select name="dificuldade" id="dificuldade">
                        <option value="<?php echo $dificuldade; ?>">Selecione</option>
                        <option value="facil">Fácil</option>
                        <option value="medio">Médio</option>
                        <option value="dificil">Difícil</option>
                    </select>   
                </div>
                
                <!--porcoes-->
                <div class="forms">
                    <label for="porcoes">Porções</label>
                        <input type="text" name="porcoes" value="<?php echo $porcoes; ?>" placeholder="Porções" maxlength="5">
                </div>
                
                <!--Button-->
                <input type="submit" id="btn" name="update" value="Cadastrar">
            </form>
        </div>
       
</section>


<?php include("../includes/footer.php"); ?>