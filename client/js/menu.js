let menuPrincipal =`
   <div class="headMenu">
   <div class="logo mx-auto pt-3 pb-3">
    <img src="https://famu.com.co/logo2.png" class="img-fluid" alt="">
    </div>
   </div>  
   <div class="boxMenu">
    <ul>
        <li>
            <a class="active"><i class="fa-solid fa-chart-simple"></i> <span>Dasboard</span> </a>
        </li> 
        <li>
             <a><i class="fa-solid fa-calendar-check"></i> <span>Agendar Citas</span> </a>
        </li> 
        <li>
            <a><i class="fa-solid fa-users"></i> <span>Pacientes</span> </a>
        </li>
        <li>
            <a><i class="fa-solid fa-user-doctor"></i> <span>Medicos</span> </a>
        </li>
        <li>
            <a><i class="fa-solid fa-person"></i> <span>Empleados</span> </a>
        </li>
        <li>
            <a><i class="fa-solid fa-bed"></i> <span>Consultorios</span> </a>
        </li>
        <li>
            <a><i class="fa-solid fa-barcode"></i> <span>Medicamentos</span> </a>
        </li>
    </ul>
   </div>    
`;
 

$(()=>{  
    $("#menu").append(menuPrincipal); 
 
    //action menu active

    // setTimeout(()=>{
    //     let path = location.pathname.slice(1).toLocaleLowerCase().split('.html').join('');
    //     $('.'+path).addClass('item-menu-active')
    //     console.log(path)
   
    //    }, 1000) 
})