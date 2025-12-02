let cuadrado = () => {
    let num = prompt("Ingrese un número");
    let res = num * num;

    const elem = document.getElementById("r1");
    elem.innerHTML = "Cuadrado: " + res;
}

let cambiar = () => {
    let texto = prompt("Ingrese texto");
    
    texto = texto.toUpperCase();
    texto = texto.trim();

    const elem = document.getElementById("r2");
    elem.innerHTML = texto;
}

let filtrar = () => {
    let n = [4, 5, 11, 7];
    let nuevo = n.filter(num => num >= 10);

    let contenedor = document.getElementById("r3");

    contenedor.innerHTML = "";
 
    let parrafo = document.createElement("p");
    parrafo.innerHTML = "Filtrados: " + nuevo;

    contenedor.appendChild(parrafo);
}


let verificar = () => {
    let texto = prompt("Ingrese un texto");
    let palabra = prompt("Ingrese la palabra a buscar");

    let existe = texto.includes(palabra);

    let elem = document.getElementById("r4");

    if (existe) {
        elem.style.backgroundColor = "lightgreen";
        elem.innerHTML = "si";
    } else {
        elem.style.backgroundColor = "red";
        elem.innerHTML = "no";
    }
}

let mezclar = () => {
  let texto1 = prompt("Ingrese el primer texto");
  let texto2 = prompt("Ingrese el segundo texto");

  let resultado = (texto1 + texto2).toUpperCase();

  const elem = document.getElementById("r5");
  elem.innerHTML = resultado;

  elem.classList.add("resaltado");
}


let suma = () => {
    let num = [13, 23, 45, 90];
    let total = 0;

    num.forEach(n => {
        total += n;
    });

    const elem = document.getElementById("r6");
    elem.innerHTML = "Total: " + total;
}

let palabras = () => {
    let lista = ["hola", "todo", "bien", "si"];

    const elementoP = document.getElementById("r7");

    
    elementoP.innerHTML = "";

    lista.forEach(p => {
        if (p.length >= 4) {
            const nuevoParrafo = document.createElement("p"); 
            nuevoParrafo.textContent = p.toUpperCase();       
            elementoP.appendChild(nuevoParrafo);          
        }
    });
}


let vocales = () => {
    let texto = prompt("Ingrese un texto");

    let contador = 0;
    let vocales = "aeiouAEIOU";

    for (let i = 0; i < texto.length; i++) {
        if (vocales.includes(texto[i])) {
            contador++;
        }
    }

    const elem = document.getElementById("r8");
    elem.innerHTML = "Cantidad de vocales: " + contador;
    elem.style.fontSize = "24px";  
}

let remplazar = () => {
    let texto = prompt("Ingrese texto ");
    let cambiar = prompt("¿Qué palabra quieres cambiar? ");
    let cambiarP = prompt("¿Por qué palabra deseas cambiarla? ");

    let textoo = texto.replace(cambiar, cambiarP);

    const elementoP = document.getElementById("r9");

    const nuevoParrafo = document.createElement("p");

    nuevoParrafo.textContent = textoo;


    elementoP.appendChild(nuevoParrafo);
}

let ordenamiento = () => {
    let num = [89, 45, 7, 14, 27];

    
    let numOrdenados = num.sort((a, b) => b - a);

   
    let unido = numOrdenados.join(", ");

 
    const divR = document.getElementById("r10");
    divR.innerHTML = unido;

    divR.classList.toggle("resaltado");
}