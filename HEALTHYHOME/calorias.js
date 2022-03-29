var age = document.getElementById("age");
var height = document.getElementById("height");
var weight = document.getElementById("weight");
var female = document.getElementById("f");
var male = document.getElementById("m");
var e1 = document.getElementById("a1");
var e2 = document.getElementById("a2");
var e3 = document.getElementById("a3");
var e4 = document.getElementById("a4");
var e5 = document.getElementById("a5");

document.getElementById("submit").addEventListener("click", validadeForm);

function validadeForm(){
    if(age.value == '' || height.value == '' || weight.value == '' || (male.checked==false && female.checked==false) || (e1.checked==false && e2.checked ==false &&
        e3.checked==false && e4.checked==false && e5.checked==false)){
        alert("¡Todos los campos son requeridos!");
        document.getElementById("submit").removeEventListener("click", calcularCaloria);
    } else{
        calcularCaloria();
    }
}

function calcularCaloria(){
    var arrayPerson = [age.value, height.value, weight.value];

    if(male.checked){
        arrayPerson.push('male');
    } else if(female.checked){
        arrayPerson.push('female');
    }

    if(a1.checked){
        arrayPerson.push(1);
    }else if(a2.checked){
        arrayPerson.push(2);
    }else if(a3.checked){
        arrayPerson.push(3);
    }else if(a4.checked){
        arrayPerson.push(4);
    }else if(a5.checked){
        arrayPerson.push(5);
    }
    console.log(arrayPerson);

    
    
    var lectura='';
    switch(arrayPerson[3]){
        case 'male':
         lectura = 66+(13.7*Number(arrayPerson[2]))+(5* Number(arrayPerson[1]))-(6.75*Number(arrayPerson[0])) 
         break;

        case 'female':
        lectura = 655+(9.6*Number(arrayPerson[2]))+(1.8* Number(arrayPerson[1]))-(4.7*Number(arrayPerson[0]))
        break;
    }    

    var total='';
    switch(arrayPerson[4]){
        case 1:
            total = lectura * 1.2
            break;
        case 2:
            total = lectura * 1.375
            break;
        case 3:
            total = lectura * 1.55
            break;
        case 4:
            total = lectura * 1.72
            break;
        case 5:
            total = lectura * 1.9
            break;

    }

    var h1 = document.createElement('h1');
    var h2 = document.createElement('h2');

    var t = document.createTextNode(parseFloat(lectura).toFixed(2) + ' calorías al día que consume el cuerpo en reposo');
    var b = document.createTextNode('Usted tiene: ');
    var r = document.createTextNode(parseFloat(total).toFixed(2) + ' calorías al día que consume el cuerpo segun la actividad diaria ');

    h1.appendChild(t);
    h2.appendChild(b);
    h2.appendChild(r);

    document.body.appendChild(h1);
    document.body.appendChild(h2);

    document.getElementById("submit").removeEventListener("click", calcularCaloria);
    document.getElementById("submit").removeEventListener("click", validadeForm);
    
};

document.getElementById("submit").addEventListener("click", calcularCaloria)