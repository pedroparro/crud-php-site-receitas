<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RECEITAS</title>
    <link rel="stylesheet" href="public/css/style.css">
</head>
<body>
    <header>
        <!--Menu-->
        <nav class="navbar">
            <!--Logo-->
            <img src="./public/img/img.jpeg" width="70px" height="70px">
                <!--Form Buscar-->
                <form action="./pages/search.php" method="POST">
                    <input type="text" name="titulo" placeholder="Buscar"><i class="fa fa-search"></i>
                        <button type="submit" class="btn-search">Buscar</button>
                </form>
            <ul>
                <li><a href="./views/category.php">NOSSAS RECEITAS</a></li>
            </ul>
        </nav>
        <div><h2>RECEITAS MG</h2></div>
    </header>

    <div>
        <img src="./public/img/back.jpg" width="100%" height="100%">   
    </div>

    <div><h2>Inserir Receita</h2></div>

    <section id="section-form">
        <!--Formulario-->
        <div id="formulario-index">
            <form method="POST" action="controllers/ControllerInsert.php?id=<?php echo "{$GET['id']}"; ?>">
                    <!--ID-->
                    <input type="hidden" name="id" value="<?php echo "{$_GET['id']}"; ?>">
                <!--categoria-->
                <div class="forms">
                    <label>Categorias</label>
                    <select name="categoria_id">
                        <option value="<?php echo "{$rows['categoria_id']}"; ?>">Selecione</option>
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
                        <input type="text" name="titulo" value="<?php echo "{$rows['titulo']}"; ?>" placeholder="Título" maxlength="30" required>
                </div>
                <!--descricao-->
                <div class="forms">
                    <label for="descricao">Descrição</label>
                        <input type="text" name="descricao" value="<?php echo "{$rows['descricao']}"; ?>" placeholder="Descrição" maxlength="40" required>
                </div>
                <!--tempo_preparo-->
                <div class="forms">
                    <label for="tempo_preparo">Tempo de Preparo</label>
                        <input type="text" name="tempo_preparo" value="<?php echo "{$rows['tempo_preparo']}"; ?>" placeholder="Tempo de Preparo" maxlength="5" required>
                </div>
                <!--ingredientes-->
                <div class="forms">
                    <label for="ingredientes">Ingredientes</label>
                    <textarea name="ingredientes" cols="30" rows="10" value="<?php echo "{$rows['ingredientes']}"; ?>" placeholder="Ingredientes" maxlength="400" required></textarea>
                        <!--input type="text" name="ingredientes" placeholder="Ingredientes"-->
                </div>
                <!--modo_preparo-->
                <div class="forms">
                    <label for="modo_preparo">Modo de Preparo</label>
                    <textarea name="modo_preparo" cols="30" rows="10" value="<?php echo "{$rows['modo_preparo']}"; ?>" placeholder="Modo de Preparo" maxlength="400" required></textarea>
                        <!--input type="text" name="modo_preparo" placeholder="Modo de Preparo"-->
                </div>
                <!--dificuldade-->
                <div class="forms">
                    <label for="dificuldade">Dificuldade</label>
                    <select name="dificuldade" id="dificuldade">
                        <option value="<?php echo "{$rows['dificuldade']}"; ?>">Selecione</option>
                        <option value="facil">Fácil</option>
                        <option value="medio">Médio</option>
                        <option value="dificil">Difícil</option>
                    </select>   
                </div>
                
                <!--porcoes-->
                <div class="forms">
                    <label for="porcoes">Porções</label>
                        <input type="text" name="porcoes" value="<?php echo "{$rows['porcoes']}"; ?>" placeholder="Porções" maxlength="5" required>
                </div>

                <!--Button-->
                <input type="submit" id="btn" value="Cadastrar">
            </form>
        </div>
</section>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<?php include("includes/footer.php"); ?>
</body>
</html>