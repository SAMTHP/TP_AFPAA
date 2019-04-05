TYPE_CAR = 0;
TYPE_BUS = 1;

/**
 *
 */
class Vehicle {

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

    getType(){
        return `je suis une voiture de :
         - couleur ${this.color}
         - marque ${this.brand}`;
    }
}

let car = new Car('rouge');
msg(car.getType())
