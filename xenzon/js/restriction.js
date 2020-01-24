
<script type="text/JavaScript">



var procedenciaValida = new Array(

"https://www.soyhb.com/productosugerido/config/"

);

var ok = false; // Servirá para saber si se ha encontrado un referer bueno

for(i in procedenciaValida) {

if(document.referrer.indexOf(procedenciaValida[i]) > -1) {

ok = true;

}


}

if(!ok) {

document.location.href="https://www.soyhb.com/productosugerido/config/";
}

// -->
</script>
