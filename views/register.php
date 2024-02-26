<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">
<head>
<?php include "./inc/head.php" ?>
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
                        <img src="./images/logo.png" class="img-fluid" alt="">
                    </div>
                    <h3 class="pt-4 text-center">Registro de usuario</h3> 
                    <form action="../controller/signup.php" method="post" >
                    <div class="boxFomr pt-3 pb-5">
                        <div class="mb-3"> 
                            <input type="text" class="form-control" name="name" placeholder="Nombre" require>
                          </div>
                        <div class="mb-3"> 
                            <input type="text" class="form-control" name="surname" placeholder="Apellido" require>
                          </div>
                        <div class="mb-3"> 
                            <input type="email" class="form-control" name="email" placeholder="Email" require>
                          </div>
                        <div class="mb-3"> 
                            <input type="password" class="form-control" name="pass" placeholder="Contraseña" require>
                          </div>
                    
                    <div class="row p-4">
                        <div class="col">
                            <a href="./index.php" class="btn btn-line-wt">Volver</a>
                        </div>
                        <div class="col">
                            <button class="btn" name="btnregister"  type="submit">Registrar</button>
                            <!-- <a href="../dasboard/dashboard.php" class="btn">Registrar</a> -->
                        </div>
                    </div>
                         
                    </div>
                    </form>
                </div>
            </div>
          </div>
        </div>
    </section>
<div id="footer"></div>
<!-- load bootstrap js  --> 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script> 
<!-- script generals -->
<!-- inner scripts -->
 <script>
  
 </script>
</body>
</html>