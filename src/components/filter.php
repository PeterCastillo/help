<?php
        include("src/services/provedores.php");
        $provedores = getProvedores();
        include(("src/services/categorias.php"));
        $categorias = getCategorias();

        if(isset($_POST['xnombre'])){
            $nombre=$_POST['xnombre'];
        }
        if(isset($_POST['xprovedor'])){
            $provedorfilter=$_POST['xprovedor'];
        }
        $where = "";
        if(isset($_POST['xcategoria'])){
            $categoriafilter=$_POST['xcategoria'];
        }
        $where = "";
    ?>
    <form method="post" class="form">
        <input class="nombre input" type="text" name="xnombre" placeholder="Ingrese nombre de producto">
        <select name="xprovedor" class="provedor input">
            <option value="">Provedor</option>
            <?php
                foreach($provedores as $provedor){
            ?>
                <option value=<?php echo $provedor['provedor_id']?>><?php echo $provedor['provedor_nombre'] ?></option>
            <?php
                }
            ?>
        </select>
        <select class="categoria input" name="xcategoria">
            <option value="">Categoria</option>
            <?php
                foreach($categorias as $categoria){
            ?>
                <option value=<?php echo $categoria['categoria_id']?>><?php echo $categoria['categoria_nombre'] ?></option>
            <?php
                }
            ?>
        </select>
        <button name="buscar" type="submit" class="search">Buscar</button>
    </form>
<?php
    if(isset($_POST['buscar'])){
        if(empty($_POST['xprovedor']) && empty($_POST['xcategoria'])){
            return;
        }
        if($_POST['xprovedor'] <> "" && empty($_POST['xcategoria'])){
            $where = "WHERE producto_provedor = ".$provedorfilter;
        } elseif($_POST['xcategoria'] <> "" && empty($_POST['xprovedor'])) {
            $where = "WHERE producto_categoria = ".$categoriafilter;
        } elseif($_POST['xcategoria'] <> "" && $_POST['xprovedor'] <> ""){
            $where = "WHERE producto_categoria = ".$categoriafilter." AND  producto_provedor = ".$provedorfilter; 
        }
    } 
?>