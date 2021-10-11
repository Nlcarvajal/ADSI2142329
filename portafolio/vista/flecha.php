<!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" href="../imagenes/icono.png" type="image/png"/>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>portafolio</title>
    <link rel="stylesheet" href="../estilo/ejercicio.css">
</head>
<body>
<section id="se3"> 
        <div id="d5"><h1>JAVASCRIPT</h1></div>
        <div id="d6">
            <button><a href="/ADSI2142329/portafolio/vista/flecha.php">Funciones Flecha</a></button>
            <button><a href="/ADSI2142329/portafolio/vista/fracciones.php">Fraccionarios</a></button>
            <button><a href="/ADSI2142329/portafolio/vista/herencia.php">Herencia </a></button>
        </div>
    </section>  

<pre>
function llenarVector(vector, tam){
for (let i = 0; i < tam; i++) {
vector.push(Math.round(Math.random()*11));
}
return vector;
}

let vec=new Array();

let x=5;

console.log(llenarVector(vec,x));

console.log(vec[0]);

//hoisting

var sumaVector=(vector)=>{

let suma=0;

for (let i = 0; i < vector.length; i++) {
    suma += vec[i];
}
    return suma;
}

console.log('la suma del vector es..' +sumaVector(vec));

var promedioVector=(vector)=>{
    
    let suma=0;
    let prom=0;

    for (let i = 0; i < vector.length; i++) {
            suma += vec[i];
            prom = suma / vector.length;
    }
    return prom;
}

console.log('el promedio del vector es..'+promedioVector(vec));

var nMayorVector=(vector)=>{

    let mayor=0;

    for (let i = 0; i < vector.length; i++) {
        mayor=Math.max(...vec);
    }
    return mayor;
}

console.log('el numero mayor del vector es..'+nMayorVector(vec));

var nMenorVector=(vector)=>{

    let menor=0;

    for (let i = 0; i < vector.length; i++) {
        menor=Math.min(...vec);
    }
    return menor;
}

console.log('el numero menor del vector es..'+nMenorVector(vec));

var MedianaVector=(vector)=>{

    let l=0;

    for (let i = 0; i < vector.length; i++) {
        
        if(vector.length%2 === 0){
            index = vec.length/2; 
            let valor1 = vec[index];
            let valor2 = vec[index-1];
            mediana = (valor1 + valor2)/2;
        }else{
            index = vec.length/2; 
            index = Math.floor(index);
            mediana = vec[index];
        }
        return mediana;
    } 

}

console.log('la mediana del vector es..'+MedianaVector(vec));</pre>

</body>
<center>
        <button>
            <a href="/ADSI2142329/portafolio/vista/inicio.php">Regresar</a>
        </button>
    </center>
</html>
   