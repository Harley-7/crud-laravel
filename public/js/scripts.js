//Elementos
const menu = document.querySelector("#menu-user"); 
const userBtn = document.querySelector("#user-action");
const arrowBtn = document.querySelector("#arrow i");

//Funções
let active = true;

function toggleMenu(){
    menu.classList.toggle('hide');
    

    if(active){
        arrowBtn.classList.remove('bi-caret-down-fill');
        arrowBtn.classList.add('bi-caret-up-fill');
    }else{
        arrowBtn.classList.remove('bi-caret-up-fill');
        arrowBtn.classList.add('bi-caret-down-fill');
    }

    active = !active;

}

//Eventos
userBtn.addEventListener("click", () => {
    toggleMenu();
})



