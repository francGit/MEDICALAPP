let tomorrow = 'Mañana, 24 Feb';
const footer  = `
    <secction class="d-flex flex-column justify-content-center align-items-center p-3">
        <small>Distribuido por: Francisco Muñeton - Ferney de Jesus Jaramillo</small>
        <small>2023 - sena.edu.co</small>
    </section>
`;

let submenu = `

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <div class="submenu">
        <div class="search">
        <form class="d-flex" role="search">
      <input class="form-control me-2" type="search" placeholder="Escribir..." aria-label="Search">
      <button class="btn btn-outline-success"  >Buscar</button>
    </form>
    </div> 
        <div class="mics">
            <ul>
                <li><i class="fa-solid fa-life-ring"></i></li>
                <li><i class="fa-solid fa-comments"></i></li>
                <li><i class="fa-solid fa-bell"></i></li>
                <li>
                    <div class="userBox">
                        <p>ADMIN</p>
                        <figure>
                            <img src="data:image/jpeg;base64,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" width="60px" />
                        </figure>
                    </div> 
                </li>
            </ul>
        </div>
    </div>
`;

const load = `
<div class="boxPreloader">
<img src="https://famu.com.co/loader.gif" alt="">
<small>Cargando...</small>
</div>
`



$(()=>{
    let blockFooter = document.querySelector('#footer');
    let blockSubmenu = document.querySelector('#subheader');
    let preload = document.querySelector('.preloader');
    $(blockFooter).append(footer);
    $(blockSubmenu).append(submenu);
    $(preload).append(load);

    setTimeout(function(){
        $(preload).fadeOut('slow'); 
    },2000)
})



function confirmReg(){
    frameModalRegistro.hide() 
    Swal.fire({ 
        html:`
        <div class="boxTime">
            <h2>Cita asignada para</h2>  
        </div>
        <div class="boxResultHour">
        <h4>${tomorrow} <br> <small>10:00 AM</small></h4> <p>No olvide llegar 20min antes.</p> 
        </div>
        `,
        icon: 'success',
        confirmButtonText: 'Cerrar'
      })
      
      
}
function confirmRegMed(){
    frameModalRegistro.hide() 
    Swal.fire({ 
        html:`
        <div class="boxTime">
            <h2>Médico registrado</h2>  
        </div>
        <div class="boxResultHour">
        <h4>Juana Castillo <small>Especialista Dental</small></h4> <p>8 años de experiencia</p> 
        </div>
        `,
        icon: 'success',
        confirmButtonText: 'Cerrar'
      })
      
      
}
function confirmRegPac(){
    frameModalRegistro.hide() 
    Swal.fire({ 
        html:`
        <div class="boxTime">
            <h2>Paciente registrado</h2>  
        </div>
        <div class="boxResultHour">
        <h4>Juana Castillo </h4> <p><small>Coopago</small> $12.000 <small>COP</small></p> 
        </div>
        `,
        icon: 'success',
        confirmButtonText: 'Cerrar'
      })
      
      
}
function confirmRegEmpleado(){
    frameModalRegistro.hide() 
    Swal.fire({ 
        html:`
        <div class="boxTime">
            <h2>Empleado registrado</h2>  
        </div>
        <div class="boxResultHour">
        <h4>Juana Castillo </h4> <p> Área de trabajo <br> <small>Administrativo</small></p> 
        </div>
        `,
        icon: 'success',
        confirmButtonText: 'Cerrar'
      })
      
      
}
function confirmConsultorio(){
    frameModalRegistro.hide() 
    Swal.fire({ 
        html:`
        <div class="boxTime">
            <h2>Consultorio registrado</h2>  
        </div>
        <div class="boxResultHour">
        <h4>Nº 304</h4> <p> Área de trabajo <br> <small>Pediatria</small></p> 
        </div>
        `,
        icon: 'success',
        confirmButtonText: 'Cerrar'
      })
      
      
}
function confirmTratamiento(){
    frameModalRegistro.hide() 
    Swal.fire({ 
        html:`
        <div class="boxTime">
            <h2>Tratameinto registrado</h2>  
        </div>
        <div class="boxResultHour">
        <h4>GIRUJIA RECONSTRUCTIVA</h4> <p> Nº 67873576 <br> <h6>Inicia: 12/08/2025</h6>  <small>Dr. Fernando Gonzales</small></p> 
        </div>
        `,
        icon: 'success',
        confirmButtonText: 'Cerrar'
      })
      
      
}
function confirmMedicamento(){
    frameModalRegistro.hide() 
    Swal.fire({ 
        html:`
        <div class="boxTime">
            <h2>Medicamento registrado</h2>  
        </div>
        <div class="boxResultHour">
        <h4>Protector Solar Avene Antiedad Con Color Spf 50+ x 50 ml</h4> <p>Fecha vencimiento <br>   <small>12/08/2025</small></p> 
        </div>
        `,
        icon: 'success',
        confirmButtonText: 'Cerrar'
      })
      
      
}