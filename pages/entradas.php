<!--header category--> 
<?php include("../includes/header-category.php"); ?>

<!--section pages--> 
<section class="pages">
        <!--H2--> 
        <div><h2>ENTRADAS</h2></div>
    <!--container pages--> 
    <div class="container-pages">
            <!--PHP-->        
            <?php
            include("../models/ClassConexao.php");
            include("../models/ClassCrud.php");

            $crud = new ClassCrud();
            $row = $crud->selectDB("*", "receitas","where categoria_id='1' ORDER BY categoria_id='1' limit 3", array());

            while($rows = $row->fetch(PDO::FETCH_ASSOC)){
                $_GET['id']=$rows['id'];

                $idCategorias=$rows['categoria_id'];
                $titulo=$rows['titulo'];
                $descricao=$rows['descricao'];
                $tempoPreparo=$rows['tempo_preparo'];
                $dificuldade=$rows['dificuldade'];
                $porcoes=$rows['porcoes'];
                $ingredientes=$rows['ingredientes'];
                $modoPreparo=$rows['modo_preparo'];
            ?>
       
<div>
    <!--page edit--> 
    <a href="<?php echo "pagesEdit.php?id={$_GET['id']}"; ?>"><i class="fas fa-edit"></i></a>
    <!--delete--> 
    <a href="<?php echo "../controllers/ControllerDelete.php?id={$rows['id']}"; ?>"><i class="fas fa-trash"></i></a>
    <!--id hidden--> 
    <input type="hidden" readonly name="id" value="<?php echo "{$_GET['id']}"; ?>">
        <!--categorias--> 
        <input type="hidden" readonly name="categoria_id" value="<?php echo $idCategorias; ?>">
    <!--titulo--> 
    <h3><?php echo $titulo; ?></h3>
        <!--descrição--> 
        <h5><?php echo $descricao; ?></h5>
    <!--textarea--> 
    <label for="modo_preparo">Modo de Preparo<textarea readonly name="modo_preparo" cols="30" rows="10" placeholder="Modo de Preparo" maxlength="600"><?php echo $rows['modo_preparo']; ?></textarea></label>
        <!--textarea--> 
        <label for="">Ingredientes<textarea readonly name="ingredientes" cols="30" rows="10" placeholder="Ingredientes" maxlength="500"><?php echo $rows['ingredientes']; ?></textarea></label>
    <!--tempo de preparo--> 
    <label for="tempo_preparo">Tempo de Preparo:<p><i class="fas fa-clock"></i><?php echo $tempoPreparo; ?></p></label>
        <!--dificuldade--> 
        <label for="dificuldade">Dificuldade:<p><i class="fas fa-signal"></i><?php echo $dificuldade; ?></p></label>
    <!--porções--> 
    <label for="porcoes">Porções:<p><i class="fas fa-utensils"></i><?php echo $porcoes; ?></p></label>
</div>
        <!--end while--> 
        <?php } ?>
    </div>
        
</section>

<!--footer--> 
<?php include("../includes/footer.php"); ?>