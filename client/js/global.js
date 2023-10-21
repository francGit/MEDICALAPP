const footer  = `
    <h1>footer</h1> 
`;

$(()=>{
    let blockFooter = document.querySelector('#footer');
    $(blockFooter).append(footer);
})