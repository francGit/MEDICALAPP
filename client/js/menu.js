let menuPrincipal =`
    <h1>Hello menu</h1>
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