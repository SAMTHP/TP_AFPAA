TYPE_CAR = 0;
TYPE_BUS = 1;

/**
 * 
 */
class Vehicle {

    type;
    color;
    brand;

    constructor(color = 'blue', brand = 'myBrand'){
        this.type = null;
        this.color = color;
        this.brand = brand;
    }

    isCar () {
        return this.type === TYPE_CAR;
    }

    isBus () {
        return this.type === TYPE_BUS;
    }
    
}

class Car extends Vehicle{
    constructor(){
        super();
        this.type = TYPE_CAR;
    }
}

class Bus extends Vehicle{
    constructor(){
        super();
        this.type = TYPE_BUS;
    }
}

let car = new Car();
let bus = new Bus();

let vehicules = [car, bus];

/******** Boucles sur les tableaux */

/*$(vehicules).each(function(index, element){
    $(element).each(function(indexe, elem){
        
        $(elem).each(function(x, e){
            msg(e);
        })
    })
})*/

/*for(let vehicle of vehicules){
    
    if(vehicle.type === TYPE_CAR){
        continue;
    }
    msg("Boucle for : avec contrainte continue");
    msg(vehicle);
}

vehicules.forEach(vehicle => {
    msg("Boucle forEach : ");
    msg(vehicle);
})*/

/******** Boucles sur les objets */

$(car).each(function(index, element){
    msg("Boucle each :");
    msg(element);
})

for(let property in car){
    msg("Boucle for :");
    msg(property+ " : " + car[property]);
}