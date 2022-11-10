<?php
    $conn = mysqli_connect("localhost", "root", "", "licoreriaproductos");
    $sql = 'SELECT * FROM productos '.$where;
    $res = mysqli_query($conn,$sql);
    while($producto=mysqli_fetch_array($res)){
?>
    <div class="pdr">
        <div class="pdr_img">
            <img class="pdr_img_img" src="src/imagenes/<?php echo $producto['producto_img']?>" alt="">
        </div>
        <div class="pdr_info">
            <div class="pdr_info_details">
                <div class="pdr_info_details_specific">
                    <span>ID: <?php echo $producto['producto_id']?># </span>
                    <span>Nombre: <?php echo $producto['producto_nombre']?></span>
                    <span>Marca: <?php echo $producto['producto_marca']?></span>
                </div>
                <div class="pdr_info_details_specific">
                    <span>Precio: <?php echo $producto['producto_precio']?></span>
                    <span>Provedor: <?php echo $producto['producto_provedor']?></span>
                    <span>Categoria: <?php echo $producto['producto_categoria']?></span>
                </div>
                <p class="desc">
                    Descripcion: <?php echo $producto['producto_descripcion']?> 
                </p>
            </div>
            <div class="pdr_info_btn">
                <span class="btnModify"><a href="src/components/updateProd.php?id=<?php echo $producto['producto_id']?>"><i class="fa-solid fa-pen-to-square"></i></a></span>
                <span class="btnDelete" method="post" name="delete"><a href="src/services/delete.php?id=<?php echo $producto['producto_id']?>" ><i class="fa-solid fa-trash"></i></a></span>
            </div>
        </div>
        <span class="cantidad"><i class="fa-sharp fa-solid fa-bottle-droplet"></i> : <?php echo $producto['producto_cantidad']?></span>
    </div>
<?php
    }
?>