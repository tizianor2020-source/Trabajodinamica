let cuadrado = () =>{
    let num = prompt("Ingrese un numero")
    alert( "cuadrado:" + num*num);

}

let cambiar = () =>{
    let  texto= prompt("Ingrese texto")
    texto = texto.toUpperCase();
texto = texto.trim();
alert(texto);
}

let filtrar = () =>{
    let n = [4,5,11,7];
   alert(n.filter(mayores => mayores >= 10));
    
}

let verificar = ()=>{
    let text= prompt("Ingrese texto")
    text = text.includes("hola");
    alert(text);
}

let mezclar = ()=>{
    let text= prompt("ingrese texto")
    let te=prompt("ingrese otro")
    text = text.concat(te);
    text = text.toUpperCase();
    alert(text);
}


let suma=()=>{
    let num=[13,23,45,90];
    let n1=0;
    alert(num);
    num.forEach(n=>{
        n1=n1+n;
    });
    alert(n1);
}

let palabras=()=>{
    let palabra=["hola","todo","bien","si"];
    alert(palabra);
    let longitud=0;
    palabra.forEach(n=>{
        longitud=n.length;
        if(longitud>=4)
        alert("La palabra "+n.toUpperCase()+" tiene "+longitud);
    });
}


let vocales=()=>{
    let texto=prompt("ingrese un texto: ");
    let vocales="aeiouAEIOU";
    let contador = 0;

  for (let letra of texto) {
    if (vocales.includes(letra)) {
      contador++;
    }
  }
  alert(contador);
}

let remplazar=()=>{
    let texto=prompt("Ingrese texto ");
    let cambiar=prompt("¿Que palabra quieres cambiar? ");
    let cambiarP=prompt("¿Por que palabra deseas cambiarla? ")
    let textoo=texto.replace(cambiar,cambiarP);
    alert(textoo);
}

let ordenamiento=()=>{
    let num=[89,45,7,14,27];
    alert(num);
    let numOrdenados=num.sort((b,a)=>a-b);
    alert(numOrdenados);
}