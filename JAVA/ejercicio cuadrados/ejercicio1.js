console.log("Hola mundo");


let cuadradoporID;


$(document).ready(function () {
    // alert("Hello, World");

    cuadradoporID = document.getElementById("cuadrado");
});



function cambiarporazul() {
 
    cuadradoporID.style.backgroundColor = "blue";
}

function cambiarporverde() {

    let cuadradoclass = document.getElementsByClassName("clasecuadrado")[0];
    cuadradoclass.style.backgroundColor = "green";

}

function functionreset() {

   
    cuadradoporID.style.backgroundColor = "red";
}


function rotar() {

    if (cuadradoporID.classList.contains("rotar")) {
        cuadradoporID.classList.remove("rotar");
        setTimeout(() => {
            cuadradoporID.classList.add("rotar");

        }, "1000");
    } else {
        cuadradoporID.classList.add("rotar");
    }

}

function parar() {
 
    cuadradoporID.classList.remove("rotar");

}



/*div 100x100 color rojo
boton que coloque el cuadradp azul ID
boton que coloque el cuadrado verde class 
reset al colo rojo*/