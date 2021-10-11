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
            <button id="bu1"><a href="/ADSI2142329/portafolio/vista/ejercicos.php">Funciones Flecha</a></button>
            <button id="bu2"><a href="/ADSI2142329/portafolio/vista/fracciones.php">Fraccionarios</a></button>
            <button id="bu3"><a href="/ADSI2142329/portafolio/vista/herencia.php">Herencia</a></button>
        </div>
    </section>  

            </nav>

<pre>
var frac={
n1:1,
n2:2,
d1:2, 
d2:3,
suma:function(){
numeradorS1=this.n1 * this.d2;
numeradorS2=this.n2 * this.d1;
numeradorSF=numeradorS1 + numeradorS2;
denominadorS=this.d1 * this.d2;
return 'el resultado de la suma es '+ numeradorSF + ' / ' + denominadorS;
},
resta:function(){
numeradorR1=this.n1 * this.d2;
numeradorR2=this.n2 * this.d1;
numeradorRF=numeradorS1 - numeradorS2;
denominadorR=this.d1 * this.d2;
return 'el resultado de la resta es '+ numeradorRF + ' / ' + denominadorR;
},
multi:function(){
numeradorM1=this.n1 * this.n2;
numeradorM2=this.d1 * this.d2;
return 'el resultado de la multiplicacion es '+ numeradorM1 + ' / ' +numeradorM2;
},
divi:function(){
numeradorD1=this.n1 * this.d2;
numeradorD2=this.n2 * this.d1;
return 'el resultado de la division es '+ numeradorD1 + ' / ' +numeradorD2;
}
}

console.log(frac.suma());

console.log(frac.resta());

console.log(frac.multi());

console.log(frac.divi());

</pre>

</body>
<center>
        <button>
            <a href="/ADSI2142329/portafolio/vista/inicio.php">Regresar</a>
        </button>
    </center>
</html>
   