<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vectores</title>
</head>
<body>
  <?php
  $dias[0] ="Lunes";
  $dias[1] ="Martes";
  $dias[2] ="Miercoles";
  $dias[3] ="Jueves";
  $dias[4] ="Viernes";
  $dias[5] ="Sabado";
  $dias[6] ="Domingo";

echo "$dias[0] <br>";
echo "$dias[6] <br>";

/*2)*/

$coches = array("Toyota", "Ford", "Honda", "Chevrolet", "BMW", "Mercedes-Benz", "Audi" , "Ferrari");
echo  "$coches[7] <br>";

/*3)*/ 

$importe = array("229392.22","2984.99" ,"38924.434" ,"398634.45");

echo "$importe[1] <br>";

/* 4) */

$confirmado = array(true, false, true,false,false,true);

echo "$confirmado[0] <br>";

/*5)*/

$jugador = array("Banegas" , "Ledesma" , "willers" , "Salvia" ,"Gomez");

echo  "La alineación del equipo está compuesta por " . $jugador[0] . ", " . $jugador[1] . ", " . $jugador[2] . ", " . $jugador[3] . ", y " . $jugador[4] . ". <br>";

/*6*/

$meses = array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
sort($meses);

foreach ($meses as $mes){
  echo $mes ." <br>";
}

/*7)*/

$us = [
  "us1" => "1234",
  "us2" => "2341",
  "us3" => "3412",
  "us4" => "4123",
  "us5" => "4321",
];

foreach ($us as $us => $contraseña){
  echo $us . ": clave: " . $contraseña . "<br>";
};


/* 8) */

$año = [
"enero" => "31",
"febrero" => "28",
"marzo" => "31",
"abril" => "30",
"mayo" => "31",
"junio" => "30",
"julio" => "31",
"agosto" => "31",
"septiembre" => "30",
"octubre" => "31",
"noviembre" => "30",
"diciembre" => "31",
];

foreach ($año as $m => $dia){
  echo $m ."  ". $dia ."<br>";
};









  ?>


</body>
</html>