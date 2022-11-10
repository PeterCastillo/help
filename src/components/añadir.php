<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
     
	<form action="src/call/agregar_producto.php" class="addProducto" method="post" enctype="multipart/form-data">
        <span class="title title_productos">Agregar un producto</span>
        <input type="text" name="nombrep" class="input" placeholder="Ingrese Nombre del Prodcuto">
        <div class="inputsadd">
            <input type="text" placeholder="Marca"  name="marcap" class="inputsadd_input input">
            <input type="number" name="preciop" placeholder="Precio" class="inputsadd_input input">
            <input type="number" name="cantidadp" placeholder="Cantidad" class="inputsadd_input input">
        </div>
        <input class="input fileImg" type="file" name="imagenp">
        <?php
            include("src/services/provedores.php");
            include(("src/services/categorias.php"));
            $provedoresAdd = getProvedores();
            $categoriasAdd = getCategorias();
        ?>
        <div class="selectadd">
            <select name="provedor" id="" class="selectadd_select input">
                <option value="">Provedor</option>
                <?php
                    foreach($provedoresAdd as $provedor){
                ?>
                    <option value=<?php echo $provedor['provedor_id']?>><?php echo $provedor['provedor_nombre'] ?></option>
                <?php
                    }
                ?>
            </select>
            <select name="categoria" id="" class="selectadd_select input">
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
        <textarea name="descripcionp" placeholder="Ingrese una descripcion del producto" class="input"></textarea>
        <input type="submit"  class="btnADD" name="accion" value="Agregar"> 
	</form>

</body>
</html>