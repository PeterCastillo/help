<!DOCTYPE html>
<html>
<head> 
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../style/normalize.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="../style/modiedid.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title></title>
</head>
<body>
	 <?php
		$cod = $_REQUEST['codigo'];
       include_once '../services/cate.php';
       $conn = conectar();
       $datos = buscarCategoria($cod,$conn);
    ?>
    <form class="modedit" action="../call/agregar_categoria.php" method="post">
        <h1>MODIFICAR UNA CATEGORIA</h1>
        <input class="input" type="hidden" name="codigo" value="<?=$cod?>"><br>
        <label>Nombre de la categoria</label>
        <input class="input" type="text" name="nombre" value="<?=$datos[0]?>"><br>
        <label>Descripción de la categoria</label>
        <textarea class="inptext input" name="text"><?=$datos[1]?></textarea><br>
        <input class="btnmodi" type="submit" name="accion" value="Modificar">
    </form>

</body>
</html>