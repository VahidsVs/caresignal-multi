// Lightweight progressive enhancement; no tracking or external dependencies.
const navLinks=document.querySelectorAll('.nav nav a');navLinks.forEach(link=>link.addEventListener('click',()=>document.querySelector('.nav nav').classList.remove('open')));
