<!DOCTYPE html>
<html lang="es">
<head>
<?php include "./inc/head.php" ?>
    <title>Medical App | Pacientes</title> 
</head>
<body>
    <div class="preloader" id="load"> </div>
    <section class="main dasboard">
        <div class="container-fluid ">
       
          <div class="row">
           
            <div class="col-md-2 left p-0">
                 <div class="boxMenubar">
                    <div id="menu">
                    <?php include "./inc/menu.php" ?>
                    </div>
                 </div>
            </div>
            <div class="col-md-10 right scrollBody p-0">
                <div class="subHeader" id="subheader">
                <?php include "./inc/submenu.php" ?>
                </div>
                <div class="bodyBox"> 
                    <section class="p-5">
                        <div class="row">
                            <div class="col-md-4"></div>
                            <div class="col-md-3"></div>
                            <div class="col-md-5 d-flex justify-content-end gap-3">  <div class="btn btn-outline-success" id="btnRegistroCita">Registrar Paciente</div>
                            <input class="form-control me-2" type="search" placeholder="Buscar nombre…" aria-label="Search">
                        </div>
                        </div>
                        <h2>Pacientes</h2>
                    
                        <div class="row p-2">
                            <div class="col-md-12 bgLight p-3">
                                <p>Pacientes</p>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class="table-light">
                                            <tr>
                                                <td>UBICACIÓN</td>
                                                <td>ID</td>
                                                <td>DNI</td>
                                                <td>ESTADO</td>
                                                <td>TRATAMIENTO</td>
                                                <td>MÉDICO</td>
                                                <td>COOPAGO</td>
                                                <td>ACCIONES</td>
                                            </tr>
                                          </thead>
                                          <tbody> 
                                            <tr>
                                                <td>Bogota</td>
                                                <td>JUAN MANUEL PEREZ</td>
                                                <td>1287755254537</td>
                                                <td>ACTIVO</td>
                                                <td>Odontologia</td>
                                                <td>JOSE ARMANDO PEREZ</td>
                                                <td>$8.900 <small>COP</small></td>
                                                <td>
                                                    <ul class="actions">
                                                    <li><i class="fa-solid fa-eye"></i></li>
                                                    <li><i class="fa-solid fa-pen-to-square"></i></li>
                                                    <li><i class="fa-solid fa-trash"></i></li>
                                                </ul>
                                            </td>
                                            </tr>
                                            <tr>
                                                <td>Bogota</td>
                                                <td>PAULINA RUBIO</td>
                                                <td>1287755254537</td>
                                                <td>ACTIVO</td>
                                                <td>Cirujia</td>
                                                <td>JOSE ARMANDO PEREZ</td>
                                                <td>$18.900 <small>COP</small></td>
                                               <td> <ul class="actions">
                                                <li><i class="fa-solid fa-eye"></i></li>
                                                <li><i class="fa-solid fa-pen-to-square"></i></li>
                                                <li><i class="fa-solid fa-trash"></i></li>
                                            </ul></td>
                                            </tr>
                                            <tr>
                                                <td>Bogota</td>
                                                <td>PATRICIA ROBLES</td>
                                                <td>1287755254537</td>
                                                <td>ACTIVO</td>
                                                <td>Pediatria</td>
                                                <td>JOSE ARMANDO PEREZ</td>
                                                <td>$7.900 <small>COP</small></td>
                                                <td> <ul class="actions">
                                                    <li><i class="fa-solid fa-eye"></i></li>
                                                    <li><i class="fa-solid fa-pen-to-square"></i></li>
                                                    <li><i class="fa-solid fa-trash"></i></li>
                                                </ul></td>
                                            </tr>
                                         
                                        
                                          </tbody>
                                    </table>
                                  </div>
                            </div>
                          
                        </div>

                    </section>
                </div>
                <div id="footer"></div>
            </div>
          </div>
        </div>
    </section>


    <!-- Modal registro -->
