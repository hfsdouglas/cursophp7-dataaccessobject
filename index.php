<?php
    require_once ("config.php");
    
    /*$sql = new Sql;
    $usuarios = $sql->select("SELECT * FROM tb_usuarios");
    echo json_encode($usuarios);*/

    //Carrega um usuário
    //$junior = new Usuarios();
    //$junior->loadById(3);
    //echo $junior;

    //Carrega uma lista
    //$lista = Usuarios::getList();
    //echo json_encode($lista);

    //Carrega uma lista de usuarios pelo login 
    //$search = Usuarios::search("doug");
    //echo json_encode($search);

    //Carrega um usuário usando o login e senha
    $usuario = new Usuarios;
    $usuario->login("user", "12345");

    echo $usuario;
