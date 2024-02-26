let tomorrow = 'Mañana, 24 Feb';
const footer  = `
    <secction class="d-flex flex-column justify-content-center align-items-center p-3">
        <small>Distribuido por: Francisco Muñeton - Ferney de Jesus Jaramillo</small>
        <small>2023 - sena.edu.co</small>
    </section>
`;
 
const load = `
<div class="boxPreloader">
<img src="https://famu.com.co/loader.gif" alt="">
<small>Cargando...</small>
</div>
`



$(()=>{
    let blockFooter = document.querySelector('#footer'); 
    let preload = document.querySelector('.preloader');
    $(blockFooter).append(footer); 
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