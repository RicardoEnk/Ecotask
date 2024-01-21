const wrapper = document.querySelector('.wrapper');
const contacto = document.querySelector('.contact');
const acerca = document.querySelector('.about');
const loginLink = document.querySelector('.login-link');
const registerLink = document.querySelector('.register-link');
const btnPopup = document.querySelector('.btnLogin-popup');
const iconClose = document.querySelector('.icon-close');
const contact = document.querySelector('.btnContact-popup');
const close = document.querySelector('.close');
const about = document.querySelector('.btnAbout-popup');
const closee = document.querySelector('.closee');


registerLink.addEventListener('click', ()=> {
    wrapper.classList.add('active');
});

loginLink.addEventListener('click', ()=> {
    wrapper.classList.remove('active');
});

btnPopup.addEventListener('click', ()=> {
    wrapper.classList.add('active-popup');
});

iconClose.addEventListener('click', ()=> {
    wrapper.classList.remove('active-popup');
});

contact.addEventListener('click', ()=> {
    contacto.classList.add('active-popup');
});

close.addEventListener('click', ()=> {
    contacto.classList.remove('active-popup');
});

about.addEventListener('click', ()=> {
    acerca.classList.add('active-popup');
});

closee.addEventListener('click', ()=> {
    acerca.classList.remove('active-popup');
});

function redireccionar() {
    window.location.href = "principal.php";
  }


