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

console.log(car);
console.log(car.isCar());
console.log(bus);
console.log(bus.isCar());