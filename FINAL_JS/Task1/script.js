"use strict"

//a =10;
var b=20;
let c=30;
const d=50;

let student = [1, 'alamin', 'alamin@aiub.edu', 2.4];

student[0];

/*
function abc(){
	return 0;
}
*/

//alert("test");
//console.log(student[1]);
//document.write('<h1>this is JS action..</h1>');

function f1(){
	let element = document.getElementsByTagName('h1')[0];
	element.innerHTML = "ALAMIN";	
}

function f2(){

	let name = document.getElementById('name').value;
	
	if(name != "" &&  name.length<2 && (name='A' && name='Z'|| name='a' && name='z')){
		document.getElementsByTagName('h1')[0].innerHTML = name;
		//document.getElementById('name').value = "";
		
	}
	}