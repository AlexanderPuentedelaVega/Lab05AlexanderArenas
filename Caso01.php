<?php
if (isset($_POST['bonificacion'])) {
    $num_hijos = $_POST['num_hijos'];
    $bonificacion = 50 * $num_hijos;
    echo "Su bonificación es: " . $bonificacion;

} elseif (isset($_POST['sueldo_bruto'])) {
    $num_hijos = $_POST['num_hijos'];
    $imp_ttl = $_POST['Imp_ttl'];
    $bonificacion = 50 * $num_hijos;
    $sueldo_bruto = 600 + (0.075 * $imp_ttl) + $bonificacion;
    echo "Su sueldo bruto es: " . $sueldo_bruto;

} elseif (isset($_POST['descuento'])) {
    $num_hijos = $_POST['num_hijos'];
    $imp_ttl = $_POST['Imp_ttl'];
    $bonificacion = 50 * $num_hijos;
    $sueldo_bruto = 600 + (0.075 * $imp_ttl) + $bonificacion;
    $descuento = 0.11 * $sueldo_bruto;
    echo "Su descuento es: " . $descuento;
    
} elseif (isset($_POST['sueldo_neto'])) {
    $num_hijos = $_POST['num_hijos'];
    $imp_ttl = $_POST['Imp_ttl'];
    $bonificacion = 50 * $num_hijos;
    $sueldo_bruto = 600 + (0.075 * $imp_ttl) + $bonificacion;
    $descuento = 0.11 * $sueldo_bruto;
    $sueldo_neto = $sueldo_bruto - $descuento;
    echo "Su sueldo neto es: " . $sueldo_neto;
}
?>