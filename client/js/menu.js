/**
 * CONSTANT MENU
 * FRANCISCO JOSE MUÑETON
 * 22/10/23
 */
let menuPrincipal =`
   <div class="headMenu">
   <div class="logo mx-auto pt-3 pb-3">
    <img src="https://famu.com.co/logo2.png" class="img-fluid" alt="">
    </div>
   </div>  
   <div class="boxMenu">
    <ul>
        <li>
            <a href="../../screen/dasboard/dashboard.html" class="active"><i class="fa-solid fa-chart-simple"></i> <span>Dasboard</span> </a>
        </li> 
        <li>
             <a href="../../screen/dasboard/dashboard.html"><i class="fa-solid fa-calendar-check"></i> <span>Agendar Citas</span> </a>
        </li> 
        <li>
            <a href="../../screen/dasboard/dashboard.html"><i class="fa-solid fa-users"></i> <span>Pacientes</span> </a>
        </li>
        <li>
            <a href="../../screen/dasboard/dashboard.html"><i class="fa-solid fa-user-doctor"></i> <span>Medicos</span> </a>
        </li>
        <li>
            <a href="../../screen/dasboard/dashboard.html"><i class="fa-solid fa-person"></i> <span>Empleados</span> </a>
        </li>
        <li>
            <a href="../../screen/consultorios/consultorios.html"><i class="fa-solid fa-bed"></i> <span>Consultorios</span> </a>
        </li>
        <li>
            <a href="../../screen/medicamentos/medicamentos.html"><i class="fa-solid fa-barcode"></i> <span>Medicamentos</span> </a>
        </li>
        <li>
            <a href="../../screen/tratamientos/tratamientos.html"><i class="fa-solid fa-user-nurse"></i> <span>Tratamientos</span> </a>
        </li>
    </ul>
   </div>    
`;
 

$(()=>{  
    $("#menu").append(menuPrincipal); 
 
    //action menu active

    setTimeout(()=>{
        let loc = window.location.pathname.slice().toLocaleLowerCase().split('.html').join('');
    console.log(loc)
   
       }, 1000) 
})