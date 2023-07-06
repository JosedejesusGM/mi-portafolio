const content = document.querySelector('#content');
const btnMenu = document.querySelector('#btn-menu');

const btnAvatar = document.querySelector('#btn-avatar');
const infoAccount = document.querySelector('#options-avatar');

const btnSwitch = document.querySelector('#switch');

btnMenu.addEventListener('click', () =>{
    content.classList.toggle('active');
});

const comprobarAncho = () =>{
    if(window.innerWidth <= 768){
        content.classList.remove('active');
    }else{
        content.classList.add('active');
    }
}

comprobarAncho();


window.addEventListener('resize', () =>{
    comprobarAncho();
});


btnAvatar.addEventListener('click', () =>{
    infoAccount.classList.toggle('active-options');
});

btnSwitch.addEventListener('click', () =>{
    document.body.classList.toggle('dark');
    btnSwitch.classList.toggle('active');
});