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
            <button id="bu1"><a href="/ADSI2142329/portafolio/vista/flecha.php">Funciones Flecha</a></button>
            <button id="bu2"><a href="/ADSI2142329/portafolio/vista/fracciones.php">Fraccionarios</a></button>
            <button id="bu3"><a href="/ADSI2142329/portafolio/vista/herencia.php">Herencia</a></button>
        </div>
    </section>  

    <pre>
class DomiciliosRapiddin{
    constructor(idrestaurante, Nombre){
        this._idrestaurante=idrestaurante;
        this._Nombre=Nombre;
    }

set idrestaurante(idrestaurante){
    this._idrestaurante=idrestaurante;
}

get idrestaurante(){
    return this._idrestaurante;
}

set Nombre(Nombre){
    this._Nombre=Nombre;
}

get Nombre(){
    return this._Nombre;
}
    
}

class DomiciliosRapiddin extends restaurantes{
    constructor (idrestaurante, Nombre, Ubicacion, Descripcion, Imagen){
        super(idrestaurante, Nombre);
        this._Ubicacion=Ubicacion;
        this._Descripcion=Descripcion;
        this._Imagen=Imagen;
    }

set Ubicacion(Ubicacion){
    this._Ubicacion=Ubicacion;
}

get Ubicacion(){
    return this._Ubicacion;
}

set Descripcion(Descripcion){
    this._Descripcion=Descripcion;
}

get Descripcion(){
    return this._Descripcion;
}

set Imagen(Imagen){
    this._Imagen=Imagen;
}

get Imagen(){
    return this._Imagen;
}

mostrar() {
    return '<br><b>ID:</b>'+this.idrestaurante+'<br><b>Nombre:</b>'+this.Nombre+'<br><b>Ubicacion:</b>'+this.Ubicacion+'<br><b>Descripcion:</b> '+this.Descripcion+'<br><b>URL Imagen:</b>'+this.Imagen;
}
}

restau=new restaurantes(1,'<br>EL GATO',<br>'Cl. 30 ##4-141,Soacha,Cundinamarca',
<br>'Es un restaurante especializado en comidas rápidas, que busca brindar 
a nuestros 
clientes el mejor servicio y calidad en nuestros exquisitos platos. 
Los esperamos 
para tener el gusto de atenderlos.',
<br>'https://scontent.fbog12-1.fna.fbcdn.net/v/t1.6435-9/52863932_2063443573948246
_5712827534752612352_n.jpg?_nc_
cat=109&ccb=1-5&_nc_sid=973b4a&_nc_ohc
=dNepYk8_9VgAX-5ujG6&_nc_ht=scontent.fbog12-1.
fna&oh=b7a7687b0eb1fbcbc9213b55175006d4&oe=6188F5BA');

console.log;('<b> HERENCIA: </b>'+restau.mostrar());

console.log;('<br><br>');

class restaurante{
    constructor(resta){
        this._resta=resta;
    }
Mostrarresta(){
    return this._resta;
}
}

var rn1=new restaurante(2,'LA TABLA');
var rn2=new restaurante(4,'VIKINGOS'); 
var misitio=[];
misitio.push(rn1);
misitio.push(rn2);
mirestaurante=new restaurante(misitio);

console.log();('<b> COMPOSICION: </b><br>
'+mirestaurante.Mostrarrestaurante()+' <-- Contiene 2 objetos');
</pre>

</body>
<center>
        <button>
            <a href="/ADSI2142329/portafolio/vista/inicio.php">Regresar</a>
        </button>
    </center>
</html>
   