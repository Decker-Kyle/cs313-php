function buttonClick(){
	alert("Clicked!");
}

function buttonColor(){
	var text = document.getElementById("inputColor");
	var div = document.getElementById("first");
	div.style.backgroundColor = text.value;
}