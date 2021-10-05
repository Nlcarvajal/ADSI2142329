function saludo(){
    return 'hola mundo';
}
console.log(saludo());


var x1=()=>'hola mundo'; //sin parametros debe ir parentesis
console.log('flecha' +x1());

var suma=(x,y)=>x+y;
console.log(suma(2,4));

function cuadrado(param){
    return param*param;
}

var y=param=>param*param;
console.log(y(5));

var vec1=(arreglos,tam)=>{
    for (let i = 0; i <=tam; i++) {
        arreglos.push(Math.round(Math.random()*100));
        
    }
    return arreglos ;
}

z=new Array();
console.log(vec1(z,10));