function reveal() {
  var reveals = document.querySelectorAll(".reveal");

  for (var i = 0; i < reveals.length; i++) {
    var windowHeight = window.innerHeight;
    var elementTop = reveals[i].getBoundingClientRect().top;
    var elementVisible = 150;

    if (elementTop < windowHeight - elementVisible) {
      reveals[i].classList.add("active");
    } else {
      reveals[i].classList.remove("active");
    }
  }
}

function reveal2() {
  var reveals = document.querySelectorAll(".reveal");

  for (var i = 0; i < reveals.length; i++) {
    reveals[i].classList.add("active");
  }
}

function myFunction(x) {
  if (x.matches) { // If media query matches
    window.addEventListener("scroll", reveal2);
  } else {
    window.addEventListener("scroll", reveal);
  }
}

var x = window.matchMedia("(max-width: 1300px)")
myFunction(x) // Call listener function at run time
x.addListener(myFunction) // Attach listener function on state changes
