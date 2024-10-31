<?php
  session_name("Sesion-prueba");
  session_start();

  echo $_SESSION['username'];
  echo $_SESSION['age'];
  
  unset($_SESSION['username']);
  
  
  echo $_SESSION['username'];
  echo $_SESSION['age'];

  //muestra gabriel1919, se salta username porque hemos eliminado la variable de sesion username con unset. (linea 8)

  //terminar sesion
  session_destroy();

?>