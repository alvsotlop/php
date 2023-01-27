
<?php
$pul=readline("Introduce el número de pulgadas: ");
$cm=$pul*2.54;
print $pul. " pulgadas son " .$cm. "cm. \n";
// Calculadora de pulgadas a grados

//Calculadora de Farenheit a grados


$far=readline("Introduce el número de grados Farenheit: ");
$gr=(($far-32)*5)/9;
print $far. " grados Farenheit son " .$gr. " grados. \n";



//Calculadora de sueldo

$hora=readline("Introduce el número de horas trabajadas: ");
$tarif=readline("Introduce la tarifa: ");
$total=$hora * $tarif;
print "Horas trabajadas = " .$hora. "\nTarifa = " .$tarif. "\nTOTAL= " .$total;









//Calcular nota

$not=readline("Introduce tu nota: ");

if ($not<5)
print "SUPENSO";
ELSE;
print "APROBAO";




//Días de la semana

$num=readline("Numero : ");
if ($num==1)
  {
    print("LUNES");
  }
else if ($num==2)
  {
    print("MARTES");
  }
else if ($num==3)
  {
    print("MIÉRCOLES"); 
  }
else if ($num==4)
  {
    print("JUEVES"); 
  }
else if ($num==5)
  {
    print("VIERNES"); 
  }
else if ($num==6)
  {
    print("SÁBADO"); 
  }
else if ($num==7)
  {
    print("DOMINGO"); 
  };



  $num=readline("Numero: ");
switch ($num) {
  case 1: 
    print("Lunes");
    break;
  case 2:
    print("Martes");
    break;
  case 3:
    print("Miércoles");
    break;
  case 4:
    print("Jueves");
    break;
  case 5: print("Viernes");
    break;
  case 6:
    print("Sábado");
    break;
  case 7:
    print("Domingo");
    break;
}


//Horóscopo chino


$anio=readline("Introduce tu año de nacimiento: ");
$resto = ($anio % 12);
switch ($resto) {
    case 0: print("Tu horóscopo chino es: Mono"); break;
    case 1: print("Tu horóscopo chino es: Gallo"); break;
    case 2: print("Tu horóscopo chino es: Perro"); break;
    case 3: print("Tu horóscopo chino es: Cerdo"); break;
    case 4: print("Tu horóscopo chino es: Rata"); break;
    case 5: print("Tu horóscopo chino es: Buey"); break;
    case 6: print("Tu horóscopo chino es: Tigre"); break;
    case 7: print("Tu horóscopo chino es: Conejo"); break;
    case 8: print("Tu horóscopo chino es: Dragon"); break;
    case 9: print("Tu horóscopo chino es: Serpiente"); break;
    case 10: print("Tu horóscopo chino es: Caballo"); break;
    case 11: print("Tu horóscopo chino es: Cabra"); break;
}



//Acertar el número aleatorio del 1 al 10


echo"Introduce un número del 1 al 10: ";
$num=readline();
$aleatorio=rand(1,10);
while ($num!=$aleatorio)
{
  print("No es el número, vuelve a intentarlo ");
  $num=readline();
}
echo "¡Este es el número! Enhorabuena";


//Acertar el número aleatorio del 1 al 10 con 3 intentos


const MAX_INTENTOS = 3;
$num_secreto = rand(1,10);

$intentos = 1;
$num = readline("Adivina un numero del 1 al 10: ");
while ($num_secreto!=$num && $intentos<MAX_INTENTOS)
  {
    $num = readline("Has fallado. Te quedan ".(MAX_INTENTOS-$intentos)." intentos, prueba otra vez: ");
    $intentos++;
  }
if ($num == $num_secreto)
{
  print("ENhorabuena!!");
}
else
{
  print("Lo siento, has agotado tus ".MAX_INTENTOS." intentos. El numero secreto era ".$num_secreto);
}


//Programa que imprima los múltiplos hasta 100 de un número introducido por el usuario


$num = readline("Ingrese un número: ");
for ($i = 1; $i <= 100; $i++) {
    if ($i % $num == 0) {
        echo $i . "\n";
    }
}



//Programa que imprima los múltiplos hasta 100 de un número introducido y los no múltiplos, con mensaje

$num= readline("Introduzca un número: ");
for ($i = 1; $i<=100 ; $i++)
$num= readline("Introduzca un número: ");
for ($i = 1; $i<=100 ; $i++)
  {
   if ($i % $num == 0)
    PRINT ($i. "  ES MÚLTIPLO \n" ) ;
   else 
    PRINT ($i. "  NO ES MÚLTIPLO \n");
  }
;
)
  {
   if ($i % $num == 0)
    PRINT ($i. "  ES MÚLTIPLO \n" ) ;
   else 
    PRINT ($i. "  NO ES MÚLTIPLO \n");
  }
;

//Factorial de un número

$num = readline("Introduzca un número: ");
$fact = 1;
if ($num >= 1){
    for ($i = 2; $i<=$num ; $i++)
  {
    $fact = $fact * $i;  
  }
    echo("El factorial de ".$num." es ".$fact);
}
else if ($num == 0)
{
  print("El factorial de 0 es 1");
}
else {
  print("No existe el factorial de ".$num);
}



//Array días de la semana

