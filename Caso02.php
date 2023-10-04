<?php
    $precio_actual = $_POST['precio_actual'];
    $cantidad = $_POST['cantidad'];

    $nuevo_precio = $precio_actual * 0.95;
    $importe_compra = $nuevo_precio - $cantidad;
    $descuento = $importe_compra * 0.07;
    $importe_a_pagar = $importe_compra - $descuento;
    $caramelos = $cantidad * 2;
    echo "Su nuevo precio es: ".$nuevo_precio;
    echo "Su importe de la compra es: ".$importe_compra;
    echo "Su importe del descuento es: ".$descuento;
    echo "Su importe a pagar es: ".$importe_a_pagar;
    echo "Su obsequio es: ".$caramelos;


?>