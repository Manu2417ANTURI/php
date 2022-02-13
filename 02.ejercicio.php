<?php
$cantidad=15;
$valoruni=43000;
$suma=$cantidad*$valoruni;
define("IVA", 0.19);
$valoriva=IVA*$suma;
$totaliva=$suma+$valoriva;
echo "valor sin iva es: $suma <br>";
echo "valor iva es: $valoriva <br>";
echo "total iva: $totaliva <br>";