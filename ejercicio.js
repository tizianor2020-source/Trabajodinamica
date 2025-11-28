let cuadradonro=()=>{
    let num=prompt("ingrese un numero:");
    prompt("el cuuadrado es: "+num*num);
}
let convertex=()=>{
    let texto=prompt("ingrese una palabra:");
    let textoC=texto.trim().toUpperCase();
    alert(textoC);
}
let filtrar=()=>{
    let num=[2,22,43,31,22,5,6];
    alert(num);
    let numF=num.filter(n=>n>10);
    alert(numF);
}
let verificar=()=>{
    let texto=prompt("ingrese un texto: ");
    let palabra=prompt("ingrese una palabra: ");
    let pt=texto.includes(texto,palabra);
    alert(pt);
}
let mezclar=()=>{
    let palabra1=prompt("ingrese una palabra: ");
    let palabra2=prompt("ingrese otra palabra: ");
    let palabraF=palabra1.concat(" ",palabra2).toUpperCase();
    alert(palabraF);
}
let sumararray=()=>{
    let num=[2,5,7,16];
    let n1=0;
    alert(num);
    num.forEach(n=>{
        n1=n1+n;
    });
    alert(n1);
}
let filtrartrans=()=>{
    let palabra=["hola","bro","como andas","ayuwoki"];
    alert(palabra);
    let longitud=0;
    palabra.forEach(n=>{
        longitud=n.length;
        if(longitud>=4)
        alert("la palabra "+n.toUpperCase()+" tiene "+longitud);
    });
}
let contarv=()=>{
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
let remplazarpalab=()=>{
    let texto=prompt("ingresa un texto: ");
    let cambiar=prompt("¿Que palabra quieres cambiar?(debe estar en el texto): ");
    let cambiatP=prompt("¿Por que palabra deseas cambiarla?: ")
    let textoF=texto.replace(cambiar,cambiatP);
    alert(textoF);
}
let ordenar=()=>{
    let num=[7,23,4,5,1];
    alert(num);
    let numOrdenados=num.sort((b,a)=>a-b);
    alert(numOrdenados);
}