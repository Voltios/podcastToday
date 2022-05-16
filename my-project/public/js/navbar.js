let navegador = document.getElementById("navbar");

let nWidth = navegador.style.width;

console.log(navegador.children);



navegador.addEventListener("mouseenter", () => {
    navegador.style.width = "300px";

});

navegador.addEventListener("mouseleave", () => {
    navegador.style.width = nWidth;
});




var img = document.getElementById("img");
img.style.display = "none";

img.addEventListener("load", function() {
    let ct = new ColorThief();
    let paleta = ct.getPalette(img);

    cambiaColores(paleta);
});

function cambiaColores(colores) {
    // console.log(colores)

    let caja1 = document.getElementById("c1");
    let caja2 = document.getElementById("c2");
    let caja3 = document.getElementById("c3");

    caja1.style.backgroundColor = arrayToHex(colores[0]);
    caja2.style.backgroundColor = arrayToHex(colores[1]);
    caja3.style.backgroundColor = arrayToHex(colores[2]);

}

/**
 *  
 * @method 
 * @param array  
 * @returns a string with the hexadecimal value from a rgb array
 */
function arrayToHex(array) {
    let nuevo = "#";
    // console.log(array);
    for (elem of array) {
        elem.toString(16).length == 1 ? nuevo += "0" : true
        nuevo += elem.toString(16);
        // console.log(nuevo);
    }
    return nuevo;
}


const cursor = document.querySelector('.cursor');
document.addEventListener('mousemove', e => {
    cursor.style.top = (e.pageY - 9) + "px";
    cursor.style.left = (e.pageX - 7) + "px";
})
document.addEventListener('click', () => {
    cursor.classList.add("expand");

    setTimeout(() => {
        cursor.classList.remove("expand");
    }, 450)
});