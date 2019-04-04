// Quand on parle de scope d'une variable, on veut souvent parler de son écrasement
// Souvent des problèmes arrivent lorsque l'on réaffecte une variable
// let est la solution

/*let myVar = '36';

var start = function (){
   let myVar = '33';
   
    if(true){
        let myVar = "25";
        console.log(myVar);
    }

    console.log(myVar);
}

console.log(myVar);
start();

// Création de constante avec js

const myVar2 = '46';

var start_2 = function (){
     myVar2 = '33';
    
     if(true){
         myVar2 = "25";
         console.log(myVar2);
     }
 
     console.log(myVar2);
 }
 console.log(myVar2);
 start_2(); // Ressortira une erreur car il est impossible d'écraser une constante*/

 /********** Définition de valeur par défault */

 /*var factory = function (color = 'blue', brand = 'myBrand') {
    return {
        color: color,
        brand: brand
    }
 }

 let car = factory();
 let bus = factory('red','mercedes');

 console.log(car);
 console.log(bus);*/

 /********** Ecrire les fonctions fléchées */

 const TYPE_CAR = 0;
 const TYPE_BUS = 1;
 
 var createVehicle = (type = TYPE_CAR, color = 'blue', brand = 'myBrand') => {
    return {
        type: type,
        color: color,
        brand: brand,

        isCar: function () {
            return this.type === TYPE_CAR;
        },
        
        run: (...arguments) => {
            console.log(arguments)
        }
    }
 }

 let car = createVehicle();
 let bus = createVehicle(TYPE_BUS, 'red', 'myBus');

 console.log(car, bus);
 console.log(car.isCar());
 car.run(
     "blue",
     25,
     {key: 'value'},
     [
         {key: 'value'}
     ]
 );