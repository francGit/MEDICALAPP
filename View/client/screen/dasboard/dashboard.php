<!DOCTYPE html>
<html lang="es">
<head>
   <?php include "../../inc/head.php" ?>
    <title>Medical App | Dasboard</title>
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

                </div>
                <div class="bodyBox"> 
                    <section class="p-5">
                        <h2>Overview</h2>
                        <div class="row mb-3">
                            <div class="col-md-4">
                                <div class="card cardResult" >
                                    <div class="card-body">
                                      <span class="titleCard">Total de citas</span>  
                                      <div class="row">
                                        <div class="col-md-6 d-flex align-items-end">
                                            <div class="data">
                                                <h2>246K</h2>
                                                <span class="noUp"> <i class="fa-solid fa-arrow-down"></i> 13.8%</span>
                                            </div>
                                             
                                        </div>
                                        <div class="col-md-6">
                                            <div class="boxChart">
                                                <canvas id="myChart"></canvas>
                                              </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                            </div>
                           
                            <div class="col-md-4">
                                <div class="card cardResult" >
                                    <div class="card-body">
                                      <span class="titleCard">Medicamentos entregados</span> 
                                     
                                      <div class="row">
                                        <div class="col-md-6 d-flex align-items-end">
                                            <div class="data">
                                                <h2>246K</h2>
                                                <span class="okUp"> <i class="fa-solid fa-arrow-up"></i> 43.8%</span>
                                            </div>
                                             
                                        </div>
                                        <div class="col-md-6">
                                            <div class="boxChart">
                                                <canvas id="myChart2"></canvas>
                                              </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                            </div>

                            <div class="col-md-4">
                                <div class="card cardResult" >
                                    <div class="card-body">
                                      <span class="titleCard">Total Pacientes</span> 
                                     
                                      <div class="row">
                                        <div class="col-md-6 d-flex align-items-end">
                                            <div class="data">
                                                <h2>246K</h2>
                                                <span class="noUp"> <i class="fa-solid fa-arrow-down"></i> 13.8%</span>
                                            </div>
                                             
                                        </div>
                                        <div class="col-md-6">
                                            <div class="boxChart">
                                                <canvas id="myChart3"></canvas>
                                              </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                            </div>


                        </div>
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
                                            </tr>
                                            <tr>
                                                <td>Bogota</td>
                                                <td>3746</td>
                                                <td>1287755254537</td>
                                                <td>ACTIVO</td>
                                                <td>$19,291</td>
                                                <td>JOSE ARMANDO PEREZ</td>
                                                <td>NO</td>
                                            </tr>
                                            <tr>
                                                <td>Bogota</td>
                                                <td>3746</td>
                                                <td>1287755254537</td>
                                                <td>ACTIVO</td>
                                                <td>$19,291</td>
                                                <td>JOSE ARMANDO PEREZ</td>
                                                <td>NO</td>
                                            </tr>
                                            <tr>
                                                <td>Bogota</td>
                                                <td>3746</td>
                                                <td>1287755254537</td>
                                                <td>ACTIVO</td>
                                                <td>$19,291</td>
                                                <td>JOSE ARMANDO PEREZ</td>
                                                <td>NO</td>
                                            </tr>
                                            <tr>
                                                <td>Bogota</td>
                                                <td>3746</td>
                                                <td>1287755254537</td>
                                                <td>ACTIVO</td>
                                                <td>$19,291</td>
                                                <td>JOSE ARMANDO PEREZ</td>
                                                <td>NO</td>
                                            </tr>
                                            <tr>
                                                <td>Bogota</td>
                                                <td>3746</td>
                                                <td>1287755254537</td>
                                                <td>ACTIVO</td>
                                                <td>$19,291</td>
                                                <td>JOSE ARMANDO PEREZ</td>
                                                <td>NO</td>
                                            </tr>
                                            <tr>
                                                <td>Bogota</td>
                                                <td>3746</td>
                                                <td>1287755254537</td>
                                                <td>ACTIVO</td>
                                                <td>$19,291</td>
                                                <td>JOSE ARMANDO PEREZ</td>
                                                <td>NO</td>
                                            </tr>
                                            <tr>
                                                <td>Bogota</td>
                                                <td>3746</td>
                                                <td>1287755254537</td>
                                                <td>ACTIVO</td>
                                                <td>$19,291</td>
                                                <td>JOSE ARMANDO PEREZ</td>
                                                <td>NO</td>
                                            </tr>
                                            <tr>
                                                <td>Bogota</td>
                                                <td>3746</td>
                                                <td>1287755254537</td>
                                                <td>ACTIVO</td>
                                                <td>$19,291</td>
                                                <td>JOSE ARMANDO PEREZ</td>
                                                <td>NO</td>
                                            </tr>
                                            <tr>
                                                <td>Bogota</td>
                                                <td>3746</td>
                                                <td>1287755254537</td>
                                                <td>ACTIVO</td>
                                                <td>$19,291</td>
                                                <td>JOSE ARMANDO PEREZ</td>
                                                <td>NO</td>
                                            </tr>
                                            <tr>
                                                <td>Bogota</td>
                                                <td>3746</td>
                                                <td>1287755254537</td>
                                                <td>ACTIVO</td>
                                                <td>$19,291</td>
                                                <td>JOSE ARMANDO PEREZ</td>
                                                <td>NO</td>
                                            </tr>
                                            <tr>
                                                <td>Bogota</td>
                                                <td>3746</td>
                                                <td>1287755254537</td>
                                                <td>ACTIVO</td>
                                                <td>$19,291</td>
                                                <td>JOSE ARMANDO PEREZ</td>
                                                <td>NO</td>
                                            </tr>
                                            <tr>
                                                <td>Bogota</td>
                                                <td>3746</td>
                                                <td>1287755254537</td>
                                                <td>ACTIVO</td>
                                                <td>$19,291</td>
                                                <td>JOSE ARMANDO PEREZ</td>
                                                <td>NO</td>
                                            </tr>
                                            <tr>
                                                <td>Bogota</td>
                                                <td>3746</td>
                                                <td>1287755254537</td>
                                                <td>ACTIVO</td>
                                                <td>$19,291</td>
                                                <td>JOSE ARMANDO PEREZ</td>
                                                <td>NO</td>
                                            </tr>
                                            <tr>
                                                <td>Bogota</td>
                                                <td>3746</td>
                                                <td>1287755254537</td>
                                                <td>ACTIVO</td>
                                                <td>$19,291</td>
                                                <td>JOSE ARMANDO PEREZ</td>
                                                <td>NO</td>
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

