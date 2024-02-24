<?php 

 class Usuario{
    private $usuario;
    private $password;
    private $estado;
    private $rol;
    private $conexion;
//metodo constructor custom
public function crearUsuario($usuario,$password,$estado,$rol){
    $this->usuario=$usuario;
    $this->password=$password;
    $this->estado=$estado;
    $this->rol=$rol; 
}

//getter and setters

public function setUsuario($usuario){
    $this->usuario;
}
public function getUsuario(){
    return ($this->usuario);
}
public function setPassword($password){
    $this->password;
}
public function getPassword(){
    return ($this->password);
}
public function setEstado($estado){
    $this->estado;
}
public function getEstado(){
    return ($this->estado);
}
public function setRol($rol){
    $this->rol;
}
public function getRol(){
    return ($this->rol);
}

////metodos CRUD

public function agregarUsuario()
{
    ///TODO
}
public function consultarUsuario()
{
    ///TODO
}






 }

 