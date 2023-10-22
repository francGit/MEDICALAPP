const footer  = `
    <secction class="d-flex flex-column justify-content-center align-items-center p-3">
        <small>Distribuido por: Francisco Muñeton - Ferney de Jesus Jaramillo</small>
        <small>2023 - sena.edu.co</small>
    </section>
`;

const submenu = `
    submenu
`;

$(()=>{
    let blockFooter = document.querySelector('#footer');
    let blockSubmenu = document.querySelector('#subheader');
    $(blockFooter).append(footer);
    $(blockSubmenu).append(submenu);
})