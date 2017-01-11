setup();

function changeActive_Auth(){
	loggedIn();
	document.getElementById('userIcon').src='flacks/login/sprites/flacks-loggedin.png';
}

function changeAuth_Timer(){
	callBegin();
	document.getElementById('userIcon').src='flacks/login/sprites/flacks-calling.gif';
	var x = document.createElement("iframe");
	x.setAttribute("src", "flacks/timer/timer.php");
	document.body.appendChild(x);
}