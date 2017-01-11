var contactLinkShow = document.getElementById("contactLinkShow");
var registerLinkShow = document.getElementById("registerLinkShow");

var contactLinkClose = document.getElementById("contactLinkClose");
var registerLinkClose = document.getElementById("registerLinkClose");

contactLinkShow.onclick = function(){
	ShowModal("modalContact");
}

registerLinkShow.onclick = function(){
	ShowModal("modalRegister");
}

contactLinkClose.onclick = function(){
	CloseModal("modalContact");
}

registerLinkClose.onclick = function(){
	CloseModal("modalRegister");
}

function ShowModal(modalName){
	var modal = document.getElementById(modalName);
    modal.style.display = "inline";
}

function CloseModal(modalName){
	var modal = document.getElementById(modalName);
    modal.style.display = "none";
}