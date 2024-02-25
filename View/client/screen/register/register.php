<!DOCTYPE html>
<html lang="es">
<head>
<?php include "../../inc/head.php" ?>
    <title>Medical App / Registro</title>
</head>
<body>
 
    <section class="main login">
        <div class="container-fluid ">
          <div class="row">
            <div class="col-md-6 left">
                <div class="boxImg"></div>
            </div>
            <div class="col-md-6 right d-flex justify-content-center align-items-center">
                <div class="boxContent pt-5 pb-5">
                    <div class="logo mx-auto mt-5">
                        <img src="images/logo.png" class="img-fluid" alt="">
                    </div>
                    <p class="pt-4 text-center">¡Bienvenido de nuevo! Por favor, ingrese a su cuenta.</p>
                    <div class="boxFomr pt-3 pb-5">
                        <div class="mb-3"> 
                            <input type="text" class="form-control" id="name" placeholder="Nombre de usuario">
                          </div>
                        <div class="mb-3"> 
                            <input type="password" class="form-control" id="pass" placeholder="Contraseña">
                          </div>
                    <div class="boxLost d-flex justify-content-between">  
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                            <label class="form-check-label" for="flexCheckChecked">
                                Recordar mis datos
                            </label>
                          </div> 
                          <div class="form-check"> 
                            <label class="form-check-label" >
                              <a href="">Olvido la contraseña</a>
                            </label>
                          </div>
                         
                    </div>
                    <div class="row p-4">
                        <div class="col">
                            <a href="screen/login/dashboard.php" class="btn btn-line-wt">Crear cuenta</a>
                        </div>
                        <div class="col">
                            <a href="screen/dasboard/dashboard.php" class="btn">Ingresar</a>
                        </div>
                    </div>
                         
                    </div>
                </div>
            </div>
          </div>
        </div>
    </section>
<div id="footer"></div>
<!-- load bootstrap js  -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script type="text/javascript" src="js/menu.js"></script>
<script type="text/javascript" src="../../js/global.js"></script> 
<!-- script generals -->
<!-- inner scripts -->
 
</body>
</html>