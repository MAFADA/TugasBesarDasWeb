const menuToggle = document.querySelectorAll('.menu');
const nav = document.querySelector('nav ul');
const span = document.querySelectorAll('nav ul li a span');
var i;
for (i = 0; i < menuToggle.length; i++) {
    menuToggle[i].addEventListener('click', function(){
        nav.classList.toggle('slide');
        span[0].classList.toggle('hidden');
        span[1].classList.toggle('hidden');
        span[2].classList.toggle('hidden');
        span[3].classList.toggle('hidden');
    });
  } 