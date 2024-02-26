<div class="headMenu">
   <div class="logo mx-auto pt-3 pb-3">
    <img src="https://famu.com.co/logo2.png" class="img-fluid" alt="">
    </div>
   </div>  
   <div class="boxMenu">
 
    <ul>
        <li>
            <a href="./dashboard.php" <?php echo ($_SERVER['PHP_SELF'] === '/views/dashboard.php') ? 'class="active"' : ''; ?> ><i class="fa-solid fa-chart-simple"></i> <span>Dasboard</span> </a>
        </li> 
        <li>
             <a href="./citas.php" <?php echo ($_SERVER['PHP_SELF'] === '/views/citas.php') ? 'class="active"' : ''; ?>><i class="fa-solid fa-calendar-check"></i> <span>Agendar Citas</span> </a>
        </li> 
        <li>
            <a href="./pacientes.php" <?php echo ($_SERVER['PHP_SELF'] === '/views/pacientes.php') ? 'class="active"' : ''; ?>><i class="fa-solid fa-users"></i> <span>Pacientes</span> </a>
        </li>
        <li>
            <a href="./medicos.php" <?php echo ($_SERVER['PHP_SELF'] === '/views/medicos.php') ? 'class="active"' : ''; ?>><i class="fa-solid fa-user-doctor"></i> <span>Medicos</span> </a>
        </li>
        <li>
            <a href="./empleados.php" <?php echo ($_SERVER['PHP_SELF'] === '/views/empleados.php') ? 'class="active"' : ''; ?>><i class="fa-solid fa-person"></i> <span>Empleados</span> </a>
        </li>
        <li>
            <a href="./consultorios.php" <?php echo ($_SERVER['PHP_SELF'] === '/views/consultorios.php') ? 'class="active"' : ''; ?>><i class="fa-solid fa-bed"></i> <span>Consultorios</span> </a>
        </li>
        <li>
            <a href="./medicamentos.php" <?php echo ($_SERVER['PHP_SELF'] === '/views/medicamentos.php') ? 'class="active"' : ''; ?>><i class="fa-solid fa-barcode"></i> <span>Medicamentos</span> </a>
        </li>
        <li>
            <a href="./tratamientos.php" <?php echo ($_SERVER['PHP_SELF'] === '/views/tratamientos.php') ? 'class="active"' : ''; ?>><i class="fa-solid fa-user-nurse"></i> <span>Tratamientos</span> </a>
        </li>

        
    </ul>
   </div>    