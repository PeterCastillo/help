<?php
    $conn = mysqli_connect("localhost", "root", "", "licoreriaproductos");

    if(empty($where)){
        $sql = 'SELECT * FROM productos';
    } else{
        $sql = 'SELECT * FROM productos '.$where;
    }
    $res = mysqli_query($conn,$sql);
    while($producto=mysqli_fetch_array($res)){
?>
    <div class="pdr">
        <div class="pdr_img">
            <img class="pdr_img_img" src=<?php echo $producto['producto_img']?> alt="">
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
                    Descripcion: Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid ut eius optio, omnis voluptatibus, debitis commodi aspernatur magnam unde asperiores veritatis harum pariatur voluptatem?. 
                </p>
            </div>
            <div class="pdr_info_btn">
                <div class="pdr_info_btn_cantidad">
                    <span class="btn less"><i class="fa-solid fa-minus"></i></span>
                    <span class="btn cant"> <?php echo $producto['producto_cantidad']?></span>
                    <span class="btn plus"><i class="fa-solid fa-plus"></i></span>
                </div>
                <span class="btnDelete"><i class="fa-solid fa-trash"></i></span>
            </div>
        </div>
    </div>
<?php
    }
?>