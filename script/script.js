function openNav() {
  document.getElementById("menu").style.width = "680px";
  document.getElementById('closebtn').style.display='block';
}

function closeNav() {
  document.getElementById("menu").style.width = "0";
}


function stikynav(){
window.onscroll = function() {myFunction()};

var navbar = document.getElementById("menu");
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}
}