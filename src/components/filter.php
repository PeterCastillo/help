<?php
        $provedores = getProvedores();
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
        <select name="xprovedor" class="provedor input">
            <option value="">Proveedor</option>
            <?php
                foreach($provedores as $provedor){
            ?>
                <option value=<?php echo $provedor['provedor_id']?>><?php echo $provedor['provedor_nombre'] ?></option>
            <?php
                }
            ?>
        </select>
        <span class="btnModify editadd"><a href="src/components/prov.php?id=<?php?>"><i class="fa-solid fa-pen-to-square"></i></a></span>
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
        <span class="btnModify editadd"><a href="src/components/categoria.php?id=<?php?>"><i class="fa-solid fa-pen-to-square"></i></a></span>
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