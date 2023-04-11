const firstPrompt = document.getElementById("firstPrompt");
const secondPrompt = document.getElementById("secondPrompt");
const firstAlert = document.getElementById("firstAlert");
const firstLog = document.getElementById("firstLog");
const firstOperation = document.getElementById("firstOperation");
const secondOperation = document.getElementById("secondOperation");
const red = document.getElementById("red");
const blue = document.getElementById("blue");
const colorTrueFalse = document.getElementById("colorTrueFalse");
const textCons = document.getElementById("textCons");
const firstObject = document.getElementById("firstObject");
const secondObject = document.getElementById("secondObject");
const firstForIn = document.getElementById("firstForIn");
const firstClass = document.getElementById("firstClass");
const secondClass = document.getElementById("secondClass");
const firstMath = document.getElementById("firstMath");
const secondMath = document.getElementById("secondMath");
const firstDate = document.getElementById("firstDate");



// prompt() numero 1:
function promptMe(){
    let nombre = prompt("Ingresa tu nombre:");
    alert(`Hola ${nombre}.`);
    console.log(nombre);
}
firstPrompt.addEventListener('click', promptMe);


// prompt() numero 2:
function promptMeTwo(){
    let nombre = parseInt(prompt("Ingresa un número:"));
    console.log(nombre);
}
secondPrompt.addEventListener('click', promptMeTwo);


// alert() numero 1:
function alertOne(){
    alert("Soy un cuadro de diálogo");
}
firstAlert.addEventListener('click', alertOne);


// console.log numero 1:
function logOne(){
    console.log("Imprimo un texto en el browser");
}
firstLog.addEventListener('click', logOne);


// Operaciones numero 1:
function operationOne() {
    let numeroUno = 3;
    let numeroDos = 4;
    let resultado = numeroUno + numeroDos;
    alert("El resultado de " + numeroUno + " + " + numeroDos + " es " + resultado);
}
firstOperation.addEventListener("click", operationOne);


// Operaciones numero 2:
function operationTwo() {
    let numeroTres = 5;
    let numeroString = "10";
    alert(numeroTres + numeroString);
}
secondOperation.addEventListener("click", operationTwo);


// if numero 1:
let unColor;
let textTrue = document.createTextNode("Es verdadero.");
let textFalse = document.createTextNode("Es falso.");

red.addEventListener("click", () => {
    red.classList.add("addBorder");
    blue.classList.remove("addBorder");
    unColor = "Rojo"
})
blue.addEventListener("click", () => {
    blue.classList.add("addBorder");
    red.classList.remove("addBorder");
    unColor = "Azul"
})

function ifOne() {
    if (unColor == "Rojo") {
        colorTrueFalse.appendChild(textTrue);
        colorTrueFalse.removeChild(textFalse);
    } else {
        colorTrueFalse.appendChild(textFalse);
        colorTrueFalse.removeChild(textTrue);
    }
}

red.addEventListener("click", ifOne);
blue.addEventListener("click", ifOne);



// object numero 1
const individuo = {
    nombre: "Emanuel",
    edad: 25,
    direccion: "Avenida Pando"
}
function objectOne() {
    console.log(individuo);
}
firstObject.addEventListener("click", objectOne);



// constructor numero 1
function Persona(nombre, edad, calle) {
    this.nombre = nombre;
    this.edad = edad;
    this.calle = calle;
    this.hablar = function () {
        console.log("Hola soy " + this.nombre + ", tengo " + this.edad + " años, y vivo en " + this.calle + ".");
    }
}
const personaUno = new Persona ("Carlos", 32, "Avenida Libertador 112");

function objectTwo() {
    console.log(personaUno);
}
secondObject.addEventListener("click", objectTwo);



// Operador in y for...in
const personaForIn = {nombre: "Homero", edad: 39, calle: "Av. Siempreviva 742"};

function forInOne() {
    for (const propiedad in personaForIn) {
        console.log(personaForIn[propiedad]);
}
}
firstForIn.addEventListener("click", forInOne);



// Clases numero 1
class Producto {
    constructor(nombre, precio) {
        this.nombre = nombre.toUpperCase();
        this.precio = parseFloat(precio);
        this.vendido = false;
    }
    vender() {
        this.vendido = true;
    }
    sumaIva() {
        this.precio = this.precio * 1.21;
        alert("El producto: " + this.nombre + " tiene un valor de: " + this.precio + " con IVA.");
    }
    informacion() {
        alert("El producto: " + this.nombre + " tiene un valor de: " + this.precio + ".");
    }
}

function classOne() {
    const productoUno = new Producto("banana", "100");
    productoUno.vender();
    productoUno.sumaIva();
}

function classTwo() {
    const productoDos = new Producto("pera", "150");
    productoDos.informacion();
}

firstClass.addEventListener("click", classOne);
secondClass.addEventListener("click", classTwo);


function mathOne() {
    alert(Math.random() * 30 + 20);
}
firstMath.addEventListener("click", mathOne);

function mathTwo() {
    alert(Math.round(Math.random() * 10));
}
secondMath.addEventListener("click", mathTwo);



// Date numero 1
function dateOne() {
    const hoy = new Date();
    alert(hoy);
}
firstDate.addEventListener("click", dateOne);



