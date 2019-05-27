

var counter = 0;
// add user code
function addUser(){
    var data = document.getElementById('data');
    var car_list = document.getElementById('carList');
    var inputdata = data.value;
    console.log(inputdata);
    

    var html = "<div class='row' id='data"+counter+"' style='margin-bottom: 15px;'>"+
    "<div class='col-md-6 col-sm-12 col-xs-12'>"+
        "<input type='text' class='form-control' value='"+inputdata+"' disabled></div>"+
    "<div class='col-md-2 col-sm-4 col-xs-4'>"+
        "<button class='btn btn-success' onclick='editCar(this.id);' id='edit"+counter+"'>Edit</button></div>"+
    "<div class='col-md-2 col-sm-4 col-xs-4'>"+
        "<button class='btn btn-success' onclick='updateCar(this.id);' id='update"+counter+"'>Update</button></div>"+
    "<div class='col-md-2 col-sm-4 col-xs-4'>"+
        "<button class='btn btn-danger' onclick='deleteCar(this.id);' id='delete"+counter+"'>Delete</button></div></div>";

    car_list.insertAdjacentHTML('beforeend', html);

    counter++;
}

function editCar(id){
    var parent = document.getElementById(id).parentNode.parentNode;
    var child = parent.firstChild.firstChild;
    child.removeAttribute('disabled');
    console.log(child);
}

function updateCar(id){
    var parent = document.getElementById(id).parentNode.parentNode;
    var child = parent.firstChild.firstChild;
    child.setAttribute('disabled',"disabled");
    console.log(id);
}

function deleteCar(id){
    var parent = document.getElementById(id).parentNode.parentNode;
    parent.remove();
}