<div class="modal fade" id="asignar_citas" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Registrar paciente</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="fa-solid fa-xmark"></i></button>
        </div>
        <div class="modal-body">
          <div class="bodyForm"> 
       
          <div class="row">
              <div class="col-md-9 d-flex justify-content-between flex-wrap gap-1">
                <div class="mb-1 w50"> 
                  <input type="text" class="form-control" id="name" placeholder="Nombres">
                </div>
                <div class="mb-1 w50"> 
                  <input type="text" class="form-control" id="lastname" placeholder="Apellidos">
                </div>
                <div class="mb-1 w50"> 
                  <input type="email" class="form-control" id="emal" placeholder="Email">
                </div>
                <div class="mb-1 w50"> 
                  <input type="text" class="form-control" id="phone" placeholder="Teléfono">
                </div>
                <div class="mb-1 w50"> 
                  <input type="password" class="form-control" id="passw" placeholder="Contraseña">
                </div>
                <div class="mb-1 w50"> 
                  <input type="password" class="form-control" id="passwconf" placeholder="Confirmar contraseña">
                </div>
                <div class="mb-1 w50"> 
                  <input type="text" class="form-control" id="country" placeholder="País">
                </div>
                <div class="mb-1 w50"> 
                  <input type="text" class="form-control" id="city" placeholder="Cuidad">
                </div>
                <div class="mb-1 w50"> 
                  <input type="text" class="form-control" id="address" placeholder="Dirección">
                </div>
                <div class="mb-1 w50"> 
                  <input type="text" class="form-control" id="barrio" placeholder="Barrio">
                </div>
                <div class="mb-1 mt-3 w100"> 
                  <h5>Información médica</h5>
                </div>
                <div class="mb-1 "> 
                  <input type="text" class="form-control" id="eps" placeholder="EPS">
                </div>
                <div class="mb-1 "> 
                  <input type="text" class="form-control" id="empleado-indep" placeholder="Empleado / Independiente">
                </div>
                <div class="mb-1"> 
                  <input type="text" class="form-control" id="estado_civil" placeholder="Estado civil">
                </div>
                <div class="mb-1"> 
                  <input type="text" class="form-control" id="tipo" placeholder="Grupo sanguineo">
                </div>
                <div class="mb-1"> 
                  <input type="text" class="form-control" id="alergias" placeholder="Alergias">
                </div>
                <div class="mb-1"> 
                  <input type="text" class="form-control" id="patologias" placeholder="Patologías">
                </div>
                <div class="mb-1"> 
                  <input type="text" class="form-control" id="hijos" placeholder="Cantidad de hijos">
                </div>
                <div class="mb-1"> 
                  <input type="text" class="form-control" id="hijosmenores" placeholder="Hijos menores">
                </div>
                <div class="mb-1"> 
                  <input type="text" class="form-control" id="caja" placeholder="Caja de compensación">
                </div>
                <div class="mb-1 w100"> 
                  <input type="text" class="form-control" id="contact" placeholder="Número a quien podamos contactar en caso de urgencia">
                </div>

              </div>
              <div class="col-md-3">
                <img src="data:image/jpeg;base64,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" class="img-fluid rounded-start" alt="...">
                <div class="input-group mb-1"> 
                  <input type="file" class="form-control" id="inputGroupFile01" style="font-size: 0.7rem;">
                </div>
              </div>
          </div>

          </div>
        </div>
        <div class="modal-footer d-flex justify-content-center">
          
          <button type="button" id="registrarCita" class="btn btn-primary"><i class="fa-solid fa-plus"></i> Registrar paciente</button>
        </div>
      </div>
    </div>
  </div>

 

<!-- load bootstrap js  -->
<?php include "./inc/scrips.php" ?>
<!-- script generals -->
<!-- inner scripts -->

<script>

    let btnRegistraCita = document.querySelector('#btnRegistroCita'),
        frameModalRegistro = new bootstrap.Modal(document.getElementById('asignar_citas'), {
            keyboard: false
        });

    let registrarCita  = document.querySelector('#registrarCita');

    btnRegistraCita.addEventListener('click',()=>{
        frameModalRegistro.show() 

    });

    registrarCita.addEventListener('click', ()=>{
      confirmRegPac()
    })





</script>
 
</body>
</html>