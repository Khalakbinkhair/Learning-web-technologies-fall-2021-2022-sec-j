
function f1(){

	let input = document.getElementById('input').value;
	
	if(input != ""){
		document.getElementsByTagName('h1')[0].innerHTML = input;
		//document.getElementById('name').value = "";
		document.getElementById('d1').innerHTML = "";
	}else{
		document.getElementById('d1').innerHTML = "<p style='color:red'> Null data</p>";
	}
}
