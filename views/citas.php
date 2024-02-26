<!DOCTYPE html>
<html lang="es">
<head>
<?php include "./inc/head.php" ?>
    <title>Medical App | Citas</title> 
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
                            <div class="col-md-4"></div>
                            <div class="col-md-4">Asignación cita: <div class="btn btn-outline-success" id="btnRegistroCita">Agendar una cita</div>
                        </div>
                        </div>
                        <h2>Mis citas</h2>
                      
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
                                                <td>COOPAGO</td>
                                                <td>USUARIO</td>
                                                <td>TRATAMIENTO</td>
                                                <td>ACCIONES</td>
                                            </tr>
                                          </thead>
                                          <tbody> 
                                            <tr>
                                                <td>Bogota</td>
                                                <td>3746</td>
                                                <td>1287755254537</td>
                                                <td>ACTIVO</td>
                                                <td>$19,291</td>
                                                <td>JOSE ARMANDO PEREZ</td>
                                                <td>NO</td>
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
                                                <td>$19,291</td>
                                                <td>JOSE ARMANDO PEREZ</td>
                                                <td>NO</td>
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
                                                <td>$19,291</td>
                                                <td>JOSE ARMANDO PEREZ</td>
                                                <td>NO</td>
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
    <div class="modal-dialog  modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Asignación de citas :  Hoy, 23 Feb</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="fa-solid fa-xmark"></i></button>
        </div>
        <div class="modal-body">
          <div class="bodyForm"> 
           <div class="selectMedic">
            <h6>Médico Disponible</h6>
            <select class="form-select" aria-label="Default select example">
              <option selected>Seleccione médico</option>
              <option value="1">Dr. Shruti Kedia</option>
              <option value="2">Dr. Shruti Kedia</option>
              <option value="3">Dr. Shruti Kedia</option>
            </select>
            <div class="card mb-3" style="max-width: 540px;">
              <div class="row g-0">
                <div class="col-md-4">
                  <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRvxv-aOP1Kg25NKYqPdJj3hx0jmJEydfAGYCaLywnW6kiyFkrYsockTqIZOArz2v9SRuY&usqp=CAU" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <h5 class="card-title">Dr. Shruti Kedia</h5>
                    <p class="card-text">Dental Clinic</p>
                    
                     
                  </div>
                </div>
              </div>
            </div>
           </div>
           <div class="daySelect">
              <ul>
                <li class="itemDayToday">
                    <div class="boxItem">
                      <h3>Hoy, 23 Feb</h3>
                      <small>No hay horarios disponibles</small>
                    </div>
                </li>
                <li class="itemDayTomorow select">
                  <div class="boxItem">
                    <h3>Mañana, 24 Feb</h3>
                    <small>9 horarios disponibles</small>
                  </div>
                </li>
                <li class="itemDayNextDay">
                  <div class="boxItem">
                    <h3>Viernes, 25 Feb</h3>
                    <small>9 horarios disponibles</small>
                  </div>  
                </li>
              </ul>

              <div class="halfDays">
                <div class="halfMorning">
                  <h6>En la mañana:horarios disponibles</h6>
                  <ul class="slots">
                    <li>9:00 AM</li>
                    <li>9:30 AM</li>
                    <li class="select">10:00 AM</li>
                    <li>10:30 AM</li>
                    <li>11:00 AM</li>
                    <li>11:30 AM</li>
                    <li>12:00 PM</li>
                  </ul>
                </div>
                <div class="halfAfternoon">
                  <h6>En la tarde:horarios disponibles</h6>
                  <ul class="slots">
                    <li>5:00 PM</li>
                    <li>5:30 PM</li>
                    <li>6:00 PM</li>
                    <li>6:30 PM</li>
                    <li>7:00 PM</li>
                  </ul>
                </div>
              </div>

           </div> 

          </div>
        </div>
        <div class="modal-footer d-flex justify-content-center">
          
          <button type="button" id="registrarCita" class="btn btn-primary"><i class="fa-solid fa-plus"></i> Asignar cita medica</button>
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
      confirmReg()
    })





</script>
 
</body>
</html>