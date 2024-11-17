/*
Pimentel, Grace
ISTE240
Spring 2024
Exercise 05 - js file
*/

function question(){
    "use strict";
    var someVariable = 0;
    console.log("someVariable is -> "+ someVariable);
}

/* 5a to move text to the right by 10px */
var textRight = 0;

	function moveText(){
    	var text = document.getElementById('text');
    	textRight += 10;
    	text.style.marginLeft = textRight + 'px';
}

/* 5b */
function HowMany(){
    var inputElements = document.getElementById('regForm').getElementsByTagName('input');
    var inputCount = inputElements.length;
    var textCount = 0;

    /* find inputs with type "text" */
    for(var i = 0; i < inputCount; i++){
        if(inputElements[i].type === "text"){
            textCount++;
        }
    }
    alert("Number of total inputs: " + inputCount + "\nNumber of inputs type 'text': " + textCount);
}


/* 5c Count the form elements */
/* Color Variable for methods 6c & 6d */
var color;

function colorChange(){
    var selections = document.getElementById('colorSelect');
    var options = selections.getElementsByTagName('option');
    var optionsCount = options.length;

    for(var i = 0; i < optionsCount; i++){
        if(options[i].selected){
            color = options[i].innerHTML;
            document.getElementById('colorForm').style.backgroundColor = color;
        }
    }
}

/* 5b Color change to hover */
function hoverChange(){
    document.getElementById('rb').style.color = color;
}

/* Multiplication Function */
function multiply(){
    var first = parseInt(document.getElementById("firstoperand").value);
    var second = parseInt(document.getElementById("secondoperand").value);
    var product = first * second;
    var textNode = document.createTextNode(product);
    document.getElementById("result").innerHTML = "";
    document.getElementById("result").appendChild(textNode);
}
/* Division Function */
function divide(){
    var first = parseInt(document.getElementById("firstoperand").value);
    var second = parseInt(document.getElementById("secondoperand").value);
    var quotient = first / second;
    var textNode = document.createTextNode(quotient);
    document.getElementById("result").innerHTML = "";
    document.getElementById("result").appendChild(textNode);
}
