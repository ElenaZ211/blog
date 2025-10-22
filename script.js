let l = document.getElementById("myList");  
let input = document.getElementById("Input");
let button = document.getElementById("button");

button.onclick = function () {
    let newLi = document.createElement("li");
    newLi.innerHTML = input.value;
    l.appendChild(newLi);  
    input.value = "";      
};


let p1 = document.getElementById("p1");
let p2 = document.getElementById("p2");
let p3 = document.getElementById("p3");


p1.onclick = function () {
    p1.style.backgroundColor = "pink";
};

p2.onclick = function () {
    p2.style.backgroundColor = "pink";
};

p3.onclick = function () {
    p3.style.backgroundColor = "pink";
};


