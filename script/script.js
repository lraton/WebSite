function reveal( ) {
  var reveals = document.querySelectorAll(".reveal");
  const mediaQuery = window.matchMedia('(max-width: 1300px)');
  for (var i = 0; i < reveals.length; i++) {
    var windowHeight = window.innerHeight;
    var elementTop = reveals[i].getBoundingClientRect().top;
    var elementVisible = 150;
    if(mediaQuery.matches) {
      console.log(mediaQuery);
    }else{
      if (elementTop < windowHeight - elementVisible) {
        reveals[i].classList.add("active");
        console.log(mediaQuery);
      } else {
        reveals[i].classList.remove("active");
      }
    }
  }
}
window.addEventListener("scroll", reveal);
