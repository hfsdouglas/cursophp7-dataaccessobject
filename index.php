<?php
    require_once ("config.php");
    $sql = new Sql;
    
    /*$usuarios = $sql->select("SELECT * FROM tb_usuarios");
    echo json_encode($usuarios);*/

    $junior = new Usuarios();
    $junior->loadById(3);

    echo $junior;
