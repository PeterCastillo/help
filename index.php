<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="src/style/index.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="src/style/filter.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="src/style/normalize.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="src/style/producto.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
</head>
<body>
    <?php
        include("src/components/añadir.php")
    ?>
    <secction> 
        <div class="title"><span class="title_productos">Productos</span></div>
        <?php include("src/components/filter.php")?>
        <div class="productos_container">
            <?php include("src/components/productos.php")?>
        </div>
    </secction>

</body>
</html>