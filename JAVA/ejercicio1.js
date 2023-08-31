console.log ("Hola mundo");
$(document).ready(function(){
    // alert("Hello, World");
});

function cambiarporazul(){
    
    let cuadrado = document.getElementById("cuadrado");
    cuadrado.style.backgroundColor = "blue";
}

function cambiarporverde(){

    let cuadrado = document.getElementsByClassName("clasecuadrado")[0];
    cuadrado.style.backgroundColor = "green";

}

function functionreset(){
    
    let cuadrado = document.getElementById("cuadrado");
    cuadrado.style.backgroundColor = "red";
}

/*div 100x100 color rojo
boton que coloque el cuadradp azul ID
boton que coloque el cuadrado verde class 
reset al colo rojo*/