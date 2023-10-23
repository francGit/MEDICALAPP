const footer  = `
    <secction class="d-flex flex-column justify-content-center align-items-center p-3">
        <small>Distribuido por: Francisco Muñeton - Ferney de Jesus Jaramillo</small>
        <small>2023 - sena.edu.co</small>
    </section>
`;

const submenu = `
    submenu
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