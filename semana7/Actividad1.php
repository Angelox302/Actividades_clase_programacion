<?php
// 1. Variables básicas
$edad = 25;
$nombre = "Juan";
$activo = true;

// 2. Variables de producto
$producto = "Laptop";
$precio = 1500.00;
$cantidad = 10;
echo "El producto $producto cuesta $precio y hay $cantidad unidades disponibles.<br>";

// 3. Intercambio de valores sin variable auxiliar
$a = 5;
$b = 10;
echo "Antes del intercambio: a = $a, b = $b<br>";
$a = $a + $b;
$b = $a - $b;
$a = $a - $b;
echo "Después del intercambio: a = $a, b = $b<br>";

// 4. Saludo personalizado
$nombreUsuario = "Carlos";
$edadUsuario = 30;
echo "¡Hola $nombreUsuario! Tienes $edadUsuario años.<br>";

// 5. Operaciones con dos números
$num1 = 20;
$num2 = 6;
echo "Suma: " . ($num1 + $num2) . "<br>";
echo "Resta: " . ($num1 - $num2) . "<br>";
echo "Multiplicación: " . ($num1 * $num2) . "<br>";
echo "División: " . ($num1 / $num2) . "<br>";
echo "Módulo: " . ($num1 % $num2) . "<br>";

// 6. Comparación de números
$x = 15;
$y = 20;
if ($x > $y) {
    echo "$x es mayor que $y<br>";
} elseif ($x == $y) {
    echo "$x es igual a $y<br>";
} else {
    echo "$x es menor que $y<br>";
}

// 7. Expresión lógica para acceso
$activo = true;
$edad = 19;
$puedeAcceder = ($activo && $edad > 18);
echo "¿Puede acceder el usuario? " . ($puedeAcceder ? "Sí" : "No") . "<br>";

// 8. Constante PI y área del círculo
define("PI", 3.1416);
$radio = 5;
$area = PI * $radio * $radio;
echo "El área de un círculo con radio $radio es: $area<br>";

// 9. Cálculo con IVA y descuento
define("IVA", 0.19);
define("DESCUENTO", 0.10);
$precioBase = 100000;
$precioConIVA = $precioBase + ($precioBase * IVA);
$precioFinal = $precioConIVA - ($precioConIVA * DESCUENTO);
echo "Precio final con IVA y descuento: $precioFinal<br>";

// 10. Branding con constante de nombre de la app
define("APP_NAME", "MiSuperApp");
echo "Bienvenido a " . APP_NAME . "!<br>";
echo APP_NAME . " te ofrece los mejores servicios.<br>";
echo "Gracias por usar " . APP_NAME . "!<br>";
?>