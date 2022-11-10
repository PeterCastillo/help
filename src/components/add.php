<?php
?>
<form class="addProducto">
    <span class="title title_productos">Agregar un producto</span>
    <input type="text" placeholder="Ingrese nombre del producto" class="input">
    <div class="inputsadd">
        <input type="text" placeholder="Marca" class="inputsadd_input input">
        <input type="number" placeholder="Precio" class="inputsadd_input input">
        <input type="number" placeholder="Cantidad" class="inputsadd_input input">
    </div>
    <?php
        include("src/services/provedores.php");
        include(("src/services/categorias.php"));
        $provedoresAdd = getProvedores();
        $categoriasAdd = getCategorias();
    ?>
    <div class="selectadd">
        <select name="" id="" class="selectadd_select input">
            <option value="">Provedor</option>
            <?php
                foreach($provedoresAdd as $provedor){
            ?>
                <option value=<?php echo $provedor['provedor_id']?>><?php echo $provedor['provedor_nombre'] ?></option>
            <?php
                }
            ?>
        </select>
        <select name="" id="" class="selectadd_select input">
            <option value="">Categoria</option>
                <?php
                    foreach($categoriasAdd as $categoria){
                ?>
                    <option value=<?php echo $categoria['categoria_id']?>><?php echo $categoria['categoria_nombre'] ?></option>
                <?php
                    }
                ?>
        </select>
    </div>
    <input type="text" placeholder="Ingrese URL del producto" class="input">
    <textarea name="" placeholder="Ingrese desripcion del producto" class="input textareadd"></textarea>
    <button class="btnADD"><a href="">Agregar producto</a></button>
</form>

<?php
?>