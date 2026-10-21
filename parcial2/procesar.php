<?php

echo "<h1>Pedido recibido en Salteneria El Horno</h1>"

echo "<p>Nombre: " . $_POST['nombre'] . "</p>";
echo "<p>Correo: " . $_POST['correo'] . "</p>";
echo "<p>Pedido: " . $_POST['pedido'] . "</p>";

$carta = [
    "Saltena de pollo - Bs 6",
    "Docena de saltena - Bs 65",
    "Refresco de mocochinchi - Bs 5"
];

echo "<ul>";
foreach ($carta as $item){
    echo "<li>" . $item . "</li>";
}
echo "</ul>";

echo "<p> Te atiende Ivan Limachi Mamani</p>"
?>