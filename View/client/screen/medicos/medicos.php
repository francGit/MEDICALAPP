<!DOCTYPE html>
<html lang="es">
<head>
<?php include "../../inc/head.php" ?>
    <title>Medical App | Medicos</title> 
</head>
<body>
    <div class="preloader" id="load"> </div>
    <section class="main dasboard">
        <div class="container-fluid ">
       
          <div class="row">
           
            <div class="col-md-2 left p-0">
                 <div class="boxMenubar">
                    <div id="menu">
                    <?php include "../../inc/menu.php" ?>
                    </div>
                 </div>
            </div>
            <div class="col-md-10 right scrollBody p-0">
                <div class="subHeader" id="subheader">
                <?php include "../../inc/submenu.php" ?>
                </div>
                <div class="bodyBox"> 
                    <section class="p-5">
                        <div class="row">
                            <div class="col-md-4"></div>
                            <div class="col-md-4"></div>
                            <div class="col-md-4 d-flex justify-content-end gap-3">  <div class="btn btn-outline-success" id="btnRegistroCita">Registrar médico</div>
                            <input class="form-control me-2" type="search" placeholder="Buscar nombre…" aria-label="Search">
                        </div>
                        </div>
                        <h2>Médicos</h2>
                    
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
                                                <td>ESPECIALIDAD</td>
                                                <td>MÉDICO</td>
                                                <td>CONSULTORIO</td>
                                                <td>ACCIONES</td>
                                            </tr>
                                          </thead>
                                          <tbody> 
                                            <tr>
                                                <td>Bogota</td>
                                                <td>3746</td>
                                                <td>1287755254537</td>
                                                <td>ACTIVO</td>
                                                <td>Odontologo</td>
                                                <td>JOSE ARMANDO PEREZ</td>
                                                <td>101</td>
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
                                                <td>3746</td>
                                                <td>1287755254537</td>
                                                <td>ACTIVO</td>
                                                <td>Cirujano PLastico</td>
                                                <td>JOSE ARMANDO PEREZ</td>
                                                <td>200</td>
                                               <td> <ul class="actions">
                                                <li><i class="fa-solid fa-eye"></i></li>
                                                <li><i class="fa-solid fa-pen-to-square"></i></li>
                                                <li><i class="fa-solid fa-trash"></i></li>
                                            </ul></td>
                                            </tr>
                                            <tr>
                                                <td>Bogota</td>
                                                <td>3746</td>
                                                <td>1287755254537</td>
                                                <td>ACTIVO</td>
                                                <td>Pediatra</td>
                                                <td>JOSE ARMANDO PEREZ</td>
                                                <td>222</td>
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
          <h5 class="modal-title" id="exampleModalLabel">Registrar médico</h5>
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
                  <h5>Información profesional</h5>
                </div>
                <div class="mb-1 w50"> 
                  <input type="text" class="form-control" id="profesion" placeholder="Especialidad">
                </div>
                <div class="mb-1 w50"> 
                  <input type="text" class="form-control" id="dniprofesion" placeholder="Número de tarjeta profesional">
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
                <div class="mb-1 w100"> 
                  <input type="text" class="form-control" id="contact" placeholder="Número a quien podamos contactar en caso de urgencia">
                </div>

              </div>
              <div class="col-md-3">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRvxv-aOP1Kg25NKYqPdJj3hx0jmJEydfAGYCaLywnW6kiyFkrYsockTqIZOArz2v9SRuY&usqp=CAU" class="img-fluid rounded-start" alt="...">
                <div class="input-group mb-1"> 
                  <input type="file" class="form-control" id="inputGroupFile01" style="font-size: 0.7rem;">
                </div>
              </div>
          </div>

          </div>
        </div>
        <div class="modal-footer d-flex justify-content-center">
          
          <button type="button" id="registrarCita" class="btn btn-primary"><i class="fa-solid fa-plus"></i> Registrar médico</button>
        </div>
      </div>
    </div>
  </div>

 

<!-- load bootstrap js  -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script> 
<script type="text/javascript" src="../../js/global.js"></script>  
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
      confirmRegMed()
    })





</script>
 
</body>
</html>