const button=document.querySelector(".fas fa-bars")
const navmenu=document.querySelector(".nav-menu")
const focus=document.getElementById("focuspress")
// boton responsive

// final de boton responsive

//cambiar mediante scroll
const nav=document.querySelector(".nav")
window.addEventListener('scroll',()=>{
    nav.classList.toggle('active', window.scrollY >0);
    }
)
//fin cambiar scroll

//cerrar nav menu responsive
function toggleNavMenu() {
    navmenu.classList.toggle("nav-menu_visible");
}

function press() {
  
}



//final cerrar navmenu