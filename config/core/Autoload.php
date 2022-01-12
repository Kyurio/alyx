<?php

  namespace autoload;

  require_once("../../config/core/Conexion.config.php");


  function Autoload($clase){

    require_once("../../config/models/".$clase.".php");

  }

  spl_autoload_register("Autoload");

 ?>
