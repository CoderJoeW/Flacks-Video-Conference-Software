/*
Note to self
switch from `session` to `phone`
*/
var video_out = document.getElementById("vid-box");

function setup(){
	a1 = Math.floor((Math.random() * 9) + 1);
    a2 = Math.floor((Math.random() * 9) + 1);
    a3 = Math.floor((Math.random() * 9) + 1);
    f1 = Math.floor((Math.random() * 9) + 1);
    f2 = Math.floor((Math.random() * 9) + 1);
    f3 = Math.floor((Math.random() * 9) + 1);
    l1 = Math.floor((Math.random() * 9) + 1);
    l2 = Math.floor((Math.random() * 9) + 1);
    l3 = Math.floor((Math.random() * 9) + 1);
    var num = "(" + a1 + a2 + a3 + ")" + f1 + f2 + f3 + "-" + l1 + l2 + l3;
    var username_box = document.getElementById("username");
    username_box.value = num;
}

function login(form) {
	var phone = window.phone = PHONE({
		number: form.username.value || "Anonymous", 
		publish_key: 'pub-c-41cb0706-64c7-464f-b779-48e18a0ca0d0',
		subscribe_key: 'sub-c-4d5f2d68-cd94-11e6-90ff-0619f8945a4f',
        ssl : (('https:' == document.location.protocol) ? true : false),
	});	
	
    var loading = document.getElementById("loading-box");
	loading.innerHTML = "<img src='flacks/login/sprites/flacks-loading.gif' style='width:50px'>";
	
	phone.ready(function(){
        $('#loginBtn').addClass('hidden');
		form.username.style.background="#55ff5b";
		loading.innerHTML = ''; 
	});
	phone.receive(function(session){
		session.connected(function(session) {
        	video_out.appendChild(session.video); 
            var caller = document.getElementById("caller");
            caller.value = session.number;
        });
        session.ended(function(session) {
        	video_out.innerHTML=''; 
        });
	});
	return false;
}

function makeVideoCall(form){
	if (!window.phone) alert("You need to log in first!");
	else phone.dial(form.number.value);
	return false;
}