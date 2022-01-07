console.log('oui')

function docLoad() {
    let btn_open = document.getElementsByClassName('fa-bars')[0];
    let btn_close = document.getElementsByClassName('fa-times')[0];

    btn_open.addEventListener('click', ()=> {
        document.getElementsByClassName('menu-menu-mobile-burger-container')[0].classList.add('open-menu');
        document.getElementById('menu-icons-mobile').style.display = "none";
        document.getElementsByClassName('fa-bars')[0].style.display = "none";
    })

    btn_close.addEventListener('click', ()=> {
        document.getElementById('menu-icons-mobile').style.display = "flex";
        document.getElementsByClassName('fa-bars')[0].style.display = "flex";
        document.getElementsByClassName('menu-menu-mobile-burger-container')[0].classList.remove('open-menu');
    })
}

document.addEventListener("DOMContentLoaded", docLoad);


