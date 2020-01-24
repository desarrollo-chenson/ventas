
// const $switch = document.getElementById('checkbox');
const $control = document.getElementById('show-control');
const $botones = document.getElementById('botones');

$control.addEventListener('click',(event) =>{
$botones.classList.toggle('showing');
});

// $switch.addEventListener('click',(event) =>{
// $botones.classList.add('showing');
// });

// // lazy loading
// var lazyLoadInstance = new LazyLoad({
//   elements_selector: "img"
//   // ... more custom settings?
// });

// la imagen no se ve
function no_imagen(esto){
esto.src = "images/error.jpg"
}



function isElementTotallyVisible(elto) {
   var anchoViewport = window.innerWidth || document.documentElement.clientWidth;
   var alturaViewport = window.innerHeight || document.documentElement.clientHeight;
   //Posición de la caja del elemento
   var caja = elto.getBoundingClientRect();
   return ( caja.top >= 0 &&
            caja.bottom <= alturaViewport &&
            caja.left >= 0 &&
            caja.right <= anchoViewport );
}


// detectar vicibilidad
// viewport animaciones al aparecer
function cambiaVisibilidad(visible, elemento){
    $producto.classList.add('view');

}

var $producto = document.getElementById('limit');
isElementTotallyVisible($producto, cambiaVisibilidad);
// termina animaciones al aparecer

// loader

// $(window).load(function() {
//     $(".loader").fadeOut("slow");
// });
//
// $(".cd-filter").load(function() {
//     $(".loader").fadeOut("slow");
// });
