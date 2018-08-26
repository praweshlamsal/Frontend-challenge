var i = 0;
var txt = 'Are you a frontend ninja?';
var speed = 60;

function typer() {
  if (i < txt.length) {
    document.getElementById("startpage").innerHTML += txt.charAt(i);
    i++;
    setTimeout(typer, speed);
  }
}

function closefun(){
	document.getElementById("check").style.display="none";
		document.getElementById("btn-close").style.display="none";
}
function showfun(){
	document.getElementById("check").style.display="block";
		document.getElementById("btn-close").style.display="block";
}