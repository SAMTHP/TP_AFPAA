// Hide of create car form
$('#create_car').hide();

// Function which show the car list
function showCars(){
    $('#show_cars').show();
    $('#create_car').hide();
}

// Function which show the create car form
function showForm(){
    $('#show_cars').hide();
    $('#create_car').show();
}

// Creation of arrays which will save and create the new cars
var array_brand = ['BMW'];
var array_year = ['2005'];
var array_model = ['320 cd'];
var array_fuel = ['DIESEL'];
var array_price = ['4009'];

var array_car = new Array(array_brand,array_year,array_model,array_fuel,array_price);

// Function which increment the table with the car which are in database
function tabIncrement(){
    for(var i = 0; i<array_brand.length;i++){
        var newElement = document.createElement('tr');
        newElement.id = 'car-'+i;
        
        document.getElementById('body').appendChild(newElement);
    }
    
    
    for(var i = 0; i < array_car.length; i++ ){
        if(array_car[0][i] != undefined){
            document.getElementById('car-'+i).innerHTML = "<th scope='row' >"+array_car[0][i]+"</th><td>"+array_car[1][i]+"</td><td>"+array_car[2][i]+"</td><td>"+array_car[3][i]+"</td><td>"+array_car[4][i]+" €</td><td><button type='submit' id='delete'><i class='fas fa-trash-alt' id='"+i+"' onclick='deleteCar(this.id)'></i></button></td><td><button type='submit' ><i class='fas fa-edit' id='"+i+"' onclick='editCar(this.id)'></i></button></td>";
        }
    }
}

// Function which allow to create many cars
function createMany(){
    for(var i = 0; i < 50; i++){
        array_brand.push("MARQUE_"+i);
        array_year.push("ANNEE"+i);
        array_model.push("MODEL"+i);
        array_fuel.push("CARBURANT"+i);
        array_price.push(0000);
    }

    $('#create_car').hide();
    $('#show_cars').show();

    tabIncrement()
    $('.mydatatable').DataTable();
}

// Call of the tabIncrement method
tabIncrement()

// Call the method which generate the datable
$('.mydatatable').DataTable();

// Execution when the add_car button is activate
document.getElementById('add_car').onclick = function(){

    // Saving of the input values which have been generate with the create car form
    var brand = document.getElementById('brand').value;
    console.log(brand);
    var year = document.getElementById('year').value;
    var model = document.getElementById('model').value;
    var fuel = document.getElementById('fuel').value;
    var price = parseInt(document.getElementById('price').value);

    // Test if the values are correct
    if(brand != "" && year != "" && model != "" && fuel != "" && price != "" && !isNaN(price) ){
        // Function which create and save the new car
        function add_car(brand,year,model,fuel,price){
            array_brand.push(brand);
            array_year.push(year);
            array_model.push(model);
            array_fuel.push(fuel);
            array_price.push(price);
        }
        // Call of the add_car method
        add_car(brand,year,model,fuel,price);

        // Hide & show the DOM elements
        $('#create_car').hide();
        $('#show_cars').show();

        // Call of the tabIncrement method
        tabIncrement();
        $('.mydatatable').DataTable();
    } else{
        $('#error').html("<span style='color:red'>Enregistrement invalide, veuillez recommencer !</span>");
    }

}

// Function which allow to edit a current car
function editCar(id){
    // Show the current car in the DOM
    document.getElementById('edit').innerHTML = 
    '<h5>Modifier voiture : <h5>'+
    '<div class="row">'+
        '<input type="text" class="form-control col-2" id="update-brand" name="update-brand" value="'+array_brand[id]+'" placeholder="'+array_brand[id]+'">'+
        '<input type="text" class="form-control col-2" id="update-year" name="update-year" value="'+array_year[id]+'" placeholder="'+array_year[id]+'">'+
        '<input type="text" class="form-control col-2" id="update-model" name="update-model" value="'+array_model[id]+'" placeholder="'+array_model[id]+'">'+
        '<input type="text" class="form-control col-2" id="update-fuel" name="update-fuel" value="'+array_fuel[id]+'" placeholder="'+array_fuel[id]+'">'+
        '<input type="number" class="form-control col-2" id="update-price" name="update-price" value="'+array_price[id]+'" placeholder="'+array_price[id]+'">'+
        '<br><br>'+
    '</div>'+
    '<br>'+
    '<div class="row">'+
    '<button type="submit" class="btn btn-primary col-3" id="'+id+'" onclick="updateCar(this.id)">Valider</button>'+
    '</div>';

    $('#show_cars').hide();
    $('#edit').show();
}

// Function which allow to update the current car
function updateCar(id){
    array_brand[id] = document.getElementById('update-brand').value;
    array_year[id] = document.getElementById('update-year').value;
    array_model[id] = document.getElementById('update-model').value;
    array_fuel[id] = document.getElementById('update-fuel').value;
    array_price[id] = parseInt(document.getElementById('update-price').value);
    
    $('#show_cars').show();
    $('#edit').hide();

    tabIncrement();
}

// Function which allow to delete a car
function deleteCar(id){
    // Car clear
    delete array_brand[id];
    delete array_year[id];
    delete array_model[id];
    delete array_fuel[id];

    // Remove car in the DOM
    var parent = document.getElementById('car-'+id);
    parent.remove();
}



