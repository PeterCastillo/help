<!DOCTYPE html>
<html>
<head>
<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../style/normalize.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="../style/modifty.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title></title>
</head>
<body>
    <form class="modify" action="../call/agregar_proveedor.php" method="post">
        <span class="TITLECONTAINER">AGREGAR UN PROVEEDOR</span>
        <div class="mdDiv">
            <label>Código</label>
            <input class="input"  type="text" name="codigo">
        </div>
        <div class="mdDiv">
            <label>Nombre de la proveedor</label>
            <input class="input" type="text" name="nombre">
        </div>
        <div class="mdDiv">
            <label>Descripción de la proveedor</label>
            <textarea class="input inptext" name="text"></textarea>
        </div>
        <input class="btnadd" type="submit" name="accion" value="Agregar">
    </form>
    <br>
    <br>

    <?php
       include_once '../services/provv.php';
       $conn = conectar();
    ?>
    <div class="contiernselect">
        <span class="TITLECONTAINER">PROVEDORES</span>
        <div>
            <div class="componetContainer">
                <?php
                    foreach (listarProveedor($conn) as $key => $value) {
                ?>
                    <div class="component">
                        <span class="componentTl">PROVEEDOR</span>
                        <span>Codigo: <?=$value[0]?>#</span>
                        <span>Nombre: <?=$value[1]?></span>
                        <span>Contacto:<?=$value[3]?></span>
                        <p>Descripción de la categoria: <?=$value[2]?></p>    
                        <div class="btns">
                            <span class="btnDelete "><a href="../call/agregar_proveedor.php?accion=eliminar&codigo=<?=$value[0]?>"><i class="fa-solid fa-trash"></i></a></span>
                            <span class="btnModify"><a href="modificar.php?codigo=<?=$value[0]?>"><i class="fa-solid fa-pen-to-square"></i></a></span>
                        </div>
                    </div>
                <?php
                }
                ?>

            </div>
        </div>
    </div>
</body>
</html>