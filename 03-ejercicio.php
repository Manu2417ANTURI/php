<?php
define("nota1" ,0.15);
define("nota2" ,0.20);
define("nota3" ,0.25);
define("nota4" ,0.40);
$alumno="camilo";
$materia="ingles";
$n1=rand(1,5);
$c=$n1*nota1;
$n2=rand(1,5);
$d=$n2*nota2;
$n3=rand(1,5);
$p=$n3*nota3;
$n4=rand(1,5);
$q=$n4*nota4;
$suma=$c+$d+$p+$q;

echo "Alumno: $alumno <br> materia: $materia <br> $n1<br> $n2<br> $n3<br> $n4<br> La nota final es: $suma";