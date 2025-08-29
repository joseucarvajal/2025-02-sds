<html>
    <?php
        $nombre_producto = $_REQUEST['nombre_producto'];
        $precio = $_REQUEST['precio'];
        $descuento = $_REQUEST['descuento'];
        $precio_con_descuento = $precio - ($precio * $descuento / 100);
        $precio_con_descuento = number_format($precio_con_descuento, 2);
    ?>
    <head>
    </head>
    <body>
        <h1>producto: <?php echo $nombre_producto; ?></h1>
        <h1>Calculo de descuento: <?php echo $precio_con_descuento; ?></h1>
    </body>
</html>