<!-- load bootstrap js  -->
<?php include "../../inc/scrips.php" ?>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<!-- script generals -->
<!-- inner scripts -->
<script>
    const ctx = document.getElementById('myChart');
    const ctx2 = document.getElementById('myChart2');
    const ctx3 = document.getElementById('myChart3');
    
    new Chart(ctx, {
      type: 'bar',
      data: {
        labels: ['EN', 'FEB', 'MAR', 'MAY', 'JUN', 'JUL'],
        datasets: [{
          label: '# of Votes',
          data: [12, 19, 3, 5, 2, 3],
          borderWidth: 1
        }]
      },
      options: {
        scales: {
          y: {
            beginAtZero: true
          }
        }
      }
    });
    new Chart(ctx2, {
      type: 'bar',
      data: {
        labels: ['EN', 'FEB', 'MAR', 'MAY', 'JUN', 'JUL'],
        datasets: [{
          label: '# of Votes',
          data: [12, 19, 3, 5, 2, 3],
          borderWidth: 1
        }]
      },
      options: {
        scales: {
          y: {
            beginAtZero: true
          }
        }
      }
    });
    new Chart(ctx3, {
      type: 'bar',
      data: {
        labels: ['EN', 'FEB', 'MAR', 'MAY', 'JUN', 'JUL'],
        datasets: [{
          label: '# of Votes',
          data: [12, 19, 3, 5, 2, 3],
          borderWidth: 1
        }]
      },
      options: {
        scales: {
          y: {
            beginAtZero: true
          }
        }
      }
    });
  </script>

</body>
</html>