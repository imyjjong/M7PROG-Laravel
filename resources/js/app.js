import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

import '@fortawesome/fontawesome-free/scss/fontawesome.scss';
import '@fortawesome/fontawesome-free/scss/brands.scss';
import '@fortawesome/fontawesome-free/scss/regular.scss';
import '@fortawesome/fontawesome-free/scss/solid.scss';
import '@fortawesome/fontawesome-free/scss/v4-shims.scss';

const film = document.getElementsByClassName("bounce");
for(let i = 0; i < film.length; i++){
    film[i].addEventListener('mouseenter', function(){
        film[i].classList.add("fa-bounce");
    })
    film[i].addEventListener('mouseleave', function(){
        film[i].classList.remove("fa-bounce");
    })
}

const pen = document.getElementsByClassName("fa-pen");
for(let i = 0; i < pen.length; i++){
    pen[i].addEventListener('mouseenter', function(){
        pen[i].classList.add("fa-shake");
    })
    pen[i].addEventListener('mouseleave', function(){
        pen[i].classList.remove("fa-shake");
    })
}

const heart = document.getElementsByClassName("fa-heart");
for(let i = 0; i < heart.length; i++){
    heart[i].addEventListener('mouseenter', function(){
        heart[i].classList.add("fa-beat");
    })
    heart[i].addEventListener('mouseleave', function(){
        heart[i].classList.remove("fa-beat");
    })
}

const eye = document.getElementsByClassName("fa-eye");
for(let i = 0; i < eye.length; i++){
    eye[i].addEventListener('mouseenter', function(){
        eye[i].classList.add("fa-bounce");
    })
    eye[i].addEventListener('mouseleave', function(){
        eye[i].classList.remove("fa-bounce");
    })
}

const clock = document.getElementsByClassName("fa-clock");
for(let i = 0; i < clock.length; i++){
    clock[i].addEventListener('mouseenter', function(){
        clock[i].classList.add("fa-spin");
    })
    clock[i].addEventListener('mouseleave', function(){
        clock[i].classList.remove("fa-spin");
    })
}

const trash = document.getElementsByClassName("fa-trash-can");
for(let i = 0; i < trash.length; i++){
    trash[i].addEventListener('mouseenter', function(){
        trash[i].classList.add("fa-shake");
        trash[i].classList.add("text-trash");
    })
    trash[i].addEventListener('mouseleave', function(){
        trash[i].classList.remove("fa-shake");
        trash[i].classList.remove("text-trash");
    })
}
