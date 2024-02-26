<!DOCTYPE html>
<html lang="es">
<head>
<?php include "./inc/head.php" ?>
    <title>Medical App | Medicamentos</title> 
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
                            <div class="col-md-4 d-flex justify-content-end">
                            <div class="btn btn-outline-success" id="btnRegistroCita">Registrar Medicamento</div>
                        </div>
                        </div>
                        <h2>Medicamentos</h2>
                 
                        <div class="row p-2">
                            <div class="col-md-12 bgLight p-3">
                                <p>Pacientes</p>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class="table-light">
                                            <tr>
                                                <td>FOTO</td> 
                                                <td>MARCA</td> 
                                                <td>CANTIDAD</td>
                                                <td>SKU</td>
                                                <td>NOMBRE</td>
                                                <td>STOCK</td>
                                                <td>PRECIO</td>
                                                <td>FARMACEUTICA</td>
                                                <td>REGISTRO INVIMA</td>
                                                <td>ACCIONES</td>
                                            </tr>
                                          </thead>
                                          <tbody> 
                                             
                                            <tr>
                                                <td>
                                                    <img src="https://lh3.googleusercontent.com/eGnz3HDFzNSbKAby4RktHHk8k1xEu57oxw7upVIxcLTvBsu0RxCKutLiKKoESFM2fPkp5tCmNPh7HH0uCoXuO_JGie8dMTn7_Kw_htRXYhPa3Jaa3Q=s650-rw" style="width: 50px; height: 50px; object-fit: cover; object-position: center;"  alt="">
                                                </td> 
                                                <td>Avene</td>
                                                <td>50 ml</td>
                                                <td>1287755254537</td>
                                                <td>Protector Solar Avene Antiedad Con Color Spf 50+ x 50 ml</td>
                                                <td>DISPONIBLE</td>
                                                <td>$122.950</td>
                                                <td>GENFAR</td>
                                                <td>NSOC77770-17CO</td>
                                                <td> <ul class="actions">
                                                  <li><i class="fa-solid fa-eye"></i></li>
                                                  <li><i class="fa-solid fa-pen-to-square"></i></li>
                                                  <li><i class="fa-solid fa-trash"></i></li>
                                              </ul></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <img src="https://lh3.googleusercontent.com/7yYieJn0D8YzJPZ0LDzbNPEhpi4LoMUu91Sd0bEeWzT3pjJXe0cad-mqsCmQJPgXww9e5RKaJgfgm1CuzAlYYOh5PShg-Bx_sw=s650-rw" style="width: 50px; height: 50px; object-fit: cover; object-position: center;"  alt="">
                                                </td> 
                                                <td>GENFAR</td>
                                                <td>3 tabletas</td>
                                                <td>1287755254537</td>
                                                <td>Azitromicina Genfar 500 mg Caja x 3 Tabletas </td>
                                                <td>DISPONIBLE</td>
                                                <td>$14.000</td>
                                                <td>GENFAR</td>
                                                <td>2022M-003819-R3 </td>
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
          <h5 class="modal-title" id="exampleModalLabel">Registrar Medicamento</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="fa-solid fa-xmark"></i></button>
        </div>
        <div class="modal-body">
            <div class="bodyForm"> 
       
                <div class="row">
                    <div class="col-md-9 d-flex justify-content-between flex-wrap gap-1">
                      <div class="mb-1 w50"> 
                        <input type="text" class="form-control" id="name" placeholder="Nombre">
                      </div>
                      <div class="mb-1 w50"> 
                        <textarea type="text" class="form-control" id="des" placeholder="Descripción"></textarea>
                      </div>
                      <div class="mb-1 w50"> 
                        <input type="text" class="form-control" id="brand" placeholder="Marca">
                      </div> 
                      <div class="mb-1 w50"> 
                        <input type="text" class="form-control" id="sku" placeholder="Sku">
                      </div>
                      <div class="mb-1 w50"> 
                        <input type="text" class="form-control" id="passw" placeholder="Farmaceutica">
                      </div>
                      <div class="mb-1 w50"> 
                        <input type="text" class="form-control" id="passwconf" placeholder="Tipo producto">
                      </div>
                      <div class="mb-1 w50"> 
                        <input type="text" class="form-control" id="country" placeholder="País">
                      </div>
                      <div class="mb-1"> 
                        <small>Cantidad de productos</small>
                        <input type="number" class="form-control" id="ctn" placeholder="Stock">
                      </div>
                      <div class="mb-1"> 
                        <small>Cantidad permitida x persona</small>
                        <input type="number" class="form-control" id="ctn" placeholder="Cantidad">
                      </div>
                      <div class="daySelect w50 mt-3"> 
                        <div class="halfDays">
                          <div class="halfMorning ">
                            <h6>Tipo de uso</h6>
                            <ul class="slots">
                              <li>Prescripción</li>
                              <li>Limitado</li>
                              <li class="select">General</li> 
                            </ul>
                          </div> 
                        </div>
          
                     </div> 
                      <div class="mb-1 w50"> 
                        <small>Fecha expedicion</small>
                        <input type="date" class="form-control" id="address" placeholder="Fecha vencimiento">
                      </div>
                      <div class="mb-1 w50"> 
                        <small>Fecha vencimiento</small>
                        <input type="date" class="form-control" id="address" placeholder="Fecha vencimiento">
                      </div>
                      
                       
      
                    </div>
                    <div class="col-md-3">
                      <img src="https://lh3.googleusercontent.com/7yYieJn0D8YzJPZ0LDzbNPEhpi4LoMUu91Sd0bEeWzT3pjJXe0cad-mqsCmQJPgXww9e5RKaJgfgm1CuzAlYYOh5PShg-Bx_sw=s360" class="img-fluid rounded-start" alt="...">
                      <div class="input-group mb-1"> 
                        <input type="file" class="form-control" id="inputGroupFile01" style="font-size: 0.7rem;">
                      </div>
                    </div>
                </div>
      
                </div>
        </div>
        <div class="modal-footer d-flex justify-content-center">
          
          <button type="button" id="registrarCita" class="btn btn-primary"><i class="fa-solid fa-plus"></i> Registrar medicamento</button>
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
        confirmMedicamento()
    })





</script>
 
</body>
</html>