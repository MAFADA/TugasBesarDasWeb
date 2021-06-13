const menuToggle = document.querySelectorAll('.menu');
const nav = document.querySelector('nav ul');
const span = document.querySelectorAll('nav ul li a span');
const cont = document.querySelector('div.off');
var i;
for (i = 0; i < menuToggle.length; i++) {
    menuToggle[i].addEventListener('click', function(){
        nav.classList.toggle('slide');
        span[0].classList.toggle('hidden');
        span[1].classList.toggle('hidden');
        span[2].classList.toggle('hidden');
        span[3].classList.toggle('hidden');
        cont.classList.toggle('on');
    });
  };
  const drop = document.querySelector('.nm');
  const down = document.querySelector('.mdd');
  drop.addEventListener('click',function(){
    down.classList.toggle('dropdown');
});
var dt = new Date();
 document.getElementById("tanggalwaktu").innerHTML = dt.toLocaleDateString();