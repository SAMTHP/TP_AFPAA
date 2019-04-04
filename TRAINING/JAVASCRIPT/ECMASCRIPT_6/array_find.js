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
    constructor(color = 'blue'){
        super(color);
        this.type = TYPE_CAR;
    }
}

class Bus extends Vehicle{
    constructor(){
        super();
        this.type = TYPE_BUS;
    }
}

let car = new Car('red');
let bus = new Bus();

var vehiclesCollection = [car, bus];

// Every va vérifier que tous les éléments du tableau respectent la règle que l'on a donnée dans la callback
var allVehiclesAreBlue = vehiclesCollection.every(vehicle => {
    return vehicle.color === "blue";
})

// some va vérifier que quelques éléments du tableau respectent la règle que l'on a donnée dans la callback
var someVehiclesAreBlue = vehiclesCollection.some(vehicle => {
    return vehicle.color === "red";
})

msg(allVehiclesAreBlue);
msg(someVehiclesAreBlue);