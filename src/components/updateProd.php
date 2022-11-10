<!DOCTYPE html>
<html>
<head>
    <script type="text/javascript" src="../js/ScriptProducto.js?v=<?php echo time(); ?>"></script>
    <link rel="stylesheet" href="../style/editProduct.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="src/style/index.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="../style/filter.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="../style/normalize.css?v=<?php echo time(); ?>">
    <title></title>
</head>
<body>

    <?php
        $idProd= $_GET['id']; ;
        include_once '../services/update.php';
        $conn=mysqli_connect("localhost", "root", "", "licoreriaproductos");
        $datos=searchPro($idProd,$conn);

    ?>
    <!-- <div>
        <span>Volver</span>
    </div> -->
    <form class="editProductoContainer" name="form" action="../call/ed_producto.php" method="post" enctype="multipart/form-data" >
        <h1>Editar Producto</h1>
        <div class="edidtInput">
            <label for="">Nombre:</label>
            <input type="hidden" name="id" value="<?=$idProd?>">
            <input class="input" type="text" name="nombre" value="<?=$datos[0]?>">
        </div>

        <div class="editInputContainer">
            <div class="edidtInput edidtinpuirtadd">
                <label>Marca</label>
                <input type="text" class="input inputsadd_input " name="marca" value="<?=$datos[6]?>">
            </div>
            <div class="edidtInput edidtinpuirtadd">
                <label>Precio</label>
                <input type="text" class="input inputsadd_input " name="precio" value="<?=$datos[3]?>">
            </div>
            <div class="edidtInput edidtinpuirtadd">
                <label>Cantidad</label>
                <input type="text" class="input inputsadd_input " name="cantidad" value="<?=$datos[7]?>">
            </div>
        </div>

        <div class="selectadd"> 
            <select name="proveedor"  class="input selectedEdit"  selected="<?=$datos[5]?>">
                <?php
                foreach (listProveedor($conn) as $key => $value) {
                    if($value[0]===$datos[5]){
                        echo '<option value="'.$value[0].'" selected="">'.$value[1].'</option>';
                    }else{
                        echo '<option value="'.$value[0].'">'.$value[1].'</option>';
                    }
                }
                ?>
                
            </select><br>
            <select name="categoria" class="input selectedEdit"  selected="<?=$datos[4]?>">
                <?php
                foreach (listCategoria($conn) as $key => $value) {
                    if($value[0]===$datos[4]){
                        echo '<option value="'.$value[0].'" selected="">'.$value[1].'</option>';
                    }else{
                        echo '<option value="'.$value[0].'">'.$value[1].'</option>';
                    }
                }
                ?>
            </select>
        </div>
        <div class="input">
            <label>Imagen: </label>
            <input class=""  type="file" name="imagen" >
        </div>
        <div>
            <label>Descripcion del producto</label><br>
            <textarea class="input txtedidtprd"  id="descripcion" name="descripcion"><?=$datos[1]?></textarea><br>
        </div>
        <input class="btnedid" type="submit" name="btnED" onclick="validarDatos()" value="Aceptar">
    </form>


</body>
</html>