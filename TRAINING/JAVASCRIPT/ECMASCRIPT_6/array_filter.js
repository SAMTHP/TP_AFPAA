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

// On filtre le tableau avec filter et on récupère l'objet qui la propriété demandée
var filterCollection = vehiclesCollection.filter(vehicle => {
    return vehicle.color === "red";
})

msg(filterCollection);