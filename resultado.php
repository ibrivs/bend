<?php
  //Nombre
  if (isset($_GET["nombre"])) {
    echo "<h3>Alumno:</h3>" . $_GET["nombre"] . "<br>";
  } else {
    echo "El nombre del alumno no ha sido ingresado.";
  }
  //NOTAS
  //1-2
  if ($_GET ["nota"] < 3 && $_GET["nota"]>0) {
    echo "<h3>Muy deficiente.</h3>" ;
  }
  //3-5
  if ($_GET ["nota"] >2 && $_GET["nota"] <6 ) {
   echo "<h3>Insuficiente</h3>";
  }
  //6-7
  if ($_GET ["nota"]>5 && $_GET ["nota"] <8) {
   echo "<h3> Bien </h3>";
  }
  //8-9
  if ($_GET["nota"]>7 && $_GET["nota"]<10) {
  echo "<h3> Notable </h3>";
  }
  //10
  if ($_GET["nota"]==10) {
    echo "<h3> Sobresaliente </h3>";
  }
  //VACIO o 0+10
  if (isset($_GET["nota"])) {
    if (is_numeric($_GET["nota"]) && $_GET["nota"]>0 && $_GET["nota"]<10) {
      echo "<br>" . "Nota:" . $_GET["nota"]. "<br>";
    } else {
      echo "<h3>La nota ingresada es invalida</h3>";
    }
  } else {
    echo "<h3>No se ingreso nota.</h3>";
  }
 ?>
