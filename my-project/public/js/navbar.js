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
if (img) img.style.display = "none";

if (img) {
    img.addEventListener("load", function() {
        let ct = new ColorThief();
        let paleta = ct.getPalette(img);

        cambiaColores(paleta);
    });
}
if (img) {

    function cambiaColores(colores) {
        // console.log(colores)

        let caja1 = document.getElementById("c1");
        let caja2 = document.getElementById("c2");
        let caja3 = document.getElementById("c3");
        let boton = document.getElementById("progRef");

        boton.style.backgroundColor = arrayToHex(colores[0]);
        boton.addEventListener('mouseenter', function() {
            boton.style.boxShadow = "0 0 0 0";
        });
        boton.addEventListener('mouseleave', function() {
            boton.style.boxShadow = "5px 5px 0 " + arrayToHex(colores[1]);
        });

        boton.children[0].style.color = (getBrightness(arrayToHex(colores[0]))) ? "white" : "black";

        boton.style.boxShadow = "5px 5px 0 " + arrayToHex(colores[1]);



        let aa = document.getElementById("externalLink");
        aa.style.backgroundColor = arrayToHex(colores[0]);
        aa.addEventListener('mouseenter', function() {
            aa.style.boxShadow = "0 0 0 0";
        });
        aa.addEventListener('mouseleave', function() {
            aa.style.boxShadow = "5px 5px 0 " + arrayToHex(colores[2]);
        });
        aa.style.boxShadow = "5px 5px 0 " + arrayToHex(colores[2]);
        aa.children[0].style.color = (getBrightness(arrayToHex(colores[0]))) ? "white" : "black";


        caja1.style.backgroundColor = arrayToHex(colores[0]);
        caja2.style.backgroundColor = arrayToHex(colores[1]);
        caja3.style.backgroundColor = arrayToHex(colores[2]);

    }

}

function getBrightness(color) {
    var c = color.substring(1); // strip #
    var rgb = parseInt(c, 16); // convert rrggbb to decimal
    var r = (rgb >> 16) & 0xff; // extract red
    var g = (rgb >> 8) & 0xff; // extract green
    var b = (rgb >> 0) & 0xff; // extract blue

    var luma = 0.2126 * r + 0.7152 * g + 0.0722 * b; // per ITU-R BT.709
    console.log(luma);
    if (luma > 128) {
        return false;
    } else return true;
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

let ext = document.getElementById("externalLink");
if (ext) {

    ext.addEventListener("click", function() {
        alert("Estás saliendo de Podcast Today! Vuelve pronto");
    });
}