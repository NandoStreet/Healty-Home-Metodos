var age = document.getElementById("age");
var height = document.getElementById("height");
var weight = document.getElementById("weight");
var female = document.getElementById("f");
var male = document.getElementById("m");

document.getElementById("submit").addEventListener("click", validadeForm);

function validadeForm(){
    if(age.value == '' || height.value == '' || weight.value == '' || (male.checked==false && female.checked==false)){
        alert("¡Todos los campos son requeridos!");
        document.getElementById("submit").removeEventListener("click", calculateIMC);
    } else{
        calculateIMC();
    }
}

function calculateIMC(){
    var arrayPerson = [age.value, height.value, weight.value];
    if(male.checked){
        arrayPerson.push('male');
    } else if(female.checked){
        arrayPerson.push('female');
    }
    console.log(arrayPerson);
    var imc = Number( arrayPerson[2] ) / ( Number( arrayPerson[1] )/100 * Number( arrayPerson[1] )/100 );
    
    var lectura = '';
    switch(arrayPerson[3]){
        case 'male':
        if(imc<20){ 
            lectura = "Desnutrición";
        }else if(imc>=20 && imc<=24.9){ 
            lectura = "Normalidad"; 
        }else if(imc>=25 && imc<=29.9){ 
            lectura = "Sobrepeso"; 
        }else if(imc>=30 && imc<=40){ 
            lectura = "Obesidad";
        }else if(imc>40){
            lectura = "Obesidad Grave";
        }break;
        case 'female':
        if(imc<19){ 
            lectura = "Desnutrición";
        }else if(imc>=19 && imc<=23){ 
            lectura = "Normalidad"; 
        }else if(imc>=24 && imc<=27){ 
            lectura = "Sobrepeso"; 
        }else if(imc>=27 && imc<=32){ 
            lectura = "Obesidad";
        }else if(imc>32){
            lectura = "Obesidad Grave";
        } break;
    }    

    var h1 = document.createElement('h1');
    var h2 = document.createElement('h2');

    var t = document.createTextNode('Su categoría es: '+lectura);
    var b = document.createTextNode('IMC: ');
    var r = document.createTextNode(parseFloat(imc).toFixed(2) + ' kg/cm²');

    h1.appendChild(t);
    h2.appendChild(b);
    h2.appendChild(r);

    document.body.appendChild(h1);
    document.body.appendChild(h2);

    document.getElementById("submit").removeEventListener("click", calculateIMC);
    document.getElementById("submit").removeEventListener("click", validadeForm);
    
};

document.getElementById("submit").addEventListener("click", calculateIMC)
